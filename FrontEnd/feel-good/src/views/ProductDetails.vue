<template>
  <div class="product-details">
    <div class="row no-gutters">
      <div class="col-2">
      </div>
      <div class="col-9">
        <div class="row no-gutter">
          <div class="product-group-header" :style="'background-color: ' + currentProductGroup.accentColor">
            <h1>{{currentProductGroup.name}}</h1>
            <hr>
            <p>{{currentProductGroup.tagLine}}</p>
          </div>
        </div>
        <div class="row">
          <div id="productSelector" class="carousel slide">
            <div v-if="this.filteredProducts.length != 0">
              <ol class="carousel-indicators">
                <div v-for="(product, index) in filteredProducts" :key="index">
                  <li v-if="index == 0" :id="'indicator-' + index" class="active" v-on:click="activeProduct(index)"></li>
                  <li v-else :id="'indicator-' + index" v-on:click="activeProduct(index)"></li>
                </div>
              </ol>


              <div class="carousel-inner">
                <div v-for="(product, index) in filteredProducts" :key="index">
                  <div v-if="index == 0" class="carousel-item active" :id="'item-' + index">
                    <img :src="require(`@/assets/img/products/${product.bottleGroupImage}`)" :alt="product.name" class="d-block w-50">
                    <img :src="require(`@/assets/img/products/${product.fruitGroupImage}`)" :alt="product.name" class="d-block w-50">
                    <div class="carousel-caption">
                      <h3>{{product.name}}</h3>
                      <p>*100% naturally occuring fruit sugars</p>
                    </div>
                  </div>
                  <div v-else class="carousel-item" :id="'item-' + index">
                    <img  :src="require(`@/assets/img/products/${product.bottleGroupImage}`)" :alt="product.name" class="d-block w-50">
                    <img :src="require(`@/assets/img/products/${product.fruitGroupImage}`)" :alt="product.name" class="d-block w-50">
                    <div class="carousel-caption">
                      <h3>{{product.name}}</h3>
                      <p>*100% naturally occuring fruit sugars</p>
                    </div>
                  </div>
                </div>
              </div>

              <a class="carousel-control-prev" href="#productSelector" role="button" v-on:click="prevProduct">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#productSelector" role="button" v-on:click="nextProduct">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
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
  data () {
    return{
      currentProductIndex: 0
    }
  },
  computed:{
    ...mapGetters({
      products: "getProducts",
      productGroups: "getProductGroups"
    }),

    productGroupId (){
      return this.$route.params.productId
    },

    filteredProducts () {
      if(!this.products){return null}

      var productList = this.products.filter(product => {
        return product.productGroup == this.productGroupId
      })
      return productList
    },

    currentProductGroup () {
      if(!this.productGroups){return null}

      var productGroup = this.productGroups.filter(group => {
        return group.id == this.productGroupId
      })
      return productGroup[0]
    }
  },
  async mounted(){
    await this.$store.dispatch(GET_PRODUCTS)
    
  },
  methods: {
    nextProduct(){
      this.currentProductIndex++
      this.currentProductIndex = this.currentProductIndex % this.filteredProducts.length
      this.updateActiveProduct()
    },
    prevProduct(){
      this.currentProductIndex--
      if(this.currentProductIndex < 0){
        this.currentProductIndex = this.filteredProducts.length + this.currentProductIndex
      }
      else{
        this.currentProductIndex = this.currentProductIndex % this.filteredProducts.length
      }
      this.updateActiveProduct()
    },
    activeProduct(index){
      this.currentProductIndex = index
      this.updateActiveProduct()
    },
    updateActiveProduct(){
      $(".carousel-indicators li").removeClass("active")
      $(".carousel-inner .carousel-item").removeClass("active")
      $("#indicator-" + this.currentProductIndex).addClass("active")
      $("#item-" + this.currentProductIndex).addClass("active")
    }
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

  .product-group-header{
    width: 100%;
    padding: 0px 20%;
  }

  .product-group-header h1{
    color: white
  }

  .product-group-header hr{
    border: 1px solid white

  }

</style>