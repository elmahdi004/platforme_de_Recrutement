<template lang="">
    <NavBar :fixe="false"></NavBar>
    <div class="title flex justify-between bg-[#f3f6fb] py-12 px-8">
        <div class="col-span-6 flex items-center">
                            <div class="logo self-start mt-2 w-16 h-16 rounded-lg object-cover overflow-hidden">
                                <img src="../../../image/y1.jpg" alt="" srcset="">
                            </div>
                            <div class="content flex flex-col ms-10">
                                <router-link to="#"><h1 class="font-semibold text-2xl duration-200 hover:text-orange-500">{{job.title}}</h1></router-link>
                                <div class="flex my-3">
                                    <div class="position flex items-center text-secondary">
                                        <i class="fa-solid fa-location-dot me-2 text-sm"></i>
                                        <p>{{job.location}}</p>
                                    </div>
                                    <div class="cat flex items-center text-secondary mx-3">
                                        <i class="fa-solid fa-briefcase me-2 text-sm"></i>
                                        <!-- <p>{{job.category.name}}</p> -->
                                    </div>
                                    <div class="cat flex items-center text-secondary mx-3">
                                        <i class="fa-solid fa-money-bill-wave me-2 text-sm"></i>
                                        <p>${{job.min_salary}} - ${{job.max_salary}} / {{job.salaryType}}</p>
                                    </div>
                                </div>
                                <div class="budges flex">
                                    <div class="px-4 py-1 flex items-center justify-center bg-blue-100 text-main rounded-3xl mx-2">
                                        <p class="text-sm">Temporary</p>
                                    </div>
                                    <div class="px-4 py-1 flex items-center justify-center bg-orange-100 text-orange-400 rounded-3xl mx-2">
                                        <p class="text-sm">Urgent</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <h1 class="text-lg font-medium">Application ends: <span class="font-bold text-red-600">{{job.deadline}}</span></h1>
                            <div class="mt-5">
                                <button class="bg-orange-600 text-white text-lg px-14 py-2 rounded-xl">Apply now</button>
                                <button class="mx-8 bg-orange-100 px-4 py-3 rounded-lg text-orange-600 duration-200 hover:bg-orange-600 hover:text-white">
                                    <i class="fa-regular fa-bookmark"></i>
                                </button>
                            </div>
                        </div>
    </div>
    <div class="body grid grid-cols-12 mt-10 px-4">
    <div class="jobs px-5 py-3 col-span-9">
        <div>
            <h1 class="text-2xl my-2 font-semibold">Job Description</h1>
            <p class="text-[#696969] mt-5 leading-7">{{job.description}}</p>
        </div>
        <div class="mt-10">
            <h1 class="text-2xl my-2 font-semibold">Key Responsibilities</h1>
            <ul class="ms-2 text-[#696969] mt-5">
                <li class="relative my-6 font-base">Be involved in every step of the product design cycle from discovery to developer handoff and user acceptance testing.</li>
                <li class="relative my-6 font-base">Be involved in every step of the product design cycle from discovery to developer handoff and user acceptance testing.</li>
                <li class="relative my-6 font-base">Be involved in every step of the product design cycle from discovery to developer handoff and user acceptance testing.</li>
                <li class="relative my-6 font-base">Be involved in every step of the product design cycle from discovery to developer handoff and user acceptance testing.</li>
                <li class="relative my-6 font-base">Be involved in every step of the product design cycle from discovery to developer handoff and user acceptance testing.</li>
                <li class="relative my-6 font-base">Be involved in every step of the product design cycle from discovery to developer handoff and user acceptance testing.</li>
                <li class="relative my-6 font-base">Be involved in every step of the product design cycle from discovery to developer handoff and user acceptance testing.</li>
            </ul>
        </div>
        <div class="mt-10">
            <h1 class="text-2xl my-2 font-semibold">Skill & Experience</h1>
            <ul class="ms-2 text-[#696969] mt-5">
                <li class="relative my-6 font-base">{{job.skills_and_experiences}}</li>
            </ul>
            </div>
    </div>
    <div class="filter flex flex-col col-span-3 bg-[#f3f6fb] px-5 py-3 rounded-lg mt-7">
        <div class="">
        <h1 class="font-semibold text-xl mt-2">Job Overview</h1>
        <div class="flex mt-4">
            <i class="fa-regular fa-calendar text-3xl text-main mt-1"></i>
            <div class="ms-5">
                <h1 class="text-lg font-medium">Date Posted</h1>
                <p class="text-secondary">{{job.created_at}}</p>
            </div>
        </div>
        <div class="flex mt-8">
            <i class="fa-solid fa-location-dot text-3xl text-main mt-1"></i>
            <div class="ms-5">
                <h1 class="text-lg font-medium">Location</h1>
                <p class="text-secondary">{{job.location}}</p>
            </div>
        </div>
        <div class="flex mt-8">
            <i class="fa-solid fa-money-bill-wave text-3xl text-main mt-1"></i>
            <div class="ms-5">
                <h1 class="text-lg font-medium">Offered Salary</h1>
                <p class="text-secondary">${{job.min_salary}} - ${{job.max_salary}} / {{job.salaryType}}</p>
            </div>
        </div>
        <div class="flex mt-8">
            <i class="fa-solid fa-hourglass text-3xl text-main mt-1"></i>
            <div class="ms-5">
                <h1 class="text-lg font-medium">Expiration date</h1>
                <p class="text-secondary">{{job.deadline}}</p>
            </div>
        </div>
        <div class="flex mt-8">
            <i class="fa-solid fa-user-tie text-3xl text-main mt-1"></i>
            <div class="ms-5">
                <h1 class="text-lg font-medium">Experience</h1>
                <p class="text-secondary">{{job.experience}} years</p>
            </div>
        </div>
        <div class="flex mt-8">
            <i class="fa-regular fa-user text-3xl text-main mt-1"></i>
            <div class="ms-5">
                <h1 class="text-lg font-medium">Gender</h1>
                <p class="text-secondary">{{job.gender}}</p>
            </div>
        </div>
        <div class="flex mt-8">
            <i class="fa-regular fa-star text-3xl text-main mt-1"></i>
            <div class="ms-5">
                <h1 class="text-lg font-medium">Qualification</h1>
                <p class="text-secondary">{{job.degree}}</p>
            </div>
        </div>
        <div class="flex mt-8">
            <i class="fa-solid fa-coins text-3xl text-main mt-1"></i>
            <div class="ms-5">
                <h1 class="text-lg font-medium">Career Level</h1>
                <p class="text-secondary">{{job.career_level}}</p>
            </div>
        </div>
    </div>
    </div>
    </div>
    </template>
    <script setup>
    import { onMounted, ref } from 'vue';
import NavBar from '../Home/NavBar.vue';
import api from '../../axios';
    const props = defineProps(['id']);
    const job = ref('');
    onMounted(()=>{
        api.get(`/job/${props.id}`).then(({data})=>{
            job.value = data;
        })
    });
//     function formatDate(inputDate) {
//     const date = new Date(inputDate);

//     const options = { 
//         year: 'numeric', 
//         month: 'long', 
//         day: 'numeric' 
//     };

//     const formattedDate = new Intl.DateTimeFormat('en-US', options).format(date);
//     return formattedDate;
// }
    </script>
    <style scoped>
    li::before{
        content: ".";
    font-size: 60px;
    color: #7a8591;
    position: absolute;
    top: -53px;
    left:-14px ;
    }
    </style>