import home from '../../components/dashboard/UserHome.vue'
import CreateResume from '../../components/dashboard/CreateResume.vue'
import DashboardAside from '../../components/UserDashboard/layout/DashboardAside.vue'
import DashboardPage from '../../components/UserDashboard/DashboardPage.vue'
import DashboardGenieBasic from '../../components/UserDashboard/DashboardGenieBasic.vue'
import DashboardGenieExp from '../../components/UserDashboard/DashboardGenieExp.vue'
import DashboardGenieEdu from '../../components/UserDashboard/DashboardGenieEdu.vue'
import DashboardGenieAward from '../../components/UserDashboard/DashboardGenieAward.vue'
import DashboardGenieProject from '../../components/UserDashboard/DashboardGenieProject.vue'
import DashboardGenieSkill from '../../components/UserDashboard/DashboardGenieSkill.vue'
import DashboardGenieContact from '../../components/UserDashboard/DashboardGenieContact.vue'

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
        path: "/genie-basic",
        name: "GenieBasic",
        component: DashboardGenieBasic,
        meta: { requiresAuth: false }
    },

    {
        path: "/genie-experience",
        name: "GenieExperience",
        component: DashboardGenieExp,
        meta: { requiresAuth: false }
    },

    {
        path: "/genie-education",
        name: "GenieEducation",
        component: DashboardGenieEdu,
        meta: { requiresAuth: false }
    },

    {
        path: "/genie-award",
        name: "GenieAward",
        component: DashboardGenieAward,
        meta: { requiresAuth: false }
    },

    {
        path: "/genie-project",
        name: "GenieProject",
        component: DashboardGenieProject,
        meta: { requiresAuth: false }
    },

    {
        path: "/genie-skill",
        name: "GenieSkill",
        component: DashboardGenieSkill,
        meta: { requiresAuth: false }
    },

    {
        path: "/genie-contact",
        name: "GenieContact",
        component: DashboardGenieContact,
        meta: { requiresAuth: false }
    },
    


]

export default dashboardRoutes
