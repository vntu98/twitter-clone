<template>
    <div>
        <span class="text-gray-300 font-bold">{{ user.name }}</span> <span class="text-gray-600 font-normal">@{{ user.username }}</span>
    </div>
</template>
<script>
    export default {
        props: {
            user: {
                required: true,
                type: Object
            }
        }
    }
</script>
<style lang="">
    
</style>