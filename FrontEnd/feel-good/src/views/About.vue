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
        <!-- Bootstrap flex box -->
      <Section class="about-text d-flex align-item-center text-center">
         <!-- Bootstrap container -->
    <div class="container">
      <h5 class="lead">Title text</h5>
      <p>paragraph text</p>
      </div>
    </Section>

    <Section class="about-images d-flex align-item-center"> 
     <div class="about-logo container">
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
        <img class="img-fluid"src="@/assets/img/bottles_1.png" alt="multiple drink bottle image">
          </div> 
        <div class="about-image col-6">     
        <img class="img-fluid" src="@/assets/img/beach.png" alt="aerial beach view image">
          </div>
            </div>
              </div>
                </div>
                  </div>
        <div class="side-bar container">
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
            <p class="text-light text-left">Buy today</p>
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
  color:  var(--orange-primary)
}

.about-header {
  margin-top: 30px;
}

.about-text{
margin-top: 20px
}
.about-logo.container {
  margin-top: 40%;
  width: 20%;
  border: 10px
}

.image-grid.container {
  width:60%
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

