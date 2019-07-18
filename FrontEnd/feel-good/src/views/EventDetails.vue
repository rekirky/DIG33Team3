<template>
  <div class="event-details">
    <div v-if="this.events.length != 0">
    <!-- If there are events, each one is added to the website -->
    <div v-for="(event, index) in events" :key="index">
      <!-- The presentation style is based on the event type, Specific components are swapped out for each-->
      <social-event v-if="event.type == 'social'" v-bind:event="event" :id="'event-detail-' + index"/>
      <video-event v-if="event.type == 'video'" v-bind:event="event" :id="'event-detail-' + index"/>
    </div>
  </div>
  </div>
</template>

<script>
//Import for vuex local storage
import { mapGetters } from 'vuex'
//Import of types to be accessed via despatches
import { GET_EVENTS } from '@/store/types'
//Import of components
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
    //Get event information when the page components is mounted to the application
    await this.$store.dispatch(GET_EVENTS)    
  }
}
</script>

<style scoped lang="scss">

</style>