<template>
  <div class="social-event">
    <div class="row no-gutters">
      <div class="col-2">
        <div class="left-gutter">
        </div>
      </div>
      <!-- Social Event Informaiton -->
      <div class="col-9 center-content" :style="{ backgroundImage: 'url(' + require(`@/assets/img/events/${event.bgImage}`) + ')' }">
        <h4>{{event.subTitle}}</h4>
        <h1>{{event.title}}</h1>
        <div class="event-details-container" :style="'background-color: ' + event.accentColor">
          <h4>{{event.tagline}}</h4>
          <p>{{event.details}}</p>
          <router-link :to="this.event.register" tag="button">Register Now!</router-link>
        </div>
      </div>
      <div class="col-1">
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
  name: 'SocialEvent',
  props:{
    event: Object
  }
}
</script>

<style scoped lang="scss">

  .social-event{
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
    width: 400%;
    transform: translate(-50%, -100%) rotate(90deg);
    padding-right: 100px;
    text-align: left;
  }

  .center-content{
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    padding: 40px;
  }

  .center-content p, h1, h4{
    margin: 20px 10px 30px 10px;
    color: white;
  }

  .event-details-container{
    margin: 20px 5% 20px 40%;
    padding: 30px;
  }

</style>