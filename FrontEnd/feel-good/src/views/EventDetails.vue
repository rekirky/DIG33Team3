<template>
  <div class="event-details">
    Event Detials of: {{eventId}}
  </div>
</template>

<script>
export default {
  name: 'EventDetails',
  props: {
  },
  data () {
    return{
      eventId: this.$route.params.eventId
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">

</style>