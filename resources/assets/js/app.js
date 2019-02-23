
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';

import Vue from 'vue';

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import router from './router';

import store from './store';

import './base/blueifyGlobalDirective';

import WelcomeComponent from './components/WelcomeComponent.vue';

import FooterComponent from './components/FooterComponent.vue';

const app = new Vue({
    el: '#app',
    router: router,
    store: store,
    components: {
    	'welcome-component': WelcomeComponent, 

        'footer-component': FooterComponent
    }
});
