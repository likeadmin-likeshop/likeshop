import { createReducer, action } from 'typesafe-actions';



const SET_LOGIN = 'SET_LOGIN'
const SET_USER = "SET_USER"
const SET_CART_NUM = "SET_CART_NUM"
let initialState = {
    isLogin: false,
    user: {
        user_money: 0,
        total_recharge_amount: 0,
        total_order_amount: 0
    },
    cartNum: ""
}
export const setLogin = (isLogin: boolean = false) => action(SET_LOGIN, { isLogin });
export const setUser = (user: any = {}) => action(SET_USER, { user });
export const setCartNum = (cartNum: number | "" = "") => action(SET_CART_NUM, cartNum);
const reducer = createReducer(initialState, {
    [SET_LOGIN]: (state, action) => ({ ...state, isLogin: action.payload.isLogin }),
    [SET_USER]: (state, action) => ({...state, user: action.payload.user}),
    [SET_CART_NUM]: (state, action) => ({...state, cartNum: action.payload}),
})

export default reducer