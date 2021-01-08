import React from 'react';
import { NavigationContainerRef } from '@react-navigation/native'
import { RootStackParamList } from '../typing/routeConfig'
import { StackActions, CommonActions } from '@react-navigation/native';
import { getStore } from './auth';
import { RootState } from '../typing';

type Name = keyof RootStackParamList
type Params = RootStackParamList[Name]

//免登录列表
const whiteList: Name [] = ['ServerExplain', 'Classify', 'ForgetPwd', 'Home',
 'Login', 'RegAccount', 'ShopCart', 'StoreInfo', 'GoodsDetail', 'GoodsSearch', 
 'Mine', 'GoodsAllEvaluation', 'NewsList', 'ShopRank', 'SeckillActivity', 'HotList', 'StoreDetail', 'ShopStreet', 'MyWebView', 'NewsDetail', "DistributionOrder"]

export const navigationRef = React.createRef<NavigationContainerRef>();


export function navigate(name: Name, params?: Params) {
    const store:RootState = getStore()
    const  {isLogin} = store.userStore
    if(whiteList.includes(name) || isLogin) {
        navigationRef.current?.navigate(name, params);
    }else {
        navigationRef.current?.navigate('Login');
    }
}

export function goBack() {
    if (navigationRef.current?.canGoBack()) {
        navigationRef.current?.goBack();
    }else {
        reset('Index')
    }
}
export function setParams(params:any) {
    if (navigationRef.current?.setParams) {
        navigationRef.current?.setParams(params)
    }
}

export function replace(name: Name, params?: Params) {
    navigationRef.current?.dispatch(StackActions.replace(name, params ))
}

export function push(name: Name, params?: Params) {
    navigationRef.current?.dispatch(StackActions.push(name, params ))
}

export function reset(name: Name) {
    navigationRef.current?.dispatch(CommonActions.reset({
        index: 0,
        routes: [{name}]
    }))
}
