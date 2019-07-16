<template>
  <div class="product-nutrition" :style="'background-color: ' + product.color">
    <div class="row no-gutters">
      <div class="col-2">
      </div>
      <div class="col-9">
        <div class="nutrition-content">

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

</style>