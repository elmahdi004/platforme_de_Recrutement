<template lang="">
<NavBar :fixe="false"></NavBar>
<div v-if="category != ''" class="title flex flex-col items-center justify-center bg-[#f3f6fb] py-12">
<h1 class="font-semibold text-black text-4xl capitalize">{{category.name}}</h1>
<p class="mt-4 text-secondary cursor-pointer">Home / Jobs / <span class="text-black">{{category.name}}</span></p>
</div>
<div class="body grid grid-cols-12 mt-10 px-4">
<div class="filter flex flex-col col-span-3 bg-[#f3f6fb] px-5 py-3 rounded-lg mt-7">
    <div class="">
    <h1 class="font-semibold text-xl mt-2">Search by Keywords</h1>
    <div class="flex mt-4 items-center px-4 py-4 bg-white rounded-md duration-150 border-main border">
        <i class="fa-solid fa-magnifying-glass text-2xl text-[#696969]"></i>
        <input type="text" placeholder="Job title, Keywords" class="ms-5 w-full focus:outline-0 placeholder:text-[#696969]">
    </div>
</div>
<div class="">
    <h1 class="font-semibold text-xl mt-2">Location</h1>
    <div class="flex mt-4 items-center px-4 py-4 bg-white rounded-md duration-150 border-main border">
        <i class="fa-solid fa-location-dot text-2xl text-[#696969]"></i>
        <input type="text" placeholder="City or postcode" class="ms-5 w-full focus:outline-0 placeholder:text-[#696969]">
    </div>
</div>
<div class="">
    <h1 class="font-semibold text-xl mt-2">Location</h1>
    <div class="flex mt-4 items-center px-4 py-4 bg-white rounded-md duration-150 border-main border">
        <i class="fa-solid fa-briefcase text-2xl text-[#696969]"></i>
    <select class="ms-5 w-full focus:outline-0 text-[#696969]">
        <option value="" disabled selected class="option">Choose a category</option>
        <option value="option1" class="option">Option 1</option>
        <option value="option2" class="option">Option 2</option>
        <option value="option3" class="option">Option 3</option>
</select>
    </div>
</div>
<div class="">
    <h1 class="font-semibold text-xl mt-2">Job type</h1>
    <div class="flex mt-4 items-center px-4 py-4 bg-white rounded-md duration-150 border-main border">
    <select class="ms-5 w-full focus:outline-0 text-[#696969]">
        <option value="" disabled selected class="option">Job type</option>
        <option value="option1" class="option">Option 1</option>
        <option value="option2" class="option">Option 2</option>
        <option value="option3" class="option">Option 3</option>
</select>
    </div>
</div>
</div>
<div v-if="category != '' && category.jobs.length != 0" class="jobs px-5 py-3 col-span-9">
    <CategoryJobCard></CategoryJobCard>
    <CategoryJobCard></CategoryJobCard>
    <CategoryJobCard></CategoryJobCard>
    <CategoryJobCard></CategoryJobCard>
</div>
<div v-else class="col-span-9 text-center">
            <h3 class="mt-5 font-bold">No Jobs Founded for this Category</h3>
</div>
</div>
</template>
<script setup>
import { onMounted, ref } from 'vue';
import NavBar from '../Home/NavBar.vue';
import CategoryJobCard from './CategoryJobCard.vue';
import api from '../../axios';
import Spinner from '../../components/Spinner.vue';
const props = defineProps(['id']);
const category = ref('');
onMounted(()=>{
    api.get(`/categories/${props.id}`).then(({data})=>{
        category.value = data;
    });
});
</script>
<style scoped>

</style>