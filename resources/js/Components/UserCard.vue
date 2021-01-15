<template>
    <div class="wrapper">
        <div class="profile-info">
            <div class="profile-info__avatar"></div>
            <div class="profile-info__text">
                <TextMedium>Просто Артём</TextMedium>
                <TextShallow>Съел собаку</TextShallow>
            </div>
        </div>

        <game-cards>
            <game-card>Terraria</game-card>
            <game-card>Minecraft</game-card>
        </game-cards>

        <div class="status">
            <div class="status__item">
                <div class="icon"><svg-vue icon="gamepad-icon"></svg-vue></div>
                <span>3</span>
            </div>
            <div class="status__item">
                <div class="icon"><svg-vue icon="like-icon"></svg-vue></div>
                <span>3</span>
            </div>
            <div class="status__item">
                <div class="icon"><svg-vue icon="message-icon"></svg-vue></div>
                <div>3</div>
            </div>

        </div>
    </div>
</template>

<script>
    import TextMedium from "./text/TextMedium";
    import TextShallow from "./text/TextShallow";
    import GameCards from "./GameCards";
    import GameCard from "./GameCard";

    export default {
        name: "UserCard",

        components: {
            TextMedium, TextShallow, GameCards, GameCard,
        }
    }
</script>

<style lang="scss" scoped>
    .wrapper {
        margin: 40px 0;
        padding: 24px;

        background: #282B3E;
        box-shadow: 0 4px 30px 0 rgba(0, 0, 0, .5);
        border-radius: 28px;
    }

    .profile-info {
        display: flex;
        align-items: center;
        margin-bottom: 16px;

        &__avatar {
            width: 48px;
            height: 48px;

            background: #c4c4c4;
            box-shadow: 0 4px 4px 0 rgba(0, 0, 0, .25);
            border-radius: 100%;
        }

        &__text {
            margin-left: 10px;
        }

    }

    .status {
        display: flex;
        margin-top: 16px;

        &__item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-right: 12px;
            width: 40px;
            height: 28px;

            .icon {
                width: 60%;
            }

            &:last-child {
                margin-right: 0;
            }
        }

    }
</style>
