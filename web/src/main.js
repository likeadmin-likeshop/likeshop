import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import Storage from 'vue-ls';
import 'lib-flexible/flexible'
import './styles/index.scss'
import './permission'
import PriceSlice from './components/PriceSlice'
Vue.config.productionTip = false

import {
  Button, Tabbar, TabbarItem, CountDown,
  Image as VanImage, Lazyload, Checkbox,
  Stepper, Dialog, Sticky, Icon,
  Search, Swipe, SwipeItem, Area,
  Tag, List, Tab, Tabs, Popup,
  Field, Rate, Uploader, ActionSheet,
  RadioGroup, Radio, Picker
} from 'vant'

let options = {
  namespace: 'vuejs__', // key键前缀
  name: 'ls', // 命名Vue变量.[ls]或this.[$ls],
  storage: 'local', // 存储名称: session, local, memory
}
Vue.use(Storage, options);
Vue.use(Button)
  .use(Tabbar)
  .use(TabbarItem)
  .use(VanImage)
  .use(Lazyload)
  .use(Checkbox)
  .use(Stepper)
  .use(Dialog)
  .use(Sticky)
  .use(Search)
  .use(Swipe)
  .use(SwipeItem)
  .use(Tag)
  .use(List)
  .use(Tab)
  .use(Tabs)
  .use(Popup)
  .use(Icon)
  .use(Field)
  .use(Rate)
  .use(Uploader)
  .use(ActionSheet)
  .use(Area)
  .use(CountDown)
  .use(RadioGroup)
  .use(Radio)
  .use(Picker)
  
Vue.mixin({
  data: function () {
    return {
      primaryColor: '#FF2C3C'
    }
  }
})

Vue.component("price-slice", PriceSlice)

new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app')
