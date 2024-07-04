<template>
    <div :class="fixe ? 'z-20 shadow-md sticky top-0 bg-white' : 'z-20 shadow-md bg-white'">
        <div class="navbar flex pt-5 pb-4 px-6 justify-between items-center">
        <div class="logo flex">
            <router-link to="/">
                <img src="../../../svg/logo.svg" alt="logo" class="max-w-40">
            </router-link>
        </div>
        <div class="navs flex">
            <div class="nav flex items-center mx-6 cursor-pointer">
                <h3 class="text-lg me-1">Home</h3>
                <i class="fa-solid fa-angle-down mt-1"></i>
            </div>
            <div class="nav flex items-center mx-6 cursor-pointer">
                <h3 class="text-lg me-1">Home</h3>
                <i class="fa-solid fa-angle-down mt-1"></i>
            </div>
            <div class="nav flex items-center mx-6 cursor-pointer">
                <h3 class="text-lg me-1">Home</h3>
                <i class="fa-solid fa-angle-down mt-1"></i>
            </div>
            <div class="nav flex items-center mx-6 cursor-pointer">
                <h3 class="text-lg me-1">Home</h3>
                <i class="fa-solid fa-angle-down mt-1"></i>
            </div>
        </div>
        <div class="actions flex">
            <div class="action mx-3">
                <button class="bg-blue-100 text-blue-700 font-medium rounded-md px-4 py-3">
                    Login/Register
                </button>
            </div>
            <div class="action mx-3">
                <button class="bg-blue-900 text-white font-medium rounded-md px-4 py-3">
                    <router-link :to="{name:'statistics'}">Add Job</router-link>
                </button>
            </div>
            <div class="action mx-3 cursor-pointer">
                <i class="fa-regular fa-bell mt-2 text-2xl text-blue-800"></i>
            </div> 
        </div>
    </div>
    </div>
</template>
<script setup>
import {defineProps} from 'vue';
const props = defineProps(['fixe']);
</script>
<style scoped>
/* .navbar{
    box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.1), 0px 1px 3px rgba(0, 0, 0, 0.08);
} */
</style>