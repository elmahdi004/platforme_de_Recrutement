<template lang="">
    <div>
        <div>
            <h1 class="font-semibold text-3xl">Applications statistics</h1>
            <div class="cards grid grid-cols-12 mt-[45px] gap-5">
                <StatisticsCard title="Applied Jobs" count="100"></StatisticsCard>
                <StatisticsCard title="Review" count="11"></StatisticsCard>
                <StatisticsCard title="Views" count="12"></StatisticsCard>
                <StatisticsCard title="Shortlisted" count="5"></StatisticsCard>
            </div>
        </div>
    </div>
</template>
<script setup>
import StatisticsCard from '../../../components/StatisticsCard.vue'
</script>
<style lang="">
    
</style>