import Vue from 'vue'
import VueRouter from 'vue-router'
import VueIziToast from 'vue-izitoast';

import Routes from './routes/routes';
import store from './services/vuexStore';
import VueMeta from 'vue-meta';

import 'izitoast/dist/css/iziToast.css';

Vue.prototype.baseUrl = 'http://127.0.0.1:8000'

Vue.use(VueRouter)
const router = new VueRouter(Routes)

Vue.use(VueIziToast);
Vue.component('pagination', require('laravel-vue-pagination'));


Vue.use(VueMeta)

const isUserLoggedIN = async () => {
  try {
    await store.dispatch("getUser");
    return true
  }
  catch ($e) {
    return false;
  }
}

const doRedirectToLogin = async (route) => {
  const status = await isUserLoggedIN()
  if (route.meta.requiresAuth) {
    return !status
  } else {
    return false;
  }
}

Vue.config.productionTip = false

new Vue({
  el: '#app',
  router,
  store,
  async beforeCreate() {

    const checkLoginRedirection = await doRedirectToLogin(this.$route)
    console.log({
      checkLoginRedirection
    })

    if (checkLoginRedirection) {
      this.$router.push('/login')
    }
  },
})

router.beforeEach(async (to, from, next) => {
  // check the meta field
  if (to.meta.requiresAuth) {
    // check if the user is authenticated
    if (store.getters.hasAuth) {
      // the next method allow the user to continue to the router 
      next()
    }
    else {
      // the next method should now all the user to continue to the router
      // redirect to login page.
      const checkLoginRedirection = await doRedirectToLogin(to)
      if (checkLoginRedirection) {
        next("/login")
      } else {
        next()
      }
    }
  }
  else {
    if (to.name == "landing_login" && store.getters.hasAuth) {
      next("/login")
    } else {
      next()
    }
  }
})

