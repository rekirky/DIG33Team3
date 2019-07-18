<template>
  <div class="video-event">
    <div class="row no-gutters">
      <div class="col-2">
        <div class="left-gutter">
        </div>
      </div>
      <div class="col-9 center-content" :style="{ backgroundImage: 'url(' + require(`@/assets/img/events/${event.bgImage}`) + ')' }">
        <div>
          <iframe width="560" height="315" :src="event.video" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-1">
        <div class="right-gutter">
          <img src="@/assets/img/patternside.png">
          <div class="section-label">Events</div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>

export default {
  name: 'VideoEvent',
  props:{
    event: Object
  },
  computed:{
  }
}
</script>

<style scoped lang="scss">

  .video-event{
    height: 100vh;
  }

  .right-gutter{
    min-height: 100vh;
    background-color: var(--beige-sidebar);
    overflow: hidden;
    position: relative;
  }

  .right-gutter>img{
    display: block;
    position: absolute;
    top: 50%;
    left: 50%;
    min-height: 100%;
    min-width: 100%;
    transform: translate(-50%, -50%);
  }

  .section-label{
    font-size: 1.5rem;
    text-transform: uppercase;
    position: absolute;
    bottom:0;
    left: 50%;
    transform: translate(-50%, -100%) rotate(90deg);
    padding-right: 100px;
  }

  .center-content{
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }

</style>