<template>
  <div class="product-nutrition-mobile" :style="'background-color: ' + product.color">
    <div class="row no-gutters">
      <div class="col-12">
        <div class="nutrition-content">
          <div class="row no-gutters bottle-container">
            <div class="product-name">
              <h3>{{product.name}}</h3>
              <p>*100% naturally occurring fruit sugars</p>
            </div>

            <!-- Bottle Information -->
            <div class="info bottle-info" :style="'background-color: ' + product.color">
              <h5>Our New Bottle</h5>
              <div>Paper bottle designed for strength</div>
              <div>80% compostable</div>
              <div>Composition: wheat, straw, bamboo, husks, sugar cane, and/or bulrush. </div>
            </div>

            <!-- Hero Bottle Image -->
            <div class="hero-bottle">
              <img :src="require(`@/assets/img/products/${product.bottleHeroImage}`)" :alt="product.name" class="d-block">
            </div>
          </div>
          <div class="row no-gutters bottle-container">

            <!-- Fruit Descriptiona-->
            <div class="info fruit-info" :style="'background-color: ' + product.color">
              <h5>Nutritious Fruit</h5>
              <div class="marker fruit-1-marker">
                <div class="circle-text">{{product.fruit1Description}}</div>
              </div>

              <div class="marker fruit-2-marker">
                <div class="circle-text">{{product.fruit2Description}}</div>
              </div>
            </div>
            <!-- Fruit Images -->
            <div class="fruit fruit-1">
              <img :src="require(`@/assets/img/products/${product.fruit1Image}`)" :alt="product.name" class="d-block">
            </div>

            <div class="fruit fruit-2">
              <img :src="require(`@/assets/img/products/${product.fruit2Image}`)" :alt="product.name" class="d-block">
            </div>

            <!-- Water Droplets -->
            <div class="water-drop-container natural-sugar">
              <div class="water-drop-text">
                  *100% naturally occurring fruit sugars
              </div>
              <div class="water-drop">
              </div>
            </div>

            <div class="water-drop-container energy">
              <div class="water-drop-text">
                Energy {{product.energy}}
              </div>
              <div class="water-drop">
              </div>
            </div>

            <div class="water-drop-container carbs">
              <div class="water-drop-text">
                  Carbohydrates {{product.carbs}}
              </div>
              <div class="water-drop">
              </div>
            </div>

            <div class="water-drop-container fat">
              <div class="water-drop-text">
                  Fat {{product.fat}}
              </div>
              <div class="water-drop">
              </div>
            </div>

            <div class="water-drop-container protein">
              <div class="water-drop-text">
                  Protein {{product.protein}}<br> Salt<br> {{product.salt}}
              </div>
              <div class="water-drop">
              </div>
            </div>

            <div class="ingredients" :style="'background-color: ' + product.color">
              <h5>Ingredients</h5>
              <p>{{product.ingredients}}</p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>

export default {
  name: 'ProductNutritionMobile',
  props: { 
    product: Object
  }
}
</script>


<style lang="scss" scoped>

  .product-nutrition-mobile{
    width: 100%;
    height: 250vh;
    position: absolute;
    top: 120%;
    transition: all ease-out 1s;
  }

  .product-nutrition-mobile.active{
    top: 0;
  }

  .nutrition-content{
    position: relative;
  }

  .water-drop-container{
    position: absolute;
    width: 160px;
    height: 160px;
    max-width: 30vw;
    max-height: 30vw;
  }

  .water-drop{
    position: absolute;
    min-width: 100%;
    min-height: 100%;
    background-color: white;
    border-radius: 50%;
    border-top-left-radius: 0;
    transform: rotate(45deg);
    box-shadow: 0px 5px 20px rgba(0,0,0,0.3);
  }

  .water-drop-text{
    padding: 0px 15px;
    width: 100%;
    position: absolute;
    font-weight: 700;
    color: black;
    top: 15%;
    left: 0;
    z-index: 1;
  }

  .natural-sugar{
    top: 160vh;
    left: 20%;
    font-size: calc(7px + 1vw);
  }

  .energy{
    top: 140vh;
    left: 5%;
    font-size: calc(12px + 1vw);
  }

  .carbs{
    width: 180px;
    height: 180px;
    max-width: 30vw;
    max-height: 30vw;
    bottom: 22vw;
    left: 40%;
    font-size: calc(8px + 1vw);
    transform: translate(-50%,0)
  }

  .carbs .water-drop-text{
    top: 25%;
  }

  .fat{
    top: 165vh;
    left: 55%;
    font-size: calc(9px + 1vw);
  }

  .protein{
    top: 135vh;
    left: 65%;
    font-size: calc(9px + 1vw);
  }

  .protein .water-drop-text{
    top: 25%;
  }

  h3, h5, p{
    color: white;
  }

  h3, h5{
    font-size: 4vw !important;
  }

  .product-name{
    width: 50%;
    padding: 20px 20px;
    text-align: left;
  }

  .hero-bottle{
    position: absolute;
    top: -8vh;
    left: 20%;
    transform: rotate(25deg);
  }

  .hero-bottle img{
    height: 130vh;
  }

  .fruit img{
    width: 70vw;
    max-width: 500px;
  }

  .fruit-1{
    position: absolute;
    top: 75%;
    right: 45%;
  }

  .fruit-2{
    position: absolute;
    top: 60%;
    left: 45%;
  }

  .ingredients{
    position: absolute;
    left: 0;
    bottom: 0;
    padding: 2vw 5vw;
    width: 100%;
    text-align: center;
    opacity: 0.9; 
    box-shadow: 0px 0px 20px RGBA(0,0,0,0.2);
  }

  .ingredients>p{
    font-size: 2vw !important;
    font-weight: 700;
  }

  .info{
    z-index: 2;
    width: 100vw;
    position: absolute;
    padding: 0 5vw;
    color: white;
    opacity: 0.9; 
    box-shadow: 0px 0px 20px RGBA(0,0,0,0.2);
    min-height: 20vh;
  }

  .info>div{
    padding: 5px;
    font-size: calc(8px + 2vw);
  }

  .info>h5{
    padding-top: 10px;
  }

  .bottle-info{
    top: 40vh;
  }

  .fruit-info{
    top: 100vh;
  }

  .bottle-container{
    height: 110vh;
  }

</style>