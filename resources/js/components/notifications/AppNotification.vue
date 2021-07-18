<template>
    <div class="flex w-full border-b border-gray-800">
        <component :is="`AppNotification${notification.type}`" :notification="notification"></component>
    </div>
</template>

<script>
export default {
    props: {
        notification: {
            required: true,
            type: Object
        }
    }
}
</script>