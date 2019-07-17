<template>
  <div class="products">
    <div class="row no-gutters">
      <div class="col-2">
        <div class="left-gutter">
        </div>
      </div>
      <div class="col-9 center-content">
        <div class="logo down-move">
          <img src="@/assets/img/greenlogo_1.png">
        </div>
        <div class="fruits-bottles up-move">
          <div class="left-fruit">
            <img src="@/assets/img/fruit/fruit1.png">
          </div>
          <div class="bottle-group">
            <img src="@/assets/img/bottles/group_bottles.png">
          </div>
          <div class="right-fruit">
            <img src="@/assets/img/fruit/fruit2.png">
          </div>
        </div>
        <div class="natural-text up-move">
          100% NATURAL
        </div>
        <div class="hero-bottle up-move">
          <img src="@/assets/img/bottles/orangebottle_big.png">
          <router-link to="/product/1">
          <div class="plus-button">
            <div class="circle">
              <span class="bar"></span>
              <span class="bar bar-vertical"></span>
            </div>
          </div>
          </router-link>
        </div>
        <div class="hero-bottle up-move">
          <img src="@/assets/img/bottles/pinkbottle_big.png">
          <router-link to="/product/2">
          <div class="plus-button">
            <div class="circle">
              <span class="bar"></span>
              <span class="bar bar-vertical"></span>
            </div>
          </div>
          </router-link>
        </div>
      </div>
      <div class="col-1">
        <div class="right-gutter">
          <img src="@/assets/img/patternside.png">
          <div class="section-label">products</div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Products',
  components: {

  },
  mounted () {

    setTimeout( function(){
    var upElements = document.getElementsByClassName("up-move")
      while(upElements.length > 0){
        upElements[0].classList.remove('up-move');
    }

    var downElements = document.getElementsByClassName("down-move")
      while(downElements.length > 0){
        downElements[0].classList.remove('down-move');
    }
    }, 100);

  },
  methods: {
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

  .section-label{
    font-size: 1.5rem;
    text-transform: uppercase;
    position: absolute;
    bottom:0;
    left: 50%;
    transform: translate(-50%, -100%) rotate(90deg);
    padding-right: 100px;
  }

  .hero-bottle{
    height: 100%;
    max-width: 300px;
    float: right;
    position: relative;
    z-index: 2;
    transition: all ease-out 1s;
  }

  .hero-bottle>img{
    height: 100%;
    object-fit: contain;
  }

  .plus-button{
    background-color: white;
    border: 2px solid var(--green-primary);
    display: inline-block;
    border-radius: 500px;
    position: absolute;
    padding: 1rem;
    cursor: pointer;
    z-index: 6;
    bottom: 5%;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  .plus-button:hover{
    background-color:  var(--green-primary);
    border: 2px solid white;
  }

  .circle{
    width: 3rem;
    height: 3rem;
    position: relative;
  }

  .bar{
    position: absolute;
    left: 0;
    height: 0.3rem;
    width: 100%;
    background-color: var(--green-primary);
    border-radius: 2px;
    transition: all cubic-bezier(0.26, 0.1, 0.27, 1.5) 0.35s;
    top: 48%;
  }

  .plus-button:hover .bar{
    background-color: white;
  }

  .bar-vertical{
    transform: rotate(90deg);
  }

  .logo{
    position: absolute;
    top: 0px;
    left: 0%;
    width: 70%;
    transition: all ease-out 1s;
  }

  .fruits-bottles{
    position: absolute;
    width: 70%;
    max-height: 40vh;
    top: 50%;
    transition: all ease-out 1s;
  }

  .left-fruit{
    position: absolute;
    bottom: 0px;
    left: 0px;
    width: 50%;
    height: 100%;
  }

  .bottle-group{
    position: absolute;
    bottom: 100px;
    left: 25%;
    width: 50%;
    height: 100%;
    z-index: 1;
  }

  .right-fruit{
    position: absolute;
    bottom: 0px;
    right: 0px;
    width: 50%;
    height: 100%;    
  }

  .fruits-bottles img{
  }

  .natural-text{
    position: absolute;
    color: var(--green-primary);
    font-size: 4rem;
    font-weight:700;
    padding: 1rem;
    bottom: 0px;
    width: 70%;
    transition: all ease-out 1s;
  }

  .up-move{
    transform: translate(0%, 100vh);
  }

  .down-move{
    transform: translate(0%, -100vh);
  }

  .center-content{
    overflow: hidden;
  }

</style>
