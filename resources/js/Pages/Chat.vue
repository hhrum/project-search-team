<template>
    <div class="dialogs">
        <Header>
            <template v-slot:left>
                <back-arr />
            </template>

            <template v-slot:right>
                <div class="header__content">
                    <div class="header__text">
                        <div class="header__title">Диалоги</div>
                        <div class="header__subtitle">Диалоги</div>
                    </div>
                    <AvatarCircle36 />
                </div>
            </template>
        </Header>

        <div class="content-chat">
            <div class="message__body">
                <message :is-message-from-them="true" />
                <message />

            </div>

            <div class="message__input-form">
                <input class="message__input" type="text" placeholder="Введите текст">
                <button class="message__btn">
                    <message-dispatch-icon class="icon" />
                </button>
            </div>

        </div>

    </div>
</template>

<script>
    import Header from "../Components/Header";
    import BackArr from "../Components/BackArr";
    import AvatarCircle36 from "../Components/avatar/AvatarCircle36";
    import Message from "../Components/Message";

    export default {
        name: "Chat",
        components: {Header, Message, AvatarCircle36, BackArr}
    }
</script>

<style lang="scss">
    .content-chat {
        position: fixed;
        top: 75px;
        bottom: 0;

        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        overflow-y: auto;
        margin: 0 24px;
    }

    .message-header {
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

        &__subtitle {
            font-size: 12px;
            font-weight: 300;
            opacity: .5;
        }
    }

    .message {
        &__body {
            overflow-y: auto;
        }

        &__input-form {
            display: flex;
            justify-content: space-between;
            margin: 24px 0;
        }

        &__input {
            width: 100%;
            max-height: 40px;
            padding: 13.5px 16px;
            margin-right: 10px;

            font-size: 13px;
            font-weight: 300;

            background: #141523;
            border-radius: 16px;
        }

        &__btn {
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 40px;
            min-height: 40px;

            background-color: #282B3E;
            border-radius: 16px;

            .icon {
                fill: #fff;
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
