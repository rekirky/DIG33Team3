<template>
  <div class="contact">
    <div class="row">
      <div class="col-2 hidden-mobile">
        <div class="left-gutter">
          <img src="@/assets/img/fgCo.png">
        </div>
      </div>
      <div class="col-12 col-lg-9">
        <div class="row">
          <div class="title-container">
            <h1>contact us</h1>
          </div>
        </div>
        <div class="center-content">
          <div class="row no-gutters">
            <div class="col-12 col-lg-6">
              <div class="card">
                <h5>What's on Your Mind!</h5>
                <p class="tagline">Here at Feel Good Drink Co we love feedback!</p>
                <p>Good or Bad we are always interested in hearing from 
                   our customers and learning about their experience with 
                   our products. Feel free to send us what you love about our products
                   and what we could be improving.
                </p>
                <div class="bottle left-bottle">
                  <img src="@/assets/img/bottles/Paper-Bottle_orange_499px.png">
                </div>
                <div class="bottle right-bottle">
                  <img src="@/assets/img/bottles/Paper-Bottle_crnlime_499px.png">
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-6">
              <div class="card">
                <h5>Send us a Message!</h5>
                <form>
                  <div class="form-group">
                    <label for="emailField">Email</label>
                    <input type="text" class="form-control" id="emailField" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="nameField">Name</label>
                    <input type="text" class="form-control" id="nameField" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label for="messageField">Message</label>
                    <textarea class="form-control" id="messageField"></textarea>
                  </div>
                  <button type="submit" class="btn btn-orange">Contact Us</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-1 hidden-mobile">
        <div class="right-gutter">
          <img src="@/assets/img/patternside.png">
        </div>
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

  .contact{
    padding: 0px 15px;
  }

  .left-gutter{
    position: relative;
    height: 100%;
  }

  .left-gutter>img{
    display: block;
    position: absolute;
    bottom: 20px;
    left: 20px;
    height: 140px;
  }

  .title-container{
    width: 100%;
    height: 140px;
    text-align: middle;
    padding-top: 40px;
    background-color: var(--orange-secondary);
    color: white;
  }

  .center-content{
    background-image: url('../assets/img/bgpattern2.png');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    min-height: 100%;    
    margin: 0px -15px;
    padding: 2vw;
  }

  .right-gutter{
    min-height: calc(100vh - 160px);
    background-color: var(--beige-sidebar);
    margin: 0px -15px;
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

  .visible-mobile{
    display:none;
  }

  .card{
    margin: 1vw;
    padding: 20px 2vw;
    height: 500px;
    overflow: hidden;
  }

  form{
    text-align: left;
  }

  .btn-orange{
    background-color: var(--orange-primary);
    font-size: 1rem !important;
    color: white;
    float: right;
  }

  textarea {
    resize: none;
    height: 8rem;
  }

  .tagline{
    font-size: 1.3rem !important;
    color: var(--orange-primary);
    text-transform: uppercase;
  }


  .bottle{
    position: absolute;
    bottom: -10%;
    transition: all ease-out 1s;
  }

  .bottle>img{
    transition: all ease-in .5s;
    min-height: 250px;
    max-height: 350px;
    height: 20vw;
  }

  .left-bottle{
    left: 35%;
    transform: rotate(-10deg)
  }

  .right-bottle{
    right: 35%;
    transform: rotate(10deg)
  }

  @media only screen and (max-width: 992px) {
    
    .hidden-mobile{
      display: none;
    }

    .visible-mobile{
      display: block;
    }

    h1{
      font-size: 6vw !important;
    }

    .title-container{
      height: 110px;
      padding: 40px;
    }

    .center-content{
      min-height: calc(100vh - 110px);    
      margin: 0px -15px;
      padding: 10px;
    }

    textarea {
      height: 100px;
    }
    
  }

</style>
