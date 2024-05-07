<template lang="">
            <div class="col-span-3 bg-white h-[calc(100vh-112px)] overflow-y-auto">
                <div class="p-4">
                    <div class="user flex gap-x-8 items-center">
                        <div class="image">
                            <img src="../../../image/member4.jpg" class="w-20 h-20 rounded-full object-cover" alt="image" srcset="">
                        </div>
                        <div>
                            <h3 class="mt-1 font-semibold text-lg">Condidate</h3>
                            <p class="mt-1">New York</p>
                            <button class="mt-1 text-sm text-white bg-orange-400 px-2 py-1 rounded">View Profile</button>
                        </div>
                    </div>
                    <div class="navs mt-10">
                            <ul class="">
                                <router-link :to="{name:'statistics'}" class="block text-secondary">
                                    <div class="px-3 py-3 rounded-md my-2">
                                        <div class="flex items-center">
                                            <i class="fa-regular fa-clipboard text-2xl"></i>
                                            <p class="ms-3 text-md ">User Dashboard</p>
                                        </div>
                                    </div>
                                </router-link>
                                <router-link :to="{name:'profile'}" class="block text-secondary">
                                    <div class="px-3 py-3 rounded-md my-2  duration-200">
                                        <div class="flex items-center">
                                            <i class="fa-regular fa-file-lines text-2xl"></i>
                                            <p class="ms-3 text-md ">Profile</p>
                                        </div>
                                    </div>
                                </router-link>
                                <router-link :to="{name:'myResume'}" class="block text-secondary">
                                    <div class="px-3 py-3 rounded-md my-2  duration-200">
                                        <div class="flex items-center">
                                            <i class="fa-regular fa-file-lines text-2xl"></i>
                                            <p class="ms-3 text-md ">My Resume</p>
                                        </div>
                                    </div>
                                </router-link>
                                <router-link :to="{name:'myApplied'}" class="block text-secondary">
                                    <div class="px-3 py-3 rounded-md my-2  duration-200">
                                        <div class="flex items-center">
                                            <i class="fa-regular fa-file-lines text-2xl"></i>
                                            <p class="ms-3 text-md ">My Applied</p>
                                        </div>
                                    </div>
                                </router-link>
                            </ul>
                    </div>
                </div>
            </div>
</template>
<script>
export default {
    
}
</script>
<style scoped>
a.router-link-active > div{
        color:orange;
        background:rgba(255, 166, 0, 0.177);
    }
</style>