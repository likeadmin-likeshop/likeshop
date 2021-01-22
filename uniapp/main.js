import Vue from 'vue'
import App from './App'
import store from './store'
import {toast} from './utils/tools'

Vue.prototype.$toast = toast
Vue.config.productionTip = false

App.mpType = 'app'

const app = new Vue({
    ...App,
	store
})
app.$mount()
