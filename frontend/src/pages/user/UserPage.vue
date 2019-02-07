<template>
    <div>
        <h1>User page</h1>

        <h2>{{ user.email }}</h2>
    </div>
</template>

<script>
    import axios from "axios";

    export default {
        name : "UserPage",
        data(){
            return {
                user : {}
            }
        },
        computed : {
            currentUserId(){
                return this.$route.params.id;
            }
        },
        methods : {
            loadUserById(){
                axios.get("/api/users/" + this.currentUserId).then((res) => {
                    this.user = res.data
                })
            }
        },
        mounted(){
            this.loadUserById();
        }
    }
</script>

<style scoped>

</style>