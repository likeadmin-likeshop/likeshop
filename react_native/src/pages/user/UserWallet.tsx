import React from "react"
import { RootState, ScreenProps } from '../../typing';
import Theme from "../../constraint/Theme";
import { View, StyleSheet, Text, Image, ImageBackground, TouchableOpacity, SafeAreaView, ScrollView } from "react-native";
import { row, rowBetween, getImageSize, columnCenter, contain } from "../../constraint/Style";
import { icon_account, icon_consume, icon_recharge, sign_in_bg, get_coupon_bg } from "../../constraint/Image";
import PressButton from "../../components/main/PressButton";
import { navigate } from "../../utils/navigation";
import { connect } from "react-redux";
import { getWallet } from "../../api/user";
import { isSuccess } from "../../utils/request";
type UserWalletProps = ScreenProps<'UserWallet'> & ReturnType<typeof mapStateToProps> ;

class UserWallet extends React.Component<UserWalletProps, any> {
    constructor(props: UserWalletProps) {
        super(props);
        this.state = {
            wallet: {}
        }
    }
    UNSAFE_componentWillMount() {
        this._getWallet()
    }
    _getWallet() {
        getWallet().then((res: any) => {
            if (isSuccess(res)) {
                this.setState({
                    wallet: res.data
                })
            }
        })
    }
    render() {
        const {wallet} = this.state
        return (
            <SafeAreaView style={contain}>
                <ScrollView showsVerticalScrollIndicator={false}>
                    <View style={Style.userWalletContainer}>
                        <View
                            style={Style.header}
                        >
                            <View style={rowBetween}>
                                <View>
                                    <View>
                                        <Text style={{ color: "#FFF", fontSize: Theme.font_size_xs }}>总资产（元）</Text>
                                    </View>
                                    <View>
                                        <Text style={{ color: "#FFF", fontSize: 38 }}>{wallet.user_money}</Text>
                                    </View>
                                </View>
                            </View>
                            <View style={[row, { marginTop: 19 }]}>
                                <View style={{ flex: 1 }}>
                                    <Text style={{ color: "#FFF", fontSize: Theme.font_size_xs }}>累计消费(元）</Text>
                                    <Text style={{ color: "#FFF", fontSize: 19 }}>{wallet.total_order_amount}</Text>
                                </View>
                            </View>
                        </View>
                        <View style={[Style.nav, row]}>
                            <PressButton style={{ ...columnCenter, ...Style.navItem }} onPress={() => navigate("UserBill", {active: 0})}>
                                <Image source={icon_account} style={getImageSize(31)}></Image>
                                <Text style={{ marginTop: 5, fontSize: Theme.font_size_base }}>账户明细</Text>
                            </PressButton>
                            <PressButton style={{ ...columnCenter, ...Style.navItem }} onPress={() => navigate("UserBill", {active: 1})}>
                                <Image source={icon_consume} style={getImageSize(31)}></Image>
                                <Text style={{ marginTop: 5, fontSize: Theme.font_size_base }}>消费记录</Text>
                            </PressButton>
                        </View>
                        <View style={{ paddingVertical: 20 }}>
                            <View>
                                <Text style={{ fontWeight: 'bold' }}>热门活动</Text>
                            </View>
                            <View style={[rowBetween, { marginTop: 15 }]}>
                                <ImageBackground source={sign_in_bg} style={{ paddingHorizontal: 15, paddingVertical: 21.5, flex: 1 }}>
                                    <View>
                                        <Text style={{ fontSize: Theme.font_size_lg, color: "#1579DC", lineHeight: 20 }}>签到领积分</Text>
                                        <Text style={{ fontSize: Theme.font_size_xs, color: "#1579DC", lineHeight: 20 }}>赚积分抵现金</Text>
                                    </View>
                                </ImageBackground>
                                <ImageBackground source={get_coupon_bg} style={{ paddingHorizontal: 15, paddingVertical: 21.5, flex: 1, marginLeft: 10 }}>
                                    <View>
                                        <Text style={{ fontSize: Theme.font_size_lg, color: "#FF2C3C", lineHeight: 20 }}>领取优惠券</Text>
                                        <Text style={{ fontSize: Theme.font_size_xs, color: "#FF2C3C", lineHeight: 20 }}>满减享优惠</Text>
                                    </View>
                                </ImageBackground>
                            </View>
                            {/* <View style={[Style.activityContain, row]}>
                                <View style={[{ flex: 1, flexWrap: 'wrap' }, rowBetween]}>
                                    <View style={[Style.activityItem, row]}>
                                        <Image style={getImageSize(37)} source={icon_activity_pintuan}></Image>
                                        <View style={{ marginLeft: 10 }}>
                                            <Text style={{ fontSize: Theme.font_size_md, fontWeight: 'bold', lineHeight: 20 }}>火爆拼团</Text>
                                            <Text style={{ fontSize: Theme.font_size_xs, color: Theme.color_text_muted, lineHeight: 20 }}>优惠商品上架拼团</Text>
                                        </View>
                                    </View>
                                    <View style={[Style.activityItem, row]}>
                                        <Image style={getImageSize(37)} source={icon_activity_seckill}></Image>
                                        <View style={{ marginLeft: 10 }}>
                                            <Text style={{ fontSize: Theme.font_size_md, fontWeight: 'bold', lineHeight: 20 }}>火爆拼团</Text>
                                            <Text style={{ fontSize: Theme.font_size_xs, color: Theme.color_text_muted, lineHeight: 20 }}>优惠商品上架拼团</Text>
                                        </View>
                                    </View>
                                    <View style={[Style.activityItem, row]}>
                                        <Image style={getImageSize(37)} source={icon_activity_kanjia}></Image>
                                        <View style={{ marginLeft: 10 }}>
                                            <Text style={{ fontSize: Theme.font_size_md, fontWeight: 'bold', lineHeight: 20 }}>火爆拼团</Text>
                                            <Text style={{ fontSize: Theme.font_size_xs, color: Theme.color_text_muted, lineHeight: 20 }}>优惠商品上架拼团</Text>
                                        </View>
                                    </View>
                                    <View style={[Style.activityItem, row]}>
                                        <Image style={getImageSize(37)} source={icon_activity_newProdect}></Image>
                                        <View style={{ marginLeft: 10 }}>
                                            <Text style={{ fontSize: Theme.font_size_md, fontWeight: 'bold', lineHeight: 20 }}>火爆拼团</Text>
                                            <Text style={{ fontSize: Theme.font_size_xs, color: Theme.color_text_muted, lineHeight: 20 }}>优惠商品上架拼团</Text>
                                        </View>
                                    </View>
                                </View>
                            </View> */}
                        </View>
                    </View>
                </ScrollView>
            </SafeAreaView>
        )
    }
}


const Style = StyleSheet.create({
    userWalletContainer: {
        flex: 1,
        backgroundColor: Theme.fill_base,
        paddingHorizontal: 15
    },
    header: {
        marginTop: 10,
        borderRadius: 10,
        paddingHorizontal: 10,
        paddingTop: 25,
        paddingBottom: 15,
        backgroundColor: Theme.brand_primary,
        height: 160
    },
    reCharge: {
        paddingHorizontal: 25.5,
        height: 28,
        justifyContent: 'center',
        backgroundColor: 'white',
        borderRadius: Theme.radius_circel,
        alignSelf: 'flex-start'
    },
    nav: {
        borderBottomColor: Theme.border_color_base,
        borderBottomWidth: Theme.border_width_md,
        paddingVertical: 20
    },
    navItem: {
        flex: 1
    },
    activityContain: {
        marginTop: 5,
        flexWrap: 'wrap'
    },
    activityItem: {
        paddingVertical: 16.5,
        paddingRight: 24.5
    },
    activityFont: {
        lineHeight: 20
    }
})
let mapStateToProps = (state: RootState) => {
    return {
        user: state.userStore.user
    }
}

export default  connect(mapStateToProps)(UserWallet)