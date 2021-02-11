/**
 * Sample React Native App
 * https://github.com/facebook/react-native
 *
 * Generated with the TypeScript template
 * https://github.com/react-native-community/react-native-template-typescript
 *
 * @format
 */

import React from 'react';
import 'react-native-gesture-handler';
import { StatusBar } from 'react-native';
import { Provider } from 'react-redux';
import SInfo from "react-native-sensitive-info";
import { Provider as AntProvider, Toast } from '@ant-design/react-native'
import { PersistGate } from 'redux-persist/integration/react'
import configureStore from './store'
import AppNavigation from './components/routers/AppNavigation'
import Theme from './constraint/Theme'
import { setToken, configDispatch, clearToken, setStore } from './utils/auth';
import SplashScreen from 'react-native-splash-screen';
import { WXRegisterApp, isWXAppInstalled } from './utils/wechat';
import { appinit } from './api/app';
import { setOption } from './store/reducers/appReducer';
import { replace, reset } from './utils/navigation';
import { getAdList } from './api/store';
interface App {

}

let storeConfig: any = {}
class App extends React.Component<any, any> {
    stackIndex: number | undefined;
    clickBackTime: number | undefined;
    constructor(props: any) {
        super(props)
        storeConfig = configureStore();
        configDispatch(storeConfig.store.dispatch)
    }
    state = {
        theme: Theme,
        isPrepare: false,
    };
    UNSAFE_componentWillMount() {
        //获取APP初始化
        this._getAppOpt()
        WXRegisterApp()
        Toast.config({
            duration: 1.5,
            mask: false
        })
        SInfo.getItem('token', {}).then((res) => {
            setToken(res)
        })
    }
    startApp(type = 0) {
            this.setState({
                isPrepare: true
            }, () => {
                setTimeout(() => {
                    if (type == 0) {
                        reset('Index')
                    }
                },100)
                setTimeout(() => {
                    SplashScreen.hide()
                },100)
            })
    }
    async _getAppOpt() {
        try {
            let type = 0
            const appoptPromise: any = appinit()
            const appadPromise: any = getAdList({ pid: 20 })
            let appopt = (await appoptPromise).data
            let appad = (await appadPromise).data
            let agreement: any = await SInfo.getItem('likeshop_agreement', {})
            if (agreement) {
                agreement = !Boolean(agreement)
                appopt = { ...appopt, agreement }
            }
            if (appad.length) {
                type = 1
                appopt = { ...appopt, appad: appad[0] }
            }
            storeConfig.store.dispatch(setOption(appopt))
            this.startApp(type)
        } catch (e) {
            this.startApp()
        }
    }
    
    render() {
        const { isPrepare, theme } = this.state
        return (
            <Provider store={storeConfig.store}>
                <PersistGate loading={null} persistor={storeConfig.persistor} onBeforeLift={() => {
                    setStore(storeConfig.store)
                }} >
                    <StatusBar translucent={true} backgroundColor="transparent" barStyle="dark-content" />
                    {isPrepare ? <AntProvider theme={theme}>
                        <AppNavigation />
                    </AntProvider> : null}
                </PersistGate>
            </Provider>
        );
    }
};



export default App;