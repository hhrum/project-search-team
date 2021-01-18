<template>
    <div class="notification">
        <v-title><slot name="title"></slot></v-title>

        <div class="notification__body">
            <slot name="items"></slot>
        </div>
    </div>
</template>

<script>
    import vTitle from "../text/vTitle";

    export default {
        name: "vNotificationSection",
        components: {
            vTitle,
        }
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
