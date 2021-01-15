<template>
  <div class="text"><slot></slot></div>
</template>

<script>
    export default {
        name: "textShallow",
    }
</script>

<style lang="scss" scoped>
  .text {
    font-size: 10px;
    font-weight: 300;
    opacity: .5;
  }
</style>
