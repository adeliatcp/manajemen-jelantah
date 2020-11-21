import { PubSub } from './pubsub.js';

    // Load page content
    let capasityPubSub = null;
                        if(capasityPubSub == null) {
                            capasityPubSub = new PubSub(
                                document.querySelector("#capacity")
                            );
                        }
                    
                        capasityPubSub.disconnect();
                        capasityPubSub = null;
