<template>
    <div
        :class="
            fixe
                ? 'z-20 shadow-md sticky top-0 bg-white'
                : 'z-20 shadow-md bg-white'
        "
    >
        <div class="navbar flex pt-5 pb-4 px-6 justify-between items-center">
            <div class="logo flex">
                <router-link to="/">
                    <img
                        src="../../../svg/logo.svg"
                        alt="logo"
                        class="max-w-40"
                    />
                </router-link>
            </div>
            <div class="navs flex">
                <div class="nav flex items-center mx-6 cursor-pointer">
                    <h3 class="text-lg me-1">Home</h3>
                    <i class="fa-solid fa-angle-down mt-1"></i>
                </div>
                <div class="nav flex items-center mx-6 cursor-pointer">
                    <h3 class="text-lg me-1">Home</h3>
                    <i class="fa-solid fa-angle-down mt-1"></i>
                </div>
                <div class="nav flex items-center mx-6 cursor-pointer">
                    <h3 class="text-lg me-1">Home</h3>
                    <i class="fa-solid fa-angle-down mt-1"></i>
                </div>
                <div class="nav flex items-center mx-6 cursor-pointer">
                    <h3 class="text-lg me-1">Home</h3>
                    <i class="fa-solid fa-angle-down mt-1"></i>
                </div>
            </div>
            <div class="actions flex">
                <div class="action mx-3">
                    <button
                        class="bg-blue-100 text-blue-700 font-medium rounded-md px-4 py-3"
                        @click="openModal"
                    >
                        Login/Register
                    </button>
                </div>
                <div class="action mx-3">
                    <button
                        class="bg-blue-900 text-white font-medium rounded-md px-4 py-3"
                    >
                        <router-link :to="{ name: 'statistics' }"
                            >Add Job</router-link
                        >
                    </button>
                </div>
                <div class="action mx-3 cursor-pointer">
                    <i
                        class="fa-regular fa-bell mt-2 text-2xl text-blue-800"
                    ></i>
                </div>
            </div>
        </div>
    </div>
    <Modal v-show="modal" @close-modal="onCloseModal">
        <template #header>
            <h1
                class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white"
            >
                Sign in to your account
            </h1>
        </template>
        <template #body>
            <div
                class="flex flex-col items-center mx-auto md:h-[60vh] lg:py-0 w-full"
            >
                <div
                    class="min-w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700"
                >
                    <div class="space-y-4 md:space-y-6 p-3">
                        <form class="space-y-4 md:space-y-6" action="#" @submit.prevent="loginUser">
                            <div>
                                <label
                                    for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    >Your email</label
                                >
                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 focus:border-orange-600 rounded-lg focus:ring-orange-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="name@company.com"
                                    required=""
                                    v-model="login.email"
                                />
                            </div>
                            <div>
                                <label
                                    for="password"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    >Password</label
                                >
                                <input
                                    type="password"
                                    name="password"
                                    id="password"
                                    placeholder="••••••••"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required=""
                                    v-model="login.password"
                                />
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input
                                            id="remember"
                                            aria-describedby="remember"
                                            type="checkbox"
                                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
                                            required=""
                                        />
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label
                                            for="remember"
                                            class="text-gray-500 dark:text-gray-300"
                                            >Remember me</label
                                        >
                                    </div>
                                </div>
                                <a
                                    href="#"
                                    class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500"
                                    >Forgot password?</a
                                >
                            </div>
                            <button
                                type="submit"
                                class="w-full text-white bg-orange-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                            >
                                Sign in
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </template>
        <template #footer>
            <div>
                <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                    Don’t have an account yet?
                    <a
                        href="#"
                        class="font-medium text-primary-600 hover:underline dark:text-primary-500"
                        >Sign up</a
                    >
                </p>
            </div>
        </template>
    </Modal>
</template>
<script setup>
import { defineProps, ref } from "vue";
import Modal from "../../components/Modal.vue";
import api from "../../axios";
const props = defineProps(["fixe"]);
const modal = ref(false);
const login = ref({
    email: "",
    password: "",
});
const openModal = () => {
    console.log("Open");
    modal.value = true;
};
const onCloseModal = () => {
    modal.value = false;
};
const loginUser = () => {
    api.post("/auth/login", login.value)
        .then((response) => {
            console.log(response);
        })
        .catch((e) => console.log(e));
};
</script>
<style scoped>
/* .navbar{
    box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.1), 0px 1px 3px rgba(0, 0, 0, 0.08);
} */
</style>
