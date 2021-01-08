import { createReducer, action } from 'typesafe-actions';


const SET_OPTION = 'SET_OPTION'
let initialState = {
    appOption: {
        wechat_login: 1,
        agreement: 0,
        appad: {}
    },
}
export const setOption = (opt: any = {}) => action(SET_OPTION, { opt });
const reducer = createReducer(initialState, {
    [SET_OPTION]: (state, action) => ({ ...state, appOption: {...state.appOption, ...action.payload.opt}}),
})

export default reducer