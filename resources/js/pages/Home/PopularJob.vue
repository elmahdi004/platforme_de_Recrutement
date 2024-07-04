<template lang="">
    <div class="py-6 px-4">
        <div class="header">
                <div class="content flex justify-between items-center">
                    <div class="one">
                        <h1 class="text-primary text-3xl py-1 font-bold">Popular Job Categories</h1>
                        <p class="py-1 text-secondary text-sm">2020 jobs live – 293 added today.</p>
                    </div>
                    <div class="browseAll text-main">
                        <a href="#">Browse All <i class="fa-solid fa-chevron-right px-1 text-sm"></i></a>
                    </div>
                </div>
        </div>
        <div class="body py-5 mt-4">
            <div class="categories grid grid-cols-12 gap-4" v-if="categories.length > 0">
                    <CategoryCard v-for="(category, index) in categories" :key="index" @click="goToCategoryPage(category.id)" :category="category"></CategoryCard>
            </div>
        </div>
    </div>
</template>
<script setup>
import { useRouter } from 'vue-router';
import CategoryCard from './CategoryCard.vue';
import { onMounted, ref } from 'vue';
import api from '../../axios';
const router = useRouter();
const categories = ref([]);
const goToCategoryPage = (id)=>{
router.push(`/category/${id}`);
}
onMounted(()=>{
    api.get('/categories').then(({data})=>{
        categories.value = data;
    });
});
</script>

<style scope>
    .browseAll{
        position:relative;
    }
    .browseAll::before{
        content: "";
        position: absolute;
        width: 0;
        height: 1px;
        bottom: 0;
        left: 0;
        background-color: #1967d2;
        transition: width 0.4s ease;
    }
    .browseAll:hover::before {
    width: 100%; 
}
</style>