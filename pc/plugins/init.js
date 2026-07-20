import Cookies from 'js-cookie'
export default function ({  store }) {
  const token = Cookies.get('token')
  token && store.commit('setToken', token)
  store.dispatch('getCategory')
  store.dispatch('getPublicData')
  store.dispatch('getConfig')
}