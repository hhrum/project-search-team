<template>
  <div class="want-to-play-item">
      <div class="want-to-play-item__avatar"></div>

      <div class="want-to-play-item__info">
          <div class="want-to-play-item__name"><slot name="name">Пользователь</slot></div>
          <div class="want-to-play-item__status"><text-shallow><slot name="status">Статус пользователя</slot></text-shallow></div>
          <div class="want-to-play-item__games">
              <slot name="games"></slot>
          </div>
      </div>
  </div>
</template>

<script>
    import TextShallow from "../text/TextShallow";

    export default {
        name: "NotificationWantToPlay",
        components: {
            TextShallow,
        }
    }
</script>

<style lang="scss" scoped>
    .want-to-play-item {
        display: flex;
        margin-bottom: 10px;

        line-height: 1;

        background: #282B3E;
        border-radius: 20px;
        box-shadow: 0 4px 30px 0 rgba(0, 0, 0, .5);

        &__avatar {
            width: 80px;
            height: 80px;

            background: #c4c4c4;
            border-bottom-left-radius: 20px; border-top-left-radius: 20px;
        }

        &__info {
            margin: 11px 12px;
        }

        &__name {
            margin-bottom: 2px;
            font-size: 16px;
            font-weight: 400;
        }

        &__status {
            margin-bottom: 8px;
        }
    }

</style>
