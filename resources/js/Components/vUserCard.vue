<template>
    <div class="wrapper">
        <div class="profile-info">
            <v-avatar-circle48 />
            <div class="profile-info__text">
                <v-text-medium>Просто Артём</v-text-medium>
                <v-text-shallow>Съел собаку</v-text-shallow>
            </div>
        </div>

        <v-game-cards>
            <v-game-card><template v-slot:normalsize>Terraria</template></v-game-card>
            <v-game-card><template v-slot:normalsize>Minecraft</template></v-game-card>
        </v-game-cards>

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
    import vAvatarCircle48 from "./avatar/vAvatarCircle48";
    import vTextMedium from "./text/vTextMedium";
    import vTextShallow from "./text/vTextShallow";
    import vGameCards from "./gamecards/vGameCards";
    import vGameCard from "./gamecards/vGameCard";

    export default {
        name: "vUserCard",
        components: {
            vAvatarCircle48,
            vTextMedium, vTextShallow,
            vGameCards, vGameCard,
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
