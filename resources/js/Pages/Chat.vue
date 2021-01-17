<template>
    <div class="chat">
        <div class="chat-head">
            <back-arr />

            <div class="chat-head__content">
                <div class="chat-head__text">
                    <div class="chat-head__title">Диалоги</div>
                    <text-small>Диалоги</text-small>
                </div>
                <avatar-circle36 />
            </div>
        </div>

        <div class="content-chat">
            <div class="message__body">
                <message :is-message-from-them="true" />
                <message />
                <message />
                <message />
                <message />
                <message :is-message-from-them="true" />
                <message :is-message-from-them="true" />
                <message :is-message-from-them="true" />
                <message />
                <message />
                <message :is-message-from-them="true" />
                <message :is-message-from-them="true" />
                <message :is-message-from-them="true" />

            </div>

            <div class="message__input-form">
                <input class="message__input" type="text" placeholder="Введите текст">
                <button class="message__btn">
                    <div class="icon"><svg-vue icon="message-dispatch-icon"></svg-vue></div>
                </button>
            </div>

        </div>

    </div>
</template>

<script>
    import BackArr from "../Components/BackArr";
    import AvatarCircle36 from "../Components/avatar/AvatarCircle36";
    import Message from "../Components/Message";
    import TextSmall from "../Components/text/TextSmall";

    export default {
        name: "Chat",
        components: {
            TextSmall, Message, AvatarCircle36, BackArr
        }
    }
</script>

<style lang="scss" scoped>
    .content-chat {
        max-width: 100%;
        position: fixed;
        top: 75px;
        right: 0;
        left: 0;
        bottom: 0;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        margin: 0 24px;

    }

    .chat-head {
        display: flex;
        justify-content: space-between;
        margin: 24px 24px 0;

        &__content {
            display: flex;
        }

        &__text {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            margin-right: 8px;
        }

        &__title {
            font-size: 14px;
            font-weight: 400;
        }
    }

    .message {
        &__body {
            overflow-y: auto;
            &::-webkit-scrollbar {
                width: 0;
            }
        }

        &__input-form {
            display: flex;
            justify-content: space-between;
            width: 100%;
            margin: 24px 0;
        }

        &__input {
            width: 90%;
            max-height: 40px;
            padding: 13.5px 16px;
            margin-right: 10px;

            font-size: 13px;
            font-weight: 300;

            background: #282B3E;
            border-radius: 16px;
        }

        &__btn {
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 40px;
            min-height: 40px;

            background: #282B3E;
            border-radius: 16px;

            .icon {
                width: 18px;
                height: 20px;

                transition: fill .1s linear;
            }

            &:active .icon{
                fill: #7B61FF;
            }
        }
    }
</style>
