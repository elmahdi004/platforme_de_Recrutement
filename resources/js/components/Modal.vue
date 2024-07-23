<template lang="">
<div @click="" id="default-modal" tabindex="-1" aria-hidden="true" :class="[open ? '' : '',' bg-slate-200/80  h-full absolute flex overflow-y-auto overflow-x-hidden top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0  max-h-full']">
    <div class="relative p-4 w-full max-w-3xl">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 overflow-y-scroll">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <slot name="header"/>
                <button @click="closeModal" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only" >Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-2 md:p-5 space-y-4">
                <slot name="body"/>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center justify-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <slot name="footer"/>
            </div>
        </div>
    </div>
</div>

</template>
<script setup>
import {defineProps, ref,defineEmits} from 'vue';
const emits = defineEmits([
    'close-modal'
]);
const props = defineProps([
    'show'
]);
const closeModal = ()=>{
emits('close-modal');
}

const open = ref(props.show)
</script>
<style lang="">
    
</style>