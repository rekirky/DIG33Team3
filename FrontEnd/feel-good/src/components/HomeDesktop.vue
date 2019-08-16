<template>
  <div class="home-desktop">
    <!-- 100% Feel Section -->
    <!-- One third section of the Feel section that is the target for the rest of the sectino to be revealed -->
    <div id="feel-container" class="third-container" @mouseenter="bottomBarGrow" @mouseleave="bottomBarShrink" @click="feelActive">
      <div class="top-bar"></div>
      <div class="center-content">
        <div class="top-tag">100%</div>
        <div class="name-tag">FEEL</div>
        <div class="bottom-tag">THE BENEFITS</div>
      </div>

      <!-- Bottom bar with grow to the top when the section is active -->
      <div class="bottom-bar"></div>

      <!-- Tilted bottles -->
      <div class="bottle left-bottle">
        <img src="@/assets/img/bottles/Paper-Bottle_passion_499px.png">
      </div>
      <div class="bottle right-bottle">
        <img src="@/assets/img/bottles/Paper-Bottle_pom_499.png">
      </div>

      <!-- Hand image that comes out of the bottom of the section when the section is active -->
      <div class="hand">
        <svg-img :name="okhand"/>
      </div>
    </div>

    <!-- 2/3 Container for the feel section, is slide into view when the section is selected -->
    <div id="feel-content-container">
      <div id="feel-content">

        <!-- Close button slides into view when section is selected and closes section when pressed -->
        <div class="close-button" v-on:click="feelDeactive">
          <div class="circle hamburger">
            <span class="bar top"></span>
            <span class="bar bottom"></span>
          </div>
        </div>

        <!-- Revealed content for feel section -->
        <div class="two-third-container">        
          <div class="two-third-title">
            We want you to feel the benefits of a healthy lifestyle and clean environment.
          </div>
          <div class="two-third-body">
            Feel Good drinks are 100% proud of our products—we aim to provide women with alternatives for a healthier lifestyle,
            feeling good, drinking well, and a clean plastic-free environment. The short and long term benefits of maintaining a
            healthy lifestyle are reduced risk of disease, cancer diabetes, cardiovascular disease, osteoporosis, and obesity. 
            Our company's goal is to provide a healthy alternative to women who lead a busy lifestyle and encourage women from all walks
            of life to get together for a positive future for generations. We would love to hear from you and share the benefits.
          </div>        
          <router-link to="products" tag="button">The Benefits</router-link>
        </div>
      </div>
    </div>

    <!-- 100% Natural Section -->
    <!-- One third section of the Natural section that is the target for the rest of the section to be revealed -->
    <div id="natural-container" class="third-container" @mouseenter="bottomBarGrow" @mouseleave="bottomBarShrink" @click="naturalActive">
      <div class="top-bar"></div>
      <div class="logo"><img src="@/assets/img/FGD_Logo_full.png"></div>
      <div class="center-content">
        <div class="top-tag">100%</div>
        <div class="name-tag">NATURAL</div>
        <div class="bottom-tag">FIND YOUR FLAVOUR</div>
      </div>

      <!-- Bottom bar with grow to the top when the section is active -->
      <div class="bottom-bar"></div>

      <!-- Tilted bottles -->
      <div class="bottle left-bottle">
        <img src="@/assets/img/bottles/Paper-Bottle_orange_499px.png">
      </div>
      <div class="bottle right-bottle">
        <img src="@/assets/img/bottles/Paper-Bottle_crnlime_499px.png">
      </div>

      <!-- Hand Image that slides into place when the sectino is active -->
      <div class="hand natural-hand">
        <svg-img :name="thumbup"/>
      </div>
    </div>

    <!-- Left Side content that will slide out when the  -->
    <div id="natural-content-container-left" class="natural-content-container">
      <div id="natural-content-left">
        <div class="fruit-bottle-container">
          <div class="fruit">
            <img src="@/assets/img/Orange_1.png">
          </div>
          <div class="right-bottle">
            <img src="@/assets/img/bottles/Paper-Bottle_crnlime_499px.png">
          </div>
        </div>
        <div>
          <router-link to="products" tag="button">find your flavour</router-link>
          <div class="natural-slim-text">Our juices are made of the freshest fruit and berries, no added sugar
          <span class="natural-bold-text">100%</span> natural ingredients.</div>
        </div>
        <div class="fruit-bottle-container">
          <div class="left-bottle">
            <img src="@/assets/img/bottles/Paper-Bottle_orange_499px.png">
          </div>
          <div class="fruit">
            <img src="@/assets/img/pommy.png">
          </div>
        </div>
      </div>
    </div>

    <!-- Right side content that slides out when section is active -->
    <div id="natural-content-container-right" class="natural-content-container">
      <div id="natural-content-right">
        <div class="close-button" v-on:click="naturalDeactive">
          <div class="circle hamburger">
            <span class="bar top"></span>
            <span class="bar bottom"></span>
          </div>
        </div>
        <div class="natural-bold-text">BEST FOOT <br> FORWARD</div>
        <router-link to="footprint" tag="button">Discover how</router-link>
        <div class="natural-slim-text">Our packaging is</div>
        <div class="natural-bold-text">100%</div>
        <div class="natural-slim-text">environmentally sound</div>
      </div>
    </div>

    <!-- 100% Good Section -->
    <!-- One third section of the Good section that is the target for the rest of the section to be revealed -->
    <div id="good-container" class="third-container"  @mouseenter="bottomBarGrow" @mouseleave="bottomBarShrink" @click="goodActive">
      <div class="top-bar"></div>
      <!-- Close button deactives the section -->
      <div class="close-button" v-on:click.stop="goodDeactive">
          <div class="circle hamburger">
            <span class="bar top"></span>
            <span class="bar bottom"></span>
          </div>
        </div>
      <div class="center-content">
        <div class="top-tag">100%</div>
        <div class="name-tag">GOOD</div>
        <div class="bottom-tag">MAKING A DIFFERENCE</div>
      </div>

      <!-- Tilted Bottles -->
      <div class="bottom-bar"></div>
      <div class="bottle left-bottle">
        <img src="@/assets/img/bottles/Paper-Bottle_apple_499px.png">
      </div>
      <div class="bottle right-bottle">
        <img src="@/assets/img/bottles/Paper-Bottle_lemonmy-499px.png">
      </div>

      <!-- Hand image that slides into view when the section is active -->
      <div class="hand good-hand">
        <svg-img :name="twohands"/>
      </div>
    </div>

    <!-- Left side two third content that slides out when the section is active -->
     <div id="good-content-container">
      <div id="good-content">
        <div class="two-third-container">        
          <div class="two-third-title">
            You can become part of the crusade to protect our oceans for future generations
          </div>
          <div class="two-third-body">
            Feel Good Drink Company is working towards a 0% footprint in our plastic usage. 
            We are putting our best foot forward using innovative design and technology in 
            making our bottles out of paper. We realised we can take steps to become 100% 
            plastic-free and wish to encourage others to join our quest.
          </div>        
          <router-link to="footprint" tag="button">Discover how</router-link>
        </div>
      </div>
    </div>

  </div>
</template>

<script>
//Import of SVG versions of the hand images
import thumbup from '@/assets/img/svg/hands-thumbsup2.svg'
import okhand from '@/assets/img/svg/hand-ok2.svg'
import twohands from '@/assets/img/svg/hands2.svg'

export default {
  name: 'HomeDesktop',

  //Component Data holding the ids of the SVG images
  data () {
    return {
      thumbup: thumbup.id,
      okhand: okhand.id,
      twohands: twohands.id
    }
  },

  //Component Methods for activating and deactivating the selected sections
  methods: {
    //Expands the Background of the selected section
    bottomBarGrow(event){
      event.target.getElementsByClassName("bottom-bar")[0].classList.add("grow")
      event.target.getElementsByClassName("top-tag")[0].classList.add("grow")
      event.target.getElementsByClassName("name-tag")[0].classList.add("grow")
    },

    //Returns the background of the select section back to its orginal size
    bottomBarShrink(event){
      event.target.getElementsByClassName("bottom-bar")[0].classList.remove("grow")
      event.target.getElementsByClassName("top-tag")[0].classList.remove("grow")
      event.target.getElementsByClassName("name-tag")[0].classList.remove("grow")
    },

    //When the Feel section is selected, active Classes are added to reveal the section
    feelActive(){
      var feelContainer = document.getElementById("feel-container")
      feelContainer.getElementsByClassName("bottom-bar")[0].classList.add("active")
      feelContainer.getElementsByClassName("top-tag")[0].classList.add("active")
      feelContainer.getElementsByClassName("bottom-tag")[0].classList.add("active")
      feelContainer.getElementsByClassName("name-tag")[0].classList.add("active")
      feelContainer.getElementsByClassName("left-bottle")[0].classList.add("active")
      feelContainer.getElementsByClassName("right-bottle")[0].classList.add("active")
      feelContainer.getElementsByClassName("hand")[0].classList.add("active")
      $( "#feel-content-container" ).animate({width: "67%"}, 0,);
      document.getElementById("feel-content").classList.add("active")
    },

    //Resets Feel section back to normal
    feelDeactive(){      
      var feelContainer = document.getElementById("feel-container")
      feelContainer.getElementsByClassName("bottom-bar")[0].classList.remove("active")
      feelContainer.getElementsByClassName("top-tag")[0].classList.remove("active")
      feelContainer.getElementsByClassName("bottom-tag")[0].classList.remove("active")
      feelContainer.getElementsByClassName("name-tag")[0].classList.remove("active")
      feelContainer.getElementsByClassName("left-bottle")[0].classList.remove("active")
      feelContainer.getElementsByClassName("right-bottle")[0].classList.remove("active")
      feelContainer.getElementsByClassName("hand")[0].classList.remove("active")
      $( "#feel-content-container" ).delay(1000).animate({width: "0%"}, 0);
      document.getElementById("feel-content").classList.remove("active")
    },

    //When the Good section is selected, active Classes are added to reveal the section
    goodActive(){
      var goodContainer = document.getElementById("good-container")
      goodContainer.classList.add("active")
      goodContainer.getElementsByClassName("bottom-bar")[0].classList.add("active")
      goodContainer.getElementsByClassName("top-tag")[0].classList.add("active")
      goodContainer.getElementsByClassName("bottom-tag")[0].classList.add("active")
      goodContainer.getElementsByClassName("name-tag")[0].classList.add("active")
      goodContainer.getElementsByClassName("hand")[0].classList.add("active")
      //goodContainer.getElementsByClassName("good-fish")[0].classList.add("active")
      $( "#good-content-container" ).animate({width: "67%"}, 0,);
      document.getElementById("good-content").classList.add("active")
    },

    //Resets Good section back to normal
    goodDeactive(){      
      var goodContainer = document.getElementById("good-container")
      goodContainer.classList.remove("active")
      goodContainer.getElementsByClassName("bottom-bar")[0].classList.remove("active")
      goodContainer.getElementsByClassName("top-tag")[0].classList.remove("active")
      goodContainer.getElementsByClassName("bottom-tag")[0].classList.remove("active")
      goodContainer.getElementsByClassName("name-tag")[0].classList.remove("active")
      goodContainer.getElementsByClassName("hand")[0].classList.remove("active")
      $( "#good-content-container" ).delay(1000).animate({width: "0%"}, 0);
      document.getElementById("good-content").classList.remove("active")
    },

    //When the Natural section is selected, active Classes are added to reveal the section
    naturalActive(){
      var naturalContainer = document.getElementById("natural-container")
      naturalContainer.getElementsByClassName("bottom-bar")[0].classList.add("active")
      naturalContainer.getElementsByClassName("top-tag")[0].classList.add("active")
      naturalContainer.getElementsByClassName("bottom-tag")[0].classList.add("active")
      naturalContainer.getElementsByClassName("name-tag")[0].classList.add("active")      
      naturalContainer.getElementsByClassName("left-bottle")[0].setAttribute("style", "opacity: 0;")
      naturalContainer.getElementsByClassName("right-bottle")[0].setAttribute("style", "opacity: 0;")
      naturalContainer.getElementsByClassName("hand")[0].classList.add("active")
      //naturalContainer.getElementsByClassName("plant")[0].classList.add("active")
      $( "#natural-content-container-left" ).animate({width: "33%"}, 0,);
      $( "#natural-content-container-right" ).animate({width: "33%"}, 0,);
      document.getElementById("natural-content-left").classList.add("active")
      document.getElementById("natural-content-right").classList.add("active")
    },

    //Resets Natural section back to normal
    naturalDeactive(){      
      var naturalContainer = document.getElementById("natural-container")
      naturalContainer.getElementsByClassName("bottom-bar")[0].classList.remove("active")
      naturalContainer.getElementsByClassName("top-tag")[0].classList.remove("active")
      naturalContainer.getElementsByClassName("bottom-tag")[0].classList.remove("active")
      naturalContainer.getElementsByClassName("name-tag")[0].classList.remove("active")      
      naturalContainer.getElementsByClassName("left-bottle")[0].setAttribute("style", "opacity: 1;")
      naturalContainer.getElementsByClassName("right-bottle")[0].setAttribute("style", "opacity: 1;")
      naturalContainer.getElementsByClassName("hand")[0].classList.remove("active")
      //naturalContainer.getElementsByClassName("plant")[0].classList.remove("active")
      $( "#natural-content-container-left" ).delay(1000).animate({width: "0%"}, 0,);
      $( "#natural-content-container-right" ).delay(1000).animate({width: "0%"}, 0,);
      document.getElementById("natural-content-left").classList.remove("active")
      document.getElementById("natural-content-right").classList.remove("active")
    }
  }
}


</script>


<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
  
  //Top level Shared Styling
  .home-desktop{
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
    height: 17%;
  }

  .bottom-bar.active{
    height: 100%;
  }

  .bottle{
    position: absolute;
    bottom: -10%;
    transition: all ease-out 1s;
  }

  .bottle.active{
    z-index: 2;
  }

  .bottle>img{
    transition: all ease-in .5s;
    max-height: 50vh;
  }

  .bottle.active>img{
    height: 70vh;
  }

  .left-bottle{
    left: 30%;
    transform: rotate(-10deg)
  }

  .left-bottle.active{
    left: -70px;
    transform: rotate(0deg)
  }

  .right-bottle{
    right: 30%;
    transform: rotate(10deg)
  }

  .right-bottle.active{
    right: -70px;
    transform: rotate(0deg)
  }

  .top-tag{
    color: var(--orange-primary);
    font-family: 'Holtwood One SC', sans-serif;
    font-size: 5vw;
    line-height: 1;
    transition: all ease-out .3s;
    user-select: none;
  }

  .top-tag.grow{
    font-size: 5.5vw;
  }

  .name-tag{
    color: var(--orange-primary);
    font-family: 'Open Sans', sans-serif;
    font-size: 4vw;
    font-weight: 700;
    line-height: 1;
    padding-bottom: 1rem;
    transition: all ease-out .3s;
    user-select: none;
  }

  .name-tag.grow{
    font-size: 4.5vw;
  }

  .bottom-tag{
    color: var(--orange-secondary);
    font-family: 'Open Sans', sans-serif;
    font-size: 2vw;
    font-weight: 700;
    transition: all ease-out .3s;
    user-select: none;
  }

  .bottom-tag.active, .top-tag.active, .name-tag.active{
    color: white;
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

  .close-button{
    background-color: white;
    border: 2px solid var(--orange-primary);
    display: inline-block;
    border-radius: 500px;
    top: 2.5rem; 
    right: 2rem;
    position: absolute;
    padding: .5rem;
    cursor: pointer;
    z-index: 10;
  }

  .circle{
    width: 1.5rem;
    height: 1.5rem;
    position: relative;
  }

  .bar{
    position: absolute;
    left: 0;
    height: 0.2rem;
    width: 100%;
    background-color: var(--orange-primary);
    border-radius: 2px;
    transition: all cubic-bezier(0.26, 0.1, 0.27, 1.5) 0.35s;
    top: 48%;
  }

  .top{
    transform: rotate(135deg);
  }

  .bottom{
    transform: rotate(-135deg);
  }

  .two-third-container{
    margin-top: 45%;
    min-height: 55%;
    width: 100%;
    position: relative;
    background-color: rgba(255,255,255,0.9);
    padding: 0px 120px 0px 100px;
  }

  .two-third-title{
    font-family: 'Open Sans', sans-serif;
    font-size: calc(.5rem + 2.2vw);
    color: var(--orange-primary);
    padding: 10px 0px;
  }

  .two-third-body{
    font-family: 'Open Sans', sans-serif;
    text-align: left;
    font-size: 1.1rem;
    padding: 1rem 0px;
    line-height: 1.4;
  }

  .natural-hand{
    transform: translate(-25%, 0) !important;
  }

  .hand, .plant{
    position: absolute;
    bottom: 0%;
    left: 50%;
    transform: translate(-50%, 0);
    overflow: hidden;
    height: 0;
    width: 100%
  }

  .hand.active, .plant{
    height: 40%;
  }

  .hand>svg, .plant>img{
    position: absolute;
    bottom: -100%;
    transform: translate(-50%, 5%);
    transition: all ease-in .5s;
  }

  .hand>svg{
    height: calc(200px + 12vw);
  }


  .plant>img{
    height: calc(50px + 12vw);
  }

  .hand.active>svg, .plant.active>img{
    position: absolute;
    bottom: 0;
  }



  //Feel Section Styling

  #feel-container{
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 33%;
  }

  #feel-container .top-bar, #feel-container .bottom-bar{
    background-color: #43e2fa;
  }

  #feel-content-container{
    width: 0;
    height: 100%;
    position: absolute;
    top: 0;
    left: 33%;
    overflow: hidden;
  }

  #feel-content{
    background-image: url('../assets/img/baby-beautiful.png');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    min-height: 100%;  
    z-index: 1;
    transition: all ease-out 1s;
    width: 100%;
    position: absolute;
    top: 0;
    left: -100%;
    opacity: 1;
    display: flex;
  }

  #feel-content.active{
    left: 0;
  }

  //Natural Section Styling

  #natural-container{
    position: absolute;
    top: 0;
    left: 50%;
    height: 100%;
    width: 34.1%;
    transform: translate(-50%, 0);
  }

  #natural-container .top-bar, #natural-container .bottom-bar{
    background-color: var(--green-primary);
  }

  #natural-content-container-left{
    left: 0%;
  }

  #natural-content-container-right{
    right: 0%;
  }

  #natural-content-left{
    background-color: var(--green-secondary);
    min-height: 100%;  
    z-index: 1;
    transition: all ease-out 1s;
    width: 100%;
    position: absolute;
    top: 0;
    right: -100%;
    opacity: 1;
  }

  #natural-content-right{
    background-image: url('../assets/img/beach-footprints-sand_green.png');
    background-position: left;
    background-repeat: no-repeat;
    background-size: cover;
    min-height: 100%;  
    z-index: 1;
    transition: all ease-out 1s;
    width: 100%;
    position: absolute;
    top: 0;
    left: -100%;
    opacity: 1;
    padding-top: 30%;
  }

  #natural-content-left.active{
    right: 0;
  }

  #natural-content-right.active{
    left: 0;
  }

  .natural-content-container{
    width: 0%;
    height: 100%;
    position: absolute;
    top: 0;
    overflow: hidden;
  }

  .natural-content-container.alert{
    width: 33%;
  }

  .natural-slim-text{
    color: white;
    text-align: center;
    font-family: 'Open Sans', sans-serif;
    font-size: 34px;
    line-height: 1.2;
    padding-bottom: .5rem;
    user-select: none;
    padding: 0px 10%;
  }

  .natural-bold-text{
    color: white;
    text-align: center;
    font-family: 'Holtwood One SC', sans-serif;
    font-size: 34px;
    line-height: 1.2;
    user-select: none;
  }

  .fruit-bottle-container{
    width:100%;
  }

  .fruit-bottle-container>div{
    float: left;
    width: 50%;
    padding: 20px;
    padding-bottom: 20%;
  }

  .fruit-bottle-container img{
    height: calc(120px + 6vw);
    object-fit: contain;
  }

  .fruit-bottle-container>.right-bottle>img, .fruit-bottle-container>.left-bottle>img{
    transform: scale(2,2);
  }

  .fruit-bottle-container:last-of-type{
    position: absolute;
    bottom: -10%;
  }

  #natural-container .hand{
    left: 20%;
  }

  #natural-container .plant{
    left: 50%;
    bottom: 10%;
  }


  //Good Section Styling
  #good-container{
    position: absolute;
    top: 0;
    right: 0;
    height: 100%;
    width: 33%;
    overflow: hidden;
  }

  #good-container .top-bar, #good-container .bottom-bar{
    background-color: var(--orange-secondary);
  }

  #good-content-container{
    width: 0%;
    height: 100%;
    position: absolute;
    top: 0;
    right: 33%;
    overflow: hidden;
  }

  #good-content{
    background-image: url('../assets/img/animal-bottlenose-dolphin.png');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    min-height: 100%;  
    z-index: 1;
    transition: all ease-out 1s;
    width: 100%;
    position: absolute;
    top: 0;
    right: -100%;
    opacity: 1;
    display: flex;
  }

  #good-content.active{
    right: 0;
  }

  #good-content .two-third-container{
    background-color: rgba(34,172,224,0.9);
  }

  #good-content .two-third-title{
    color: white;
  }

  #good-content .two-third-body{
    color: white;
  }

  .good-hand{
    height: 22vw !important;
    bottom: 100%;
    overflow: hidden;
  }

  .good-hand.active{
    bottom: 0%;
  }

  .good-fish{
    opacity: 0;
    transition: all ease-in .5s;
    margin-top: 20%;
  }

  .good-fish.active{
    opacity: 1;    
  }

  button{
    margin: 20px;
  }


  #good-container>.close-button{
    right: -66vw;
    transition: all ease-out .3s;
  }

  #good-container.active>.close-button{
    right: 2rem;
  }

</style>