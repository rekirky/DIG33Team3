<template>
  <div class="home">
    <div v-if="mobile">
      <home-mobile/>
    </div>
    <div v-else>
      <home-desktop/>
    </div>

  </div>
</template>

<script>
import HomeDesktop from '@/components/HomeDesktop.vue'
import HomeMobile from '@/components/HomeMobile.vue'

export default {
  name: 'home',
  components:{
    HomeDesktop,
    HomeMobile
  },
  data () {
    return{
      mobile: Boolean
    }
  },
  created() {
    window.addEventListener('resize', this.resize)
    this.resize();
  },
  destroyed() {
    window.removeEventListener('resize', this.resize)
  },
  methods: {
    resize() {
      if(window.innerWidth < 1025){
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