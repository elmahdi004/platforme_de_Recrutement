<template lang="">
<div @click="goToJobPage" class="bg-white p-6 rounded-lg cursor-pointer card col-span-12 md:col-span-4 lg:col-span-3 border px-8 py-10 flex flex-col  duration-200 ">
                    <div class="one flex items-center">
                        <div class="job bg-[#e8f0fa] p-3 rounded-full" >
                            <img src="../../../svg/icons8-work.svg" alt="" srcset="" class="max-w-[16px] w-[16px]">
                        </div>
                        <h3 class="ms-3 text-black text-sm">{{job.category.name}}</h3>
                    </div>
                    <div class="two mt-4">
                        <h1 class="text-xl font-semibold" style="display: block; height: 2em;">
                            {{job.title}}
                        </h1>
                    </div>
                    <div class="three flex items-center my-4 pt-3">
                        <div class="position flex">
                            <img src="../../../svg/icons8-position.svg" alt="" srcset="" class="w-[16px] max-w-[16px]">
                            <p class="cursor-pointer duration-100 hover:text-main text-sm ms-1">{{job.location}}</p>
                        </div>
                        <a href="#" class="ms-6 text-main text-sm ">Full Time</a>
                    </div>
                    <div class="four flex justify-between items-center pt-3">
                        <div class="date">
                            <p class="text-sm text-secondary">{{job.created_at}}</p>
                            <p class="text-sm font-semibold">Employer</p>
                        </div>
                        <div class="society-logo">
                            <img src="../../../image/y1.jpg" alt="" srcset="" class="rounded-full w-[50px] h-[50px]">
                        </div>
                    </div>
                </div>
</template>
<script setup>
import { useRouter } from "vue-router";
import { defineProps } from "vue";
const router = useRouter();
const props = defineProps(['job']);
const goToJobPage = ()=>{
router.push(`/job/${props.job.id}`);
}
</script>
<style lang="">
    
</style>