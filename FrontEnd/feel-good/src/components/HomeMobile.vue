<template>

  <!-- Top bar, heading and logo -->
  <div class="home-mobile">
    <div class="row no-gutters">
      <div class="col-12 top-bar"></div>
      <div class="col-2"></div>
      <div class="col-8 title">THE FEEL GOOD DRINK CO</div>
      <div class="col-2 logo"><img src="@/assets/img/FGD_Logo_full.png"></div>
    </div>

    <!-- Feel section -->
    <div class="row no-gutters">
      <div class="col-12 percent-title">
        100%<br>
        <span>FEEL</span>
      </div>
    </div>
    <div class="row no-gutters">
      <div class="col-12 spacer-bar bg-blue">
        the benefits
      </div>
    </div>
    <div class="row no-gutters">
      <div class="feature-img">
        <img src="@/assets/img/baby-beautiful.png">
      </div>
    </div>
    <div class="row no-gutters bg-light-blue">
      <div class="col-12 feature-title">
        We want you to feel the benefits of a healthy lifestyle and clean environment.
      </div>
      <div class="col-12 feature-text">
        Feel Good drinks are 100% proud of our products—we aim to provide women with alternatives for a healthier lifestyle, feeling good, drinking well, and a clean plastic-free environment. The short and long term benefits of maintaining a healthy lifestyle are reduced risk of disease, cancer diabetes, cardiovascular disease, osteoporosis, and obesity. Our company's goal is to provide a healthy alternative to women who lead a busy lifestyle and encourage women from all walks of life to get together for a positive future for generations. We would love to hear from you and share the benefits.
      </div>
      <div class="col-12 feature-button">
        <router-link to="products" tag="button">The Benefits</router-link>
      </div>
    </div>

    <!-- Natural section -->
    <div class="row no-gutters">
      <div class="col-12 percent-title">
        100%<br>
        <span>NATURAL</span>
      </div>
    </div>
    <div class="row no-gutters bg-green">
      <div class="col-12 spacer-bar bg-green">
        find your flavour
      </div>
      <div class="natural-slim-text">Our juices are made of the freshest fruit and berries, no added sugar
      <span class="natural-bold-text">100%</span> natural ingredients.</div>
      <div class="col-12 feature-button">
        <router-link to="products" tag="button">find your flavour</router-link>
      </div>
    </div>

    <!-- Good Section -->
    <div class="row no-gutters">
      <div class="col-12 percent-title">
        100%<br>
        <span>GOOD</span>
      </div>
    </div>
    <div class="row no-gutters">
      <div class="col-12 spacer-bar bg-orange">
        making a difference
      </div>
    </div>
    <div class="row no-gutters">
      <div class="feature-img">
        <img src="@/assets/img/animal-bottlenose-dolphin.png">
      </div>
    </div>
    <div class="row no-gutters bg-orange ">
      <div class="col-12 feature-title txt-white">
        You can become part of the crusade to protect our oceans for future generations
      </div>
      <div class="col-12 feature-text txt-white">
        Feel Good Drink Company is working towards a 0% footprint in our plastic usage. We are putting our best foot forward using innovative design and technology in making our bottles out of paper. We realised we can take steps to become 100% plastic-free and wish to encourage others to join our quest.
      </div>
      <div class="col-12 feature-button">
        <router-link to="footprint" tag="button">Discover How</router-link>
      </div>
    </div>

  </div>
</template>

<script>

export default {
  name: 'HomeMobile'
}

</script>


<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
  
  .title{
    font-size: 4.5vw;
    font-weight: 700;
    padding-top: 2.5rem;
    color: var(--orange-primary);
  }
  
  .top-bar{
    height: 10px;
    background-color: var(--orange-secondary);
  }

  .logo{
    padding-right: 1rem !important;
  }

  .logo>img{
    margin-top: 1rem;
    max-width: 125px;
    width: 15vw;
  }

  .percent-title{
    margin: 7vw 0 1rem 0;
    font-family: 'Holtwood One SC', sans-serif;
    font-size: 15vw;
    line-height: 1;
    color: var(--orange-primary);
  }

  .percent-title>span{
    font-family: 'Open Sans', sans-serif;
    font-weight: 700;
  }

  .spacer-bar{
    font-size: 7vw;
    font-weight: 700;
    padding: 2vw;
    color: white;
    text-transform: uppercase;
  }

  .feature-img{
    width: 100%;
    overflow: hidden;
  }

  .feature-img>img{
    width: 100%;
    margin-left: 0%;
  }

  .feature-title{
    font-size: 8vw;
    padding: 5vw 10vw !important;
    font-weight: 700;
    color: var(--orange-primary);
  }

  .feature-text{
    font-size: 4vw;
    padding: 0 10vw !important;
    text-align: justify;
  }

  .feature-button{
    padding: 10vw;
  }

  .feature-button>button{
    padding: 1vw;
    width: 70vw;
    font-size: 6vw !important;
  }

  .natural-slim-text{
    color: white;
    text-align: center;
    font-family: 'Open Sans', sans-serif;
    font-size: 7vw;
    line-height: 1.2;
    padding-bottom: .5rem;
    user-select: none;
    padding: 0px 10%;
  }

  .natural-bold-text{
    font-family: 'Holtwood One SC', sans-serif;
  }

</style>