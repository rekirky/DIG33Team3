<template>
  <div class="event-details">
    <div v-if="this.events.length != 0">
    <div v-for="(event, index) in events" :key="index">
      <social-event v-if="event.type == 'social'" v-bind:event="event" :id="'event-' + index"/>
      <video-event v-if="event.type == 'video'" v-bind:event="event" :id="'event-' + index"/>
    </div>
  </div>
  </div>
</template>

<script>
import { mapGetters } from 'vuex'
import { GET_EVENTS } from '@/store/types'
import SocialEvent from '@/components/SocialEvent.vue'
import VideoEvent from '@/components/VideoEvent.vue'

export default {
  name: 'ProductDetails',
  components:{
    SocialEvent,
    VideoEvent
  },
  computed:{
    ...mapGetters({
      events: "getEvents"
    })
  },
  async mounted(){
    await this.$store.dispatch(GET_EVENTS)
    
  }
}
</script>

<style scoped lang="scss">

</style>