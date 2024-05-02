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
            <div class="categories grid grid-cols-12 gap-4">
                    <CategoryCard title="Marketing" icon=""></CategoryCard>
                    <CategoryCard title="Design" icon=""></CategoryCard>
                    <CategoryCard title="Developement" icon=""></CategoryCard>
                    <CategoryCard title="Customer Service" icon=""></CategoryCard>
                    <CategoryCard title="Automotive Jobs" icon=""></CategoryCard>
                    <CategoryCard title="Health and Care" icon=""></CategoryCard>
            </div>
        </div>
    </div>
</template>
<script setup>
import CategoryCard from './CategoryCard.vue';
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