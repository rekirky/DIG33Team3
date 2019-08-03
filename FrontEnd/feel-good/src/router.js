import Vue from 'vue'
import Router from 'vue-router'
import Home from './views/Home.vue'

Vue.use(Router)

export default new Router({
  mode: 'history',
  base: process.env.BASE_URL,

  //Allow locations in the App, all other routes will be sent to the 404 page.
  routes: [
    {
      path: '/',
      name: 'root',
      component: Home
    },
    {
      path: '/home',
      name: 'home',
      component: Home
    },
    {
      path: '/about',
      name: 'about',
      component: () => import('./views/About.vue')
    },
    {
      path: '/contact',
      name: 'contact',
      component: () => import('./views/Contact.vue')
    },
    {
      path: '/event',
      name: 'event-details',
      component: () => import('./views/EventDetails.vue')
    },
    {
      path: '/footprint',
      name: 'footprint',
      component: () => import('./views/OurFootPrint.vue')
    },
    {
      path: '/policy',
      name: 'policy',
      component: () => import('./views/Policy.vue')
    },    
    {
      path: '/products',
      name: 'products',
      component: () => import('./views/Products.vue')
    },
    {
      path: '/product/:productId',
      name: 'product-details',
      component: () => import('./views/ProductDetails.vue')
    },
    {
      path: '/register/:eventId',
      name: 'register',
      component: () => import('./views/Register.vue')
    },
    {
      path: '/registered-successfully',
      name: 'register-success',
      component: () => import('./views/RegisterSuccess.vue')
    },
    {
      path: '/contact-successful',
      name: 'contact-success',
      component: () => import('./views/ContactSuccessful.vue')
    },     
    {
      path: '/sitemap',
      name: 'sitemap',
      component: () => import('./views/Sitemap.vue')
    },    
    {
      path: '/references',
      name: 'references',
      component: () => import('./views/References.vue')
    },    
    {
      path: '/team',
      name: 'team',
      component: () => import('./views/Team.vue')
    },
    {
      path: '*',
      component: resolve => require(['@/views/NotFound'], resolve)
    }
  ],
  //Scroll behavior allows hash targets to operate as expected.
  scrollBehavior: function (to) {
    if (to.hash) {
      return {
        selector: to.hash
      }
    }
  },
})
