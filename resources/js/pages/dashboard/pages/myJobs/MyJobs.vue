<template>
    <div>
        <h1 class="font-semibold text-3xl">My Jobs</h1>
        <div class="bg-white rounded-md shadow-md mt-[40px] p-5">
            <div class="filter">
                <div
                    class="search flex px-3 py-3 rounded-md bg-[#f0f5f7] w-56 items-center"
                >
                    <i
                        class="fa-solid fa-magnifying-glass text-sm text-slate-400"
                    ></i>
                    <input
                        type="text"
                        class="ms-2 w-full focus:outline-none bg-transparent caret-orange-400"
                        placeholder="Search..."
                    />
                </div>
            </div>
            <div class="myApplied mt-10">
                <div
                    class="header grid grid-cols-12 bg-orange-100 px-3 py-2 font-bold text-orange-400 text-lg"
                >
                    <h1 class="col-span-4">Title</h1>
                    <h1 class="col-span-2">Applicants</h1>
                    <h1 class="col-span-2">From - To</h1>
                    <h1 class="col-span-2">Status</h1>
                    <h1 class="col-span-2">Actions</h1>
                </div>
                <div v-if="!loading && jobs.length > 0">
                    <my-job-item v-for="(job,index) in jobs" :key="index" :job="job"></my-job-item>
                </div>
                <div v-else class="py-10 flex justify-center">
                        <Spinner/>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import { onMounted, ref } from "vue";
import MyJobItem from "./MyJobItem.vue";
import api from "../../../../axios";
import { useStore } from "../../../../pinia";
import Spinner from "../../../../components/Spinner.vue";
const loading = ref(false);
const jobs = ref([]);
onMounted(async () => {
    loading.value = true;
    const store = useStore();
    await store.getUserAction();
    api.get(`/employer/${store.user.id}/my-jobs`)
        .then(({ data }) => {
            jobs.value = data;
        })
        .catch((e) => console.log(e)).finally(()=>{
            loading.value = false;
        });
});
</script>
<style></style>
