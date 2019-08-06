<template>
  <div class="product-nutrition" :style="'background-color: ' + product.color">
    <div class="row no-gutters">
      <div class="col-11">
        <div class="nutrition-content">
          <div class="product-name">
            <h3>{{product.name}}</h3>
            <p>*100% naturally occurring fruit sugars</p>
          </div>

          <!-- Fruit Descriptiona-->
          <div class="marker fruit-1-marker">
            <div class="circle-surround">
              <div class="circle"></div>
              <div class="circle-line right">
                <div class="circle-text">{{product.fruit1Description}}</div>
              </div>
            </div>
          </div>

          <div class="marker fruit-2-marker">
            <div class="circle-surround">
              <div class="circle"></div>
              <div class="circle-line right">
                <div class="circle-text">{{product.fruit2Description}}</div>
              </div>
            </div>
          </div>


          <!-- Bottle Information -->
          <div class="marker bottle-top-marker">
            <div class="circle-surround">
              <div class="circle"></div>
              <div class="circle-line left">
                <div class="circle-text">Paper bottle designed for strength</div>
              </div>
            </div>
          </div>

          <div class="marker bottle-mid-marker">
            <div class="circle-surround">
              <div class="circle"></div>
              <div class="circle-line right">
                <div class="circle-text">80% compostable</div>
              </div>
            </div>
          </div>

          <div class="marker bottle-bottom-marker">
            <div class="circle-surround">
              <div class="circle"></div>
              <div class="circle-line left">
                <div class="circle-text">Composition: wheat, straw, bamboo, husks, sugar cane, and/or bulrush. </div>
              </div>
            </div>
          </div>

          <!-- Hero Bottle Image -->
          <div class="hero-bottle">
            <img :src="require(`@/assets/img/products/${product.bottleHeroImage}`)" :alt="product.name" class="d-block">
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

          <div class="ingredients">
            <h5>Ingredients</h5>
            <p>{{product.ingredients}}</p>
          </div>


        </div>
      </div>
      <div class="col-1">
        <div class="right-gutter">
          <img src="@/assets/img/patternside.png">
          <div class="section-label">nutrition</div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>

export default {
  name: 'ProductNutrition',
  props: { 
    product: Object
  }
}
</script>


<style lang="scss" scoped>

  .product-nutrition{
    width: 100%;
    height: 100vh;
    position: absolute;
    top: 120%;
    transition: all ease-out 1s;
  }

  .product-nutrition.active{
    top: 0;
  }

  .nutrition-content{
    position: relative;
    height: 100vh;
  }

  .section-label{
    font-size: 3.5rem;
    color: white;
    text-transform: uppercase;
    position: absolute;
    bottom: 5%;
    left: 50%;
    transform: translate(-50%, -100%) rotate(90deg);
    padding-right: 100px;
  }

  .right-gutter{
    min-height: 100vh;
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

  .water-drop-container{
    position: absolute;
    width: 120px;
    height: 120px;
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
    top: 12%;
    left: 0;
    z-index: 1;
  }

  .natural-sugar{
    top: 20%;
    left: 45%;
    font-size: .9rem;
  }

  .energy{
    top: 50%;
    left: 50%;
    font-size: 1rem;
  }

  .carbs{
    width: 150px;
    height: 150px;
    top: 70%;
    left: 65%;
    font-size: 1rem;
  }

  .carbs .water-drop-text{
    top: 25%;
  }

  .fat{
    top: 50%;
    left: 80%;
    font-size: 1rem;
  }

  .protein{
    top: 40%;
    left: 90%;
    font-size: 1rem;
  }

  h3, h5, p{
    color: white;
  }

  h3, h5{
    font-size: 1.5vw !important;
  }

  .product-name{
    width: 30%;
    padding: 50px 80px;
    text-align: left;
  }

  .hero-bottle{
    position: absolute;
    top: -9vw;
    left: 10vw;
    transform: rotate(25deg);
  }

  .hero-bottle img{
    max-height: 130vh;
    max-width: 30vw;
  }

  .fruit img{
    width: 300px;
    max-width: 20vw;
  }

  .fruit-1{
    position: absolute;
    top: 35%;
    left: 62%;
  }

  .fruit-2{
    position: absolute;
    top: 10%;
    left: 80%;
  }

  .circle{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    height: 25px;
    width: 25px;
    border-radius: 50%;
    background-color: white;
  }

  .circle-surround{
    position: relative;
    height: 50px;
    width: 50px;
    border-radius: 50%;
    border: 4px solid white;
  }

  .circle-line{
    position: absolute;
    top: 50%;
    transform: translate(0, -50%);
    min-width: 210px;
    width: 10w;
    height: 5px;
    background-color: white;
  }

  .left{
    left: 50%;
  }

  .right{
    right: 50%;
  }

  .circle-text{
    position: absolute;
    width: 200px;
    padding: 15px;
    font-size: .8rem;
    font-weight: 700;
    color: white;
    bottom: 0;
    transform: translate(-50%, 0);
  }

  .right>.circle-text{
    left: 30%;
  }

  .left>.circle-text{
    left: 70%;
  }

  .marker{
    position: absolute;
    z-index: 1;
  }

  .fruit-1-marker{
    top: 43%;
    left: 63%;
  }

  .fruit-2-marker{
    top: 25%;
    left: 80%;
  }

  .bottle-top-marker{
    top: 10%;
    left: calc(300px + 13vw);
  }

  .bottle-mid-marker{
    top: 40%;
    left: 15vw;
  }

  .bottle-bottom-marker{
    top: 83%;
    left: 19%;
  }

  .ingredients{
    position: absolute;
    right: 0;
    bottom: 0;
    margin: 0px 40px 40px 0px;
    width: 13vw;
    height: 15vw;
    text-align: left;
  }

  .ingredients>p{
    font-size: 1vw !important;
    font-weight: 700;
  }

</style>