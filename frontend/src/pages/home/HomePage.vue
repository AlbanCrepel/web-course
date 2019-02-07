<template>
    <div>
        <h1>HomePage</h1>
        <router-link :to="{ name : 'login' }">lien vers login</router-link>
    </div>
</template>

<script>
    import { mapActions } from "vuex";

    export default {
        name : "HomePage",
        methods : {
            ...mapActions(["loadUser"])
        },
        mounted(){
            this.loadUser()
        }
    }
</script>

<style scoped lang="scss">


</style>