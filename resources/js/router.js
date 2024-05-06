import { createRouter,createWebHistory } from "vue-router";
import Index from './pages/Home/Index.vue'
import Dashboard from './pages/dashboard/Dashboard.vue'
import Profile from './pages/dashboard/pages/Profile.vue'
import Statistics from './pages/dashboard/pages/Statistics.vue'

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
                    path:'/',
                    component:Statistics,
                    name:"statistics"
                },
                {
                    path:'/profile',
                    component:Profile,
                    name:"profile"
                }
            ]
        },
    ]
});

export default router;