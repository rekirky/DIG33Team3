<template>
  <svg :style="styles" :viewBox="viewBox">
    <use :xlink:href="'#' + name"></use>
  </svg>
</template>

<script>
export default {
  props: {
    name: {
      type: String,
      default: ''
    }
  },

  data () {
    return {
      styles: 'height: 100%; width: 100%;',
      viewBox: '0 0 100 100'
    }
  }
}
</script>

<style scoped>
  svg {
    fill: currentColor;
  }
</style>