<template>
    <div class="want-to-play">
        <Title>С вами хотят поиграть</Title>

        <div class="want-to-play-items">
            <notification-want-to-play>
                <template v-slot:name>Кирилл Нубик</template>
                <template v-slot:status>Люблю яблоки</template>
                <template v-slot:games>
                    <game-cards>
                        <game-card-small>Minecraft</game-card-small>
                        <game-card-small>WoT: Blitz</game-card-small>
                    </game-cards>
                </template>
            </notification-want-to-play>
            <notification-want-to-play>
                <template v-slot:name>Кирилл Нубик</template>
                <template v-slot:status>Люблю яблоки</template>
                <template v-slot:games>
                    <game-cards>
                        <game-card-small>Minecraft</game-card-small>
                        <game-card-small>WoT: Blitz</game-card-small>
                    </game-cards>
                </template>
            </notification-want-to-play>
        </div>

    </div>
</template>

<script>
    import NotificationWantToPlay from "./NotificationWantToPlay";
    import GameCards from "./GameCards";
    import Title from "./text/Title";
    import GameCardSmall from "./GameCardSmall";

    export default {
        name: "NotificationsWantToPlay",
        components: {
            NotificationWantToPlay, GameCards, GameCardSmall, Title,
        }
    }
</script>

<style lang="scss" scoped>
    .want-to-play-items {
        margin-top: 20px;
    }
</style>
