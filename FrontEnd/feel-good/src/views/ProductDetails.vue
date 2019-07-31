<template>
  <div class="product-details">
    <div class="row no-gutters">
      <div class="col-2">
        <div class="left-gutter">
          <img src="@/assets/img/fgCo.png">
        </div>
      </div>
      <div class="col-9">
        <div class="row no-gutters">
          <!-- Product Group header -->
          <div class="product-group-header" :style="'background-color: ' + currentProductGroup.accentColor">
            <h1>{{currentProductGroup.name}}</h1>
            <hr>
            <p>{{currentProductGroup.tagLine}}</p>
          </div>
        </div>
        <!-- Product Carousel  -->
        <div class="row no-gutters carousel-container">
          <div id="productSelector" class="carousel">
            <div v-if="this.filteredProducts.length != 0">
              <ol class="carousel-indicators">
                <!-- Carousel Indicators generated from the number of events in the array. -->
                <div v-for="(product, index) in filteredProducts" :key="index" class="col-4">
                  <li v-if="index == 0" :id="'indicator-' + index" class="indicator active" v-on:click="activeProduct(index)" :style="'background-color: ' + currentProductGroup.accentColor"></li>
                  <li v-else :id="'indicator-' + index" class="indicator" v-on:click="activeProduct(index)" :style="'background-color: ' + currentProductGroup.accentColor "></li>
                </div>
              </ol>


              <div class="carousel-inner">
                <!-- Carousel Product content generated from the number of events in the array. -->
                <div class="row no-gutters">
                  <div v-for="(product, index) in filteredProducts" :key="index" class="col-4">
                    <div v-if="index == 0" class="product-select active" :id="'item-' + index" v-on:click="activeProduct(index)">
                      <div class="row">
                          <img  :src="require(`@/assets/img/products/${product.bottleGroupImage}`)" :alt="product.name" class="d-block">
                      </div>
                      <div class="row">
                        <div class="" :style="'color: ' + currentProductGroup.accentColor">
                          <h3>{{product.name}}</h3>
                        </div>
                      </div>
                    </div>
                    <div v-else class="product-select" :id="'item-' + index" v-on:click="activeProduct(index)">
                      <div class="row">
                          <img  :src="require(`@/assets/img/products/${product.bottleGroupImage}`)" :alt="product.name" class="d-block">
                      </div>
                      <div class="row">
                        <div class="" :style="'color: ' + currentProductGroup.accentColor">
                          <h3>{{product.name}}</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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
    <div class="row no-gutters">
      <div class="product-nutrition-container">
        <!-- Generate product nutrition for each product in the array. -->
        <div v-for="(product, index) in filteredProducts" :key="index">
          <product-nutrition v-if="index == 0" v-bind:product="product" class="active" :id="'nutrition-' + index"/>
          <product-nutrition v-else v-bind:product="product" :id="'nutrition-' + index"/>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
//Import for vuex local storage
import { mapGetters } from 'vuex'
//Import of types to be accessed via despatches
import { GET_PRODUCTS } from '@/store/types'
//Import of components
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

    //Returns only the products that are in that product group
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
    //Switch to the next product in the array
    nextProduct(){
      this.currentProductIndex++
      this.currentProductIndex = this.currentProductIndex % this.filteredProducts.length
      this.updateActiveProduct()
    },

    //Switch to the previous product in the array
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

    //Assign the product to be displayed based on the
    activeProduct(index){
      this.currentProductIndex = index
      this.updateActiveProduct()
    },

    //Updates the page to show the active product
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
    transition: all ease-out 1s;
  }

  .product-group-header h1{
    color: white;
  }

  .product-group-header hr{
    border: 1px solid white;
    margin: 0; 
  }

  .carousel-indicators{
    margin: 20px 0px;
  }

  .indicator{
    margin: auto;
    height: 30px;
    width: 30px;
    border-radius: 50%;
  }

  .carousel-inner{
    position: absolute;
    top: 50%;
    transform: translate( 0, -50%);
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
    width: 80%;
    height: 80%;
    margin: auto;
  }

  .carousel h3{
    font-size: 1vw;
  }

  .product-select{
    padding: 20px;
  }

  .product-select:hover h3{
    text-shadow: 0px 2px 20px rgba(50,50,50,0.5);
  }

  .carousel img{
    max-width: 70%;
    max-height: 50%;
    margin: auto;
    transition: all cubic-bezier(0.26, 0.1, 0.27, 1.5) 0.35s;
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
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
  }

  .product-nutrition .active{
    bottom: 0;
  }

</style>