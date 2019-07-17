<template>
  <div class="sitemap">
    <div class="row">
      <div class="col-2">
        <div class="left-gutter">
          <img src="@/assets/img/fgCo.png">
        </div>
      </div>
      <div class="col-9">
        <div class="row">
          <div class="title-container">
            <h1>site map</h1>
          </div>
        </div>
        <div class="center-content">
          <div class="row">
            <div class="col-1"></div>
            <div class="col-8">
              <div class="row">
                <h5>MAIN</h5> 
                <hr>
              </div>
              <div class="row">
                <div class="col-4">
                  <router-link to="/home" class="">Home</router-link>
                  <router-link to="/events" class="">Events</router-link>
                  <router-link to="/about" class="">About</router-link>
                </div>
                <div class="col-4">
                  <router-link to="/products" class="">Products</router-link>
                </div>
                <div class="col-4">
                  <router-link to="/footprint" class="">Our Footprint</router-link>
                </div>
              </div>
            </div>
            <div class="col-3">
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
      <div class="col-1">
        <div class="right-gutter">
          <img src="@/assets/img/patternside.png">
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Sitemap',
  props: {
  },
  mounted () {
    var points = document.getElementsByClassName("bullet-point active")
    while(points.length > 0){
      points[0].classList.remove('active');
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
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

</style>
