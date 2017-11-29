/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('chat-messages', require('./components/ChatMessages.vue'));
// Vue.component('chat-form', require('./components/ChatForm.vue'));
const APP_URL = "";
const app = new Vue({
    el: '#simulated_device',
    data: {
        messages: [],
        deviceStatus: "on",
    },
    created() {
        console.log("new")
        var self = this;
        Echo.channel('device-channel')
            .listen('.device-notify', function(e) {
                self.acknowledgeNotification(e)
            });
    },
    methods:{
        acknowledgeNotification: function(device) {
            console.log("received notification")
        },
        sendDeviceReport(){
            console.log("send report")
        },
        startDevice(){
            this.deviceStatus = "on";
            console.log("device has started");
        },
        stopDevice(){
            this.deviceStatus ="stop";
            console.log("Device has stopped")
        }
    }


});
