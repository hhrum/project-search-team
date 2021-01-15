<template>
  <div class="title"><slot></slot></div>
</template>

<script>
    export default {
        name: "title",
    }
</script>

<style lang="scss" scoped>
  .title {
    font-size: 18px;
  }
</style>
