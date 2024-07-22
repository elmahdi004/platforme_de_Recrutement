<template lang="">
    <router-view></router-view>
</template>
<script setup>
import { onMounted } from 'vue';
import Index from './pages/Home/Index.vue';
import {useStore} from './pinia.js';
const store = useStore();
onMounted(()=>{
console.log("Hello sir",store.name);
});
</script>
<style lang="">
    
</style>