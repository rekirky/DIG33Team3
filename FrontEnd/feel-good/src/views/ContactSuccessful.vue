<template>
  <div class="contact-successful">
    <div class="row no-gutters">
      <div class="col-12 contact-successful-content">
        <img class="img-fluid logo" src="@/assets/img/logo_247.png" alt="feel good drinks logo">
        <h1>Thank You!</h1>
        <h2>We Appreciate your feedback!</h2>
        <router-link to="/home" tag="button">Return Home</router-link>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'ContactSuccessful',
  props: {
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">

  .contact-successful{
    padding-top: 10%;
  }

  .contact-successful-content{
    padding: 0px 40px;
  }

  .logo{
    height: 200px;
    padding: 20px;
  }

  @media only screen and (max-width: 1200px) {

    h1, h2 {
      font-size: 8vw !important;
    }

  }

</style>