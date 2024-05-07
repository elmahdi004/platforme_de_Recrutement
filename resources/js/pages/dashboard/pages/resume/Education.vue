<template>
    <div class="bg-white rounded-md shadow-md mt-[40px] p-5">
        <h1 class="font-semibold text-lg">Education</h1>
        <div class="mt-4">
            <education-card @delete-education="handleDeleteEducation" :education="education" v-for="education in educations" :key="education.id"></education-card>
        </div>
        <div class="mt-10">
            <custom-button @click="addNewEducation" title="Add Another Education"></custom-button>
        </div>
    </div>
</template>
<script setup>
import EducationCard from "./EducationCard.vue";
import CustomButton from "../../../../components/CustomButton.vue";
import { ref } from "vue";
const educations = ref([{id:1,name:'Education 1'},{id:2,name:'Education 2'},{id:3,name:'Education 3'},]);

const addNewEducation = ()=>{
    const education = {
        id:educations.value.length+1,
        name:`Education ${educations.value.length+1}`
    }
    educations.value.push(education);
}

const handleDeleteEducation = (id)=>{
        educations.value = educations.value.filter(ele=>ele.id != id);
}
</script>
<style lang="">
    
</style>