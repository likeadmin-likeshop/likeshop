import { createReducer, action } from 'typesafe-actions';



const SHOW_LOADING = 'SHOW_LOADING'
let initialState = {
    showLoading: {
        isShow: false
    },
}
export const showLoading = (isShow: boolean = false) => action(SHOW_LOADING, { isShow });
const reducer = createReducer(initialState, {
    [SHOW_LOADING]: (state, action) => ({ ...state, showLoading: { isShow: action.payload.isShow } }),
})

export default reducer