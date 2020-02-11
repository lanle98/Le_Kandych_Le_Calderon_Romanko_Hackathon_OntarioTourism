

import GoComponent from "./GoComponent.js";
import EatComponent from "./EatComponent.js";
import EventComponent from "./EventComponent.js";
import NewsletterComponent from "./Newsletter.js";
import HeroComponent from "./HeroComponent.js";


export default{
    template:`
    <div class="main">
        <hero />
        <go />
        <eat />
        <event />
        <newsletter />
    </div>

    `,
    components:{
        "go": GoComponent,
        "eat": EatComponent,
        "event": EventComponent,
        "newsletter": NewsletterComponent,
        "hero":HeroComponent
    
    }
}

