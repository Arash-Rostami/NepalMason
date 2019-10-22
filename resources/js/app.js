require('./bootstrap');

window.Vue = require('vue');

import manager from './components/navbarManager';


new Vue({
    el: '#app',
    components: {
        manager,
    }
});