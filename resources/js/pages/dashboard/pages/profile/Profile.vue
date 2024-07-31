<template lang="">
    <div v-if="user != null">
        <h1 class="font-semibold text-3xl">Profile</h1>
        <div  class="bg-white rounded-md shadow-md mt-[40px] p-5">
            <h1 class="font-semibold text-lg">My Profile</h1>
            <div class="image mt-9 flex">
                <div
                    class="w-25 h-25 rounded-lg overflow-hidden w-fit h-fit relative"
                >
                    <span
                        class="absolute top-1 left-1 w-6 h-6 cursor-pointer bg-orange-100 rounded-md text-orange-600 flex justify-center items-center duration-200 hover:bg-orange-600 hover:text-white"
                    >
                        <i class="fa-solid fa-xmark text-sm mt-1"></i>
                    </span>
                    <img
                        src="../../../../../image/member4.jpg"
                        class="object-cover"
                        alt=""
                        srcset=""
                    />
                </div>
                <div class="ms-8">
                    <BrowseButton></BrowseButton>
                </div>
            </div>
            <div class="grid mt-5 grid-cols-12 gap-5">
                <div class="col-span-6 mt-4">
                    <div class="">
                        <h1 class="font-semibold text-lg mt-2">Full Name</h1>
                        <div
                            class="flex mt-1 items-center px-4 py-4 bg-[#F0F5F7] rounded-md duration-150"
                        >
                            <input
                                type="text"
                                placeholder="Elmahdi bellaziz"
                                class="ms-5 w-full focus:outline-0 placeholder:text-[#696969] bg-transparent"
                                v-model="user.full_name"
                            />
                        </div>
                    </div>
                </div>
                <div class="col-span-6 mt-4">
                    <div class="">
                        <h1 class="font-semibold text-lg mt-2">
                            Date of Birth
                        </h1>
                        <div
                            class="flex mt-1 items-center px-4 py-4 bg-[#F0F5F7] rounded-md duration-150"
                        >
                            <input
                                type="date"
                                class="ms-5 w-full focus:outline-0 placeholder:text-[#696969] bg-transparent"
                            />
                        </div>
                    </div>
                </div>
                <div class="col-span-6 mt-2">
                    <div class="">
                        <h1 class="font-semibold text-lg mt-2">Gender</h1>
                        <div
                            class="flex mt-1 items-center px-4 py-4 bg-[#F0F5F7] rounded-md duration-150"
                        >
                            <select
                                name=""
                                class="ms-5 w-full focus:outline-0 placeholder:text-[#696969] bg-transparent"
                                id=""
                            >
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-span-6 mt-2">
                    <div class="">
                        <h1 class="font-semibold text-lg mt-2">Age</h1>
                        <div
                            class="flex mt-1 items-center px-4 py-4 bg-[#F0F5F7] rounded-md duration-150"
                        >
                            <select
                                name=""
                                class="ms-5 w-full focus:outline-0 placeholder:text-[#696969] bg-transparent"
                                id=""
                            >
                                <option value="18-20">18-20</option>
                                <option value="20-25">20-25</option>
                                <option value="25-30">25-30</option>
                                <option value="30-35">30-35</option>
                                <option value="40-50">40-50</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-span-6 mt-4">
                    <div class="">
                        <h1 class="font-semibold text-lg mt-2">Phone number</h1>
                        <div
                            class="flex mt-1 items-center px-4 py-4 bg-[#F0F5F7] rounded-md duration-150"
                        >
                            <input
                                type="text"
                                placeholder="+2126123456789"
                                class="ms-5 w-full focus:outline-0 placeholder:text-[#696969] bg-transparent"
                            />
                        </div>
                    </div>
                </div>
                <div class="col-span-6 mt-4">
                    <div class="">
                        <h1 class="font-semibold text-lg mt-2">Email</h1>
                        <div
                            class="flex mt-1 items-center px-4 py-4 bg-[#F0F5F7] rounded-md duration-150"
                        >
                            <input
                                type="text"
                                placeholder="exemple@gmail.com"
                                class="ms-5 w-full focus:outline-0 placeholder:text-[#696969] bg-transparent"
                            />
                        </div>
                    </div>
                </div>
                <div class="col-span-6 mt-2">
                    <div class="">
                        <h1 class="font-semibold text-lg mt-2">
                            Qualification
                        </h1>
                        <div
                            class="flex mt-1 items-center px-4 py-4 bg-[#F0F5F7] rounded-md duration-150"
                        >
                            <select
                                name=""
                                class="ms-5 w-full focus:outline-0 placeholder:text-[#696969] bg-transparent"
                                id=""
                            >
                                <option value="certificate">Certificate</option>
                                <option value="20-25">20-25</option>
                                <option value="associate degree">
                                    Associate degree
                                </option>
                                <option value="bachelor degree">
                                    Bachelor degree
                                </option>
                                <option value="master's degree">
                                    Master's degree
                                </option>
                                <option value="doctorate degree">
                                    Doctorate degree
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-span-6 mt-2">
                    <div class="">
                        <h1 class="font-semibold text-lg mt-2">
                            Experience Time
                        </h1>
                        <div
                            class="flex mt-1 items-center px-4 py-4 bg-[#F0F5F7] rounded-md duration-150"
                        >
                            <select
                                name=""
                                class="ms-5 w-full focus:outline-0 placeholder:text-[#696969] bg-transparent"
                                id=""
                            >
                                <option value="fresh">Fresh</option>
                                <option value="1 year">1 Year</option>
                                <option value="3 year">3 Year</option>
                                <option value="5 year">5 Year</option>
                                <option value="+5 year">+5 Year</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-span-6 mt-2">
                    <div class="">
                        <h1 class="font-semibold text-lg mt-2">Salary Type</h1>
                        <div
                            class="flex mt-1 items-center px-4 py-4 bg-[#F0F5F7] rounded-md duration-150"
                        >
                            <select
                                name=""
                                class="ms-5 w-full focus:outline-0 placeholder:text-[#696969] bg-transparent"
                                id=""
                            >
                                <option value="monthly">Monthly</option>
                                <option value="weekly">Weekly</option>
                                <option value="daily">Daily</option>
                                <option value="hourly">Hourly</option>
                                <option value="yearly">Yearly</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-span-6 mt-2">
                    <div class="">
                        <h1 class="font-semibold text-lg mt-2">Salary ($)</h1>
                        <div
                            class="flex mt-1 items-center px-4 py-4 bg-[#F0F5F7] rounded-md duration-150"
                        >
                            <input
                                type="text"
                                placeholder="500"
                                class="ms-5 w-full focus:outline-0 placeholder:text-[#696969] bg-transparent"
                            />
                        </div>
                    </div>
                </div>
                <div class="col-span-6 mt-2">
                    <div class="">
                        <h1 class="font-semibold text-lg mt-2">Category</h1>
                        <div
                            class="flex mt-1 items-center px-4 py-4 bg-[#F0F5F7] rounded-md duration-150"
                        >
                            <select
                                name=""
                                class="ms-5 w-full focus:outline-0 placeholder:text-[#696969] bg-transparent"
                                id=""
                            >
                                <option value="monthly">Developer</option>
                                <option value="weekly">Weekly</option>
                                <option value="daily">Daily</option>
                                <option value="hourly">Hourly</option>
                                <option value="yearly">Yearly</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-span-6 mt-2">
                    <div class="">
                        <h1 class="font-semibold text-lg mt-2">
                            Show my profile
                        </h1>
                        <div
                            class="flex mt-1 items-center px-4 py-4 bg-[#F0F5F7] rounded-md duration-150"
                        >
                            <select
                                name=""
                                class="ms-5 w-full focus:outline-0 placeholder:text-[#696969] bg-transparent"
                                id=""
                            >
                                <option value="show">Show</option>
                                <option value="hide">Hide</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 mt-2">
                    <div class="">
                        <h1 class="font-semibold text-lg mt-2">Job Title</h1>
                        <div
                            class="flex mt-1 items-center px-4 py-4 bg-[#F0F5F7] rounded-md duration-150"
                        >
                            <input
                                type="text"
                                placeholder="Back end developer"
                                class="ms-5 w-full focus:outline-0 placeholder:text-[#696969] bg-transparent"
                            />
                        </div>
                    </div>
                </div>
                <div class="col-span-12 pb-[100px]">
                    <div class="">
                        <h1 class="font-semibold text-lg mt-2">Description</h1>
                        <div
                            class="h-[250px] px-4 py-4 rounded-md duration-150"
                        >
                            <div id="editor" class="bg-[#F0F5F7]"></div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 mt-2">
                    <div class="">
                        <h1 class="font-semibold text-lg mt-2">
                            Friendly Address
                        </h1>
                        <div
                            class="flex mt-1 items-center px-4 py-4 bg-[#F0F5F7] rounded-md duration-150"
                        >
                            <input
                                type="text"
                                placeholder="215 Hicks St, Brooklyn, NY"
                                class="ms-5 w-full focus:outline-0 placeholder:text-[#696969] bg-transparent"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <CustomButton title="Save Profile"></CustomButton>
            {{
                user
            }}
        </div>
    </div>
</template>
<script setup>
import { onMounted, ref } from "vue";
import api from "../../../../axios";
import BrowseButton from "../../../../components/BrowseButton.vue";
import CustomButton from "../../../../components/CustomButton.vue";
import { data } from "autoprefixer";
import { useStore } from "../../../../pinia";
const user = ref();
onMounted(() => {
    const quill = new Quill("#editor", {
        theme: "snow",
    });
    const store = useStore();
    store.getUserAction();
    user.value = store.user;
    // api.get(`/candidate/3`).then(({ data }) => console.log(data));
});
</script>
<style lang=""></style>
