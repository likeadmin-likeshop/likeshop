import React from 'react'
import { ScreenProps } from '../../typing'
import { contain, rowEnd, row, getImageSize, rowBetween } from '../../constraint/Style'
import { StyleSheet, View, Text, ScrollView, Image, SafeAreaView } from 'react-native'
import Theme from '../../constraint/Theme'
import { icon_address, pay_line, arrow_right, icon_warning } from '../../constraint/Image'
import OrderGoods from '../../components/bussiness/OrderGoods'
import PressButton from '../../components/main/PressButton'
import { getOrderDetail, cancelOrder, delOrder, confirmOrder } from '../../api/user'
import { isSuccess } from '../../utils/request'
import PriceFormate from '../../components/bussiness/PriceFormate'
import Dialog from '../../components/main/Dialog'
import { Toast } from '@ant-design/react-native'
import { goBack, navigate } from '../../utils/navigation'
import { postEvent } from '../../utils/event'
import CountDown from '../../components/main/CountDown'
import { prepay } from '../../api/app'
import { WXPay } from '../../utils/wechat'
import { ScreenWidth } from '../../utils/app'

type OrderDetailsProps = ScreenProps<'OrderDetails'>

export default class OrderDetails extends React.Component<OrderDetailsProps, any> {
    [x: string]: any
    constructor(props: OrderDetailsProps) {
        super(props)
        this.id = props.route.params.id
        this.state = {
            orderInfo: {},
            showDialog: false,
            type: '',
            cancelTime: 0
        }
    }
    UNSAFE_componentWillMount() {
        this._getOrderDetail()
    }
    _getOrderDetail() {
        getOrderDetail(this.id).then((res: any) => {
            if (isSuccess(res)) {
                const cancelTime = res.data.order_cancel_time * 1000 - Date.now()
                this.setState({
                    orderInfo: res.data,
                    cancelTime: cancelTime > 0 ? cancelTime : 0
                })
            }
        })
    }
    orderHandel(type: number) {
        this.setState({
            type: type
        }, () => this.onShowDialog())
    }
    async _pay() {
        let payOpt: any = await prepay({
            from: 'order',
            order_id: this.id
        }, true)
        if (isSuccess(payOpt)) {
            let opt = payOpt.data
            WXPay(opt).then(() => {
                this._getOrderDetail()
                postEvent('REFLESH_ORDER')
            }).catch(() => {
                // Toast.info('支付失败')
            })
        }
    }
    async onConfirm() {
        const { type } = this.state
        let res: any = null
        switch (type) {
            case 0: res = await cancelOrder(this.id)
                break;
            case 1: res = await delOrder(this.id)
                break;
            case 2: res = await confirmOrder(this.id)
                break;
        }
        this.onShowDialog()
        if (isSuccess(res)) {
            if (type == 0 || type == 2) {
                Toast.info(res.msg)
                this._getOrderDetail()
            } else if (type == 1) {
                Toast.info(res.msg, 1, () => { goBack() })
            }
            postEvent('REFLESH_ORDER')
        }
    }
    onShowDialog() {
        this.setState({
            showDialog: !this.state.showDialog
        })
    }
    getDialogText() {
        const { type } = this.state
        switch (type) {
            case 0: return '确认取消该订单吗？'
            case 1: return '确认删除该订单吗？'
            case 2: return '确认收货吗？'
        }
    }

    orderStatusView() {
        const { orderInfo: { order_status }, cancelTime } = this.state
        let title = null
        let desc = null
        switch (order_status) {
            case 0: title = "等待买家付款"
            
                break;
            case 1: title = "等待商家发货"
                desc = "您的商品正在打包中，请耐心等待…"
                break;
            case 2: title = "已发货"
                desc = "您的商品正在路中，请耐心等待…"
                break;
            case 3: title = "已完成"
                desc = "商品已签收，期待再次购买！"
                break;
            case 4: title = "订单已关闭"
            // desc = "您的商品正在打包中，请耐心等待…"
                break;
        }
        return (
            <View>
                <View style={{ position: 'absolute', height: 100, width: '100%', backgroundColor: Theme.brand_primary, top: 0 }}></View>
                <View style={{paddingVertical: 15, paddingHorizontal: 20}}>
                    <Text style={{ fontSize: Theme.font_size_lg, color: 'white', fontWeight: 'bold' }}>{title}</Text>
                    {desc ? <Text style={{ fontSize: Theme.font_size_sm, color: 'white', marginTop: 5 }}>{desc}</Text> : null}
                    {cancelTime > 0 ? <View style={[row, { marginTop: 5 }]}>
                        <Text style={{ color: Theme.fill_base, fontSize: Theme.font_size_sm }}>支付剩余</Text>
                        <CountDown style={{ color: Theme.fill_base, fontSize: Theme.font_size_sm, marginHorizontal: 4 }} format="mm分ss秒" time={cancelTime} onFinish={() => this._getOrderDetail()} />
                        <Text style={{ color: Theme.fill_base, fontSize: Theme.font_size_sm }}>自动关闭</Text>
                    </View> : null}
                </View>
            </View>
        )
    }
    addressView() {
        const { orderInfo: {
            consignee,
            delivery_address,
            mobile
        } } = this.state
        return (
            <View style={styles.container}>
                <View style={[styles.addressWrap, row]}>
                    <Image source={icon_address} style={getImageSize(22)} />
                    <View style={styles.addressInfo}>
                        <View style={row}>
                            <Text style={{ fontSize: Theme.font_size_md, }}>{consignee}</Text>
                            <Text style={{ marginLeft: 8, fontSize: Theme.font_size_md, }}>{mobile}</Text>
                        </View>
                        <View style={{ marginTop: 5 }}>
                            <Text style={{ fontSize: Theme.font_size_sm, color: Theme.color_text_secondary, }}>{delivery_address}</Text>
                        </View>
                    </View>
                </View>
            </View>
        )
    }

    orderPrice() {
        const { orderInfo: {
            goods_price,
            shipping_price,
            order_amount
        } } = this.state
        return (
            <View style={styles.container}>
                <View style={[styles.priceItem, rowBetween]}>
                    <Text>商品金额</Text>
                    <PriceFormate price={goods_price} />
                </View>
                <View style={[styles.priceItem, rowBetween]}>
                    <Text>运费</Text>
                    <Text>+<PriceFormate price={shipping_price} /></Text>
                </View>
                <View style={[styles.priceItem, rowEnd]}>
                    <View style={row}>
                        <Text style={{ fontSize: Theme.font_size_base, color: Theme.color_text_secondary }}>实付金额：</Text>
                        <PriceFormate style={{ fontSize: Theme.font_size_xl }} color={Theme.brand_primary} price={order_amount} />
                    </View>
                </View>
            </View>
        )
    }
    orderInfoItem(title: string, content: string) {
        if (!content) return null
        return (
            <View style={[styles.orderItem, row]}>
                <Text style={styles.title}>{title}</Text>
                <Text style={styles.info}>{content}</Text>
            </View>
        )
    }
    getFooter() {
        const { orderInfo: { cancel_btn, pay_btn, delivery_btn, del_btn, take_btn } } = this.state
        return (
            <View style={[styles.footer, rowEnd]}>
                {cancel_btn ? <PressButton round={true} size="base" style={{ ...styles.btn, borderColor: Theme.border_color_base }} onPress={() => this.orderHandel(0)}>
                    <Text style={{ color: Theme.color_text_secondary }}>取消订单</Text>
                </PressButton> : null}
                {pay_btn ? <PressButton size="base" round={true} style={{ ...styles.btn, backgroundColor: Theme.brand_primary, borderWidth: 0 }} onPress={() => this._pay()}>
                    <Text style={{ color: 'white', }}>立即付款</Text>
                </PressButton> : null}
                {delivery_btn ? <PressButton round={true} size="base" style={{ ...styles.btn, borderColor: Theme.border_color_base, }} onPress={() => navigate('Logistics', { id: this.id })} >
                    <Text style={{ color: Theme.color_text_secondary }}>查看物流</Text>
                </PressButton> : null}
                {del_btn ? <PressButton round={true} size="base" style={{ ...styles.btn, borderColor: Theme.border_color_base }} onPress={() => this.orderHandel(1)}>
                    <Text style={{ color: Theme.color_text_secondary }}>删除订单</Text>
                </PressButton> : null}
                {take_btn ? <PressButton round={true} size="base" style={{ ...styles.btn, borderColor: Theme.brand_primary }} onPress={() => this.orderHandel(2)}>
                    <Text style={{ color: Theme.brand_primary }}>确认收货</Text>
                </PressButton> : null}
            </View>
        )
    }
    render() {
        const { orderInfo: {
            order_goods,
            id,
            shop,
            user_remark,
            order_sn,
            pay_way_text,
            create_time,
            pay_time,
            shipping_time,
            confirm_take_time,
            cancel_time
        }, showDialog } = this.state
        if (!id) return null
        return (
            <SafeAreaView style={contain}>
                <ScrollView style={{ flex: 1 }}>
                    {this.orderStatusView()}
                    {this.addressView()}
                    <View style={styles.container}>
                        <OrderGoods goods={order_goods} link={true} />
                    </View>
                    {this.orderPrice()}
                    <View style={{...styles.container, ...styles.orderInfo}}>
                        {this.orderInfoItem('卖家留言', user_remark || '无')}
                    </View>
                    <View style={{ ...styles.container, ...styles.orderInfo }}>
                        {this.orderInfoItem('订单编号', order_sn)}
                        {this.orderInfoItem('支付方式', pay_way_text)}
                        {this.orderInfoItem('下单时间', create_time)}
                        {this.orderInfoItem('付款时间', pay_time)}
                        {this.orderInfoItem('发货时间', shipping_time)}
                        {this.orderInfoItem('成交时间', confirm_take_time)}
                        {this.orderInfoItem('关闭时间', cancel_time)}
                    </View>
                </ScrollView>
                {this.getFooter()}
                <Dialog style={{ width: 260 }} isVisible={showDialog} onCancel={() => this.onShowDialog()} onConfirm={() => this.onConfirm()} >
                    <View style={{ alignItems: 'center' }}>
                        <Image source={icon_warning} style={getImageSize(28)} />
                        <Text style={{ marginTop: 15 }}>{this.getDialogText()}</Text>
                    </View>
                </Dialog>
            </SafeAreaView>
        )
    }
}

const styles = StyleSheet.create({
    container: {
        marginHorizontal: 10,
        marginBottom: 10,
        borderRadius: 7,
        backgroundColor: Theme.fill_base
    },
    addressWrap: {
        paddingHorizontal: 12,
        paddingVertical: 10,
    },
    addressInfo: {
        marginLeft: 8,
        flex: 1
    },
 
    priceItem: {
        height: 38,
        paddingHorizontal: 12
    },
    orderInfo: {
        backgroundColor: Theme.fill_base,
        paddingVertical: 10,
    },
    orderItem: {
        paddingLeft: 12,
        paddingRight: 10,
        paddingVertical: 3
    },
    title: {
        width: 86,
        fontSize: Theme.font_size_base,
        color: Theme.color_text_paragraph,
        lineHeight: 20
    },
    info: {
        fontSize: Theme.font_size_base,
        color: Theme.color_text_paragraph,
        lineHeight: 21
    },

    footer: {
        paddingHorizontal: 12,
        backgroundColor: Theme.fill_base
    },
    btn: {
        width: 86,
        marginLeft: 10,
        height: 30,
        borderWidth: Theme.border_width_sm,
        marginVertical: 9,
    }

})