<template lang="">
    <div class="bg-white rounded-md shadow-md mt-[40px] p-5">
        <h1 class="font-semibold text-lg">My Resume</h1>
        <h1 class="font-semibold text-lg mt-7 mb-10">CV Attachment</h1>
        <div
            class="attachement flex items-center w-fit my-4"
            v-for="attachement in attachements"
            :key="attachement.id"
        >
            <div
                class="flex bg-orange-100 text-orange-400 px-3 py-2 items-center rounded-lg"
            >
                <div class="content flex flex-col">
                    <p>{{ attachement.name }}</p>
                    <p class="font-semibold">{{ attachement.type }}</p>
                </div>
                <i class="fa-regular fa-file-lines ps-5 text-2xl"></i>
            </div>
            <div
                class="remove cursor-pointer ms-4 text-red-600 duration-100 hover:bg-red-600 hover:text-white hover:rounded-full w-[30px] h-[30px] flex items-center justify-center"
            >
                <i class="fa-solid fa-xmark"></i>
            </div>
        </div>
        <div
            class="w-[100px] h-[50px] bg-orange-100 text-orange-400 rounded-lg relative mt-5 cursor-pointer"
        >
            <input
                type="file"
                name=""
                id=""
                @change="test"
                class="w-full h-full bg-transparent text-transparent opacity-0"
            />
            <div class="absolute top-[23%] left-[23%] text-lg">Browse</div>
        </div>

        <p class="font-md text-md text-slate-600 mt-5">
            Upload file .pdf, .doc, .docx
        </p>
    </div>
</template>
<script setup>
import { ref } from "vue";
import api from "../../../../axios";
import { data } from "autoprefixer";
const attachements = [
    { id: 1, type: "PDF", name: "attachement name 1" },
    { id: 2, type: "DOC", name: "attachement name 2" },
    { id: 3, type: "DOCX", name: "attachement name 3" },
];
const cv = ref();
const test = (event) => {
    const file = event.target.files[0];
    const formData = new FormData();
    formData.append("file", file);
    api.post("/resume", formData, {
        headers: {
            "Content-Type": "multipart/form-data",
        },
    }).then(({ data }) => {
        console.log(data);
    });
    // console.log()
};
</script>
<style lang=""></style>
<script setup></script>
