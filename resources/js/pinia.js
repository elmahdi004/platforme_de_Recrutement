import { defineStore } from "pinia";
import api from "./axios";
export const useStore = defineStore('elmahdi', {
    state: () => ({
        user : null
    }),
    getters : {
    },
    actions : {
        async getUserAction (){
            await api.get("/auth/get-user-login")
                .then(({ data }) =>{
                    this.user = data;
                    // console.log(this.user);
                })
                .catch((e) => console.log(e));
        }
    }
});