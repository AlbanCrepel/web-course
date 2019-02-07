<template>
    <div>
        <h1>Login</h1>
        <user v-for="user in users" :user="user" :key="user.id"></user>

        <input v-model="user.email"/>
        <input v-model="user.password"/>
        <button @click="register">enregistrer</button>
    </div>
</template>

<script>
    import axios from "axios";
    import User from "./User";

    export default {
        name : "LoginPage",
        components: {User},
        data(){
            return {
                users : [],
                user : {
                    email : "",
                    password : ""
                }
            }
        },
        methods : {
            loadUsers(){
                axios.get("/api/users").then((res) =>{
                    this.users = res.data
                })
            },
            register(){
                axios.post("/api/users", this.user).then((res) => {
                    console.log(res);
                })
            }
        },
        mounted(){
            this.loadUsers();
        }
    }
</script>

<style scoped lang="scss">

    h1 {
        color : $text-color;
    }
</style>