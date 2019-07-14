<template>
<div class="our-foot-print">

 <article class="our-footprint">

  <div class="right-bar container">
    <img src="@/assets/img/patternside.png">
        </div>    
         
  <section class="footprint-main d-flex align-item-center text-center"> 
      <!-- Bootstrap and custom classes to style elements -->
   <div class="footprint-side-logo"> 
    <div class="footprint-logo container">
      <img class="img-fluid float-left" src="@/assets/img/sm_logo.png" alt="feel good drinks logo small">
          </div>
           </div> 
  <div class="footprint-bar">
    <div class="footprint-gif container">
      <img class="img-fluid float-left" src="@/assets/img/feet.gif" alt="footprint animation">
        </div>
          </div>

  <div class="footprint-overview"> 
    <div class="footprint-header">       
      <div class="container">
        <div class="row">
          <h1 class="text-light text-center">Our Footprint</h1>
            <div class="header-text col-12">
             <hr>
               <h6 class="text-center col-12">Footprint text-content</h6>
                 </div>
                    </div>
                      </div>
                        </div>

 <section class="footprint-info">
    <div class=" d-flex align-item-center">      
      <div class="container text-center">
        <div class="row">
          <div class="globe-text col-6"><p>Plastic pollution text</p>
           </div>
            <div class="globe col-6">
              <img class="img-fluid mx-auto" src="@/assets/img/globe.png" alt="global plastic pollution image">
               </div>
                 </div>    
                  </div>
                     </div>
                      </section> 
      </div> <!--end footprint overview-->
      </section><!--end footprint main-->

    
    <section class="map">
      <div class="world-map">
        <div class=" map-content container text-center">
          <div class="row">
            <div class="col-6">
             </div>
        <div class="col-6">
          </div>
            </div>
              </div>
    </div>  
    </section>   

       <section class="bottles"> 
         <div></div>
         </section>

 </article>
   
</div>
</template>

<script>
export default {
  name: 'OurFootPrint',
  props: {
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">

.footprint-header {
  width: 60;
  background-color: var(--blue-primary);
  height: 200px
}

.header-text{ 
  width: 50%
}

h1{
 text-align: center;
 padding-top: 20px;
 padding-left:120px
}

hr{
  border: 1px solid white;
   width:80% 
}

.footprint-info{
width:100%;
background-color: var(--blue-secondary);
height: 570px
}

.footprint-bar{
width:20%
}

.right-bar{
width:10%;
background-color: var(--beige-sidebar);
float: right
}

.footprint-side-logo {
  padding-left: 10px;
  margin-top: 660px
}

.footprint-logo.container {
  border: 10px
}

.globe-text{
  padding:30px
}

p{
 color: var(--blue-primary)
}

.globe{
  padding:30px
}

.world-map{
  /* percentage of viewport height*/
  height: 100vh;
  /*Image size to macth container size*/
   background-size: cover;
  background-image: url('../assets/img/worldmap_base.png');
  background-repeat: no-repeat
}

</style>
