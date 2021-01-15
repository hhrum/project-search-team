<template>
    <nav class="nav">
        <nav-card>
            <template v-slot:status>3</template>
            <template v-slot:icon>
                <div class="icon"><svg-vue icon="gamepad-icon-gradient"></svg-vue></div>
            </template>
        </nav-card>

        <nav-card :is-profile="true">
            <template v-slot:text>Профиль</template>
            <template v-slot:icon>
                <div class="icon"><svg-vue icon="user-icon"></svg-vue></div>
            </template>
        </nav-card>

        <nav-card>
            <template v-slot:status>3</template>
            <template v-slot:icon>
                <div class="icon icon--purple"><svg-vue icon="message-icon"></svg-vue></div>
            </template>
        </nav-card>

        <nav-card>
            <template v-slot:status>3</template>
            <template v-slot:icon>
                <div class="icon icon--red"><svg-vue icon="like-icon"></svg-vue></div>
            </template>
        </nav-card>
    </nav>
</template>

<script>
    import NavCard from "./NavCard";

    export default {
        name: "Nav",
        components: {
            NavCard,
        }
    }
</script>

<style lang="scss">
    .nav {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-template-rows: 1fr 1fr;
        grid-gap: 20px;
    }
</style>
