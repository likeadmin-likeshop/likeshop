import Vue from 'vue'
import App from './App'
import store from './store'
import {toast} from './utils/tools'
import Cache from './utils/cache'
import minxinsApp from '@/mixins/app'
import uView from "@/components/uview-ui";
Vue.prototype.$toast = toast
Vue.prototype.$Cache = Cache
Vue.config.productionTip = false


Vue.use(uView);
App.mpType = 'app'
Vue.mixin(minxinsApp);
const app = new Vue({
    ...App,
	store
})
app.$mount()
