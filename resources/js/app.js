import { createApp } from "vue";
import welcome from "./vue/app.vue";
/* import the fontawesome core */
import { library } from '@fortawesome/fontawesome-svg-core'

/* import font awesome icon component */
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

/* import specific icons */
import { faPlusSquare, faTrash } from '@fortawesome/free-solid-svg-icons'

/* add icons to the library */
library.add(faPlusSquare , faTrash)

createApp(welcome).component('font-awesome-icon', FontAwesomeIcon)
.mount("#app")
