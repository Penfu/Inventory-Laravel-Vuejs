import { createRouter, createWebHistory } from 'vue-router';

import notFound from '../components/notFound.vue';
import productIndex from '../components/products/index.vue';


const routes = [
    {
        path: '/:pathMatch(.*)*',
        component: notFound
    },
    { 
        path: '/', 
        component: productIndex 
    }
]

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
})
export default router