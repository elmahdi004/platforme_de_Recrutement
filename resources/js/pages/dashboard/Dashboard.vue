<template lang="">
        <NavBar></NavBar>
        <div class="grid grid-cols-12">
            <SideBar></SideBar>
            <div class="col-span-9 bg-screenColor p-10">
                <router-view></router-view>
            </div>
        </div>
</template>
<script setup>
import NavBar from "../Home/NavBar.vue";
import SideBar from "./SideBar.vue";
</script>
<style lang="">
    
</style>