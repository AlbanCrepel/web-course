import Vue from 'vue'
import Router from 'vue-router'

import LoginPage from './pages/login/LoginPage'
import HomePage from './pages/home/HomePage'

Vue.use(Router)

export default new Router({
    routes: [
        {
            path: '/',
            name: 'home',
            component: HomePage
        },
    ]
})
