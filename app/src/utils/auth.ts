import SInfo from "react-native-sensitive-info";
import { clearRequestToken, setRequestToken, configDispatchFunc } from './request';
import { setLogin } from "../store/reducers/userReducer";
let dispatch: any = null
let userToken: any = null
let rootStore:any = null
export const setToken = (token: string) => {
    userToken = token;
    setRequestToken(token);
};

export const clearToken = () => {
    userToken = null;
    dispatch(setLogin(false))
    SInfo.setItem('token', '', {})
    clearRequestToken();
};

export const  configDispatch = (func: () => void) => {
    dispatch = func
    configDispatchFunc(func)
}

export const setStore = (store:any) => {
    rootStore = store
}

export const getStore = () => {
    return rootStore?.getState()
}

export const getToken = () => {
    return userToken;
}