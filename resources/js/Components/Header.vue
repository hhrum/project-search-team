<template>
    <header class="header">
        <slot name="left"></slot>
        <slot name="center"></slot>
        <slot name="right"></slot>
    </header>
</template>

<script>
    export default {
        name: 'Header',
    }
</script>

<style lang="scss">
    .header {
        position: fixed;
        top: 0;
        height: 75px;

        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 24px;

        &__content {
            display: flex;
            align-items: center;
        }

        &__text {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            margin-right: 8px;
        }

        &__title {
            font-size: 14px;
            font-weight: 400;
        }

        &__subtitle {
            font-size: 12px;
            font-weight: 300;
            opacity: .5;
        }
    }
</style>
