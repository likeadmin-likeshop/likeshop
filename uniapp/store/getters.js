export default {
  userInfo: state => state.app.userInfo || {},
  token: state => state.app.token,
  isLogin: state => !!state.app.token,
  cartNum: state => state.app.cartNum,
  loginNum: state => state.app.loginNum
};
