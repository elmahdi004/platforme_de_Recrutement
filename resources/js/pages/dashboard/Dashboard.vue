<template lang="">
<div class="h-screen overflow-hidden">
    <NavBar></NavBar>
        <div class="grid grid-cols-12">
            <SideBar></SideBar>
            <div class="col-span-9 bg-screenColor p-10 overflow-auto h-[calc(100vh-112px)] ">
                <router-view></router-view>
            </div>
        </div>
</div>
</template>
<script setup>
import NavBar from "../Home/NavBar.vue";
import SideBar from "./SideBar.vue";
</script>
<style lang="">
    
</style>