<template lang="">
<NavBar :fixe="true">
</NavBar>
    <JoinUs></JoinUs>
    <OurClient></OurClient>
    <PopularJob></PopularJob>
    <SearchForJob></SearchForJob>
    <BuildResume></BuildResume>
    <FeaturedJob></FeaturedJob>
    <SuccessfulBusiness></SuccessfulBusiness>
    <Footer></Footer>
</template>
<script setup>
import NavBar from "./NavBar.vue";
import JoinUs from "./JoinUs.vue";
import OurClient from "./OurClient.vue";
import PopularJob from "./PopularJob.vue";
import SearchForJob from "./SearchForJob.vue";
import BuildResume from "./BuildResume.vue";
import FeaturedJob from "./FeaturedJob.vue";
import SuccessfulBusiness from "./SuccessfulBusiness.vue";
import Footer from "./Footer.vue";
import Modal from "../../components/Modal.vue";
</script>
<style lang="">
    
</style>
