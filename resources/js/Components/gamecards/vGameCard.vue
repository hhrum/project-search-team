<template>
    <div :class="getRootClasses">
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
        },
        props: ['isSmall'],
        computed: {
            getRootClasses: function () {
                let classes = ['game-card'];
                if (this.isSmall) classes.push('game-card--small');

                return classes.join(' ');
            }
        }
    }
</script>

<style lang="scss" scoped>
    .game-card {
        padding: 8px;
        margin-right: 8px;

        background: #141523;
        border-radius: 8px;

        &--small {
            padding: 6px;
        }

        &:last-child {
            margin-right: 0;
        }
    }
</style>
