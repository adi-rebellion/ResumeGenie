import home from '../../components/dashboard/UserHome.vue'
import CreateResume from '../../components/dashboard/CreateResume.vue'
import DashboardAside from '../../components/UserDashboard/layout/DashboardAside.vue'
import DashboardStructure from '../../components/UserDashboard/DashboardStructure.vue'

const dashboardRoutes = [
    {
        path: "/home",
        name: "home",
        component: home,
        meta: { requiresAuth: true }
    },
    {
        path: "/Dashboard",
        name: "DashboardStructure",
        component: DashboardStructure,
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
