import home from '../../components/dashboard/UserHome.vue'
import CreateResume from '../../components/dashboard/CreateResume.vue'
import DashboardAside from '../../components/UserDashboard/layout/DashboardAside.vue'
import DashboardPage from '../../components/UserDashboard/DashboardPage.vue'

const dashboardRoutes = [
    {
        path: "/home",
        name: "home",
        component: home,
        meta: { requiresAuth: true }
    },
    {
        path: "/dashboard",
        name: "DashboardPage",
        component: DashboardPage,
        meta: { requiresAuth: false }
    },

    {
        path: "/p-create-resume",
        name: "create_resume",
        component: CreateResume,
        meta: { requiresAuth: false }
    }

]

export default dashboardRoutes
