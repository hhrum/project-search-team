<template>
  <div class="chats">
      <header class="header">
          <div class="header__title">Диалоги</div>
          <div class="header__avatar"></div>
      </header>

      <div class="chats__items">
          <inertia-link href="/chat" method="get">
              <chat-item :is-new-message="true" />
          </inertia-link>

          <chat-item />
          <chat-item :is-new-message="true" />
          <chat-item />
          <chat-item />
          <chat-item />
          <chat-item />


      </div>


  </div>
</template>

<script>
    import ChatItem from "../Components/chat/ChatItem";

    export default {
        name: "Chats",
        components: {
            ChatItem,
        }
    }
</script>

<style lang="scss" scoped>
    .header {
        display: flex;
        justify-content: space-between;
        margin: 30px 0 50px;

        &__title {
            font-size: 24px;
        }

        &__avatar {
            width: 36px;
            height: 36px;

            background: #c4c4c4;
            border-radius: 100%;
        }
    }

    .chats {
        margin: 0 16px;
        &__items {

        }
    }
</style>
