<template id="index">
    <div class="content">

        <header>Хочу в тиму</header>

        <div class="welcome-text">Привет, просто!</div>

        <v-user-card />

        <v-nav />

        <div class="notifications">
            <v-notification-section>
                <template v-slot:title>С вами хотят поиграть</template>
                <template v-slot:items>
                    <v-notification-want-to-play>
                        <template v-slot:name>Кирилл Нубик</template>
                        <template v-slot:status>Люблю яблоки</template>
                        <template v-slot:games>
                            <v-game-cards>
                                <v-game-card><template v-slot:smallsize>Minecraft</template></v-game-card>
                                <v-game-card><template v-slot:smallsize>WoT: Blitz</template></v-game-card>
                            </v-game-cards>
                        </template>
                    </v-notification-want-to-play>

                    <v-notification-want-to-play>
                        <template v-slot:name>Кирилл Нубик</template>
                        <template v-slot:status>Люблю яблоки</template>
                        <template v-slot:games>
                            <v-game-cards>
                                <v-game-card><template v-slot:smallsize>Minecraft</template></v-game-card>
                                <v-game-card><template v-slot:smallsize>WoT: Blitz</template></v-game-card>
                            </v-game-cards>
                        </template>
                    </v-notification-want-to-play>
                </template>
            </v-notification-section>

            <v-notification-section>
                <template v-slot:title>Чаты</template>
                <template v-slot:items>
                    <v-chat-item is-new-message="true" />
                    <v-chat-item />
                </template>
            </v-notification-section>
        </div>

    </div>
</template>

<script>
    import vTextSmall from "../Components/text/vTextShallow";
    import vUserCard from "../Components/vUserCard";
    import vNav from "../Components/nav/vNav";
    import vNotificationSection from "../Components/notifications/vNotificationSection";
    import vNotificationWantToPlay from "../Components/notifications/vNotificationWantToPlay";
    import vGameCards from "../Components/gamecards/vGameCards";
    import vGameCard from "../Components/gamecards/vGameCard";
    import vChatItem from "../Components/chat/vChatItem";

    export default {
        name: "index",
        components: {
            vChatItem, vGameCards, vGameCard,
            vNotificationSection, vNotificationWantToPlay,
            vTextSmall, vUserCard, vNav,
        }
    }
</script>

<style lang="scss" scoped>
    header {
        margin: 0 0 24px;

        font-family: "Roboto", sans-serif;
        font-size: 20px;
        font-weight: 700;
    }

    .welcome-text {
        font-size: 28px;
        font-weight: 700;
    }
</style>
