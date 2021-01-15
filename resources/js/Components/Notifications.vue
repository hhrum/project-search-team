<template>
  <div class="notifications">
      <notifications-want-to-play />
      <notifications-chats />

  </div>
</template>

<script>
    import NotificationsWantToPlay from "./NotificationsWantToPlay";
    import NotificationsChats from "./NotificationsChats";

    export default {
        name: "Notifications",
        components: {
            NotificationsChats,
            NotificationsWantToPlay,
        }
    }
</script>

<style lang="scss" scoped>
    .notifications {
        margin: 40px 0;
    }
</style>
