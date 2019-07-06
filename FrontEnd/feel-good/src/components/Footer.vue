<template>
  <div class="footer">
    <div class="footer-content">
      <div class="row">
        <div class="col-md-5">
          <div class="footer-bottles">
            <img src="@/assets/img/SmallBottles.png">
          </div>
        </div>
        <div class="col-md-6">
          <div class="footer-links">
            <div>
              Get in touch with us: 
              <i class='fab fa-twitter'></i>
              <i class='fab fa-facebook-f'></i>
              <i class='fab fa-pinterest'></i>
              <i class='far fa-envelope'></i>
            </div>
            <div>
              <router-link to="sitemap" class="">Site Map</router-link>
              <router-link to="policy" class="">Privacy Policy</router-link>
              <router-link to="contact" class="">Contact Us</router-link>
              <router-link to="references" class="">References</router-link>
              <router-link to="team" class="">Team</router-link>
            </div>
          </div>
        </div>
        <div class="col-md-1">
          <div class="footer-logo">
            <img src="@/assets/img/FGD_Logo_full.png">
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
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

</style>