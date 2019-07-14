<template>
  <div class="product-details">
    <div class="row no-gutters">
      <div class="col-2">
      </div>
      <div class="col-9">
      </div>
      <div class="col-1">
        <div class="right-gutter">
          <img src="@/assets/img/patternside.png">
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapGetters } from 'vuex'
import { GET_PRODUCTS } from '@/store/types'

export default {
  name: 'ProductDetails',
  props: {

  },
  computed:{
    ...mapGetters({
      products: "getProducts"
    }),

    productGroupId: function(){
      return this.$route.params.productId
    },

    filteredProducts () {
      if(!this.products){return null}

      var productList = this.products.filter(product => {
        return product.productGroup == this.productGroupId
      })
      return productList
    }
  },
  async mounted(){
    await this.$store.dispatch(GET_PRODUCTS)
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">

  .right-gutter{
    min-height: calc(100vh - 160px);
    background-color: var(--beige-sidebar);
    overflow: hidden;
    position: relative;
  }

  .right-gutter>img{
    display: block;
    position: absolute;
    top: 50%;
    left: 50%;
    min-height: 100%;
    min-width: 100%;
    transform: translate(-50%, -50%);
  }

</style>