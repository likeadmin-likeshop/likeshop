import Vue from 'vue'
import Vuex from 'vuex'
import createVuexAlong from 'vuex-along'
import {getCartNum} from '@/api/store'
Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        token: "",
        cartNum: ''
    },
    mutations: {
        LOGIN(state, data) {
            state.token = data.token;
        },
        LOGOUT(state, ) {
            state.token = null;
            state.cartNum = ""
        },
        SETCARTNUM(state, num) {
            state.cartNum = num
        }
    },
    actions: {
        getCartNum({ state, commit }) {
            if (!state.token) return
            getCartNum().then(res => {
                if (res.code == 1) {
                    commit('SETCARTNUM', res.data.num)
                }
            })
        }
    },
    modules: {
    },
    plugins: [createVuexAlong()]
})
