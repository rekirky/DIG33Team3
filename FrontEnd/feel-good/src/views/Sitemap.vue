<template>
  <div class="sitemap">
    <div class="row">
      <div class="col-2 hidden-mobile">
        <div class="left-gutter">
          <img src="@/assets/img/fgCo.png">
        </div>
      </div>
      <div class="col-12 col-sm-9">
        <div class="row">
          <div class="title-container">
            <h1>site map</h1>
          </div>
        </div>
        <div class="center-content">
          <div class="row mobile-overlay">
            <div class="col-1"></div>
            <div class="col-11 col-sm-8">
              <div class="row">
                <h5>MAIN</h5> 
                <hr>
              </div>
              <div class="row">
                <div class="col-11 col-sm-4">
                  <router-link to="/home" class="">Home</router-link>
                  <router-link to="/event" class="">Events</router-link>
                  <div v-if="this.events.length != 0">
                    <!-- Loop through the event array and add Child links-->
                    <div v-for="(event, index) in events" :key="index">
                      <router-link :to="'/event#event-detail-' + index" class="child-link" :id="'event-' + event.id" v-on:click.native="togglePoint">{{event.name}}</router-link>
                    </div>
                  </div>
                  <router-link to="/about" class="">About</router-link>
                </div>
                <div class="col-11 col-sm-4">
                  <router-link to="/products" class="">Products</router-link>
                  <div v-if="this.productGroups.length != 0">
                    <!-- Loop through the product group array and add Child links-->
                    <div v-for="(group, index) in productGroups" :key="index">
                      <router-link :to="'/product/' + group.id" class="child-link" :id="'product-group-' + group.id" v-on:click.native="togglePoint">{{group.name}}</router-link>
                    </div>
                  </div>
                </div>
                <div class="col-11 col-sm-4">
                  <router-link to="/footprint" class="">Our Footprint</router-link>
                </div>
              </div>
            </div>
            <div class="col-1 visible-mobile"></div>
            <div class="col-11 col-sm-3">
              <div class="row">
                <h5>LEGAL</h5> 
                <hr size="2">
              </div>
              <div class="row">
                <div class="col-12">
                  <router-link to="/policy" class="">Privacy Policy</router-link>
                  <router-link to="/contact" class="">Contact Us</router-link>
                  <router-link to="/references" class="">References</router-link>
                  <router-link to="/team" class="">Team</router-link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-1 hidden-mobile">
        <div class="right-gutter">
          <img src="@/assets/img/patternside.png">
        </div>
      </div>
    </div>
  </div>
</template>

<script>
//Import of Vuex Local Storage
import { mapGetters } from 'vuex'

//Import of function types
import { GET_PRODUCT_GROUPS, GET_EVENTS } from '@/store/types'

export default {
  name: 'Sitemap',
  computed: {
    ...mapGetters({
      productGroups: 'getProductGroups',
      events: "getEvents"
    })
  },
  async mounted () {

    //Fetch Product group and event data from API
    await this.$store.dispatch(GET_PRODUCT_GROUPS)
    await this.$store.dispatch(GET_EVENTS)

    //Remove all bullet point makers from the navigtation
    var points = document.getElementsByClassName("bullet-point active")
    while(points.length > 0){
      points[0].classList.remove('active');
    }
  }
}
</script>

<style scoped lang="scss">

  .sitemap{
    padding: 0px 15px;
  }

  .left-gutter{
    position: relative;
    height: 100%;
  }

  .left-gutter>img{
    display: block;
    position: absolute;
    bottom: 20px;
    left: 20px;
    height: 140px;
  }

  .title-container{
    width: 100%;
    height: 140px;
    text-align: middle;
    padding-top: 40px;
    background-color: var(--orange-secondary);
    color: white;
  }

  .center-content{
    background-image: url('../assets/img/bg_sitemp_1200.png');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    min-height: 100%;    
    margin: 0px -15px;
  }

  .center-content a{
    color: black;
    padding: 10px;
    width: 100%;
    display: block;
    text-align: left;
    text-transform: uppercase;
    font-family: 'Open Sans', sans-serif;
    font-weight: 700;
    font-size: 20px;
  }

  .right-gutter{
    min-height: calc(100vh - 160px);
    background-color: var(--beige-sidebar);
    margin: 0px -15px;
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

  h5{
    padding: 20px;
    width: 100%;
    display: block;
    text-align: left;
  }

  hr {
    display: block;
    height:1px; 
    border:none; 
    color:#000; 
    background-color:#000; 
    width:90%; 
    text-align:left; 
    margin: 0 auto 0 0;
  }

  .center-content a.child-link{
    padding-left: 30px;
  }

  .visible-mobile{
    display:none;
  }

  @media only screen and (max-width: 768px) {
    
    .hidden-mobile{
      display: none;
    }

    .visible-mobile{
      display: block;
    }

    h1{
      font-size: 7vw !important;
    }

    .title-container{
      height: 110px;
      padding: 40px;
    }

    .center-content{
      min-height: calc(100vh - 110px);    
      margin: 0px -15px;
    }

    .center-content div{
      opacity: 1;
    }

    .mobile-overlay{
      background-color:rgba(255,255,255,0.8);
    }

  }

</style>
