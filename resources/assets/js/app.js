
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import store from './store'
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('partner-list', require('./components/PartnerList.vue'));
Vue.component('lake-list', require('./components/river/LakeList.vue'));
Vue.component('trip-list', require('./components/trip/TripList.vue'));
Vue.component('trip-gallery', require('./components/trip/TripGallery.vue'));
Vue.component('trip-schedule', require('./components/trip/TripSchedule.vue'));
Vue.component('custom-map', require('./components/CustomMap.vue'));

//admin
Vue.component('tour-view', require('./admin/TourView.vue'));
Vue.component('river-view', require('./admin/RiverView.vue'));
Vue.component('about-view', require('./admin/AboutView.vue'));

//web
import TourPage from './web/TourPage.vue'
import IndexPage from './web/IndexPage.vue'

const app = new Vue({
    el: '#app',
    store,
    mounted() {
    	//alert("123")
    	// var scene = document.getElementById('scene');
    	// var parallaxInstance = new Parallax(scene, {
    	// 	relativeInput: true
    	// }),
    },
    components: {
    	TourPage,
        IndexPage
    }
});
