<template>
    <div class="want-to-play">
        <text-title>С вами хотят поиграть</text-title>

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
    import GameCards from "../gamecards/GameCards";
    import TextTitle from "../text/TextTitle";
    import GameCardSmall from "../gamecards/GameCardSmall";

    export default {
        name: "NotificationsWantToPlay",
        components: {
            NotificationWantToPlay, GameCards, GameCardSmall, TextTitle,
        }
    }
</script>

<style lang="scss" scoped>
    .want-to-play-items {
        margin-top: 20px;
    }
</style>
