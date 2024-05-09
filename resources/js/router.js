import { createRouter,createWebHistory } from "vue-router";
import Index from './pages/Home/Index.vue';
import Dashboard from './pages/dashboard/Dashboard.vue';
import Statistics from './pages/dashboard/pages/Statistics.vue';
import Resume from "./pages/dashboard/pages/resume/Resume.vue";
import MyApplied from "./pages/dashboard/pages/myApplied/MyApplied.vue";
import Category from "./pages/category/Category.vue";
import MyProfile from "./pages/myProfile/MyProfile.vue";
import Job from "./pages/job/Job.vue";
import Profile from "./pages/dashboard/pages/profile/Profile.vue"
const router = createRouter({
    history:createWebHistory(),
    routes:[
        {
            path:'/',
            component:Index,
            name:"index"
        },
        {
            path:'/category',
            component:Category,
            name:"category"
        },
        {
        path:'/job',
        component:Job,
        name:"job"
        },
        {
            path:'/myProfile',
            component:MyProfile,
            name:"myProfile"
        },
        {
            path:'/dashboard',
            component:Dashboard,
            name:"dashboard",
            children:[
                {
                    path:'/dashboard/statistics',
                    component:Statistics,
                    name:"statistics"
                },
                {
                    path:'/profile',
                    component:Profile,
                    name:"profile"
                },
                {
                    path:'/myResume',
                    component:Resume,
                    name:"myResume"
                },
                {
                    path:'/myApplied',
                    component:MyApplied,
                    name:"myApplied"
                },
            ]
        },
    ]
});

export default router;