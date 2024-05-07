<template>
    <div class="bg-white rounded-md shadow-md mt-[40px] p-5">
        <h1 class="font-semibold text-lg">Experience</h1>
        <div class="mt-4">
            <experience-card @delete-experience="handleDeleteExperience" :experience="experience" v-for="experience in experiences" :key="experience.id"></experience-card>
        </div>
        <div class="mt-10">
            <custom-button @click="addNewExperience" title="Add Another Experience"></custom-button>
        </div>
    </div>
</template>
<script setup>
import CustomButton from "../../../../components/CustomButton.vue";
import ExperienceCard from "./ExperienceCard.vue";
import { ref } from "vue";
const experiences = ref([{id:1,name:'Experience 1'},{id:2,name:'Experience 2'},{id:3,name:'Experience 3'},]);

const addNewExperience = ()=>{
    const experience = {
        id:experiences.value.length+1,
        name:`Experience ${experiences.value.length+1}`
    }
    experiences.value.push(experience);
}

const handleDeleteExperience = (id)=>{
        experiences.value = experiences.value.filter(ele=>ele.id != id);
}
</script>
<style lang="">
    
</style>