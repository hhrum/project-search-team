<template>
    <div class="game-card">
        <text-small><slot name="normalsize"></slot></text-small>
        <text-shallow><slot name="smallsize"></slot></text-shallow>
    </div>
</template>

<script>
    import TextSmall from "../text/vTextSmall";
    import TextShallow from "../text/vTextShallow";

    export default {
        name: "vGameCard",
        components: {
            TextShallow,
            TextSmall
        }
    }
</script>

<style lang="scss" scoped>
    .game-card {
        padding: 8px;
        margin-right: 8px;

        background: #141523;
        border-radius: 8px;

        &:last-child {
            margin-right: 0;
        }
    }
</style>
