import React from 'react';
import { createBottomTabNavigator } from '@react-navigation/bottom-tabs';
import RNExitApp from 'react-native-exit-react_native';
import SInfo from "react-native-sensitive-info";
import { EmitterSubscription, Text, View } from 'react-native';
import { BottomTabParamList } from '../../typing/routeConfig';
import Home from './Home'
import Classify from './Classify'
import ShopCart from './ShopCart'
import Mine from './Mine'
import TabBarItem from '../../components/main/TabBarItem'
import {
    icon_tab_home, icon_tab_home_s,
    icon_tab_sort, icon_tab_sort_s,
    icon_tab_my, icon_tab_my_s,
    icon_tab_shopcart, icon_tab_shopcart_s
} from '../../constraint/Image'
import { registerEvent } from '../../utils/event';
import { getCartNum } from '../../api/store';
import { isSuccess } from '../../utils/request';
import { RootState } from '../../typing';
import { connect } from 'react-redux';
import Dialog from '../../components/main/Dialog';
import Theme from '../../constraint/Theme';
import { navigate } from '../../utils/navigation';
import CheckUpDate from '../../components/main/CheckUpDate';
import { Dispatch } from 'redux';
import { setCartNum } from '../../store/reducers/userReducer';
const Tab = createBottomTabNavigator<BottomTabParamList>();
type IndexProps = ReturnType<typeof mapStateToProps>& ReturnType<typeof mapDispatchToProps>
class Index extends React.Component<IndexProps, any> {
    listener!: EmitterSubscription;
    constructor(props: IndexProps) {
        super(props)
        this.state ={
            cartNum: '',
            showTips: Boolean(props.agreement)
        }
    }
  
    UNSAFE_componentWillMount() {
        
        this.listener = registerEvent('GET_CART_NUM', () => this._getCartNum())
        this._getCartNum()
    }
    componentWillUnmount() {
        this.listener.remove()
    }

    _getCartNum() {
        const {isLogin, setCartNum} = this.props
        if (!isLogin) return setCartNum()
        getCartNum().then((res: any) => {
            if (isSuccess(res)) {
                setCartNum(res.data.num)
            }
        })
    }
    closeTips() {
        this.setState({
            showTips: false
        })
    }
    onConfirm() {
        this.closeTips()
        SInfo.setItem('likeshop_agreement', 'true', {})
    }
    _agreementPopup() {
        const { showTips } = this.state
        return (
            <Dialog isVisible={showTips} coverScreen={false}  cancelButtonText="暂不使用" confirmButtonText="同意" onCancel={() => RNExitApp.exitApp()} onConfirm={() => this.onConfirm()}>
                <Text style={{ fontSize: 16, textAlign: 'center' }}>服务协议和隐私政策</Text>
                <Text style={{ marginTop: 15, paddingHorizontal: 20, lineHeight: 25, color: '#101010' }}>
                    感谢您使用likeShop开源多商户商城！我们非常重视您的个人信息和隐私保护。为了更好地保障您的个人权益，在您使用我们的产品前，请您认真阅读
                    <Text style={{ color: Theme.brand_primary }} onPress={() => navigate('ServerExplain', { type: 0 })}>《服务协议》</Text>和
                    <Text style={{ color: Theme.brand_primary }} onPress={() => navigate('ServerExplain', { type: 1 })}>《隐私政策》</Text>
                    的全部内容，同意并接受全部条款后开始使用我们的产品和服务。我们会严格按照政策内容使用和保护您的个人信息，感谢您的信任。
                </Text>
            </Dialog>
        )
    }
    render() {
        const { cartNum } = this.props
        return (
            <>
                <Tab.Navigator
                    backBehavior="none"
                    tabBarOptions={{
                        activeTintColor: Theme.brand_primary,
                        inactiveTintColor: Theme.color_text_secondary,
                        labelStyle: {
                            fontSize: 12,
                        }
                    }}>
                    <Tab.Screen
                        options={{
                            title: '首页',
                            tabBarIcon: ({ focused }) => (
                                <TabBarItem
                                    focused={focused}
                                    normalImage={icon_tab_home}
                                    selectedImage={icon_tab_home_s}
                                />
                            )
                        }}
                        name="Home"
                        component={Home} />
                    <Tab.Screen
                        options={{
                            title: '分类',
                            tabBarIcon: ({ focused }) => (
                                <TabBarItem
                                    focused={focused}
                                    normalImage={icon_tab_sort}
                                    selectedImage={icon_tab_sort_s}
                                />
                            )
                        }}
                        name="Classify"
                        component={Classify} />
                    <Tab.Screen
                        options={{
                            title: '购物车',
                            tabBarIcon: ({ focused }) => (
                                <TabBarItem
                                    focused={focused}
                                    normalImage={icon_tab_shopcart}
                                    selectedImage={icon_tab_shopcart_s}
                                />
                            ),
                            tabBarBadge: cartNum ? cartNum : undefined
                        }}
                        name="ShopCart"
                        component={ShopCart} />
                    <Tab.Screen
                        options={{
                            title: '我的',
                            tabBarIcon: ({ focused }) => (
                                <TabBarItem
                                    focused={focused}
                                    normalImage={icon_tab_my}
                                    selectedImage={icon_tab_my_s}
                                />
                            )
                        }}
                        name="Mine"
                        component={Mine} />
                </Tab.Navigator>
                {this._agreementPopup()}
                <CheckUpDate />
            </>
        );
    }
}

let mapStateToProps = (state: RootState) => {
    return {
        isLogin: state.userStore.isLogin,
        agreement: state.appStore.appOption.agreement,
        cartNum: state.userStore.cartNum
    }
}
let mapDispatchToProps = (dispatch: Dispatch) => ({
    setCartNum: (num?: number) => dispatch(setCartNum(num))
})
export default connect(mapStateToProps, mapDispatchToProps)(Index)