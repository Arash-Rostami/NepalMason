require('./bootstrap');

window.Vue = require('vue');

import headrpanel from './components/HeaderPanel';
import statspanel from './components/StatusPanel';
import commenpanel from './components/CommentPanel';
import ordrpanel from './components/OrderPanel';
import footrpanel from './components/FooterPanel';






new Vue({
    el: '#app',
    components: {
        headrpanel,
        statspanel,
        commenpanel,
        ordrpanel,
        footrpanel

    }
});