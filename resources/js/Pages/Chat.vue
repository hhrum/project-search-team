<template>
    <div class="dialogs">
        <Header>
            <template v-slot:left>
                <BackArr></BackArr>
            </template>
            <template v-slot:right>
                <div class="header__content">
                    <div class="header__text">
                        <div class="header__title">Диалоги</div>
                        <div class="header__subtitle">Диалоги</div>
                    </div>
                    <Avatar36></Avatar36>
                </div>
            </template>
        </Header>

        <div class="content-chat">

            <div class="message__body"
                 v-for="message in messages"
                 :key="message.id"
                 :message="message"
            >
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
    export default {
        name: "Chat"
    }
</script>

<style scoped>

</style>
