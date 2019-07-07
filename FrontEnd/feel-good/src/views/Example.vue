<template>
  <div class="home">
    Home
    <div>
      <router-link to="about" tag="button" class="btn btn-primary">About</router-link>
      <router-link to="contact" tag="button" class="btn btn-primary">Contact</router-link>
      <router-link to="events" tag="button" class="btn btn-primary">Events</router-link>
      <router-link to="footprint" tag="button" class="btn btn-primary">Our Foot Print</router-link>
      <router-link to="products" tag="button" class="btn btn-primary">Products</router-link>
      <router-link to="policy" tag="button" class="btn btn-primary">Policy</router-link>
      <router-link to="sitemap" tag="button" class="btn btn-primary">Site Map</router-link>
      <router-link to="references" tag="button" class="btn btn-primary">References</router-link>
      <router-link to="team" tag="button" class="btn btn-primary">Team</router-link>
    </div>
    <div>
      <p>This is a paragraph.</p>
      <button id="toggle" class="btn btn-primary">Toggle Me</button>
    </div>

  </div>
</template>

<script>
// @ is an alias to /src
//import HelloWorld from '@/components/HelloWorld.vue'

export default {
  name: 'home',
  components: {

  },
  mounted () {
    //Jquery Example
    //mounted basically replaces you $(document).ready(). If you have ESLint enable to might be getting a warning for $ not being defined but it is defined globally
    $("#toggle").click(function(){
      $("p").toggle();
    });
  }
}


</script>


<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
  button{
    margin:1em;
  }
</style>