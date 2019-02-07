import Vue from 'vue'
import Router from 'vue-router'

import LoginPage from './pages/login/LoginPage'
import HomePage from './pages/home/HomePage'
import UserPage from './pages/user/UserPage'

Vue.use(Router)

export default new Router({
    routes: [
        {
            path: '/',
            name: 'home',
            component: HomePage
        },
        {
            path: '/login',
            name: 'login',
            component: LoginPage
        },
        {
            path: '/user/:id',
            name: 'user',
            component: UserPage
        },
    ]
})
