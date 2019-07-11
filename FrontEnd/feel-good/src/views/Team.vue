<template>
  <div class="team">
    Team
  </div>
</template>

<script>
export default {
  name: 'Team',
  props: {
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

</style>
