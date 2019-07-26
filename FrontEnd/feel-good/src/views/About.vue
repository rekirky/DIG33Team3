<template>

  <div class="about">

       <!-- Bootstrap and custom classes to style elements -->
    <article class="about-main">     
       <!--display property used to hide right sidebar on mobile and tablet view-->
      <div class="right-bar d-none d-lg-block img-fluid container">
      <img class="pattern" src="@/assets/img/patternside.png" alt="side-bar pattern">
      <div class="section-label">about</div>
        </div>    

      <section class="about-header d-flex align-item-center text-center">       
      <div class="container">

        <!--mobile and tablet view header logo display-->
        <div class="mobile-header container">
         <img class="img-fluid d-lg-none" src="@/assets/img/logo_247.png" alt="feel good drinks logo">
          </div>

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
        <img class="img float-left d-none d-lg-block" src="@/assets/img/logo_247.png" alt="feel good drinks logo">
              </div> 
          <div class="consumer-info text-light text-left">
            <h6>Consumers</h6>
            <p><small> "We take our responsibility towards the issue of obesity and sugar consumption very seriously. Our marketing strategy continues
                to revolve around promoting no added sugar choices in order to achieve our aim of overall sugar reduction across our range of
                products. As a result, we continue to reduce our total sugar usage. The Added Sugar in our UK products continues to fall from
                8,002 tonnes in 2015 to 7,908 tonnes in 2016. </small></p>

            <p><small> We are making further commitments to reduce sugar in all of our sugar containing products in line with UK Government guidelines
                and have a robust plan of reformulation.</small></p>
                
            <p><small> The No Added Sugar products in our squash range now account for 50.5% of all purchases and 42% of our Vimto still range in the
                UK, with Vimto Minis and Squeezy products only available as no added sugar. We are committed to looking for healthier alternatives
                and a good example of this is our continued support of the Feel Good brand, which contains no added sugars and 100%
                natural ingredients"  (Nichols PLC 2019, para 1). </small></p>
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
  margin-top: 30px
}

.about-header{
  margin-left: 10%
}

.mobile-header{
  width:60%
}

h6{
  font-size: 1.2em;
  line-height: 1.5em
}
.about-text{
  width: 60%;
  margin-left: 20%;
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
  width:80%;
  margin-left: 40px
}

.side-bar.container {
  width:20%
}

.pattern{
  height: 1500px;
  position: relative
}

.right-bar{
  width:10%;
  height: 1500px;
  overflow: hidden;
  background-color: var(--beige-sidebar);
  float: right;
  position: relative
}

/*Paul's CSS for right-bar label*/
 .section-label{
  font-size: 1.5rem;
  text-transform: uppercase;
  position: absolute;
  bottom:400px;
  left: 50%;
  transform: translate(-50%, -100%) rotate(90deg);
  padding-right: 100px
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
  height: 10%;
  margin-top: 20px;
  padding-top: 30px
}

.consumer-info{
  margin-right: 70px;
  margin-bottom: 50px
}

</style>

