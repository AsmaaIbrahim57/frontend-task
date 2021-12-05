const home = () =>import ( '../components/home.vue');
const stories = ()=>import ('../components/stories.vue');

export default [
    {
        path: '/home',
        component: home,
        name: 'home',
    },
    {
        path:'/stories',
        component: stories,
        name: 'stories'
    }
]
