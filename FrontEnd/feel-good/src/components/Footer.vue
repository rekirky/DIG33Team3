<template>
  <div class="footer">
    <div class="footer-content">
      <div class="row no-gutters">
        <div class="col-12 col-xl-5">
          <!-- Product and Fruit Images -->
          <div class="footer-bottles">
            <img src="@/assets/img/SmallBottles.png" alt="Group of bottles and fruit">
          </div>
        </div>
        <div class="col-9 col-xl-6">
          <div class="footer-links">
            <div>
              <!-- Social Media Icons -->
              Get in touch with us: 
              <i class='fab fa-twitter'></i>
              <i class='fab fa-facebook-f'></i>
              <i class='fab fa-pinterest'></i>
              <i class='far fa-envelope'></i>
            </div>
            <div>
              <!-- Links For Secondary Pages -->
              <router-link to="/sitemap" class="">Site Map</router-link>
              <router-link to="/policy" class="">Privacy Policy</router-link>
              <router-link to="/contact" class="">Contact Us</router-link>
              <router-link to="/references" class="">References</router-link>
              <router-link to="/team" class="">Team</router-link>
            </div>
          </div>
        </div>
        <div class="col-3 col-xl-1">
          <!-- Feel Good Logo -->
          <div class="footer-logo">
            <img src="@/assets/img/FGD_Logo_full.png" alt="Feel Good Logo">
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>

export default {
  // Exporting the name of the component so that it can be referenced.
  name: 'Footer'
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">

  .footer{
    height: 160px;
    background-color: var(--orange-primary);
    position: relative;
    z-index: 2;
  }

  .footer-content{
    width: 70%;
    height: 60%;
    top: 20%;
    left: 15%;
    position: absolute;
  }
  
  .footer-bottles, .footer-logo{
    position: relative;
  }

  .footer-bottles>img{
    position: absolute;
    bottom: -120px;
    left: 0;
    width: 25vw;
    max-width:400px;
  }

  .footer-links{
    margin-top: 30px;
    float: right;
    text-align: left;
    color: white;
    font-family: 'Open Sans', sans-serif;
    font-size: 14px;
  }

  .footer-links a{
    padding-right: 10px;
    color:white;
  }

  .footer-logo>img{
    height: 100px;
  }

  i{
    padding: 0px 5px;
  }

// Styling for the mobile version of the footer.
  @media only screen and (max-width: 1199px) {
    .footer-bottles {
      display: none;
    }

    .footer-links a{
      display: block;
      font-size: 12px;
      line-height: 1.7;
    }

    .footer-content{
      width: 95%;
      height: 80%;
      top: 5px;
      left: 15px
    }

    .footer-links{
      margin-top: 10px;
      float: left;
      color: white;
      font-family: 'Open Sans', sans-serif;
      font-size: 14px;
    }

    .footer-logo>img{
      position: absolute;
      left: 50%;
      transform: translate(-50%, 20%);
    }
  }

</style>