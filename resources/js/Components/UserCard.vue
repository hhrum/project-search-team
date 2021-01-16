<template>
    <div class="wrapper">
        <div class="profile-info">
            <avatar-circle48 />
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
                <span>3</span>
            </div>

        </div>
    </div>
</template>

<script>
    import TextMedium from "./text/TextMedium";
    import TextShallow from "./text/TextShallow";
    import GameCards from "./gamecards/GameCards";
    import GameCard from "./gamecards/GameCard";
    import AvatarCircle48 from "./avatar/AvatarCircle48";

    export default {
        name: "UserCard",

        components: {
            AvatarCircle48,
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
            margin-right: 12px;
            width: 40px;
            height: auto;

            .icon {
                display: flex;
                flex-direction: column;
                justify-content: center;
                width: 57%;
            }

            &:last-child {
                margin-right: 0;
            }
        }

    }
</style>
