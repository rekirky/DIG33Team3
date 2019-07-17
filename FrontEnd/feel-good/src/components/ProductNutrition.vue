<template>
  <div class="product-nutrition" :style="'background-color: ' + product.color">
    <div class="row no-gutters">
      <div class="col-11">
        <div class="nutrition-content">



          <div class="water-drop-container natural-sugar">
            <div class="water-drop-text">
                *100% naturally occuring fruit sugars
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
  },
  computed: {
  },
  async mounted () {
  },
  methods: {
  }
}
</script>


<style lang="scss" scoped>

  .product-nutrition{
    width: 100%;
    height: 100vh;
    position: absolute;
    top: 100%;
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
    top: 20%;
    left: 45%;
    font-size: .8rem;
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
    font-size: 1.1rem;
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


</style>