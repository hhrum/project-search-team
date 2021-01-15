<template>
    <div class="game-card">
        <text-shallow><slot>Game</slot></text-shallow>
    </div>
</template>

<script>
    import TextShallow from "../text/TextShallow";

    export default {
        name: "GameCardSmall",
        components: {
            TextShallow
        }
    }
</script>

<style lang="scss" scoped>
    .game-card {
        padding: 6px;
        margin-right: 8px;

        background: #141523;
        border-radius: 8px;

        &:last-child {
            margin-right: 0;
        }
    }
</style>
