<template>
    <div>
        <p>{{ user.email }}</p>
        <p>{{ user.id }}</p>
    </div>
</template>

<script>
    export default {
        name : "User",
        props : {
            user : {}
        }
    }
</script>

<style scoped>

</style>