
window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

window.Vue = require('vue');


try {
    window.$ = window.jQuery = require('jquery');

    require('bootstrap-sass');
} catch (e) {}

//window.$ = window.jQuery = require('jquery');
window.MediumEditor = require('medium-editor')

require('moment')
require('./hammer.min')

require('../../../node_modules/handlebars/dist/handlebars.runtime.min')
require('../../../node_modules/jquery-sortable/source/js/jquery-sortable-min')
require('../../../node_modules/blueimp-file-upload/js/vendor/jquery.ui.widget')
require('../../../node_modules/blueimp-file-upload/js/jquery.iframe-transport')
require('../../../node_modules/blueimp-file-upload/js/jquery.fileupload')


import CustomEditor from './components/CustomEditor.vue'
// import CoreNotify from './components/CoreNotify.vue'
// import Paginate from './mixins/Paginate.vue'
// import AlbumPhotos from './components/AlbumPhotos.vue'

import Datepicker from 'vuejs-datepicker'

Vue.component('CustomEditor', CustomEditor)
Vue.component('Datepicker', Datepicker)
Vue.component('vue-datetime-picker', require('vue-datetime-picker'))

import Notifications from 'vue-notification'

Vue.use(Notifications)

import VueAgile from 'vue-agile'

Vue.use(VueAgile)
// Vue.component('CoreNotify', CoreNotify)
// Vue.component('Paginate', Paginate)
// Vue.component('AlbumPhotos', AlbumPhotos)
/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios/dist/axios.js');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}


/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key'
// });