<template lang="">
    <div class="bg-white rounded-md shadow-md mt-[40px] p-5">
        <h1 class="font-semibold text-lg">My Resume</h1>
        <h1 class="font-semibold text-lg mt-7 mb-10">CV Attachment</h1>
        <div
            class="attachement flex items-center w-fit my-4"
            v-if="user && user.cv && user.extension"
        >
            <div
                @click="downloadResume"
                class="cursor-pointer flex bg-orange-100 text-orange-400 px-3 py-2 items-center rounded-lg"
            >
                <div class="content flex flex-col">
                    <p>{{ user.cv }}</p>
                    <p class="font-semibold">
                        {{ user.extension.toUpperCase() }}
                    </p>
                </div>
                <i class="fa-regular fa-file-lines ps-5 text-2xl"></i>
            </div>
            <div
                @click="removeResume"
                class="remove cursor-pointer ms-4 text-red-600 duration-100 hover:bg-red-600 hover:text-white hover:rounded-full w-[30px] h-[30px] flex items-center justify-center"
            >
                <i class="fa-solid fa-xmark"></i>
            </div>
        </div>
        <div v-else>
            <span>Please Upload Your Resume</span>
        </div>
        <div
            class="w-[100px] h-[50px] bg-orange-100 text-orange-400 rounded-lg relative mt-5 cursor-pointer"
        >
            <input
                type="file"
                name=""
                id=""
                @change="test"
                class="w-full h-full bg-transparent text-transparent opacity-0"
            />
            <div class="absolute top-[23%] left-[23%] text-lg">Browse</div>
        </div>

        <p class="font-md text-md text-slate-600 mt-5">
            Upload file .pdf, .doc, .docx
        </p>
    </div>
</template>
<script setup>
import { onMounted, ref } from "vue";
import api from "../../../../axios";
import { data } from "autoprefixer";
import { useStore } from "../../../../pinia";
const cv = ref();
const user = ref();
const test = (event) => {
    const file = event.target.files[0];
    const formData = new FormData();
    formData.append("file", file);
    api.post("/resume", formData, {
        headers: {
            "Content-Type": "multipart/form-data",
        },
    }).then(({ data }) => {
        reload();
    });

    // console.log()
};
onMounted(() => {
    reload();
});
const reload = () => {
    const store = useStore();

    store.getUserAction();
    user.value = store.user;
};
const removeResume = () => {
    user.value.cv = "";
    user.value.extension = "";
    api.delete("/resume/delete").then(({ data }) => console.log(data));
};
const downloadResume = () => {
    api.get("/resume/download").then(({ data }) => console.log(data));
};
</script>
<style lang=""></style>
<script setup></script>
