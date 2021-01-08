import React from 'react';
import { StyleSheet, Text, View, SafeAreaView, Image, FlatList } from 'react-native';
import Theme from '../../constraint/Theme'
import { contain, row, rowCenter, rowBetween, rowEnd, getImageSize } from '../../constraint/Style';
import { orderBuy, getOrderCoupon } from '../../api/store';
import { isSuccess } from '../../utils/request';
import PressButton from '../../components/main/PressButton';
import { ScreenProps } from '../../typing';
import { ScrollView, TextInput } from 'react-native-gesture-handler';
import AddressItem from '../../components/bussiness/AddressItem';
import OrderGoods from '../../components/bussiness/OrderGoods';
import PriceFormate from '../../components/bussiness/PriceFormate';
import { arrow_right, icon_balance, icon_help, icon_wechat } from '../../constraint/Image';
import LinearGradient from 'react-native-linear-gradient';
import { prepay } from '../../api/app';
import { WXPay } from '../../utils/wechat';
import { replace } from '../../utils/navigation';
import CheckBox from '../../components/bussiness/CheckBox';
import { registerEvent } from '../../utils/event';
import Popup from '../../components/main/Popup';
import ScrollableTabView from 'react-native-scrollable-tab-view';
import CustomTabBar from '../../components/main/CustomTabBar';
import CouponPopItem from '../../components/bussiness/CouponPopItem';
import { payWayType } from '../../utils/type';
import { Toast } from '@ant-design/react-native';
import Dialog from '../../components/main/Dialog';
// import Alipay from '@0x5e/react-native-alipay';


type ConfirmOrderProps = ScreenProps<'ConfirmOrder'>;


class ConfirmOrder extends React.Component<ConfirmOrderProps, any> {
    [x: string]: any;
    constructor(props: ConfirmOrderProps) {
        super(props)
        this.goods = props.route.params.goods
        this.confirmType = props.route.params.type
        this.state = {
            showCoupon: false,
            orderInfo: {},
            address: {},
            goodsList: [],
            usableCoupon: [],
            unusableCoupon: [],
            userRemark: '',
            payWayArr: [
                {
                    icon: icon_wechat,
                    name: '微信支付',
                    type: payWayType.wechat,
                    desc: '微信快捷支付'
                },
            ],
            payWay: payWayType.wechat,
            useIntegral: 0,
            showPoint: false
        }
    }
    UNSAFE_componentWillMount() {
        const { navigation } = this.props
        this.reflash = navigation.addListener('focus', () => {
            this._orderBuy()
        })
        this.listtenr = registerEvent('SELECT_ADDRESS', (id) => {
            this.addressId = id
        })
        this._getOrderCoupon()
    }
    componentWillUnmount() {
        this.reflash()
        this.listtenr.remove()
    }
    submitOrder() {
        this._orderBuy('submit')
    }
    changeIntegral() {
        const {useIntegral, orderInfo: {integral_limit, user_integral}} = this.state
        if(integral_limit > user_integral) return Toast.info("未满足使用条件")
        this.setState({
            useIntegral: useIntegral ? 0 : 1
        }, () => this._orderBuy())
      
    }
    goodsView() {
        const { goodsList, userRemark } = this.state
        return (
            <View style={styles.contain}>
                <OrderGoods goods={goodsList} />
                <View style={{ ...styles.conItem, ...rowBetween }}>
                    <Text>配送方式</Text>
                    <Text>快递</Text>
                </View>
                <View style={{ ...styles.conItem, ...row }}>
                    <Text style={{ width: 70 }}>买家留言</Text>
                    <TextInput style={{ padding: 0, height: '100%', flex: 1 }} placeholder="请添加备注（150字以内）" value={userRemark} onChangeText={(val) => this.setState({ userRemark: val })} />
                </View>
            </View>
        )
    }
    payWayView() {
        const { payWayArr, payWay, orderInfo } = this.state
        const items = payWayArr.map((item: any, index: any) => (
            <PressButton style={{ paddingHorizontal: 12, ...row, height: 60}} onPress={() => this.setState({payWay: item.type})}>
                <Image source={item.icon} style={getImageSize(24)} />
                <View style={{ marginLeft: 8, flex: 1 }}>
                    <Text>{ item.name }</Text>
                    <Text style={{marginTop: 5, color: Theme.color_text_muted, fontSize: Theme.font_size_xs}}></Text>
                </View>
                <CheckBox checked={item.type == payWay} />
            </PressButton>
        ))
        return (
            <View style={styles.contain}>
                <Text style={{ lineHeight: 35, paddingLeft: 12 }}>支付方式</Text>
                {items}
            </View>
        )
    }
    couponView() {
        const { orderInfo, useIntegral } = this.state
        return (
            <View style={styles.contain}>
                <PressButton style={{ ...row, ...styles.conItem, ...styles.borderBottom }} onPress={() => this.setState({ showCoupon: true })}>
                    <Text style={{ flex: 1 }}>优惠券</Text>
                    {orderInfo.discount_amount ? <Text style={{ color: Theme.brand_primary }}>-￥{orderInfo.discount_amount}</Text> :
                        <Text style={{ fontSize: Theme.font_size_sm, color: Theme.color_text_secondary }}>请选择</Text>}
                    <Image source={arrow_right} style={getImageSize(15)} />
                </PressButton>
            </View>
        )
    }
    priceView() {
        const { orderInfo: { shipping_price, total_goods_price, discount_amount, integral_amount } } = this.state
        return (
            <View style={{ ...styles.contain, paddingVertical: 15 }}>
                <View style={styles.priceItem}>
                    <Text>商品金额</Text>
                    <PriceFormate price={total_goods_price} />
                </View>
                <View style={styles.priceItem}>
                    <Text>运费</Text>
                    <PriceFormate price={shipping_price} />
                </View>
                {discount_amount ?<View style={styles.priceItem}>
                    <Text>优惠券</Text>
                    <PriceFormate color={Theme.brand_primary} price={discount_amount} showMinus={true}  />
                </View> : null}
                {integral_amount ? <View style={styles.priceItem}>
                    <Text>积分抵扣</Text>
                    <PriceFormate color={Theme.brand_primary} price={integral_amount} showMinus={true} />
                </View>: null}
            </View>
        )
    }
    _getOrderCoupon() {
        getOrderCoupon({
            goods: this.goods
        }).then((res: any) => {
            if (isSuccess(res)) {
                const { usable, unusable } = res.data
                this.setState({
                    usableCoupon: usable,
                    unusableCoupon: unusable
                })
            }
        })
    }
    async _orderBuy(action = 'info') {
        const { userRemark, payWay, useIntegral } = this.state

        //默认传参
        const submitObj: any = {
            action,
            goods: this.goods,
            address_id: this.addressId,
            coupon_id: this.couponId,
            use_integral: useIntegral
        }
        //提交订单参数
        if (action == 'submit') {
            submitObj.remark = userRemark
            submitObj.type = this.confirmType
            submitObj.pay_way = payWay
        }
        
        let order: any = await orderBuy(submitObj, true)
        if (!isSuccess(order)) return
        
        if (action == 'info') {
            //下单信息
            const { address, goods_lists } = order.data
            this.setState({
                orderInfo: order.data,
                address,
                goodsList: goods_lists
            })
        } else if (action == 'submit') {
            //下单成功
            let { order_id, type } = order.data
            let payOpt: any = await prepay({
                from: type,
                order_id: order_id
            }, true)
            if (isSuccess(payOpt)) {
                //微信支付
                let opt = payOpt.data
                WXPay(opt).then(() => {
                    replace('PayResult', {
                        id: order_id
                    })
                }).catch(() => {
                    replace('UserOrder')
                })
            }else if(payOpt.code == 10001) {
                //余额支付成功
                replace('PayResult', {
                    id: order_id
                })
            }else if(payOpt.code == 10002) {
                // await Alipay.pay(payOpt.data)
            }
        }
    }


    onCloseCoupon() {
        this.setState({
            showCoupon: false
        })
        this._orderBuy()
    }
    couponPopup() {
        const { usableCoupon, unusableCoupon, showCoupon } = this.state
        return (
            <Popup isVisible={showCoupon} position='bottom' closeable onClose={() => this.onCloseCoupon()}>
                <View style={{ height: 450 }}>
                    <Text style={{ fontSize: Theme.font_size_xl, fontWeight: 'bold', paddingLeft: 15, paddingVertical: 13 }}>优惠券</Text>
                    <ScrollableTabView
                        style={{ flex: 1, borderBottomWidth: 0 }}
                        prerenderingSiblingsNumber={1}
                        initialPage={0}
                        tabBarPosition='top'
                        renderTabBar={() => <CustomTabBar
                            activeColor={Theme.brand_primary}
                            inactiveColor={Theme.color_text_base}
                            activeTab={0}
                            tabUnderlineDefaultWidth={40}
                        />}
                    >
                        <CouponPopItem key={0} type={0} couponId={this.couponId} list={usableCoupon} tabLabel={`可使用优惠券 (${usableCoupon.length})`} onSelect={(id) => this.couponId = id} />
                        <CouponPopItem key={1} type={1} list={unusableCoupon} tabLabel={`不可使用优惠券 (${unusableCoupon.length})`} />
                    </ScrollableTabView>
                    <View style={{ paddingHorizontal: 12, paddingVertical: 3 }}>
                        <PressButton type="primary" size="md" round onPress={() => this.onCloseCoupon()}>确定</PressButton>
                    </View>
                </View>
            </Popup>
        )
    }
    pointPopup() {
        const {showPoint, orderInfo: {integral_config, integral_limit}} = this.state
        return (
            <Dialog   isVisible={showPoint} showCancelButton={false} onConfirm={() => this.setState({showPoint: false})}>
                <View style={{paddingHorizontal: 20}}>
                <Text style={{fontSize: Theme.font_size_lg, fontWeight: "bold", textAlign: "center", marginBottom: 30}}>积分使用说明</Text>
                    <Text style={{marginBottom: 20, color: Theme.color_text_secondary}}>·1积分可抵扣{integral_config}元</Text>
                    <Text style={{color: Theme.color_text_secondary}}>·单次扣减积分不能低于{integral_limit}积分</Text>
                </View>
            </Dialog>
        )
    }
    render() {
        const { address, goodsList, orderInfo } = this.state
        if (!orderInfo.address) return null
        return (
            <SafeAreaView style={contain}>
                <ScrollView showsVerticalScrollIndicator={false} keyboardShouldPersistTaps='always'>
                    <View style={{paddingBottom: 20}}>
                    <AddressItem style={styles.contain} address={address} />
                    {this.goodsView()}
                    {this.couponView()}
                    {this.priceView()}
                    {this.payWayView()}
                    </View>
                </ScrollView>
                <View style={{ height: 50, backgroundColor: Theme.fill_base, ...rowBetween, paddingHorizontal: 12 }}>
                    <View style={row}>
                        <Text>合计：</Text>
                        <PriceFormate style={{ color: Theme.brand_primary, fontSize: 16 }} price={orderInfo.order_amount} />
                    </View>
                    <View style={{ borderRadius: Theme.radius_circel, backgroundColor: Theme.brand_primary }} >
                        <LinearGradient colors={['#F95F2F', '#FF2C3C']} start={{ x: 0, y: 0 }} end={{ x: 1, y: 0 }} style={{ borderRadius: 30 }}>
                            <PressButton onPress={() => this.submitOrder()} style={{ width: 105, height: 37, ...rowCenter }} textStyle={{ color: Theme.fill_base }}>提交订单</PressButton>
                        </LinearGradient>
                    </View>
                </View>
                {this.couponPopup()}
                {this.pointPopup()}
            </SafeAreaView>
        );
    }
};

const styles = StyleSheet.create({

    contain: {
        borderRadius: 7,
        backgroundColor: Theme.fill_base,
        marginHorizontal: 10,
        marginTop: 10
    },
    conItem: {
        height: 50,
        paddingHorizontal: 12
    },
    borderBottom: {
        borderBottomWidth: 0.5,
        borderColor: Theme.border_color_base
    },
    priceItem: {
        paddingHorizontal: 10,
        ...rowBetween,
        marginTop: 10
    }
});

export default ConfirmOrder;