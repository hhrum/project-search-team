<template>
  <div class="game-card">
      <text-small><slot>Game</slot></text-small>
  </div>
</template>

<script>
    import TextSmall from "../text/TextSmall";

    export default {
        name: "GameCard",
        components: {
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
