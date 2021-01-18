<template>
    <div class="game-cards">
        <slot></slot>
    </div>
</template>

<script>
    export default {
        name: "vGameCards"
    }
</script>

<style lang="scss" scoped>
    .game-cards {
        display: flex;
        flex-wrap: wrap;
    }
</style>
