<template lang="">
<div @click="goToJobPage" class="header my-5 relative cursor-pointer grid grid-cols-12 px-10 py-8 items-center border rounded-lg duration-200 hover:shadow-md">
        <div class="save absolute top-5 right-5 text-secondary rounded-full duration-200 hover:bg-[#ecedf2] w-8 h-8 flex items-center justify-center">
            <i class="fa-regular fa-bookmark"></i>
        </div>
                        <div class="col-span-6 flex items-center">
                            <div class="logo self-start mt-2 w-16 h-16 rounded-lg object-cover overflow-hidden">
                                <img src="../../../image/y1.jpg" alt="" srcset="">
                            </div>
                            <div class="content flex flex-col ms-10">
                                <router-link to="#"><h1 class="font-semibold text-2xl duration-200 hover:text-orange-500">Finance Manager & Health</h1></router-link>
                                <div class="flex my-3">
                                    <div class="position flex items-center text-secondary">
                                        <i class="fa-solid fa-location-dot me-2 text-sm"></i>
                                        <p>New York</p>
                                    </div>
                                    <div class="cat flex items-center text-secondary mx-3">
                                        <i class="fa-solid fa-briefcase me-2 text-sm"></i>
                                        <p>Design</p>
                                    </div>
                                    <div class="cat flex items-center text-secondary mx-3">
                                        <i class="fa-solid fa-money-bill-wave me-2 text-sm"></i>
                                        <p>$15 - $18 / hour</p>
                                    </div>
                                </div>
                                <div class="budges flex">
                                    <div class="px-4 py-1 flex items-center justify-center bg-blue-100 text-main rounded-3xl mx-2">
                                        <p class="text-sm">Temporary</p>
                                    </div>
                                    <div class="px-4 py-1 flex items-center justify-center bg-orange-100 text-orange-400 rounded-3xl mx-2">
                                        <p class="text-sm">Urgent</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
</template>
<script setup>
import { useRouter } from 'vue-router';
const router = useRouter();
const goToJobPage = ()=>{
router.push('/job');
}
</script>
<style lang="">
    
</style>