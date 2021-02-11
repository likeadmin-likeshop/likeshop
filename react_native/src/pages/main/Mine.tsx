import React from 'react';
import { connect } from 'react-redux';
import { StyleSheet, Text, View, Image, Animated, ImageBackground, Clipboard, RefreshControl, SafeAreaView } from 'react-native';
import { IconFill, IconOutline } from "@ant-design/icons-react-native";
import { useFocusEffect } from '@react-navigation/native';
import {
    my_topbg, my_portrait_empty, arrow_right, icon_my_payment, icon_my_shouhou,
    icon_my_shouhuo, icon_my_pingjia, icon_my_address, icon_my_coupon, icon_my_wallet,
    icon_my_help_center, icon_my_help, icon_my_collection, bg_member, icon_vip, icon_my_fenxiao, icon_my_huiyuan, icon_my_fahuo, icon_my_news, icon_my_setting
} from '../../constraint/Image'
import Theme from '../../constraint/Theme'
import { ScreenProps, RootState, RouteName } from '../../typing';
import PressButton from '../../components/main/PressButton';
import { isiPhoneX, ScreenWidth, StatusBarHeight } from '../../utils/app';
import { columnCenter, contain, getImageSize, row, rowBetween } from '../../constraint/Style';
import StickyHeader from '../../components/main/StickyHeader';
import { navigate } from '../../utils/navigation';
import { getUser } from '../../api/user';
import { isSuccess, post, api_test, host } from '../../utils/request';
import Recommend from '../../components/bussiness/Recommend';
import { orderType } from '../../utils/type';
import { setUser, setLogin } from '../../store/reducers/userReducer';
import { Dispatch } from 'redux';
import Icon from 'react-native-vector-icons/FontAwesome5'
import PriceFormate from '../../components/bussiness/PriceFormate';
import { getMenu } from '../../api/app';
import { getUrlparams } from '../../utils/util';
import { Toast } from '@ant-design/react-native';




type MineProps = ScreenProps<'Mine'> & ReturnType<typeof mapStateToProps> & ReturnType<typeof mapDispatchToProps>

class Mine extends React.Component<MineProps, any> {
    listener!: () => void | undefined;
    constructor(props: MineProps) {
        super(props)
        this.state = {
            scrollY: new Animated.Value(0),
            optList: [],
            user: {},
            refreshing: false
        }
    }

    UNSAFE_componentWillMount() {
        this.listener = this.props.navigation.addListener("focus", (e) => {
            this._getUser()
        })
        this._getMenu()
    }

    componentWillUnmount() {
        this.listener()
    }

    async _getUser () {
        const {isLogin} = this.props
        if(!isLogin) return
        const res: any = await getUser()
        if (isSuccess(res)) {
            setUser(res.data)
            this.setState({
                user: res.data,
                refreshing: false
            })
        }
    }
    _getMenu() {
        getMenu({ type: 2 }).then((res: any) => {
            if (isSuccess(res)) {
                this.setState({
                    optList: res.data,
                    refreshing: false
                })
            }
        })
    }
    goPage(item: any) {
        switch (item.link_type) {
            case 1:
            case 3:
                let url = item.link.split('?');
                console.log(getUrlparams(item.link), item)
                navigate(url[0], getUrlparams(item.link))
                break;
            case 2:
                // webview
                navigate("MyWebView", {
                    url: item.link
                })
                break;
        }
    }


    headerContainer() {
        const { scrollY, user: { avatar, level, nickname, sn, next_level_tips } } = this.state
        const { isLogin,  } = this.props
        const height = Theme.title_height
        const opacity1 = scrollY.interpolate({
            inputRange: [-1, 0, height, height + 1],
            outputRange: [0, 0, 1, 1],
        });
        const opacity2 = scrollY.interpolate({
            inputRange: [-1, 0, height, height + 1],
            outputRange: [1, 1, 0, 0],
        });
        let userInfo: any = null;
        if (isLogin) {
            userInfo = (
                <View style={{ marginLeft: 15 }}>
                    <View style={{ marginBottom: 10 }}>
                        <Text style={{ color: "white", fontSize: 18 }}>{nickname}</Text>
                    </View>
                    <View style={{ height: 20, borderRadius: 60, borderColor: "#F2F2F2", borderWidth: 0.5, flexDirection: "row", alignItems: "center" }} >
                        <Text style={{ color: Theme.fill_base, fontSize: Theme.font_size_xs, marginHorizontal: 10 }}>会员ID: {sn}</Text>
                        <View style={{ backgroundColor: "#FFDFDA", height: 20, paddingHorizontal: 11, justifyContent: "center", borderRadius: 60 }}>
                            <Text style={{ fontSize: Theme.font_size_xs }} onPress={() => {
                                Clipboard.setString(sn);
                                Toast.success('复制成功')
                            }}>复制</Text>
                        </View>
                    </View>
                </View>
            )
        }
        else {
            userInfo = (
                <PressButton style={{ marginLeft: 15, }} onPress={() => navigate("Login")}>
                    <Text style={{ color: "white", fontSize: 21, lineHeight: 30 }}>点我登录</Text>
                    <Text style={{ color: "white", fontSize: Theme.font_size_sm }}>登录体验更多功能</Text>
                </PressButton>
            )
        }

        return (
            <View style={{ zIndex: 9, height: 200 + (isiPhoneX ? 24 : 0) }}>
                <StickyHeader
                    style={{ opacity: opacity1 }}
                    stickyScrollY={this.state.scrollY}
                >
                    <View style={[MineStyle.header, { position: 'absolute', width: '100%', backgroundColor: Theme.fill_base, paddingTop: StatusBarHeight }]}>
                        <Text style={[MineStyle.headerTitle, { color: Theme.color_text_base }]}>个人中心</Text>
                    </View>
                </StickyHeader>
                <StickyHeader
                    style={{ opacity: opacity2 }}
                    stickyScrollY={this.state.scrollY}
                >
                    <View style={[MineStyle.header, { paddingTop: StatusBarHeight }]}>
                        <Text style={[MineStyle.headerTitle]}>个人中心</Text>
                    </View>
                </StickyHeader>
                <View style={rowBetween}>
                    <PressButton style={{ ...MineStyle.userInfo }} onPress={() => isLogin ? navigate('UserProfile') : navigate('Login')}>
                        <View>
                            <Image source={avatar ? { uri: avatar } : my_portrait_empty} style={[getImageSize(55), { borderRadius: 55 }]} />
                        </View>
                        {userInfo}
                    </PressButton>
                </View>
                <PressButton style={{ flex: 1, justifyContent: 'flex-end', alignItems: 'center' }} onPress={() => navigate('UserMember')}>
                    <ImageBackground source={bg_member} style={{ height: 40 * (ScreenWidth - 20) / 355, width: ScreenWidth - 20 }} imageStyle={{ width: '100%', height: '100%' }}>
                        <View style={{ height: 40 * (ScreenWidth - 20) / 355, ...rowBetween, paddingHorizontal: 10 }}>
                            <View style={row}>
                                <Image source={icon_vip} style={getImageSize(21)} />
                                <Text style={{ color: '#FFE0A1', marginLeft: 5 }}>{isLogin ? level : '登录查看会员权益'}</Text>
                            </View>
                            <View style={row}>
                                <Text style={{ color: '#FFE0A1' }}>{next_level_tips || '查看会员权益'}</Text>
                                <IconOutline name="right" color="#FFE0A1" />
                            </View>
                        </View>
                    </ImageBackground>
                </PressButton>
            </View>
        )
    }
    myAssets() {
        let {user: { user_money, user_integral, coupon }} = this.state
        let { isLogin } = this.props
        if (!isLogin) {
            user_money = 0
            user_integral = 0
            coupon = 0
        }
        return (
            <View style={{ marginHorizontal: 10, marginTop: 10, backgroundColor: Theme.fill_base }}>
                <View style={{ paddingHorizontal: 15, paddingVertical: 12, borderColor: Theme.border_color_base, borderBottomWidth: 0.5 }}>
                    <Text style={{ fontSize: Theme.font_size_md, fontWeight: '500', }}>我的资产</Text>
                </View>
                <View style={{ ...row, paddingVertical: 13 }}>
                    <PressButton style={{ flex: 1, ...columnCenter }} onPress={() => navigate('UserWallet')}>
                        <Text style={{ color: Theme.brand_primary, fontSize: Theme.font_size_xl }}>{user_money}</Text>
                        <Text style={{ fontSize: Theme.font_size_sm, marginTop: 8 }}>余额</Text>
                    </PressButton>
                    <PressButton style={{ flex: 1, ...columnCenter }} onPress={() => navigate('UserCoupon')}>
                        <Text style={{ color: Theme.brand_primary, fontSize: Theme.font_size_xl }}>{coupon}</Text>
                        <Text style={{ fontSize: Theme.font_size_sm, marginTop: 8 }}>优惠券</Text>
                    </PressButton>
                </View>
            </View>
        )
    }
    myOrder() {
        return (
            <View style={MineStyle.orderNav}>
                {this.myOrderHeader()}
                {this.myOrderItemContainer()}
            </View>
        )
    }

    myOrderHeader() {
        return (
            <PressButton style={MineStyle.userOrder} onPress={() => navigate('UserOrder')}>
                <View>
                    <Text style={{ fontSize: Theme.font_size_md, fontWeight: '500' }}>我的订单</Text>
                </View>
                <View style={{ flexDirection: "row" }}>
                    <View style={{ marginRight: 6.5 }}>
                        <Text style={{ fontSize: Theme.font_size_sm, color: Theme.color_text_muted }}>全部订单</Text>
                    </View>
                    <Image source={arrow_right} style={{ width: 14, height: 14 }}></Image>
                </View>
            </PressButton>
        )
    }
    getOrderItem(icon: any, text: string, num: number, path: RouteName, params?: any) {
        return (
            <PressButton style={MineStyle.myOrderItem} onPress={() => navigate(path, params)}>
                <View>
                    <Image source={icon} style={MineStyle.orderImage} />
                    {num ? <View style={MineStyle.badge}>
                        <Text style={{ color: Theme.brand_primary, fontSize: 12 }}>{num}</Text>
                    </View> : null}
                </View>
                <Text style={{ fontSize: 13, marginTop: 5 }}>{text}</Text>
            </PressButton>
        )
    }
    myOrderItemContainer() {
        const { user: { wait_pay, wait_delivery, wait_comment, after_sale, wait_take } } = this.state
        return (
            <View style={MineStyle.myOrderItemContainer}>
                {this.getOrderItem(icon_my_payment, '待付款', wait_pay, 'UserOrder', { type: orderType['pay'] })}
                {this.getOrderItem(icon_my_fahuo, '待发货', wait_delivery, 'UserOrder', { type: orderType['delivery'] })}
                {this.getOrderItem(icon_my_shouhuo, '待收货', wait_take, 'UserOrder', { type: orderType['delivery'] })}
                {this.getOrderItem(icon_my_pingjia, '商品评价', wait_comment, 'UserEvaluation')}
                {this.getOrderItem(icon_my_shouhou, '退款/售后', after_sale, 'PostSale')}
            </View>
        )
    }

    myServer() {
        return (
            <View style={MineStyle.serverNav}>
                <View style={MineStyle.serverHeader}>
                    <Text style={{ fontSize: Theme.font_size_md, fontWeight: '500' }}>我的服务</Text>
                </View>
                {this.myServerItemContainer()}
            </View>
        )
    }

    myServerItemContainer() {
        const { optList } = this.state
        return (
            <View style={MineStyle.myServerItemContainer}>
                {
                    optList.map((item: any, index: number) => (
                        <PressButton style={MineStyle.myServerItem} onPress={this.goPage.bind(this, item)} key={index}>
                            <Image source={{ uri: item.image }} style={MineStyle.serverImg}></Image>
                            <Text style={{ fontSize: 13, marginTop: 5 }}>{item.name}</Text>
                        </PressButton>
                    ))
                }
            </View>
        )
    }

    render() {
        const {refreshing} = this.state
        return (
            <Animated.ScrollView style={contain}
                showsVerticalScrollIndicator={false}
                refreshControl={<RefreshControl refreshing={refreshing}
                        onRefresh={() => {
                            this.setState({
                                refreshing: true
                            })
                            this._getMenu()
                            this._getUser()
                        }} />}
                onScroll={Animated.event([{
                    nativeEvent: { contentOffset: { y: this.state.scrollY, } }
                }], { useNativeDriver: true })} >
                <Image source={my_topbg} style={{ width: '100%', height: 200 + (isiPhoneX ? 24 : 0), position: 'absolute' }} />
                {this.headerContainer()}
                {this.myAssets()}
                {this.myOrder()}
                {this.myServer()}
                <Recommend />
            </Animated.ScrollView>
        );
    }
};

const MineStyle = StyleSheet.create({
    header: {
        height: Theme.title_height + StatusBarHeight,
        alignItems: 'center',
        justifyContent: 'center',
    },
    headerTitle: {
        color: "white",
        fontSize: 16,
        fontWeight: 'bold',
        textAlign: 'center',
    },
    headerContainerBox: {
        height: 200,
    },
    dot: {
        position: 'absolute',
        top: 3,
        right: 0,
        borderColor: 'white',
        borderWidth: Theme.border_width_md,
        backgroundColor: 'red',
        minWidth: 8,
        height: 8,
        borderRadius: 100,
        zIndex: 5
    },
    userInfo: {
        marginTop: Theme.v_spacing_md,
        paddingHorizontal: Theme.h_spacing_md,
        flexDirection: "row",
        alignItems: 'center',
    },
    orderNav: {
        backgroundColor: "white",
        marginLeft: 10,
        marginTop: 15,
        borderRadius: 4,
        marginRight: 10,
    },
    userOrder: {
        paddingHorizontal: 15,
        paddingVertical: 13,
        flexDirection: "row",
        justifyContent: "space-between",
        alignItems: "center",
        borderColor: "white",
        borderBottomColor: Theme.border_color_base,
        borderWidth: 0.5,
        borderTopLeftRadius: 4,
        borderTopRightRadius: 4
    },
    orderImage: {
        width: 26,
        height: 26
    },
    myOrderItemContainer: {
        paddingVertical: 13,
        flexDirection: "row",
        alignItems: "center"
    },
    badge: {
        position: 'absolute',
        top: -5,
        left: 16,
        minWidth: 14,
        height: 14,
        borderRadius: 14,
        borderWidth: Theme.border_width_sm,
        borderColor: Theme.brand_primary,
        zIndex: 2,
        backgroundColor: Theme.fill_base,
        justifyContent: 'center',
        alignItems: 'center'
    },
    myOrderItem: {
        flex: 1,
        alignItems: "center"
    },
    serverNav: {
        backgroundColor: "white",
        marginTop: 14,
        borderRadius: 4,
        marginHorizontal: 10,
    },
    serverHeader: {
        paddingHorizontal: 15,
        paddingVertical: 12,
        flexDirection: "row",
        justifyContent: "space-between",
        alignItems: "center",
        borderColor: "white",
        borderBottomColor: Theme.border_color_base,
        borderWidth: 0.5,
        borderTopLeftRadius: 4,
        borderTopRightRadius: 4
    },
    myServerItemContainer: {
        paddingTop: 13,
        paddingBottom: 7,
        flexDirection: "row",
        alignItems: "center",
        flexWrap: 'wrap'
    },
    serverImg: {
        width: 26,
        height: 26,
    },
    myServerItem: {
        width: "25%",
        alignItems: "center",
        marginBottom: 20,
    }
})
let mapStateToProps = (state: RootState) => {
    return {
        isLogin: state.userStore.isLogin
    }
}

let mapDispatchToProps = (dispatch: Dispatch) => ({
    setUserStatus: (user: any) => dispatch(setUser(user)),
    setLogin: (isLogin: boolean) => dispatch(setLogin(isLogin))
})
export default connect(mapStateToProps, mapDispatchToProps)(Mine);
