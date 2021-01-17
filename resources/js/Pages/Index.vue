<template id="index">
    <div class="content">
        <header>Хочу в тиму</header>

        <div class="welcome-text">Привет, просто!</div>

        <user-card />

        <Nav />

        <div class="notifications">
            <notification-section>
                <template v-slot:title>С вами хотят поиграть</template>
                <template v-slot:items>
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
                </template>
            </notification-section>

            <notification-section>
                <template v-slot:title>Чаты</template>
                <template v-slot:items>
                    <chat-item is-new-message="true" />
                    <chat-item />
                </template>
            </notification-section>
        </div>

    </div>
</template>

<script>
    import TextSmall from "../Components/text/TextShallow";
    import UserCard from "../Components/UserCard";
    import Nav from "../Components/nav/Nav";
    import NotificationSection from "../Components/notifications/NotificationSection";
    import NotificationWantToPlay from "../Components/notifications/NotificationWantToPlay";
    import GameCards from "../Components/gamecards/GameCards";
    import GameCardSmall from "../Components/gamecards/GameCardSmall";
    import ChatItem from "../Components/chat/ChatItem";

    export default {
        name: "index",

        components: {
            ChatItem,
            GameCardSmall,
            GameCards,
            NotificationWantToPlay,
            NotificationSection,
            TextSmall, UserCard, Nav,
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
