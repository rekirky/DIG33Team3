<template>
  <div class="team">
    <!-- Bootstrap and custom classes to style elements -->
    <section class="team-list text-center">
      <div class="container">
      <!--mobile and tablet view header logo display-->
        <div class="mobile-header text-center container">
          <a href="https://endgame-feelgood.com/"> <img class="img-fluid d-lg-none mx-auto" src="@/assets/img/logo_247.png" 
          alt="feel good drinks logo"></a>
        </div>
        <h2>Team Listing</h2>
        <h6> Meet the development team</h6>
      </div>
    <div class="field" 
      onmouseover="document.getElementById('kimd').style.display='block'; document.getElementById('default').style.display='none';" 
      onmouseout="document.getElementById('kimd').style.display='none'; document.getElementById('default').style.display='block'">
      <h3 class="name" id="kim">Kim Hamilton</h3>
    </div>
    <div class="field" 
      onmouseover="document.getElementById('debd').style.display='block'; document.getElementById('default').style.display='none';" 
      onmouseout="document.getElementById('debd').style.display='none'; document.getElementById('default').style.display='block'">
      <h3 class="name" id="deborah">Deborah Brown</h3>
    </div>
    <div class="field" 
      onmouseover="document.getElementById('pauld').style.display='block'; document.getElementById('default').style.display='none';" 
      onmouseout="document.getElementById('pauld').style.display='none'; document.getElementById('default').style.display='block'">
      <h3 class="name" id="paul">Paul Weston</h3>
    </div>
    <div class="field" 
      onmouseover="document.getElementById('jond').style.display='block'; document.getElementById('default').style.display='none';" 
      onmouseout="document.getElementById('jond').style.display='none'; document.getElementById('default').style.display='block'">
      <h3 class="name" id="jon">Jon Kirkwood</h3>
    </div>
    <div class="details" id="default">
      <svg viewBox="0 0 240 80" xmlns="http://www.w3.org/2000/svg">
        <text x="20" y="25" class="small">Welcome!</text>
        <text x="20" y="45" class="small">Select A Team Member</text>
        <text x="20" y="65" class="small">To Learn More</text>
      </svg>
    </div>
    <div class="details" id="jond">
      <svg viewBox="0 0 240 80" xmlns="http://www.w3.org/2000/svg">
        <text x="20" y="35" class="small">Jon Kirkwood</text>
        <text x="30" y="55" class="small">is</text>
        <text x="40" y="55" class="Rrrrr">BackEnd Development</text>
      </svg>
      <img class="logo top left" src="@/assets/img/logo/github.png">
      <img class="logo top right" src="@/assets/img/logo/slack.png">
      <img class="logo mid right" src="@/assets/img/logo/netlify.png">
    </div>
    <div class="details" id="pauld">
      <svg viewBox="0 0 240 80" xmlns="http://www.w3.org/2000/svg">
        <text x="20" y="35" class="small">Paul Weston</text>
        <text x="30" y="55" class="small">is</text>
        <text x="40" y="55" class="Rrrrr">BackEnd Development</text>
        <text x="40" y="75" class="Rrrrr">FrontEnd Developer</text>
      </svg>
      <img class="logo top left" src="@/assets/img/logo/vue.png">
      <img class="logo mid left" src="@/assets/img/logo/html.png">
      <img class="logo top right" src="@/assets/img/logo/slack.png">
    </div>
    <div class="details" id='kimd'>
      <svg viewBox="0 0 240 80" xmlns="http://www.w3.org/2000/svg">
        <text x="20" y="35" class="small">Kim Hamilton</text>
        <text x="30" y="55" class="small">is</text>
        <text x="40" y="55" class="Rrrrr">FrontEnd Development</text>
        <text x="40" y="75" class="Rrrrr">Project Manager</text>
      </svg>
      <img class="logo top right" src="@/assets/img/logo/slack.png">
      <img class="logo top left" src="@/assets/img/logo/vue.png">
      <img class="logo mid right" src="@/assets/img/logo/trello.png">
    </div>
    <div class="details" id="debd">
      <svg viewBox="0 0 240 80" xmlns="http://www.w3.org/2000/svg">
        <text x="20" y="35" class="small">Deborah Brown</text>
        <text x="30" y="55" class="small">is</text>
        <text x="40" y="55" class="Rrrrr">FrontEnd Development</text>
        <text x="40" y="75" class="Rrrrr">UX Design</text>
      </svg>
      <img class="logo top right" src="@/assets/img/logo/slack.png">
      <img class="logo top left" src="@/assets/img/logo/vue.png">
      <img class="logo mid left" src="@/assets/img/logo/html.png">
    </div>
  </section>
</div>
</template>

<script>
export default {
  name: 'Team',
  props: {
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">

 #default {
   display:block;
 }

 .details {
   display:none;
 }

.logo {
  height: 100px;
  width: auto;
  max-width:250px;
    -webkit-animation: fadein 3s; /* Safari, Chrome and Opera > 12.1 */
  -moz-animation: fadein 3s; /* Firefox < 16 */
  -ms-animation: fadein 3s; /* Internet Explorer */
  -o-animation: fadein 3s; /* Opera < 12.1 */
  animation: fadein 3s;   
}

@keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

img.top {
  position: fixed;
  top:20%;
}

img.mid {
  position: fixed;
  top: 35%;
}

img.left {
  left:20%;
 }

 img.right {
   right:10%;
 }

.name:hover  {
  color: var(--orange-primary);
}

html,svg { 
  height:100%;
 }

.small { 
    position: absolute;
    left: -100px;
    width: 100px;
    height: 100px;
}  

.Rrrrr { 
    font: italic 20px serif; 
    fill: red; }

.team-list{
    margin: 0 20% 10% 25%
}

h2 {
  color: var(--orange-primary);
  font-weight: bold;
  text-align: center;
  margin-top: 40px;
}

h3 {
  font-weight: bold;
  text-align: center;
  margin-top: 30px  
}

h3.notice-header{
 color: var(--orange-primary);
 text-align: center;
}
</style>
