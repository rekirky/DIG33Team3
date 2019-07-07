<template>

  <div class="about">
    <header>
      <!-- Bootstrap classes to style elements -->
      <section class="about-header d-flex align-item-center text-center">       
      <div class=" container">
    <h2> THE HEART OF OUR COMPANY</h2>
     <h1>LET'S TALK ABOUT US</h1>
      </div>
      </section>
    </header>

    <article class="about-main"> 
      <Section class="about-text d-flex align-item-center text-center">
    <div class="container">
        <h3>Title text</h3>
        <p>paragraph text</p>
     </div>
      </Section>

    <Section class="about-images d-flex align-items-center"> 

      <div class="container">
        <img src="@/assets/img/sm_logo.png" alt="feel good drinks logo small">
      </div>

       <!--<div class="container">-->
        <!-- Bootstrap grid for image layout/breakpoints -->
      <div id="about-image-grid" class="">
        <div class="image-grid">
          <div class="row justify-content-center">
        <div class="col-12 col-sm-4 col-md-6 col-lg-6">
        <img src="@/assets/img/footprint.png" alt="footprint on beach image">
          </div>

        <div class="col-12 col-sm-4 col-md-6 col-lg-6">
        <img src="@/assets/img/family.png" alt="family at beach image">
          </div>

          <div class="col-12 col-sm-4 col-md-6 col-lg-6">
        <img src="@/assets/img/bottles_1.png" alt="multiple drink bottle image">
          </div> 

          <div class="col-12 col-sm-4 col-md-6 col-lg-6">     
        <img src="@/assets/img/beach.png" alt="aerial beach view image">
          </div>
          </div>
        </div>
        </div>
        <!--</div> -->
      </Section>

    </article>
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

</style>
