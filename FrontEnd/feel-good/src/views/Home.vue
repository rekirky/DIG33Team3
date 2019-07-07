<template>
  <div class="home">

    <div id="feel-container" class="third-container" @mouseenter="bottomBarGrow" @mouseleave="bottomBarShrink" @click="feelActive">
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
      <div class="hand">
        <img src="@/assets/img/hand_1.png">
      </div>
    </div>
    <div id="feel-content-container">
      <div id="feel-content">
        <div id="close-button" v-on:click="feelDeactive">
          <div class="circle hamburger">
            <span class="bar top"></span>
            <span class="bar bottom"></span>
          </div>
        </div>
        <div class="two-third-container">        
          <div class="two-third-title">
            We want you to feel the benifits of healthy
            living, for you and future generations.
          </div>
          <div class="two-third-body">
            Ti qui a nonsectaepre con con con est peliqui dolupti ncimus ea qui resequis volor auda
            pliberae nat veribus, sed molupti volorest, secab ipiscii squaspeliam et eiuntem eosti
            in nonsent di dolore, qui aligenestet alic tecto cum inis aborro qui dus sum diat latquia
            simendam coressi musciet archicidel earcium que cus et ulla sequis reici dendebit quis qui
            sant aliquid erspici pienimi, consequ atecaec temporio.<br><br>
            Et fuga. Fictota tiatectet aut assecessum quae liqui blaboreped et ut aliquaero consed
            quuntecto blatur, conserit omnis pe reprae veliciis poresti dis doluptur rent lam fugit
            venecte molorep editaquatur architi dolent omnisimet eatus, ex elibus dus volorpo repudae.
          </div>        
          <router-link to="products" tag="button">The Benefits</router-link>
        </div>
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

    <div id="good-container" class="third-container"  @mouseenter="bottomBarGrow" @mouseleave="bottomBarShrink" @click="goodActive">
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
     <div id="good-content-container">
      <div id="good-content">
        <div id="close-button" v-on:click="goodDeactive">
          <div class="circle hamburger">
            <span class="bar top"></span>
            <span class="bar bottom"></span>
          </div>
        </div>
        <div class="two-third-container">        
          <div class="two-third-title">
            You can become part of the
            crusade to protect
            our oceans and children’s future
          </div>
          <div class="two-third-body">
            Ti qui a nonsectaepre con con con est peliqui dolupti ncimus ea qui
            resequis volor auda pliberae nat veribus, sed molupti volorest, secab ipiscii
            squaspeliam et eiuntem eosti in nonsent di dolore, qui aligenestet alic
            tecto cum inis aborro qui dus sum diat latquia simendam coressi musciet
            archicidel earcium que cus et ulla sequis reici dendebit quis qui sant aliquid
            erspici pienimi, consequ atecaec temporio. Et fuga. Fictota tiatectet aut
          </div>        
          <router-link to="footprint" tag="button">Discover how</router-link>
        </div>
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
    },
    feelActive(){
      var feelContainer = document.getElementById("feel-container")
      feelContainer.getElementsByClassName("bottom-bar")[0].classList.add("active")
      feelContainer.getElementsByClassName("top-tag")[0].classList.add("active")
      feelContainer.getElementsByClassName("bottom-tag")[0].classList.add("active")
      feelContainer.getElementsByClassName("name-tag")[0].classList.add("active")
      feelContainer.getElementsByClassName("left-bottle")[0].classList.add("active")
      feelContainer.getElementsByClassName("right-bottle")[0].classList.add("active")
      feelContainer.getElementsByClassName("hand")[0].classList.add("active")
      $( "#feel-content-container" ).animate({
        width: "67%"
      }, 0,);
      document.getElementById("feel-content").classList.add("active")
    },
    feelDeactive(){      
      var feelContainer = document.getElementById("feel-container")
      feelContainer.getElementsByClassName("bottom-bar")[0].classList.remove("active")
      feelContainer.getElementsByClassName("top-tag")[0].classList.remove("active")
      feelContainer.getElementsByClassName("bottom-tag")[0].classList.remove("active")
      feelContainer.getElementsByClassName("name-tag")[0].classList.remove("active")
      feelContainer.getElementsByClassName("left-bottle")[0].classList.remove("active")
      feelContainer.getElementsByClassName("right-bottle")[0].classList.remove("active")
      feelContainer.getElementsByClassName("hand")[0].classList.remove("active")
      $( "#feel-content-container" ).delay(2000).animate({
        width: "0%"
      }, 0);
      document.getElementById("feel-content").classList.remove("active")
    },
    goodActive(){
      var goodContainer = document.getElementById("good-container")
      goodContainer.getElementsByClassName("bottom-bar")[0].classList.add("active")
      goodContainer.getElementsByClassName("top-tag")[0].classList.add("active")
      goodContainer.getElementsByClassName("bottom-tag")[0].classList.add("active")
      goodContainer.getElementsByClassName("name-tag")[0].classList.add("active")
      $( "#good-content-container" ).animate({
        width: "67%"
      }, 0,);
      document.getElementById("good-content").classList.add("active")
    },
    goodDeactive(){      
      var goodContainer = document.getElementById("good-container")
      goodContainer.getElementsByClassName("bottom-bar")[0].classList.remove("active")
      goodContainer.getElementsByClassName("top-tag")[0].classList.remove("active")
      goodContainer.getElementsByClassName("bottom-tag")[0].classList.remove("active")
      goodContainer.getElementsByClassName("name-tag")[0].classList.remove("active")
      $( "#good-content-container" ).delay(1000).animate({
        width: "0%"
      }, 0);
      document.getElementById("good-content").classList.remove("active")
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
    height: 50vh;
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
  
  #feel-container{
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 33%;
  }

  #feel-container .top-bar, #feel-container .bottom-bar{
    background-color: var(--blue-secondary);
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
    transition: all ease-out 2s;
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

  #good-container{
    position: absolute;
    top: 0;
    right: 0;
    height: 100%;
    width: 33%;
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

  .top-tag{
    color: var(--orange-primary);
    font-family: 'Holtwood One SC', sans-serif;
    font-size: 6rem;
    line-height: 1;
    transition: all ease-out .3s;
    user-select: none;
  }

  .name-tag{
    color: var(--orange-primary);
    font-family: 'Open Sans', sans-serif;
    font-size: 5rem;
    font-weight: 700;
    line-height: 1;
    padding-bottom: 1rem;
    transition: all ease-out .3s;
    user-select: none;
  }

  .bottom-tag{
    color: var(--orange-secondary);
    font-family: 'Open Sans', sans-serif;
    font-size: 2.2rem;
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

  #close-button{
    background-color: white;
    border: 2px solid var(--orange-primary);
    display: inline-block;
    border-radius: 500px;
    top: 2.5rem; 
    right: 2rem;
    position: absolute;
    padding: .5rem;
    cursor: pointer;
    z-index: 6;
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

  #good-content .two-third-container{
    background-color: rgba(34,172,224,0.9);
  }

  .two-third-title{
    font-family: 'Open Sans', sans-serif;
    font-size: 3rem;
    color: var(--orange-primary);
    padding: 10px 0px;
  }

  #good-content .two-third-title{
    color: white;
  }

  .two-third-body{
    font-family: 'Open Sans', sans-serif;
    text-align: left;
    font-size: 1.1rem;
    padding: 5px 0px;
    line-height: 1.4;
  }

  #good-content .two-third-body{
    color: white;
  }

  .hand{
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translate(-50%, 0);
    overflow: hidden;
    height: 100%;
  }

  .hand>img{
    transition: all ease-in .5s;
    transform: translate(0, 300%);
  }

  .hand.active>img{
    transform: translate(0, 170%);
  }

</style>