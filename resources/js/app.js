/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
const {
    default: Echo
} = require('laravel-echo');
// import styles bundle
import 'swiper/css/bundle';

// init Swiper:
//   const swiper = new Swiper(...);


require('./bootstrap');

window.Vue = require('vue').default;
Vue.prototype.$userId = document.querySelector("meta[name='user-id']").getAttribute('content');

import VueResource from 'vue-resource';
Vue.use(VueResource);
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
Vue.component('InfiniteLoading', require('vue-infinite-loading'));

Vue.component('example-component', require('./components/RecationDisplay.vue').default);
Vue.component('chat-messages', require('./components/ChatMessages.vue').default);
Vue.component('chat-form', require('./components/ChatForm.vue').default);







import ReactionsComponent from './components/ReactionsComponent.vue';
Vue.component('reactions-component', ReactionsComponent);

import CreatePost from './components/CreatePost.vue';
Vue.component('postcreate-component', CreatePost);

import CreatePostcopy from './components/CreatePostcopy.vue';
Vue.component('create-component', CreatePostcopy);

import Testmonial from './components/Testmonial.vue';
Vue.component('testmonial-component', Testmonial);

import InfiniteScrollComponent from './components/InfiniteScrollComponent.vue';
Vue.component('infinite-component', InfiniteScrollComponent);

import Infinite from './components/Infinite.vue';
Vue.component('infinite1-component', Infinite);
import PostComments from './components/PostComments.vue';
Vue.component('postcomments-component', PostComments);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
try {
    const app = new Vue({
        el: '#app',
        data: {
            messages: [],
            //user_id: this.$userId,
        },

        created() {
            this.fetchMessages();

            window.Echo.private('chat')
                .listen('MessageSent', (e) => {
                    this.messages.push({
                        message: e.message.message,
                        user: e.user
                    });
                });
        },

        methods: {
            fetchMessages() {
                axios.get('/messages').then(response => {
                    this.messages = response.data;
                });
            },

            addMessage(message) {
                this.messages.push(message);

                axios.post('/messages', message).then(response => {
                    console.log(response.data);
                });
            }
        }
    });

} catch (error) {
    console.log(error);
    // Do something with error
}











 




var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

// Change the icons inside the button based on previous settings
if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    themeToggleLightIcon.classList.remove('hidden');
} else {
    themeToggleDarkIcon.classList.remove('hidden');
}

var themeToggleBtn = document.getElementById('theme-toggle');

themeToggleBtn.addEventListener('click', function () {

    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle('hidden');
    themeToggleLightIcon.classList.toggle('hidden');

    // if set via local storage previously
    if (localStorage.getItem('color-theme')) {
        if (localStorage.getItem('color-theme') === 'light') {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        }

        // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        }
    }

});



