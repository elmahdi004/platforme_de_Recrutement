<template lang="">
    <div class="header grid grid-cols-12 px-3 py-4 mt-3 items-center border-b">
                        <div class="col-span-4 flex items-center">
                            <div class="content flex flex-col ms-4">
                                <router-link to="#"><h1 class="font-semibold text-xl duration-200 hover:text-orange-500">Finance Manager & Health</h1></router-link>
                                <div class="flex">
                                    <div class="position flex items-center text-secondary">
                                        <i class="fa-solid fa-location-dot me-2 text-sm"></i>
                                        <p>New York</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h1 class="col-span-2 text-orange-400 mx-5">415 Applicant(s)</h1>
                        <div class="col-span-2 flex flex-col">
                            <h1 class="my-1"><span class="font-bold text-md">Created:</span> June 20, 2021</h1>
                            <h1 class="my-1"><span class="font-bold text-md">Created:</span> June 20, 2021</h1>
                        </div>
                        <h1 class="col-span-2 text-yellow-500 font-bold text-sm text-center">Pending</h1>
                        <div class="col-span-2 flex">
                            <button class="bg-orange-100 text-orange-600 px-2 py-1 mx-2 rounded-lg w-8 h-8 flex items-center justify-center">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                            <button class="bg-orange-100 text-orange-600 px-2 py-1 mx-2 rounded-lg w-8 h-8 flex items-center justify-center">
                                <i class="fa-solid fa-eye"></i>
                            </button>
                        </div>
                    </div>
</template>
<script>
export default {
    
}
</script>
<style lang="">
    
</style>