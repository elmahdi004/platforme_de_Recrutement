import { createRouter,createWebHistory } from "vue-router";
import Index from './pages/Home/Index.vue'
import Dashboard from './pages/dashboard/Dashboard.vue'
import Profile from './pages/dashboard/pages/Profile.vue'
import Statistics from './pages/dashboard/pages/Statistics.vue'
import Resume from "./pages/dashboard/pages/resume/Resume.vue";
import MyApplied from "./pages/dashboard/pages/myApplied/MyApplied.vue"

const router = createRouter({
    history:createWebHistory(),
    routes:[
        {
            path:'/',
            component:Index,
            name:"index"
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