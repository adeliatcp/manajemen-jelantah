import { PubSub } from './pubsub.js';


let capasityPubSub = null;
let page = '';
let id_device = '';

$(document).ready(function() {
    if (window.location.href.indexOf("device") > -1) {
        page = 'device';
        id_device = window.location.href.substring(window.location.href.lastIndexOf('/') + 1);
    }

    if (page == 'device') {
        if (capasityPubSub == null) {
            // PubSub(element bar, element text, topic yang mau di subscribe)
            capasityPubSub = new PubSub(
                document.querySelector("#capacity-bar"),
                document.querySelector("#capacity-text"),
                `/${id_device}`
            );
        }
    } else {
        try {
            capasityPubSub.disconnect();
            capasityPubSub = null;
        } catch (e) {

        }
    }
});