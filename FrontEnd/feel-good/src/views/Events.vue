<template>
  <div class="events">
    Events
  </div>
</template>

<script>
export default {
  name: 'Events',
  props: {
  },
  mounted () {
    var points = document.getElementsByClassName("bullet-point active")
    while(points.length > 0){
      points[0].classList.remove('active');
    }
    var activePoint = document.getElementById("events-link")
    activePoint.getElementsByClassName("bullet-point")[0].classList.toggle("active")
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">

</style>
