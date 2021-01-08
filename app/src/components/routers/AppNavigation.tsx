import React from 'react'
import { NavigationContainer } from '@react-navigation/native';
import { createStackNavigator, CardStyleInterpolators, HeaderTitle, TransitionSpecs, TransitionPresets } from '@react-navigation/stack';
import { Platform, BackHandler, ToastAndroid, Image } from 'react-native';
import { connect } from 'react-redux'
import { RootStackParamList } from '../../typing/routeConfig';
import { navigationRef } from '../../utils/navigation'
import { icon_back } from '../../constraint/Image';
import { StatusBarHeight } from '../../utils/app';
import Theme from '../../constraint/Theme';
import Index from '../../pages/main/Index';
import AdPages from '../../pages/common/AdPages'
import Login from '../../pages/login/Login';
import RegAccount from '../../pages/login/RegAccount';
import ForgetPwd from '../../pages/login/ForgetPwd';
import CouponCenter from '../../pages/home/CouponCenter';
import UserCollection from '../../pages/user/UserCollection';
import NewsList from '../../pages/common/NewsList';
import NewsDetail from '../../pages/common/NewsDetail';
import UserAddress from '../../pages/user/UserAddress';
import AddressEdit from '../../pages/user/AddressEdit';
import UserCoupon from '../../pages/user/UserCoupon';
import GoodsDetail from '../../pages/common/GoodsDetail';
import UserOrder from '../../pages/user/UserOrder';
import OrderDetails from '../../pages/user/OrderDetails';
import ConfirmOrder from '../../pages/common/ConfirmOrder';
import ContactService from '../../pages/user/ContactService';
import UserMember from '../../pages/user/UserMember';
import GoodsSearch from '../../pages/common/GoodsSearch';
import GrowthValue from '../../pages/user/GrowthValue';
import UserWallet from '../../pages/user/UserWallet';
import UserProfile from '../../pages/user/UserProfile';
import UserEvaluation from '../../pages/user/UserEvaluation';
import GoodsReview from '../../pages/user/GoodsReview';
import GoodsAllEvaluation from '../../pages/user/GoodsAllEvaluation';
import PostSale from '../../pages/user/PostSale';
import UserBill from '../../pages/user/UserBill';
import ApplyRefund from '../../pages/user/ApplyRefund';
import AfterSalesDetail from '../../pages/user/AfterSalesDetail';
import AfterSalesDetailForm from '../../pages/user/AfterSalesDetailForm';
import Logistics from '../../pages/user/Logistics';
import MyWebView from '../../pages/common/MyWebView'
import ChangePhone from '../../pages/user/ChangePhone';
import SetPassWord from '../../pages/user/SetPassWord';
import ServerExplain from '../../pages/common/ServerExplain';
import ActivityDetail from '../../pages/home/ActivityDetail';
import PayResult from '../../pages/common/PayResult';
const Stack = createStackNavigator<RootStackParamList>();
let lastClickBackTime = 0
class AppNavigation extends React.Component<any> {
    stackIndex: number | undefined;
    clickBackTime: number | undefined;
    backHandler: any;
    constructor(props: any) {
        super(props)
        this.stackIndex = 0
    }

    UNSAFE_componentWillMount() {
        if (Platform.OS === 'android') {
            this.backHandler = BackHandler.addEventListener('hardwareBackPress', this.backHandlerFun.bind(this));
        }
    }
    backHandlerFun() {
        if (this.stackIndex === 0) {
            this.clickBackTime = new Date().getTime();
            if (this.clickBackTime - lastClickBackTime > 2000) {
                ToastAndroid.show("再点一下退出", ToastAndroid.SHORT);
                lastClickBackTime = this.clickBackTime;
                return true;
            } else {
                lastClickBackTime = 0;
                BackHandler.exitApp()
                return false
            }
        }
    }
    componentWillUnmount() {
        if (Platform.OS === 'android') {
            this.backHandler.remove();
        }
    }

    render() {
        const { appad } = this.props
        return (
            <NavigationContainer
                ref={navigationRef}
                onStateChange={(stack) => {
                    if (stack) {
                        this.stackIndex = stack.index
                    }
                }} >
                <Stack.Navigator
                    headerMode="screen"
                    initialRouteName={appad.image ? "AdPages" : "Index"}
                    screenOptions={{
                        headerStyle: { elevation: 0, backgroundColor: '#fff', height: StatusBarHeight + Theme.title_height, shadowOpacity: 0 },
                        headerTitleAlign: 'center',
                        headerBackTitleVisible: false,
                        animationEnabled: true,
                        headerTitleAllowFontScaling: true,
                        headerTitleStyle: { fontWeight: 'normal', fontSize: 16, lineHeight: 23 },
                        cardStyleInterpolator: CardStyleInterpolators.forHorizontalIOS,
                        headerBackImage: () => <Image source={icon_back} style={{ width: 30, height: 30 }}
                        />,
                        headerPressColorAndroid: '#fff'
                    }}
                >
                    <Stack.Screen
                        options={{
                            title: '',
                            headerShown: false,
                        }}
                        name="AdPages"
                        component={AdPages} />
                    <Stack.Screen
                        options={{
                            title: '',
                            headerShown: false,
                            ...TransitionPresets.FadeFromBottomAndroid,
                        }}
                        name="Index"
                        component={Index} />
                    <Stack.Screen
                        options={{
                            title: '商品详情'
                        }}
                        name='GoodsDetail'
                        component={GoodsDetail}
                    />

                    <Stack.Screen
                        options={{
                            title: '',
                        }}
                        name="Login"
                        component={Login}
                    />
                    <Stack.Screen
                        options={{
                            title: '领券中心'
                        }}
                        name="CouponCenter"
                        component={CouponCenter}
                    />
                    <Stack.Screen
                        options={{
                            title: '我的收藏'
                        }}
                        name="UserCollection"
                        component={UserCollection}
                    />
                    <Stack.Screen
                        options={({ route }) => ({
                            title: route.params?.type == 1 ? '帮助中心' : '商城资讯'
                        })}
                        name="NewsList"
                        component={NewsList}
                    />
                    <Stack.Screen
                        options={({ route }) => ({
                            title: route.params?.type == 1 ? '帮助详情' : '资讯详情'
                        })}
                        name="NewsDetail"
                        component={NewsDetail}
                    />
                    <Stack.Screen
                        options={{
                            title: '收货地址',
                        }}
                        name="UserAddress"
                        component={UserAddress} />
                    <Stack.Screen
                        options={({ route }) => ({
                            title: route.params?.type == 0 ? '编辑地址' : '添加地址'
                        })}
                        name="AddressEdit"
                        component={AddressEdit} />
                    <Stack.Screen
                        options={{
                            title: '我的优惠券'
                        }}
                        name="UserCoupon"
                        component={UserCoupon}
                    />
                    <Stack.Screen
                        options={{
                            title: '注册账号'
                        }}
                        name="RegAccount"
                        component={RegAccount}
                    />
                    <Stack.Screen
                        options={{
                            title: '忘记密码'
                        }}
                        name="ForgetPwd"
                        component={ForgetPwd}
                    />
                    <Stack.Screen
                        options={{
                            title: '订单结算'
                        }}
                        name='ConfirmOrder'
                        component={ConfirmOrder}
                    />
                    <Stack.Screen
                        options={{
                            title: '我的订单'
                        }}
                        name='UserOrder'
                        component={UserOrder}
                    />
                    <Stack.Screen
                        options={{
                            title: '订单详情'
                        }}
                        name='OrderDetails'
                        component={OrderDetails}
                    />
                    <Stack.Screen
                        options={{
                            title: '联系客服'
                        }}
                        name='ContactService'
                        component={ContactService}
                    />
                    <Stack.Screen
                        options={{
                            title: '会员等级'
                        }}
                        name='UserMember'
                        component={UserMember}
                    />
                    <Stack.Screen
                        options={({ route }) => ({
                            title: route.params?.name || '商品搜索'
                        })}
                        name='GoodsSearch'
                        component={GoodsSearch}
                    />

                    <Stack.Screen
                        options={{
                            title: '成长值'
                        }}
                        name='GrowthValue'
                        component={GrowthValue}
                    />
                    <Stack.Screen
                        options={{
                            title: '我的钱包'
                        }}
                        name='UserWallet'
                        component={UserWallet}
                    />

                    <Stack.Screen
                        options={{
                            title: '个人资料'
                        }}
                        name='UserProfile'
                        component={UserProfile}
                    />
                    <Stack.Screen
                        options={{
                            title: '退款/售后'
                        }}
                        name="PostSale"
                        component={PostSale}
                    />
                    <Stack.Screen
                        options={{
                            title: '售后申请'
                        }}
                        name="ApplyRefund"
                        component={ApplyRefund}
                    />
                    <Stack.Screen
                        options={{
                            title: '售后详情'
                        }}
                        name="AfterSalesDetail"
                        component={AfterSalesDetail}
                    />
                    <Stack.Screen
                        options={{
                            title: '提交快递单号'
                        }}
                        name="AfterSalesDetailForm"
                        component={AfterSalesDetailForm}
                    />
                    <Stack.Screen
                        options={{
                            title: '评价列表'
                        }}
                        name="UserEvaluation"
                        component={UserEvaluation}
                    />
                    <Stack.Screen
                        options={{
                            title: '账户明细'
                        }}
                        name='UserBill'
                        component={UserBill}
                    />
                    <Stack.Screen
                        options={{
                            title: "全部评价"
                        }}
                        name={"GoodsAllEvaluation"}
                        component={GoodsAllEvaluation}
                    />
                    <Stack.Screen
                        options={{
                            title: "商品评价"
                        }}
                        name={"GoodsReview"}
                        component={GoodsReview}
                    />
                    <Stack.Screen
                        options={({ route }) => ({
                            title: route.params.name || ''
                        })}
                        name="MyWebView"
                        component={MyWebView}
                    />
                    <Stack.Screen
                        options={{
                            title: "设置密码"
                        }}
                        name="SetPassWord"
                        component={SetPassWord}
                    />
                    <Stack.Screen
                        options={({ route }) => ({
                            title: route.params.type == 0 ? '服务协议' : route.params.type == 1 ? '隐私政策' : '售后保障'
                        })}
                        name="ServerExplain"
                        component={ServerExplain}
                    />
                    <Stack.Screen
                        options={({route}) => ({
                            title: route.params.type == 0 ? '更换手机' : '绑定手机'
                        })}
                        name="ChangePhone"
                        component={ChangePhone}
                    />
                     <Stack.Screen
                        options={{
                            title: '物流'
                        }}
                        name="Logistics"
                        component={Logistics}
                    />
                    <Stack.Screen
                        options={({ route }) => ({
                            title: route.params.title
                        })}
                        name="ActivityDetail"
                        component={ActivityDetail}
                    />
                    <Stack.Screen
                        options={{
                            title: "支付结果"
                        }}
                        name="PayResult"
                        component={PayResult}
                    />
                </Stack.Navigator>
            </NavigationContainer>
        )
    }

}
let selector = (state: any) => {
    return {
        appad: state.appStore.appOption.appad
    }
}
export default connect(selector)(AppNavigation);