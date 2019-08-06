<template>
  <div class="home">
    <!-- Depending on if the screen size is Mobile or Desktop the corresponding component is rendered-->
    <div v-if="mobile">
      <home-mobile/>
    </div>
    <div v-else>
      <home-desktop/>
    </div>

  </div>
</template>

<script>
//Import of Home mobile and desktop components
import HomeDesktop from '@/components/HomeDesktop.vue'
import HomeMobile from '@/components/HomeMobile.vue'

export default {
  name: 'home',
  //Registering Components
  components:{
    HomeDesktop,
    HomeMobile
  },
  //Component Data holding the reference if the screen is mobile or desktop
  data () {
    return{
      mobile: Boolean
    }
  },
  created() {
    //Check the width of the screen
    window.addEventListener('resize', this.resize)
    this.resize();
  },
  destroyed() {
    //Removes the resize listener
    window.removeEventListener('resize', this.resize)
  },
  methods: {
    //Check the width of the screen and re-render is needed
    resize() {
      if(window.innerWidth < 1200){
        this.mobile = true
      }
      else{
        this.mobile = false
      }
    }
  }
}


</script>


<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
  


</style>