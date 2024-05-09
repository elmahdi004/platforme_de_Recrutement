<template lang="">
    <NavBar :fixe="false"></NavBar>
    <div class="title flex justify-between bg-[#f3f6fb] py-12 px-8">
        <div class="col-span-6 flex items-center">
                            <div class="logo self-start mt-2 w- h20-20 rounded-lg object-cover overflow-hidden">
                                <img src="../../../image/member4.jpg" alt="" srcset="">
                            </div>
                            <div class="content flex flex-col ms-10">
                                <router-link to="#"><h1 class="font-semibold text-2xl duration-200 hover:text-orange-500">Candidate</h1></router-link>
                                <div class="flex my-3">
                                    <div class="position flex items-center text-secondary">
                                        <p class="text-md text-orange-600">UI Designer</p>
                                    </div>
                                    <div class="position flex items-center text-secondary mx-4">
                                        <i class="fa-solid fa-location-dot me-2 text-sm"></i>
                                        <p>New York</p>
                                    </div>
                                    <div class="cat flex items-center text-secondary mx-3 mx-4">
                                        <i class="fa-solid fa-money-bill-wave me-2 text-sm"></i>
                                        <p>$15 - $18 / hour</p>
                                    </div>
                                </div>
                                <div class="budges flex">
                                    <div class="px-4 py-1 flex items-center justify-center bg-blue-100 text-main rounded-3xl mx-2">
                                        <p class="text-sm">Designer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="mt-5">
                                <button class="bg-orange-600 text-white text-lg px-14 py-2 rounded-xl">Download Now</button>
                                <button class="mx-8 bg-orange-100 px-4 py-3 rounded-lg text-orange-600 duration-200 hover:bg-orange-600 hover:text-white">
                                    <i class="fa-regular fa-bookmark"></i>
                                </button>
                            </div>
                        </div>
    </div>
    <div class="body grid grid-cols-12 mt-10 px-4">
    <div class="jobs px-5 py-3 col-span-9">
        <div>
            <h1 class="text-2xl my-2 font-semibold">About Candidate</h1>
            <p class="text-[#696969] mt-5 leading-7">Hello my name is Nicole Wells and web developer from Portland. In pharetra orci dignissim, blandit mi semper, ultricies diam. Suspendisse malesuada suscipit nunc non volutpat. <br><br> Sed porta nulla id orci laoreet tempor non consequat enim. Sed vitae aliquam velit. Aliquam ante erat, blandit at pretium et, accumsan ac est. Integer vehicula rhoncus molestie. Morbi ornare ipsum sed sem condimentum, et pulvinar tortor luctus. Suspendisse condimentum lorem ut elementum aliquam.
Mauris nec erat ut libero vulputate pulvinar. Aliquam ante erat, blandit at pretium et, accumsan ac est. Integer vehicula rhoncus molestie. Morbi ornare ipsum sed sem condimentum, et pulvinar tortor luctus. Suspendisse condimentum lorem ut elementum aliquam. Mauris nec erat ut libero vulputate pulvinar.</p>
        </div>
        <div class="mt-10">
            <h1 class="text-2xl my-2 font-semibold">Education</h1>
            <div class="mt-4">
                <div class="content flex flex-col">
                    <div class="header flex items-center">
                        <div class="circle w-10 h-10 rounded-full bg-red-100 flex items-center justify-center">
                            <p class="text-red-600 font-semibold">B</p>
                        </div>
                        <div class="flex flex-col ms-7">
                            <div class="flex items-center">
                                <h1 class="font-semibold text-black text-lg">Bachlors in Fine Arts </h1>
                                <p class="ms-4 text-red-600 font-medium">2012-2016</p>
                            </div>
                            <h1 class="text-red-600">Modern College</h1>
                        </div>
                    </div>
                    <div class="customeBody relative body py-5 mx-16">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <div class="content flex flex-col">
                    <div class="header flex items-center">
                        <div class="circle w-10 h-10 rounded-full bg-red-100 flex items-center justify-center">
                            <p class="text-red-600 font-semibold">B</p>
                        </div>
                        <div class="flex flex-col ms-7">
                            <div class="flex items-center">
                                <h1 class="font-semibold text-black text-lg">Bachlors in Fine Arts </h1>
                                <p class="ms-4 text-red-600 font-medium">2012-2016</p>
                            </div>
                            <h1 class="text-red-600">Modern College</h1>
                        </div>
                    </div>
                    <div class="customeBody body py-5 mx-16 relative">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.
                    </div>
                </div>
            </div>


            </div>
            

            <div class="mt-10">
            <h1 class="text-2xl my-2 font-semibold">Work & Experience</h1>
            <div class="mt-4">
                <div class="content flex flex-col">
                    <div class="header flex items-center">
                        <div class="circle w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center">
                            <p class="text-blue-600 font-semibold">B</p>
                        </div>
                        <div class="flex flex-col ms-7">
                            <div class="flex items-center">
                                <h1 class="font-semibold text-black text-lg">Bachlors in Fine Arts </h1>
                                <p class="ms-4 text-blue-600 font-medium">05/05/2018 - 05/05/2020</p>
                            </div>
                            <h1 class="text-blue-600">Modern College</h1>
                        </div>
                    </div>
                    <div class="customeBody2 relative body py-5 mx-16">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <div class="content flex flex-col">
                    <div class="header flex items-center">
                        <div class="circle w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center">
                            <p class="text-blue-600 font-semibold">B</p>
                        </div>
                        <div class="flex flex-col ms-7">
                            <div class="flex items-center">
                                <h1 class="font-semibold text-black text-lg">Bachlors in Fine Arts </h1>
                                <p class="ms-4 text-blue-600 font-medium">05/05/2018 - 05/05/2020</p>
                            </div>
                            <h1 class="text-blue-600">Modern College</h1>
                        </div>
                    </div>
                    <div class="customeBody2 body py-5 mx-16 relative">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.
                    </div>
                </div>
            </div>


            </div>
    </div>
    <div class="filter flex flex-col col-span-3 bg-[#f3f6fb] px-5 py-3 rounded-lg mt-7">
        <div class="">
        <h1 class="font-semibold text-xl mt-2">Job Overview</h1>
        <div class="flex mt-4">
            <i class="fa-solid fa-venus-mars text-3xl text-main mt-1"></i>
            <div class="ms-5">
                <h1 class="text-lg font-medium">Gender</h1>
                <p class="text-secondary">2 Year</p>
            </div>
        </div>
        <div class="flex mt-8">
            <i class="fa-solid fa-language text-3xl text-main mt-1"></i>
            <div class="ms-5">
                <h1 class="text-lg font-medium">Languages</h1>
                <p class="text-secondary">French</p>
            </div>
        </div>
        <div class="flex mt-8">
            <i class="fa-solid fa-money-bill-wave text-3xl text-main mt-1"></i>
            <div class="ms-5">
                <h1 class="text-lg font-medium">Offered Salary</h1>
                <p class="text-secondary">$150 - $180 / week</p>
            </div>
        </div>
        <div class="flex mt-8">
            <i class="fa-solid fa-hourglass text-3xl text-main mt-1"></i>
            <div class="ms-5">
                <h1 class="text-lg font-medium">Age</h1>
                <p class="text-secondary">20-40</p>
            </div>
        </div>
        <div class="flex mt-8">
            <i class="fa-solid fa-user-tie text-3xl text-main mt-1"></i>
            <div class="ms-5">
                <h1 class="text-lg font-medium">Experience</h1>
                <p class="text-secondary">4 Year</p>
            </div>
        </div>
        <div class="flex mt-8">
            <i class="fa-regular fa-envelope text-3xl text-main mt-1"></i>
            <div class="ms-5">
                <h1 class="text-lg font-medium">Email</h1>
                <p class="text-secondary">exemple@gmail.com</p>
            </div>
        </div>
        <div class="flex mt-8">
            <i class="fa-regular fa-star text-3xl text-main mt-1"></i>
            <div class="ms-5">
                <h1 class="text-lg font-medium">Qualification</h1>
                <p class="text-secondary">Bachelor Degree</p>
            </div>
        </div>
        <div class="flex mt-8">
            <i class="fa-solid fa-phone text-3xl text-main mt-1"></i>
            <div class="ms-5">
                <h1 class="text-lg font-medium">Phone number</h1>
                <p class="text-secondary">0619664459</p>
            </div>
        </div>
        <div class="flex mt-8">
            <i class="fa-solid fa-wand-magic-sparkles text-3xl text-main mt-1"></i>
            <div class="ms-5">
                <h1 class="text-lg font-medium">Skills</h1>
                <div class="flex flex-col ms-2 my-3">
                    <p class="text-secondary">- App</p>
                <p class="text-secondary">- Design</p>
                <p class="text-secondary">- xxxx</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </template>
    <script setup>
    import NavBar from '../Home/NavBar.vue';
    </script>
    <style scoped>
    .customeBody::before{
        content: "";
    position: absolute;
    height: 100%;
    top: 0;
    left: -46px;
    border-left: 4px dashed rgba(254, 226, 226, 1);
}
.customeBody2::before{
        content: "";
    position: absolute;
    height: 100%;
    top: 0;
    left: -46px;
    border-left: 4px dashed rgba(219, 234, 254, 1);
}
    </style>