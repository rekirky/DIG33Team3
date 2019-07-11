<template>
  <div class="not-found">
    <div class="row no-gutters">
      <div class="col-2 offset-2">
        <img class="img-fluid bottle left-bottle" src="@/assets/img/bottles/Paper-Bottle_passion_499px.png">
      </div>
      <div class="col-12 col-lg-4 not-found-content">
        <img class="img-fluid logo" src="@/assets/img/logo_247.png" alt="feel good drinks logo">
        <h1>Oh No!</h1>
        <h2>You went the wrong way</h2>
        <p>Click the Fancy Orange Button in the Top Right, to get back on Track.</p>
      </div>
      <div class="col-2">
        <img class="img-fluid bottle right-bottle" src="@/assets/img/bottles/Paper-Bottle_pom_499.png">
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Contact',
  props: {
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">

  .not-found{
    padding-top: 10%;
  }

  .left-bottle{
    transform: rotate(-10deg)
  }

  .right-bottle{
    transform: rotate(10deg)
  }

  .not-found-content{
    padding: 0px 40px;
  }

  @media only screen and (max-width: 1000px) {
  .bottle {
    display: none;
  }

  .logo{
    height: 150px;
  }

}

</style>