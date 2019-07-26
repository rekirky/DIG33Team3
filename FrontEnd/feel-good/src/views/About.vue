<template>

  <div class="about">

    <article class="about-main"> 

      <!-- Bootstrap and custom classes to style elements -->
      <section class="about-header d-flex align-item-center text-center">       
      <div class="container">

      <h2 class="about-title"><small> THE HEART OF OUR COMPANY </small></h2>
      <h2><b>LET'S TALK ABOUT US</b></h2>

       </div>
      </section>

    <section> 
      <Section class="about-text text-left">
         <!-- Bootstrap container -->
         <div class="container">

        <h6 class="lead">The heart of our company is to create a completely 100% good product. The passion of 
          the Feel Good Drinks Co., lead our team of engineers to the development of all new and innovative 
          packaging which aligns with the company ethos — all-natural ingredients inside and outside the 
          bottle.</h6>

        <p class="about-feel-good">The Feel Good Drinks premium range of 100% natural still and sparkling drinks designed 
          for the health-conscious modern woman, is sold in over 20,000 outlets across 15 different countries. 
          We believe we have found an exciting solution to a potentially hazardous pollutant, using 
          sustainable paper instead of plastic in our bottling process. We want you to join us in
          investing in your health and future in a positive way. We are running campaigns to encourage 
          women to join together to help fight the plastic pollution problem, making a difference globally. 
          We want you to FEEL GOOD!</p>
      </div>
    </Section>

    <Section class="about-images d-flex align-item-center"> 
     <div class="about-logo container d-none d-lg-block">
        <div class="about-logo-sm">
        <img class="img-fluid float-left" src="@/assets/img/sm_logo.png" alt="feel good drinks logo small">
        </div>
          </div>

       <div class="image-grid container">
        <!-- Bootstrap grid for image layout -->
      <div id="about-image-grid">
        <div class="image-grid">
        <div class="row justify-content-center">
        <div class="about-image col-6">
        <img class="img-fluid" src="@/assets/img/footprint.png" alt="footprint on beach image">
          </div>
        <div class="about-image col-6">
        <img class="img-fluid" src="@/assets/img/family.png" alt="family at beach image">
          </div>
        <div class="about-image col-6">
        <img class="img-fluid" src="@/assets/img/bottles_1.png" alt="multiple drink bottle image">
          </div> 
        <div class="about-image col-6">     
        <img class="img-fluid" src="@/assets/img/beach.png" alt="aerial beach view image">
          </div>
            </div>
              </div>
                </div>
                  </div>
        <div class="side-bar container d-none d-lg-block">
          </div>       
           </section>
              </section>

    </article> 
           

<section>
    <div class="consumer-notice d-flex align-items-left">
       <div class="consumer-logo">     
        <img class="img-fluid float-left" src="@/assets/img/logo_247.png" alt="feel good drinks logo">
          </div> 
          <div class="consumer-info">
            <h6 class="text-light text-left">Consumers</h6>
            <p class="text-light text-left">Consumer notice text here</p>
              </div>
               </div>   
    </section>
       
  </div>
</template>

<script>
export default {
  name: 'about',
  props: {
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">

.about-title{
  color:  var(--orange-primary);
  margin-top: 30px;
    
}
.about-header{
  margin-left: 10%;
}

h6{
  font-size: 1.2em;
  line-height: 1.5em
}
.about-text{
  width: 60%;
  margin-left: 24%;
  margin-top: 20px;
  line-height: 1.8em
}

.about-logo.container {
  margin-top: 40%;
  width: 20%;
  border: 10px;
  display: block
}

.image-grid.container {
  width:70%;
  margin-left: 40px
}

.side-bar.container {
  width:20%
}

.about-image img{
  margin: 10px
}

.about-logo-sm img{
  margin: 10px;
  margin-right: 220px
}

.consumer-logo{
  padding: 40px
}

.consumer-notice{
  background-color: var(--purple-primary);
  height: 350px;
  margin-top: 20px
}

.consumer-info{
  padding:40px 20px
}

</style>

