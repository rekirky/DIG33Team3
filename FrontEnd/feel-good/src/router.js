import Vue from 'vue'
import Router from 'vue-router'
import Home from './views/Home.vue'

Vue.use(Router)

export default new Router({
  mode: 'history',
  base: process.env.BASE_URL,
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
      // route level code-splitting
      // this generates a separate chunk (about.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import(/* webpackChunkName: "about" */ './views/About.vue')
    },
    {
      path: '/contact',
      name: 'contact',
      component: () => import('./views/Contact.vue')
    },
    {
      path: '/events',
      name: 'events',
      component: () => import('./views/Events.vue')
    },
    {
      path: '/event/:eventId',
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
  ]
})
