<template>
  <div class="product-details">
    <div class="row no-gutters">
      <div class="col-2">
        <div class="left-gutter">
          <img src="@/assets/img/fgCo.png">
        </div>
      </div>
      <div class="col-9">
        <div class="row no-gutter">
          <div class="product-group-header" :style="'background-color: ' + currentProductGroup.accentColor">
            <h1>{{currentProductGroup.name}}</h1>
            <hr>
            <p>{{currentProductGroup.tagLine}}</p>
          </div>
        </div>
        <div class="row  carousel-container">
          <div id="productSelector" class="carousel slide">
            <div v-if="this.filteredProducts.length != 0">
              <ol class="carousel-indicators">
                <div v-for="(product, index) in filteredProducts" :key="index">
                  <li v-if="index == 0" :id="'indicator-' + index" class="active" v-on:click="activeProduct(index)" :style="'background-color: ' + currentProductGroup.accentColor"></li>
                  <li v-else :id="'indicator-' + index" v-on:click="activeProduct(index)" :style="'background-color: ' + currentProductGroup.accentColor"></li>
                </div>
              </ol>


              <div class="carousel-inner">
                <div v-for="(product, index) in filteredProducts" :key="index">
                  <div v-if="index == 0" class="carousel-item active" :id="'item-' + index">
                    <div class="row">
                      <div class="col-4 offset-1">
                        <img  :src="require(`@/assets/img/products/${product.bottleGroupImage}`)" :alt="product.name" class="d-block">
                      </div>
                      <div class="col-5">
                        <div class="row">
                          <div class="" :style="'color: ' + currentProductGroup.accentColor">
                            <h3>{{product.name}}</h3>
                            <p>*100% naturally occuring fruit sugars</p>
                          </div>
                        </div>
                        <div class="row">
                          <img :src="require(`@/assets/img/products/${product.fruitGroupImage}`)" :alt="product.name" class="d-block">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div v-else class="carousel-item" :id="'item-' + index">
                    <div class="row">
                      <div class="col-4 offset-1">
                        <img  :src="require(`@/assets/img/products/${product.bottleGroupImage}`)" :alt="product.name" class="d-block">
                      </div>
                      <div class="col-5">
                        <div class="row">
                          <div class="" :style="'color: ' + currentProductGroup.accentColor">
                            <h3>{{product.name}}</h3>
                            <p>*100% naturally occuring fruit sugars</p>
                          </div>
                        </div>
                        <div class="row">
                          <img :src="require(`@/assets/img/products/${product.fruitGroupImage}`)" :alt="product.name" class="d-block">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="carousel-control-prev" role="button" :style="'color: ' + currentProductGroup.accentColor" v-on:click="prevProduct">
                <span class="fas fa-angle-left" aria-hidden="true" :style="'color: ' + currentProductGroup.accentColor" ></span>
                <span class="sr-only">Previous</span>
              </div>
              <div class="carousel-control-next" role="button" :style="'color: ' + currentProductGroup.accentColor" v-on:click="nextProduct">
                <span class="fas fa-angle-right" aria-hidden="true" :style="'color: ' + currentProductGroup.accentColor" ></span>
                <span class="sr-only">Next</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-1">
        <div class="right-gutter">
          <img src="@/assets/img/patternside.png">
          <div class="section-label">products</div>
        </div>
      </div>
    </div>
    <div class="row no-gutter">
      <div class="product-nutrition-container">
        <div v-for="(product, index) in filteredProducts" :key="index">
          <product-nutrition v-if="index == 0" v-bind:product="product" class="active" :id="'nutrition-' + index"/>
          <product-nutrition v-else v-bind:product="product" :id="'nutrition-' + index"/>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapGetters } from 'vuex'
import { GET_PRODUCTS } from '@/store/types'
import ProductNutrition from '@/components/ProductNutrition.vue'

export default {
  name: 'ProductDetails',
  components:{
    ProductNutrition
  },
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
      $(".product-nutrition").removeClass("active")
      $("#indicator-" + this.currentProductIndex).addClass("active")
      $("#item-" + this.currentProductIndex).addClass("active")
      $("#nutrition-" + this.currentProductIndex).addClass("active")
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
    padding: 10px 20%;
    height: 15vh;
  }

  .product-group-header h1{
    color: white;
  }

  .product-group-header hr{
    border: 1px solid white;

  }

  .carousel-container{
    height: calc(85vh - 160px);
    background-image: url('../assets/img/bgpattern2.png');    
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }

  .carousel{
    background-color: white;
    width: 60%;
    height: 80%;
    margin: auto;
  }

  .carousel{
    font-size: 2.5rem;
  }

  .carousel-item>.row{
    margin-top: 60px;
  }

  .carousel-item>div>div>.row{
    margin-top: 30px;
  }

  .carousel img{
    width: 100%;
  }

  .section-label{
    font-size: 1.5rem;
    text-transform: uppercase;
    position: absolute;
    bottom:0;
    left: 50%;
    transform: translate(-50%, -100%) rotate(90deg);
    padding-right: 100px;
  }

  .left-gutter{
    position: relative;
    height: 100%;
  }

  .left-gutter>img{
    display: block;
    position: absolute;
    bottom: 20px;
    left: 20px;
    height: 140px;
  }

  .product-nutrition-container{
    width: 100%;
    height: 100vh;
    background-image: url('../assets/img/bgpattern2.png');    
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    overflow: hidden;
    position: relative;
    margin: 0;
  }

  .product-nutrition-container>div{
    height: 100%;
    position: absolute;
    top: 0;
  }

  .product-nutrition .active{
    bottom: 0;
  }

</style>