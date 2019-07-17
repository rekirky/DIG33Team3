<template>
<div class="our-foot-print">

 <article class="our-footprint">
    <div col class="right-bar img-fluid container">
      <img class="pattern" src="@/assets/img/patternside.png" alt="side-bar pattern">
        </div>    
       
<section class="footprint-main d-flex align-items-center text-center"> 
   <div class="footprint-side-logo"> 
    <div class="footprint-logo container">
      <img class="img-fluid" src="@/assets/img/sm_logo.png" alt="feel good drinks logo small">
        </div>
          </div> 
  <div class="footprint-bar">
    <div class="footprint-gif container">
      <img class="img-fluid float-left" src="@/assets/img/feet.gif" alt="footprint animation">
        </div>
          </div>
    <div class="footprint-overview"> 
      <div class="footprint-header d-flex align-items-center">       
        <div class="container text-center">
          <div class="row">
            <h1 class="text-light col-12">Our Footprint</h1>
              <div class="header-text col-12">
                <hr>
                  <h6 class="text-center col-12">This is how we are making a stand against plastic pollution.</h6>
                    </div>
                        </div>
                          </div>
                            </div>
                        

 <section class="footprint-info">
    <div class=" d-flex align-items-center">      
      <div class="container text-left">
        <div class="row">
          <div class="globe-text col-6"><p class="globe-item">How we are making a stand against plastic pollution. 
              The oceans of the Earth are in danger from the disastrous effects of plastics. 
              The Feel Good Drinks Co. has adopted a new sustainable packaging solution, 
              developed by world leading BillerudKorsnäs in Stockholm ( BillerudKorsnäs” 2019). </p>
              <h3 class="globe-text">The Paper Bottle Project </h3>
                <p class="globe-item">The Paper Bottle project has provided an opportunity for the Feel Good Drinks Co. to align 
               our packaging to be 100% fully bio-based. Our recyclable paper bottle, is a world-first according 
               to Earth Buddies (Geronimo 2018) and the catalyst for our exciting and positive change.</p>
               <p class="text-right"><b>The most exciting fact is that this bottle is 100% biodegradable and recyclable.</b></p>
                  </div>
                    <div class="globe col-6">      
                      <img class="img-fluid" src="@/assets/img/globe.png" alt="global plastic pollution image">
                        </div>          
                          </div>    
                            </div>
                              </div>
        </section> 
      </div> <!--end footprint overview-->
   </section><!--end footprint main-->

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
  background-color: var(--blue-primary);
  height: 220px;
  margin-top: 0px;
  padding-bottom: 30px;
}

.header-text{ 
  width: 50%;
}

h1{
 text-align: center;
 padding-top: 20px;
}

hr{
  border: 1px solid white;
  width: 60%;
  margin-bottom: 20px;
  margin-top: 0px
}

.footprint-info{
  width:100%;
  background-color: var(--blue-secondary);
  height: 550px
}

.footprint-bar{
  width:20%
}

.right-bar{
  width:10%;
  height: 1500px;
  background-color: var(--beige-sidebar);
  float: right;
}
.pattern{
  height: 1500px;
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
 line-height: 1.4;
}

h3.globe-text{
  color: var(--blue-primary);
  font-size: 0.9em;
  padding-top: 10px;
  padding-bottom: 10px
}

.globe{
  margin-top:60px;
}

img.globe{
  padding:50px;
  float: left
}

}

}

</style>