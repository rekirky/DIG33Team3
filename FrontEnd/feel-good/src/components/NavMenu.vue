<template>
  <div class="nav-menu">
    <!-- Animated Hamburger Menu Button -->
    <div id="wrapper" v-on:click="toggleMenu">
      <div id="icon" class="circle hamburger">
        <span class="bar top"></span>
        <span class="bar bottom"></span>
      </div>
    </div>

    <!-- Navigation Links -->
    <div id="menu-container">
      <div class="link-container" id="home-link">
        <div class="bullet-point active"></div>
        <router-link to="/home" class="nav-link" id="home" v-on:click.native="togglePoint">Home</router-link>
      </div>
      <div class="link-container" id="events-link">
        <div class="bullet-point"></div>
        <router-link to="/event" class="nav-link" id="events" v-on:click.native="togglePoint">Events</router-link>
      </div>

      <!-- If there are events, loop through them to add their links -->
      <div v-if="this.events.length != 0">
        <div v-for="(event, index) in events" :key="index">
          <div class="link-container child-link" :id="'event-' + event.id + '-link'">
            <div class="bullet-point"></div>
            <router-link :to="'/event#event-detail-' + index" class="nav-link" :id="'event-' + event.id" v-on:click.native="togglePoint">{{event.name}}</router-link>
          </div>
        </div>
      </div>
      <div class="link-container" id="about-link">
        <div class="bullet-point"></div>
        <router-link to="/about" class="nav-link" id="about" v-on:click.native="togglePoint">About</router-link>
      </div>
      <div class="link-container" id="products-link">
        <div class="bullet-point"></div>
        <router-link to="/products" class="nav-link" id="products" v-on:click.native="togglePoint">Products</router-link>
      </div>

      <!-- If there are products groups, loop through them to add their links -->
      <div v-if="this.productGroups.length != 0">
      <div v-for="(group, index) in productGroups" :key="index">
        <div class="link-container child-link" :id="'product-group-' + group.id + '-link'">
          <div class="bullet-point"></div>
          <router-link :to="'/product/' + group.id" class="nav-link" :id="'product-group-' + group.id" v-on:click.native="togglePoint">{{group.name}}</router-link>
        </div>
      </div>
      </div>
      <div class="link-container" id="footprint-link">
        <div class="bullet-point"></div>
        <router-link to="/footprint" class="nav-link" id="footprint" v-on:click.native="togglePoint">Our Footprint</router-link>
      </div>
      <div class="link-container" id="contact-link">
        <div class="bullet-point"></div>
        <router-link to="/contact" class="nav-link" id="contact" v-on:click.native="togglePoint">Contact Us</router-link>
      </div>
    </div>

    <!-- Overlay that fills the rest of the screen, if clicked it will close the nav menu,
         Implemented based on feedback from Cam -->
    <div id="close-container" v-on:click="toggleMenu">
    </div>
  </div>
</template>

<script>
import { mapGetters } from 'vuex'
import { GET_PRODUCT_GROUPS, GET_EVENTS } from '@/store/types'

export default {
  name: 'NavMenu',
  computed: {
    ...mapGetters({
      productGroups: 'getProductGroups',
      events: "getEvents"
    })
  },
  async mounted () {
    await this.$store.dispatch(GET_PRODUCT_GROUPS)
    await this.$store.dispatch(GET_EVENTS)
  },
  methods: {
    //Open and closes the menu when the hamburger button is clicked.
    toggleMenu(){
      var hamburger = document.getElementById("icon")
      var wrapper = document.getElementById("wrapper")
      var menu = document.getElementById("menu-container")
      var close = document.getElementById("close-container")
      hamburger.classList.toggle("cross")
      wrapper.classList.toggle("cross")
      menu.classList.toggle("cross")
      close.classList.toggle("cross")
    },

    //Added the Active link marker to the Selected Link.
    togglePoint(event){

      //Removes the bullet point from all links.
      var points = document.getElementsByClassName("bullet-point active")
      while(points.length > 0){
        points[0].classList.remove('active');
      }

      //Adds the bullet point to the selected link.
      var pointId = event.target.id.concat("-link")
      var activePoint = document.getElementById(pointId)
      activePoint.getElementsByClassName("bullet-point")[0].classList.toggle("active")
      this.toggleMenu()
    }
  }
}
</script>


<style lang="scss" scoped>

  .nav-menu{
    position: absolute;
    left: 0;
    top: 0;
    z-index: 3;
    height: 100%;
    
  }

  #menu-container{
    position: absolute;
    width: 300px;
    height: 100%;
    background-color: rgba(255,255,255,.9);
    left: -310px;
    top: 0;
    transition: all ease-out .5s;
    padding-top: 100px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
  }

  #menu-container.cross{
    left: 0;
  }

  .link-container{
    text-align: left;
    margin-left: 2rem;
    padding: 5px;
  }

  .nav-link{
    text-align: left;
    text-transform: uppercase;
    font-family: 'Open Sans', sans-serif;
    font-size: 18px;
    color: var(--orange-primary);
    display: inline-block;
    margin-left: 15px;
    padding-left: 0px;
  }
  
  .nav-link:hover{
    color: var(--orange-secondary);
  }

  .bullet-point{
    position: relative;
    background-color: var(--orange-primary);
    display: inline-block;
    border-radius: 50%;
    width: 15px;
    height: 15px;
    opacity: 0;
    transition: all ease-out .7s;
  }

  .bullet-point.active{
    opacity: 1;
  }

  #wrapper{
    background-color: var(--orange-primary);
    border: 2px solid var(--orange-primary);
    display: inline-block;
    border-radius: 500px;
    top: 2.5rem; 
    left: 2rem;
    position: absolute;
    padding: .5rem;
    cursor: pointer;
    z-index: 4;
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
    background-color: white;
    border-radius: 2px;
    transition: all cubic-bezier(0.26, 0.1, 0.27, 1.5) 0.35s;
  }

  .top{
    top:25%;
  }

  .bottom{
    top:65%;
  }

  .hamburger.cross .top{
    transform: rotate(135deg);
    top: 48%;
  }

  .hamburger.cross .bottom{
    transform: rotate(-135deg);
    top: 48%;
  }

  .hamburger.cross .bar{
    background-color: var(--orange-primary);
  }

  #wrapper.cross{
    border: 2px solid var(--orange-primary);
    background-color: white;
  }

  .child-link{
    margin-left: 4rem;
  }

  #close-container{
    width: calc(100vw - 300px);
    height: 100%;
    left: -100vw;
    position: absolute;
  }

  #close-container.cross{
    left: 300px;
  }

  @media only screen and (max-width: 1024px) {
    #wrapper{
      top: calc(20px + 4vw); 
      left: calc(20px + 1vw);
    }
  }

</style>
