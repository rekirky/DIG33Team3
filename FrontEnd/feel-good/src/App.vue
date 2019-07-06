<template>
  <div id="app">
    <nav-menu/>
    <div class="page-container">
        <router-view/>
    </div>
    <fg-footer/>
  </div>
</template>

<script>
import NavMenu from '@/components/NavMenu.vue'
import FgFooter from '@/components/Footer.vue'

export default {
  name: 'App',
  components: {
    NavMenu,
    FgFooter
  }
}
</script>


<style lang="scss">

  @import "@/assets/css/general.scss";

  .page-container{
    min-height: calc(100vh - 160px);
  }

</style>
