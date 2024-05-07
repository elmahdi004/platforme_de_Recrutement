<template lang="">
                <div class="card shadow-md col-span-12 md:col-span-3 flex bg-white rounded-md p-5 justify-between items-center">
                    <div class="logo bg-orange-100 w-[60px] h-[60px] rounded-full flex justify-center items-center">
                        <i class="fa-solid fa-snowflake text-4xl text-orange-400"></i>
                    </div>
                    <div class="content flex flex-col">
                        <h1 class="self-end text-4xl font-bold">{{count}}</h1>
                        <p class="font-medium">{{title}}</p>
                    </div>
                </div>
</template>
<script setup>
const props = defineProps(['title','count']);
</script>
<style lang="">
    
</style>