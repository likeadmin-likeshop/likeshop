import React from "react";
import { View, Image, Text, StyleSheet, ImageBackground, ViewStyle, TextStyle } from "react-native";
import Theme from "../../constraint/Theme";
import { getImageSize, row, columnCenter, rowCenter, rowBetween } from "../../constraint/Style";
import PressButton from "../main/PressButton";
import PriceFormate from "./PriceFormate";
import { navigate } from "../../utils/navigation";
import { home_img_receive, coupon_bg, coupon_bg_grey, arrow_right } from "../../constraint/Image";
import { getCoupon } from "../../api/user";
import { isSuccess } from "../../utils/request";
import { Toast } from "@ant-design/react-native";
import { connect } from "react-redux";
import { RootState } from "../../typing";
import { ScreenWidth } from "../../utils/app";
type CouponItemProps = {
    data: any
    index: number
    btnType: 'receive' | 'use' | 'used' | 'Invalid'
    onRefresh?: () => void
} 
class CouponItem extends React.Component<CouponItemProps, any> {
    [x: string]: any;
    constructor(props: CouponItemProps) {
        super(props);
        this.state = {
            showTips: []
        }
    }
    onHandle(id: number) {
        const { btnType } = this.props
        this.id = id
        switch (btnType) {
            case 'Invalid':
                break;
            case 'receive': this._getCoupon()
                break;
            case 'use': navigate('Home')
                break;
            case 'used':
                break;
        }
    }
    getBtnText() {
        const { btnType } = this.props
        switch (btnType) {
            case 'Invalid': return '已失效'
            case 'receive': return '领取'
            case 'use': return '去使用'
            case 'used': return '已使用'
        }
    }
    _getCoupon() {
        const { onRefresh } = this.props
        getCoupon(this.id).then((res: any) => {
            if (isSuccess(res)) {
                Toast.info(res.msg)
            }
            onRefresh && onRefresh()
        })
    }
    render() {
        const { data, btnType, index } = this.props
        const {showTips} = this.state
        const btnStyle: ViewStyle = {
            width: 60,
            borderColor: Theme.brand_primary,
            borderWidth: Theme.border_width_sm
        }
        const textStyle: TextStyle = {
            color: Theme.fill_base
        }
        let couponBg = coupon_bg
        switch (btnType) {
            case 'Invalid':
            case 'used': btnStyle.borderColor = '#ccc'
                textStyle.color = '#ccc'
                couponBg = coupon_bg_grey
                break;
            case 'receive': btnStyle.backgroundColor = Theme.brand_primary
                break;
            case 'use': textStyle.color = Theme.brand_primary
        }

        return (
            <View style={style.couponItem}>
                {btnType == "receive" ? <Image source={home_img_receive} style={style.receiveImg} /> : null}
                <ImageBackground source={couponBg} style={{ flex: 1, height: 100, ...rowCenter }} >
                    <View style={[style.couponLeft, columnCenter]}>
                        <PriceFormate style={{ fontWeight: '400' }} color={Theme.fill_base} signSize={17} prevSize={30} nextSize={17} price={data.money} />
                        <Text style={{ color: 'white', fontSize: Theme.font_size_sm }}>{data.use_condition}</Text>
                    </View>
                    <View style={style.couponRight}>
                        <Text style={style.couponName}>{data.name}</Text>
                        <Text style={{ marginTop: 10, fontSize: Theme.font_size_xxs, color: Theme.color_text_secondary }}>{data.use_time_tips}</Text>
                        <View style={{ ...rowBetween, marginTop: 6.5 }}>
                            <Text style={{ fontSize: Theme.font_size_xxs, color: Theme.color_text_secondary }}>{data.coupon_type}</Text>
                            <PressButton style={btnStyle} size="sm" textStyle={textStyle} round={true} onPress={() => this.onHandle(data.id)}>{this.getBtnText()}</PressButton>
                        </View>
                    </View>
                </ImageBackground>
               {data.tips ? <View style={{ backgroundColor: Theme.fill_base, paddingHorizontal: Theme.h_spacing_md }}>
                    <PressButton style={{ height: 30, ...rowBetween, }} onPress={() => {
                        showTips[index] = showTips[index] ? 0 : 1
                        this.setState({
                            showTips
                        })
                    }}>
                        <Text>使用说明</Text>
                        <View style={{
                            transform: [{
                                rotateZ: showTips[index] ? '-90deg' : '90deg'
                            }]
                        }}>
                            <Image source={arrow_right} style={{ ...getImageSize(15) }} />
                        </View>
                    </PressButton>
                    {showTips[index] ?<Text style={{fontSize: Theme.font_size_xs, marginBottom: Theme.v_spacing_md}}>{data.tips}</Text> : null}
                </View> : null}
            </View>
        );
    }
}
const style = StyleSheet.create({
    couponItem: {
        paddingHorizontal: Theme.h_spacing_md
    },
    couponLeft: {
        width: 100/355*(ScreenWidth-20)
    },
    couponRight: {
        flex: 1,
        paddingHorizontal: 10
    },
    couponName: {
        fontSize: Theme.font_size_md,
        fontWeight: 'bold',
        lineHeight: 20,
    },
    btn: {
        backgroundColor: Theme.brand_primary,
        borderRadius: Theme.radius_circel,
        paddingHorizontal: 16,
        paddingVertical: 3
    },
    receiveImg: {
        width: 49.5,
        height: 38.5,
        position: 'absolute',
        top: 0,
        right: 25,
        zIndex: 100
    },
    dataNull: {
        flex: 1,
        paddingTop: 150
    }
})



export default CouponItem;