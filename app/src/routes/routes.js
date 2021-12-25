import landingRoutes from "./landing/LandingRoute"
import dashboardRoutes from "./dashboard/DashboardRoute"

const routes = {
    mode: 'history',
    routes: [
        ...landingRoutes,
        ...dashboardRoutes
    ]
}

export default routes