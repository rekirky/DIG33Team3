<template>
  <div id="app">
    <nav-menu/>
    <router-view/>
  </div>
</template>

<script>
import NavMenu from '@/components/NavMenu.vue'
import Footer from '@/components/Footer.vue'

export default {
  name: 'App',
  components: {
    NavMenu
    //,
    //Footer
  }
}
</script>


<style lang="scss">

  @import "@/assets/css/general.scss";

</style>
