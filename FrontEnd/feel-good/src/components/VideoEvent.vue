<template>
  <div class="video-event">
    <div class="row no-gutters">
      <div class="col-2 hidden-mobile">
        <div class="left-gutter">
        </div>
      </div>
      <!-- Event Content container -->
      <div class="col-12 col-xl-9 center-content" :style="{ backgroundImage: 'url(' + require(`@/assets/img/events/${event.bgImage}`) + ')' }">
        <div class="">
          <img :src="require(`@/assets/img/events/${event.logoImage}`)" :alt="event.title" class="d-block">
        </div>
        <div>
          <h3>{{event.tagline}}</h3>
        </div>

        <!-- Embed Video Player -->
        <div class="video-player-container">
          <iframe class="video-player" :src="event.video" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div>
          <p>{{event.details}}</p>
        </div>
      </div>
      <div class="col-1 hidden-mobile">
        <div class="right-gutter">
          <img src="@/assets/img/patternside.png">
          <div class="section-label">{{event.title}}</div>
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
  }
}
</script>

<style scoped lang="scss">

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
    width: 400px;
    transform: translate(-50%, -100%) rotate(90deg);
    padding-right: 100px;
  }

  .center-content{
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    padding: 60px;
  }

  .video-player-container{
    width: 60%;
    height: 60%;
    margin: auto;
  }

  .video-player{
    width: 100%;
    height: 100%;
  }

  .center-content p, .center-content h3{
    margin: 20px 100px 30px 100px;
  }

  @media only screen and (max-width: 1200px) {
    
    .hidden-mobile{
      display: none;
    }

    .center-content{
      min-height: 900px;
      height: 60vh;
      padding: 10px;
    }

    h3{
      font-size: 5vw !important;
      margin: 3vw !important;
      text-align: center;
    }

    p{
      margin: 1vw 6vw !important;
      text-align: justify;
    }

    .video-player-container{
      width: 80%;
      max-height: 30vh;
      margin: auto;
    }

    .center-content img{
      max-width: 70vw;
    }

  }

</style>