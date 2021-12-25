

import landing_page from '../../components/landing/LandingPage.vue'
import register from '../../components/landing/register.vue'
import login from '../../components/landing/login.vue'
import logout from '../../components/auth/logout.vue'
import faq from '../../components/landing/faq.vue'

import terms from '../../components/landing/terms.vue'
import privacy from '../../components/landing/privacy.vue'


const landingRoutes = [
    {
        path: "/",
        name: "landing_page",
        component: landing_page,
        meta: { requiresAuth: false }
    },
   
   
    {
        path: "/register",
        name: "landing_register",
        component: register,
        meta: { requiresAuth: false }
    },
    {
        path: "/login",
        name: "landing_login",
        component: login,
        meta: { requiresAuth: false }
    },
    {
        path: "/logout",
        name: "logout",
        component: logout,
        meta: { requiresAuth: false }
    },
    {
        path: "/faq",
        name: "landing_faq",
        component: faq,
        meta: { requiresAuth: false }
    },
    
    {
        path: "/terms",
        name: "landing_terms",
        component: terms,
        meta: { requiresAuth: false }
    },
    {
        path: "/privacy",
        name: "landing_privacy",
        component: privacy,
        meta: { requiresAuth: false }
    },
   

]

export default landingRoutes
