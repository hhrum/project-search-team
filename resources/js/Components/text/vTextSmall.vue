<template>
  <div class="text"><slot></slot></div>
</template>

<script>
    export default {
        name: "vTextSmall",
    }
</script>

<style lang="scss" scoped>
  .text {
    font-size: 12px;
    font-weight: 300;
    opacity: .5;
  }
</style>
