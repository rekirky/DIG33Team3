<template>

<!--see reference page for 3rd party content references-->

<div class="our-foot-print">
  <!--modified Paul's html for mobile view header title and logo-->
  <div class="row no-gutters d-lg-none d-md-none">
      <div class="col-12 top-bar"></div>
       <div class="col-2"></div>
         <div class="col-8 title">THE FEEL GOOD DRINK CO</div>
           <div class="col-2 logo img-fluid"><img src="@/assets/img/FGD_Logo_full.png" alt="feel good drinks logo"></div>
            </div>

 <!-- bootstrap and custom classes to style elements -->
 <article class="our-footprint">
   <!--display property used to hide right sidebar on mobile and tablet view using bootstrap breakpoints-->
     <div class="right-bar d-none d-lg-block img-fluid container">
      <img class="pattern" src="@/assets/img/patternside.png" alt="side-bar pattern">
        <div class="section-label">Our Global Footprint</div>
         </div>    
<!--footprint main section using responsive bootstrap flex containers-->
<section class="footprint-main d-flex align-items-center text-center"> 
   <div class="footprint-side-logo d-none d-lg-block"> 
    <div class="footprint-logo container">
      <img class="img-fluid" src="@/assets/img/sm_logo.png" alt="feel good drinks logo small">
        </div>
          </div> 
  <!--left sidebar footprint animation-->     
  <div class="footprint-bar d-none d-lg-block d-md-block">
    <div class="footprint-gif container">
      <img class="img-fluid float-left" src="@/assets/img/feet.gif" alt="footprint animation">
        </div>
          </div>

    <div class="footprint-overview"> 
      <div class="footprint-header d-flex align-items-center">       
        <div class="container text-center">
          <div class="row">
            <h1 class="text-light col-12"><small>Our Footprint</small></h1>
              <div class="header-text col-12">
                <hr>
                  <h6 class="text-center col-12">This is how we are making a stand against plastic pollution.</h6>
                    </div>
                        </div>
                          </div>
                            </div>

 <!--global footprint information section-->   
 <section class="footprint-info">
    <div class=" d-flex align-items-center">      
      <div class="container">
        <div class="row">
         <!--bootstrap grid used to stack columns based on breakpoints/screen size-->
          <div class="globe-text col-lg-6"><p class="globe-item text-sm-justify text-lg-left">How we are making a stand against plastic pollution. 
              The oceans of the Earth are in danger from the disastrous effects of plastics. 
              The Feel Good Drinks Co. has adopted a new sustainable packaging solution, 
              developed by world-leading BillerudKorsnäs in Stockholm (BillerudKorsnäs 2019). </p>
              <h3 class="globe-text">The Paper Bottle Project </h3>
                <p class="globe-item text-lg-left">The Paper Bottle project has provided an opportunity for the Feel Good Drinks Co. to align 
               our packaging to be 100% fully bio-based. Our recyclable paper bottle is a world-first according 
               to Earth Buddies (Geronimo 2018) and the catalyst for our exciting and positive change.</p>
               <!--bootstrap css used to align text based on breakpoints/screen size-->
               <p class="text-lg-right"><b>The most exciting fact is that this bottle is 100% biodegradable and recyclable.</b></p>
                  </div>
                    <div class="globe col-lg-6">      
                      <div id="earth">
                      <div><h3 class="globe">All the trash in the ocean could circle the Earth 425 times. </h3>
		                    </div>
                          </div>	            
                        </div>          
                          </div>   
                            </div>
                              </div>
        </section> <!--end footprint info section-->
      </div> <!--end footprint overview-->
   </section> <!--end footprint main-->

  <!--plastic alternative bottle main section-->
  <section class="bottles-main"> 
    <div class="paper-bottles d-flex align-items-left container">       
 	    <div class="row">
       <div class="col-12">
         <h5 class="spec-header text-left d-none d-lg-block"><small><b> How we went Green</b></small></h5>
           </div>

    <!--mobile and tablet bottle specs-->
    <div class="d-lg-none"> 
      <div class="container">
        <div class="col-12">
         <hr class="mobile-line text-center">
         <h5><b> How we went Green</b></h5>
           </div>
      <div>
       <div class="container">
        <div class="row">
          <div class="col-4 logo-mobile img-fluid align-self-end"><img src="@/assets/img/sm_logo.png" alt="feel good drinks logo"></div>
           <div>
	           <img class="img-fluid col" src="@/assets/img/bottles/Paper-Bottle_apple_499px.png" alt="apple flavour paper bootle image">
              </div>
                </div> <!--end mobile bottle specs row-->
                  </div>
              
 	         <div class="specs-mobile d-lg-none">
            <p class="specs text-justify"><b>The bottles are made from 100% organic and renewable moulded fibre. They are designed to look 
              beautiful and be functional with a structural integrity comparable to a plastic bottles.</b></p>
            <hr class="mobile-line text-center">
             </div> 
              </div> 
              <div class="paper-bottle-mobile d-lg-none">
              <div class="col">
                <h5 class="bottle-text text-left">The size of it?</h5>
                  <p class="plastic-free text-justify">The oceans and coastlines of the Earth are in threat of plastic pollution.
                    As plastic is lighter than water it floats quite easily on the currents and eddies, 
                    driven by wind and sun. The plastics don't only sit on the surface of the ocean,
                    they move in three-dimensional motion rising from the deepest parts of the ocean and 
                    affecting the quality of marine life and threatening to endanger many marine species (Plastic Adrift 2019).</p>
                <h5 class="bottle-text text-left">How we have changed our packaging</h5>
                  <p class="plastic-free text-justify">The structure of the bottles is developed using virgin pulp harvested from Scandinavian forests (Geronimo 2018). 
                    The 100% organic and renewable moulded fibre (derived from bamboo, bulrushes, and sugar cane) forms the outside part of the bottle and 
                    the inner lining is coated in recyclable resins.</p>
                  <p class="plastic-free text-justify">The bottle's design properties are developed from a pulp recipe by BillerudKorsnäs and can withstand high pressures. The bottles are 100% recyclable and this makes us Feel Good. </p>
                  <hr class="mobile-line-blue text-center">
                    </div>
                      </div>
            </div>
             </div> <!--end mobile and tablet bottle specs-->
    
           <!--desktop view bottle specs-->
            <div class="bottle-image d-none d-lg-block">
	           <img class="logo img-fluid float-right" src="@/assets/img/bottles/Paper-Bottle_apple_499px.png" alt="apple flavour paper bootle image">
              </div>
            <div class="bottle-specifications d-none d-lg-block">
             <div class="container">
              <div class="row">
               <div class="info-tag-lines col align-self-end">
                  <hr class="info-lines">
                  <hr class="info-lines">
                  <hr class="info-lines">
                  <hr class="info-lines">
                    </div>
                <div class="info-tag-text col align-self-end">
                  <h6 class="specs"><small><b>The 100% organic and renewable moulded fibre</b></small></h6>
                  <h6 class="specs"><small><b>Bottle is designed to look beautiful and functional with patterned paper design</b></small></h6>
                  <h6 class="specs"><small><b>The structural integrity of the bottle is comparable to plastic bottle</b></small></h6>
                  <h6 class="specs"><small><b>Paper label with ecofriendly printable coating</b></small></h6>
                    </div>
                      </div>
                         </div> <!--end bottle info tags row-->
                          </div> <!--end desktop view bottle specs-->

            <div class="paper-bottle-text text-left d-none d-lg-block">
              <div class="col">
              <h5 class="bottle-text">The size of it?</h5>
                <p class="plastic-free">The oceans and coastlines of the Earth are in threat of plastic pollution.
                  As plastic is lighter than water it floats quite easily on the currents and eddies, 
                  driven by wind and sun. The plastics don't only sit on the surface of the ocean,
                  they move in three-dimensional motion rising from the deepest parts of the ocean and 
                  affecting the quality of marine life and threatening to endanger many marine species (Plastic Adrift 2019).</p>
              <h5 class="bottle-text">How we have changed our packaging</h5>
                <p class="plastic-free">The structure of the bottles is developed using virgin pulp harvested from Scandinavian forests (Geronimo 2018). 
                  The 100% organic and renewable moulded fibre (derived from bamboo, bulrushes, and sugar cane) forms the outside part of the bottle and 
                  the inner lining is coated in recyclable resins.</p>
                <p class="plastic-free">The bottle's design properties are developed from a pulp recipe by BillerudKorsnäs and can withstand high pressures. The bottles are 100% recyclable and this makes us Feel Good. </p>
                  </div> 
                   </div>

        </div> <!--end main row-->
       </div> <!--end paper bottles container-->
    </section> <!--end plastic alternative bottle main section-->

 </article> <!--end our footprint article-->
</div> <!--end our footprint page component-->
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
  background-color: var(--blue-primary);
  height: 270px;
  margin-top: 0px;
  padding-bottom: 30px;
}

.header-text{ 
  padding-left: 20px;
  padding-right: 20px
}

h1{
 text-align: center;
 padding-top: 20px;
}

/*Paul's CSS for mobile view header title and logo*/
.title{
  font-size: 4.5vw;
  font-weight: 700;
  padding-top: 2.5rem;
  color: var(--orange-primary);
  }

.logo{
  padding-right: 1rem !important;
  }

.logo>img{
  margin-top: 1rem;
  max-width: 125px;
  width: 15vw;
  }

hr{
  border: 1px solid white;
  width: 50%;
  margin-bottom: 20px;
  margin-top: 0px
}

.footprint-info{
  width:100%;
  background-color: var(--blue-secondary);
  height: 60%
}

.footprint-bar{
  width:20%;
  padding: 0px;
  margin: 0px
}

.pattern{
  height: 1500px;
  float: right;
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
  width: 500px;
  position: absolute;
  bottom: 790px;
  left: 50%;
  transform: translate(-50%, -100%) rotate(90deg);
  padding-right: 100px
  } 

.footprint-side-logo {
  padding-left: 10px;
  margin-top: 660px
}

.footprint-logo.container {
  border: 10px
}

.globe-text{
  margin-top:10px;
  padding:30px;
}

p{
 color: var(--blue-primary);
 line-height: 1.4
}

h3.globe-text{
  color: var(--blue-primary);
  font-size: 0.9em;
  padding-top: 10px;
  padding-bottom: 10px
}

img.globe{
  padding:40px;
  float: left
}

/*Spinning globe animation*/

/*Deb's code to style globe statistic text */
h3.globe{
text-align: center; 
vertical-align: middle; 
color: #fff;
padding: 55px;
text-shadow: 3px 3px 6px #000;
}

/*Start code snippet and comments for globe spin animation sourced by Deb from W3Bits.(2019). Create a 3d Earth with Rotating Animation
 with CSS. [online] Available at: https://w3bits.com/css-earth/ [Accessed 28 Jul. 2019].*/

#earth {
  /* [1] Allow it to contain the absolutely positions pseudo-elements*/
  position: relative;

  /* [2] Set-up the dimensions and spacing */
  width: 350px;
  height: 350px;
  margin: 3em auto;

  /* [3] Prepare the animation effects */
  transition: transform 200ms linear;
  animation: rotate 60s linear infinite; /* This is going to be defined in the next step */

  /* [4] Tweak the appearance, and give it a nice background i.e. the world map */
  color: #000;
  border-radius: 50%;
  background: url(../assets/img/earth.png) 0 0 repeat;
  box-shadow: inset 20px 0 80px 6px rgba(0, 0, 0, 1);

  /* [5] Position things in a 3d space */
  transform-style: preserve-3d;
}

#earth:before {
  /* [1] Again, break the flow to show this as an overlay */
  position: absolute;
  top: 0;
  left: 0;

  /* [2] Again, give it all the available space */
  width: 100%;
  height: 100%;

  /* [3] Duh. */
  content: '';

  /* [4] Add some shape and overlay effect to it */
  opacity: .2;
  border-radius: 50%;
  background: radial-gradient(circle at 100px 100px #3290d1 #000);
}

/*Jon's modified keyframes to smooth globe spin*/
@keyframes rotate {
  0% { background-position: 0 0; }
  100% {   background-position: 7000px 0; }
}
/*End code snippet and comments for globe spin animation sourced by Deb from W3Bits.(2019). Create a 3d Earth with Rotating Animation
 with CSS. [online] Available at: https://w3bits.com/css-earth/ [Accessed 28 Jul. 2019].*/

/*Plastic alternative bottle information section styling*/
.bottles.main{
  width:100%
}

.paper-bottle-text{
  width:50%;
  margin-left: 20px;
  margin-bottom: 50px;
  padding-right: 20px
}

p.plastic-free{
  margin-top: 20px;
}

h5.spec-header{
  color: var(--green-primary);
  margin-top: 10px;
  margin-left: 110px;
  margin-bottom: 0px
}

.spec-header{
  width: 30%;
}

h5{
  color: var(--green-secondary);
}

h5.bottle-text{
  color: var(--blue-primary);
}

.bottle-specifications{
  width:28%;
}

.specs-mobile{
  padding: 20px;
  padding-bottom: 0px
}

.paper-bottle-mobile{
padding: 20px
}

.logo-mobile>img{
  max-width: 125px;
  width: 20vw;
  margin-bottom: 30%;
  margin-left:20%
  }

  hr.mobile-line{
  border: 1.5px solid var(--green-secondary);
  width: 100%;
  margin-top: 5%;
}
  
hr.mobile-line-blue{
  border: 1.5px solid var(--blue-primary);
  width: 100%;
  margin-top: 5%;
}
  
hr.info-lines{
  width: 100%;
  border: 1px solid var(--green-secondary);
  margin: 60px;
  margin-left:10px;
  float: left
}

.bottle-image{
  width:20%
}

h6.specs{
  line-height: 1.1;
  margin-top: 35px;
  margin-bottom: 25px;
  color: var(--green-primary);
  text-align: left
}

p.specs{
  line-height: 1.3;
  margin-bottom: 25px;
  color: var(--green-primary);
  text-align: left
}
</style>
