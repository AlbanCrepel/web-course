<template>
    <div>
        <h1>HomePage</h1>
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