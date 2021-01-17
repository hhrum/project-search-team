<template>
    <div class="notification">
        <text-title><slot name="title"></slot></text-title>

        <div class="notification__body">
            <slot name="items"></slot>
        </div>
    </div>
</template>

<script>
    import TextTitle from "../text/TextTitle";

    export default {
        name: "NotificationSection",
        components: {TextTitle}
    }
</script>

<style lang="scss" scoped>
    .notification {
        margin-top: 32px;

        &__body {
            margin-top: 20px;
        }
    }

</style>
