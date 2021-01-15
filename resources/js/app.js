require('./bootstrap');

import {App, plugin} from '@inertiajs/inertia-vue';
import Vue from 'vue';
import SvgVue from 'svg-vue';
import {InertiaProgress} from '@inertiajs/progress'

Vue.use(SvgVue);

Vue.use(plugin);
InertiaProgress.init()

const el = document.getElementById('app');

new Vue({
    render: h => h(App, {
        props: {
            initialPage: JSON.parse(el.dataset.page),
            resolveComponent: name => import(`./Pages/${name}`).then(module => module.default),
        },
    }),
}).$mount(el);
