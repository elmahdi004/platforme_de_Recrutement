<template>
    <div>
            <h1 class="font-semibold text-3xl">My Applied</h1>
            <div class="bg-white rounded-md shadow-md mt-[40px] p-5">
                <div class="filter">
                    <div class="search flex px-3 py-3 rounded-md bg-[#f0f5f7] w-56 items-center">
                        <i class="fa-solid fa-magnifying-glass text-sm text-slate-400"></i>
                        <input type="text" class="ms-2 w-full focus:outline-none bg-transparent caret-orange-400" placeholder="Search...">
                    </div>
                </div>
                <div class="myApplied mt-10">
                    <div class="header grid grid-cols-12 bg-orange-100 px-3 py-2 font-bold text-orange-400 text-lg">
                        <h1 class="col-span-6">Job Title</h1>
                        <h1 class="col-span-2">Date Applied</h1>
                        <h1 class="col-span-2">Status</h1>
                        <h1 class="col-span-2">Actions</h1>
                    </div>
                    <applied-job-item></applied-job-item>
                    <applied-job-item></applied-job-item>
                    <applied-job-item></applied-job-item>
                    <applied-job-item></applied-job-item>
                    <applied-job-item></applied-job-item>

                </div>
            </div>
    </div>
</template>
<script setup>
import AppliedJobItem from "./AppliedJobItem.vue";
</script>
<style>
    
</style>