<template>
  <div class="product-details">
    Product Details of: {{productId}}
  </div>
</template>

<script>
export default {
  name: 'ProductDetails',
  props: {
  },
  date () {
    return{
      productId: this.$route.params.productId
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">

</style>