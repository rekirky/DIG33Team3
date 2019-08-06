<template>
  <div class="products">
    <div class="row no-gutters">
      <div class="col-2 hidden-mobile">
        <div class="left-gutter">
        </div>
      </div>

      <!-- Top bar with title that only renders on mobile -->
      <div class="col-12 col-xl-9 center-content">
        <div class="row no-gutters">
          <div class="col-12 top-bar"></div>
          <div class="col-2"></div>
          <div class="col-8 mobile-title">THE FEEL GOOD DRINK CO</div>
          <div class="col-2 mobile-logo"><img src="@/assets/img/FGD_Logo_full.png"></div>
        </div>
        <!-- Logo that moves down into view when the page loads -->
        <div class="logo down-move">
          <img src="@/assets/img/greenlogo_1.png">
        </div>

        <!-- Bottles and Text moves up into view when the page loads -->
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
        <div class="hero-bottle-group">
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
            <div class="product-group-label">A BIT BUBBLY</div>
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
            <div class="product-group-label">REFRESHINGLY STILL</div>
          </div>
        </div>
      </div>
      <div class="col-1 hidden-mobile">
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
  mounted () {

    //Slide in Animation
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

  }
}
</script>

<style scoped lang="scss">

  .center-content{
    min-height: calc(100vh - 160px);
  }

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

  .hero-bottle-group{
    height: 100%;
    max-height: calc(100vh - 160px);
  }

  .hero-bottle{
    height: 100%;
    max-height: calc(100vh - 160px);
    width: 15vw;
    float: right;
    position: relative;
    z-index: 2;
    transition: all ease-out 1s;
  }

  .hero-bottle>img{
    max-height: 100%;
    max-width: 15vw;
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translate(-50%, 0%);
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

  .left-fruit>img{
    width: 20vw;
  }

  .bottle-group{
    position: absolute;
    bottom: 5.5vw;
    left: 25%;
    width: 50%;
    height: 100%;
    z-index: 1;
  }

  .bottle-group>img{
    width: 20vw;
  }

  .right-fruit{
    position: absolute;
    bottom: 0px;
    right: 0px;
    max-width: 20vw;
    height: 100%;    
  }

  .right-fruit>img{
    width: 20vw;
  }

  .natural-text{
    position: absolute;
    color: var(--green-primary);
    font-size: 3.5vw;
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

  .mobile-title, .mobile-logo>img, .product-group-label{
    display: none;
  }

  @media only screen and (max-width: 1200px) {
    
    .hidden-mobile, .logo{
      display: none;
    }

    .center-content{
      width: 100vw;
      overflow: hidden;
    }

    .left-fruit{
      top: 15vw;
      left: -15%;
    }

    .left-fruit>img{
      width: 60vw;
    }

    .bottle-group{
      position: absolute;
      bottom: none;
      left: 15vw;
      width: 50%;
      height: 100%;
      z-index: 1;
    }

    .bottle-group>img{
      width: 70vw;
    }

    .right-fruit{
      top: 15vw;
      right: 15%;   
    }

    .right-fruit>img{
      width: 60vw;
    }

    .mobile-title{
      font-size: 4.5vw;
      font-weight: 700;
      padding-top: 2.5rem;
      color: var(--orange-primary);
      display: block;
    }

    .mobile-logo>img{
      margin-top: 1rem;
      margin-right: 1rem;
      max-width: 125px;
      width: 15vw;
      display: inline;
    }

    .top-bar{
      height: 10px;
      background-color: var(--orange-secondary);
    }

    .fruits-bottles{
      position: relative;
      width: 100%;
      max-height: none;
      height: 60vw;
      top: 0;
    }

    .natural-text{
      position: relative;
      font-size: 10vw;
      top: 0;
      width: 100%;
      transition: all ease-out 1s;
    }

    .hero-bottle-group{
      position: relative;
      width: 100%;
      height: 70vw;
      overflow: hidden;
      background: var(--green-primary);
    }

    .hero-bottle{
      height: 100%;
      width: 50vw;
    }

    .hero-bottle>img{
      max-height: none;
      max-width: none;
      width: 40vw;
      bottom: 10vw;
    }

    .plus-button{
      border-width: 0.5vw;
      bottom: 15vw;
    }

    .circle{
      width: 8vw;
      height: 8vw;
    }

    .bar{
      height: 0.5vw;
    }

    .product-group-label{
      display: block;
      font-size: 4vw;
      color: white;
      width: 100%;
      position: absolute;
      bottom: 5vw;
      left: 50%;
      transform: translate(-50%, 0%);
    }

  }

</style>
