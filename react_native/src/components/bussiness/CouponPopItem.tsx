import React from "react";
import { View, Image, Text, StyleSheet, ImageBackground, ViewStyle, TextStyle, FlatList } from "react-native";
import Theme from "../../constraint/Theme";
import { getImageSize, row, columnCenter, rowCenter, rowBetween } from "../../constraint/Style";
import PressButton from "../main/PressButton";
import PriceFormate from "./PriceFormate";
import { coupon_bg, coupon_bg_grey, arrow_right, coupon_null } from "../../constraint/Image";
import EmptyView from "./EmptyView";
import CheckBox from "./CheckBox";
import { ScreenWidth } from "../../utils/app";
type CouponPopItemProps = {
    list: any[]
    type: number
    onSelect?: (_: number) => void
    couponId?: number
    [x: string]: any
}
class CouponPopItem extends React.Component<CouponPopItemProps, any> {
    [x: string]: any;
    constructor(props: CouponPopItemProps) {
        super(props);
        this.state = {
            showTips: [],
            currentId: props.couponId || ''
        }
    }
   
    couponItem(data: any) {
        let {currentId} = this.state
        const {type, onSelect} = this.props
        return (
            <PressButton disabled={type == 1} style={style.couponItem} onPress={() => {
                if(currentId == data.id) {
                    currentId = ''
                }else {
                    currentId = data.id
                }                
                this.setState({
                    currentId
                })
                onSelect && onSelect(currentId)
            }}>
                <ImageBackground source={coupon_bg} style={{ flex: 1, height: (ScreenWidth - 20)/375*100, ...rowCenter, paddingRight: 10 }} >
                    <View style={[style.couponLeft, columnCenter]}>
                        <PriceFormate style={{ fontWeight: '400' }} color={Theme.fill_base} signSize={17} prevSize={30} nextSize={17} price={data.money} />
                        <Text style={{ color: 'white', fontSize: Theme.font_size_sm }}>{data.use_condition}</Text>
                    </View>
                    <View style={style.couponRight}>
                        <Text style={style.couponName}>{data.name}</Text>
                        <Text style={{ marginTop: 10, fontSize: Theme.font_size_xxs, color: Theme.color_text_secondary }}>{data.use_time_tips}</Text>
                        <View style={{ ...rowBetween, marginTop: 6.5 }}>
                            <Text style={{ fontSize: Theme.font_size_xxs, color: Theme.color_text_secondary }}>{data.coupon_type}</Text>
                        </View>
                    </View>
                    {type == 0 ?<CheckBox checked={currentId == data.id} /> : null}
                </ImageBackground>
                {data.tips ? <View style={{ backgroundColor: Theme.fill_base, paddingHorizontal: Theme.h_spacing_md }}>
                    <Text style={{marginVertical: 5, fontSize: Theme.font_size_xs}}>{data.tips}</Text>
                </View> : null}
            </PressButton>
        )

    }

    render() {
        const { list } = this.props
        return (
            <FlatList
                style={{backgroundColor: Theme.fill_body}}
                {...this.props}
                data={list}
                renderItem={({ item }) => this.couponItem(item)}
                keyExtractor={(item, index) => item.id}
                ListHeaderComponent={() => <View style={{height: 10}} />}
                ItemSeparatorComponent={() => <View style={{height: 10}} />}
                ListEmptyComponent={() => <EmptyView source={coupon_null} text="暂无优惠券~" style={{paddingTop: 50}}/>}
            />

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



export default CouponPopItem;