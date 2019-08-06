<template>
  <div class="register">
    <div class="row">
      <div class="col-2 hidden-mobile">
        <div class="left-gutter">
          <img src="@/assets/img/fgCo.png">
        </div>
      </div>

      <!-- Register Content and Form Container -->
      <div class="col-12 col-lg-9">
        <div class="row">
          <div class="title-container">
            <h1>Register</h1>
          </div>
        </div>
        <div class="center-content">
          <div class="row no-gutters">
            <div class="col-12 col-lg-6">

              <!-- Event information -->
              <div class="card event-info">
                <h5>Come join us on the {{this.event.date}}</h5>
                <p class="tagline">{{this.event.subTitle}}</p>
                <p>{{this.event.details}}
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

              <!-- Registration Form -->
              <div class="card">
                <h5>Register for {{this.event.title}}</h5>
                <form @submit.prevent="newEnquiry()">
                  <div class="form-group">
                    <label for="emailField">Email</label>
                    <input v-model="email" required type="text" class="form-control" id="emailField" placeholder="Email">
                    <div class="invalid-feedback">
                      {{this.emailError}}
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nameField">Name</label>
                    <input v-model="name" required type="text" class="form-control" id="nameField" placeholder="Name">
                    <div class="invalid-feedback">
                      {{this.nameError}}
                    </div>
                  </div>
                  <button class="btn btn-orange">Register Now</button>
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
//Import for vuex local storage
import { mapGetters } from 'vuex'
//Import of types to be accessed via despatches
import { GET_EVENTS, NEW_ENQUIRY } from '@/store/types'

//Component Data holding the data entered into the registration form and event information
export default {
  name: 'Register',
  data () {
    return {
      eventRouteId: this.$route.params.eventId,
      event:{},
      email: '',
      name: '',
      emailError: '',
      nameError: ''
    }
  },
  computed:{
    ...mapGetters({
      getEvent: "getEvent"
    })
  },
  async mounted(){
    //Get event information when the page components is mounted to the application
    await this.$store.dispatch(GET_EVENTS)
    //Set the current event using the event id passed into the route
    this.event = this.getEvent(parseInt(this.eventRouteId))
  },

  methods: {

    //Register form submission
    async newEnquiry () {

      //Check if all the required information has been entered
      if(this.email == '' || this.name == ''){
        if(this.emailError == ''){
          this.emailError = 'You must submit an email to register'
        }
        if(this.nameError == ''){
          this.nameError = 'You must submit your name to register'
        }
      }

      //If all information is entered, it is dispatched to the backend to be stored in the database
      else{
        try {
          await this.$store.dispatch(NEW_ENQUIRY, {
            email: this.email,
            name: this.name,
            message: "Register me for " + this.event.title
          })
          //Once the information has been submitted the user is sent to the register success page.
          this.$router.push('/registered-successfully')
        } catch (e) {
          alert("Sorry it looks like we can't register you are this time, Please try again later")
        }
      }
    }
  }

}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">

  .register{
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
    height:100%;
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
    overflow: hidden;
  }

  form{
    text-align: center;
  }

  .form-group{
    text-align: left;
  }

  .btn-orange{
    background-color: var(--orange-primary);
    font-size: 1rem !important;
    color: white;
  }

  .tagline{
    font-size: 1.3rem !important;
    color: var(--orange-primary);
    text-transform: uppercase;
  }


  .bottle{
    position: absolute;
    bottom: -10%;
  }

  .bottle>img{
    height: 350px;
  }

  .left-bottle{
    left: 30%;
    transform: rotate(-10deg)
  }

  .right-bottle{
    right: 30%;
    transform: rotate(10deg)
  }

  .event-info{
    padding-bottom: 300px;
  }

  @media only screen and (max-width: 768px) {
    
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
    
  }

</style>
