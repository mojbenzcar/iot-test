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
const SERVER_URL = "api";
const app = new Vue({
    el: '#simulated_device',
    props: ['device'],
    data: {
        messages: [],
        deviceStatus: "on"
    },
    created() {
        var self = this;
        Echo.channel('device-channel')
            .listen('.device-notify', function (e) {
                self.acknowledgeNotification(e)
            });
    },
    methods: {
        acknowledgeNotification: function (device) {
            var url = SERVER_URL + "/device/" + device.device + "/report_acknowledgement";
            axios.post(url)
                .then(function (response) {
                    console.log(response);
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        sendDeviceReport() {
            console.log("send report");
            var url = SERVER_URL + "/device/" + device + "/report";
            axios.post(url, {metadata: {status: this.deviceStatus, other_metadata: "test"}})
                .then(function (response) {
                    console.log(response);
                })
                .catch(function (error) {
                    console.log(error);
                });
            console.log("device has started");
        },
        startDevice() {
            console.log("d--" + device);
            this.deviceStatus = "on";
            var url = SERVER_URL + "/device/" + device + "/start";
            axios.post(url)
                .then(function (response) {
                    console.log(response);
                })
                .catch(function (error) {
                    console.log(error);
                });
            console.log("device has started");
        },
        stopDevice() {
            this.deviceStatus = "stop";
            var url = SERVER_URL + "/device/" + device + "/stop";
            axios.post(url)
                .then(function (response) {
                    console.log(response);
                })
                .catch(function (error) {
                    console.log(error);
                });
            console.log("Device has stopped")
        }
    }


});
