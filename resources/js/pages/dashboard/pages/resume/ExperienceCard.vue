<template>

    <div class="education my-4">
        <div class="header flex justify-between p-4 bg-[#f0f5f7] rounded-md items-center">
            <div class="title flex items-center">
                <i class="fa-solid fa-xmark mt-1 text-red-600 cursor-pointer" @click="deleteEducation(experience.id)"></i>
                <p class="ms-5 text-lg">{{experience.name}}</p>
            </div>
            <i :class="open ? 'fa-solid fa-angle-up cursor-pointer' : 'fa-solid fa-angle-down cursor-pointer'" @click="toggleOpen"></i>
        </div>
        <div class="body mt-10" v-show="open">
            <div class="input flex my-4">
                <h1 class="font-bold self-start text-lg w-1/5">title</h1>
                <div class="bg-[#f0f5f7] rounded-md w-full p-4">
                    <input type="text" class="w-full  outline-none bg-transparent caret-orange-200">
                </div>
            </div>
            <div class="input flex my-4 justify-between">
                <h1 class="font-bold self-start text-lg w-1/5">Start Date</h1>
                <div class="bg-[#f0f5f7] rounded-md w-full p-4">
                    <input type="text" class="w-full  outline-none bg-transparent caret-orange-200">
                </div>
            </div>
            <div class="input flex my-4 justify-between">
                <h1 class="font-bold self-start text-lg w-1/5">End Date</h1>
                <div class="bg-[#f0f5f7] rounded-md w-full p-4">
                    <input type="text" class="w-full  outline-none bg-transparent caret-orange-200">
                </div>
            </div>
            <div class="input flex my-4 justify-between">
                <h1 class="font-bold self-start text-lg w-1/5">Company</h1>
                <div class="bg-[#f0f5f7] rounded-md w-full p-4">
                    <input type="text" class="w-full  outline-none bg-transparent caret-orange-200">
                </div>
            </div>
            <div class="input flex my-4 justify-between">
                <h1 class="font-bold self-start text-lg w-1/5">Description</h1>
                <div class="bg-[#f0f5f7] rounded-md w-full p-4 h-28">
                    <input type="text" class="w-full h-full outline-none bg-transparent caret-orange-200">
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import { ref,defineProps } from "vue";
const open = ref(false);

const props = defineProps(['experience'])

const emit = defineEmits(['delete-experience']);
const toggleOpen = ()=>{
open.value = !open.value;
}

const deleteEducation = (id)=>{
emit('delete-experience',id);
}
</script>

<style lang="">

</style>