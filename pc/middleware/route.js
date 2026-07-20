import Cookies from 'js-cookie'

const account = ['login', 'register', 'forget_pwd', "error"]

export default function({route, app, store}) {
  const { fullPath } = route
  const isAccount = account.some((item) => fullPath.includes(item))
  const {isLogin} = store.getters
  if(!isAccount && !isLogin) {
    process.server ? app.$cookies.set('back_url', fullPath) : Cookies.set('back_url', fullPath)
  }
}
