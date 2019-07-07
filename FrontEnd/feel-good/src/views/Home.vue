<template>
  <div class="home">

    <div class="feel-container third-container" @mouseenter="bottomBarGrow" @mouseleave="bottomBarShrink">
      <div class="top-bar"></div>
      <div class="center-content">
        <div class="top-tag">100%</div>
        <div class="name-tag">FEEL</div>
        <div class="bottom-tag">THE BENEFITS</div>
      </div>
      <div class="bottom-bar"></div>
      <div class="bottle left-bottle">
        <img src="@/assets/img/bottles/Paper-Bottle_passion_499px.png">
      </div>
      <div class="bottle right-bottle">
        <img src="@/assets/img/bottles/Paper-Bottle_pom_499.png">
      </div>
    </div>

    <div class="natural-container third-container" @mouseenter="bottomBarGrow" @mouseleave="bottomBarShrink">
      <div class="top-bar"></div>
      <div class="center-content">
        <div class="top-tag">100%</div>
        <div class="name-tag">NATURAL</div>
        <div class="bottom-tag">FIND YOUR FLAVOUR</div>
      </div>
      <div class="bottom-bar"></div>
      <div class="bottle left-bottle">
        <img src="@/assets/img/bottles/Paper-Bottle_orange_499px.png">
      </div>
      <div class="bottle right-bottle">
        <img src="@/assets/img/bottles/Paper-Bottle_crnlime_499px.png">
      </div>
    </div>

    <div class="good-container third-container"  @mouseenter="bottomBarGrow" @mouseleave="bottomBarShrink">
      <div class="top-bar"></div>
      <div class="center-content">
        <div class="top-tag">100%</div>
        <div class="name-tag">GOOD</div>
        <div class="bottom-tag">MAKING A DIFFERENCE</div>
      </div>
      <div class="bottom-bar"></div>
      <div class="bottle left-bottle">
        <img src="@/assets/img/bottles/Paper-Bottle_apple_499px.png">
      </div>
      <div class="bottle right-bottle">
        <img src="@/assets/img/bottles/Paper-Bottle_lemonmy-499px.png">
      </div>
    </div>

  </div>
</template>

<script>

export default {
  name: 'home',
  components: {

  },
  mounted () {

  },
  methods: {
    bottomBarGrow(event){
      event.target.getElementsByClassName("bottom-bar")[0].classList.add("grow")
    },
    bottomBarShrink(event){
      event.target.getElementsByClassName("bottom-bar")[0].classList.remove("grow")
    }
  }
}


</script>


<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
  
  .home{
    position: relative;
    height: 105vh;
  }

  .top-bar{
    width: 100%;
    height: 1%;
  }

  .center-content{
    width: 100%;
    height: 20%;
    position: absolute;
    top: 30%;
  }

  .bottom-bar{
    width: 100%;
    height: 15%;
    position: absolute;
    bottom: 0;
    z-index: -1;
    transition: all ease-out .3s;
  }

  .bottom-bar.grow{
    height: 20%;
  }

  .bottle{
    position: absolute;
    bottom: -10%;
  }

  .bottle>img{
    height: 50vh;
  }

  .left-bottle{
    left: 30%;
    transform: rotate(-10deg)
  }

  .right-bottle{
    right: 30%;
    transform: rotate(10deg)
  }
  
  .feel-container{
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 33%;
  }

  .feel-container .top-bar, .feel-container .bottom-bar{
    background-color: var(--blue-secondary);
  }

  .natural-container{
    position: absolute;
    top: 0;
    left: 50%;
    height: 100%;
    width: 34%;
    transform: translate(-50%, 0);
  }

  .natural-container .top-bar, .natural-container .bottom-bar{
    background-color: var(--green-primary);
  }

  .good-container{
    position: absolute;
    top: 0;
    right: 0;
    height: 100%;
    width: 33%;
  }

  .good-container .top-bar, .good-container .bottom-bar{
    background-color: var(--orange-primary);
  }

  .top-tag{
    color: var(--orange-primary);
    font-family: 'Holtwood One SC', sans-serif;
    font-size: 6rem;
    line-height: 1;
  }

  .name-tag{
    color: var(--orange-primary);
    font-family: 'Open Sans', sans-serif;
    font-size: 5rem;
    font-weight: 700;
    line-height: 1;
    padding-bottom: 1rem;
  }

  .bottom-tag{
    color: var(--orange-secondary);
    font-family: 'Open Sans', sans-serif;
    font-size: 2.2rem;
    font-weight: 700;
  }


  .bottle>img:hover {
    animation: jiggle ease-in-out .7s;
    animation-iteration-count: 1;
  }

  @keyframes jiggle {
    0% { transform: rotate(0deg); }
    20% { transform: rotate(5deg); }
    40% { transform: rotate(-10deg); }
    60% { transform: rotate(10deg); }
    80% { transform: rotate(-10deg); }
    100% { transform: rotate(0deg); }
  }

</style>