<template lang="">
                <div class="card col-span-12 md:col-span-4 lg:col-span-2 border px-8 py-10 flex flex-col justify-center items-center cursor-pointer hover:bg-[#f4f6fa] duration-200 rounded">
                    <img src="../../../svg/icons8-car.svg" alt="" srcset="" class="w-14 max-w-14 text-main">
                    <h1 class="mt-3 text-md font-semibold text-black text-center" style="display: block; height: 2em;">{{ category.name }}</h1>
                    <p class="text-xs text-secondary font-medium mt-7">({{category.jobs_count}} open position)</p>
                </div>
</template>
<script setup>
const props = defineProps(['category']);
</script>
<style lang="">
    
</style>