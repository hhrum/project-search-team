<template>
  <div class="chats">
      <Title>Чаты</Title>

      <div class="chats-items">
          <chat-item :is-new-message="true">
              <template v-slot:name>Денис Кот</template>
              <template v-slot:message>Новое сообщение</template>
          </chat-item>
          <chat-item>
              <template v-slot:name>Мр. Макс 2002</template>
              <template v-slot:message>вы: Привет</template>
          </chat-item>
      </div>
  </div>
</template>

<script>
    import Title from "../text/Title";
    import ChatItem from "../chat/ChatItem";

    export default {
        name: "NotificationsChats",
        components: {
            Title, ChatItem,
        }
    }
</script>

<style lang="scss" scoped>
    .chats {
        margin-top: 32px;
        &-items {
            margin-top: 20px;
        }
    }
</style>
