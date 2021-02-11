import { applyMiddleware, createStore } from 'redux'
import { persistStore, persistCombineReducers } from 'redux-persist'
import thunkMiddleware from "redux-thunk";
import AsyncStorage from '@react-native-community/async-storage';// defaults to localStorage for web

import rootReducer from "./reducers";
const whiteList = [
    'userStore',
    'appStore'
];
const persistConfig = {
    key: 'root',
    storage: AsyncStorage,
    whitelist: whiteList
}
const logger = (store: any) => (next: any) => (action: any) => {
    if (typeof action === 'function') console.log('=====dispatching a function');
    else console.log('=====dispatching', action);
    let result = next(action);
    console.log('=====next state', store.getState());
    return result;
};
const middleware = [
    thunkMiddleware,//  dispatch() 函数异步增强，
    logger
]
const persistedReducer = persistCombineReducers(persistConfig, rootReducer)
const appMiddleware = applyMiddleware(...middleware)
export default () => {
    let store = createStore(persistedReducer, appMiddleware)
    let persistor = persistStore(store)
    return { store, persistor }
}