require('./bootstrap');

window.Vue = require('vue');



import headrpanel from './components/adminpanel/HeaderPanel';
import statspanel from './components/adminpanel/StatusPanel';
import commenpanel from './components/adminpanel/CommentPanel';
import ordrpanel from './components/adminpanel/OrderPanel';
import footrpanel from './components/adminpanel/FooterPanel';
import sidemenpanel from './components/adminpanel/SideMenuPanel';







new Vue({
    el: '#app',
    components: {
        headrpanel,
        statspanel,
        commenpanel,
        ordrpanel,
        footrpanel,
        sidemenpanel

    }
});