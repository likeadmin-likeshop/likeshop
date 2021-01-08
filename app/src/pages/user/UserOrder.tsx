import React from 'react'
import { ScreenProps } from '../../typing'
import { contain, rowBetween, getImageSize, row, rowEnd } from '../../constraint/Style'
import { StyleSheet, View, FlatList, Text, Image, EmitterSubscription, SafeAreaView } from 'react-native'
import ScrollableTabView, { DefaultTabBar, ScrollableTabBar } from 'react-native-scrollable-tab-view';
import CustomTabBar from '../../components/main/CustomTabBar'
import Theme from '../../constraint/Theme'
import { arrow_right, icon_warning, goods_null, order_null } from '../../constraint/Image'
import OrderGoods from '../../components/bussiness/OrderGoods'
import PressButton from '../../components/main/PressButton'
import { orderType } from '../../utils/type'
import LFlatList from '../../components/main/LFlatList'
import { getOrderList, cancelOrder, delOrder, confirmOrder } from '../../api/user'
import PriceFormate from '../../components/bussiness/PriceFormate'
import { isSuccess } from '../../utils/request'
import { navigate, replace } from '../../utils/navigation'
import Dialog from '../../components/main/Dialog'
import {Toast } from '@ant-design/react-native'
import EmptyView from '../../components/bussiness/EmptyView'
import { registerEvent } from '../../utils/event'
import CountDown from '../../components/main/CountDown'
import { prepay } from '../../api/app';
import { WXPay } from '../../utils/wechat';
import { TouchableOpacity } from 'react-native-gesture-handler';
import Tag from '../../components/main/Tag';

type UserOrderProps = ScreenProps<'UserOrder'>

export default class UserOrder extends React.Component<UserOrderProps, any> {
    [x: string]: any
    lFlatList!: LFlatList[]
    listener: EmitterSubscription | undefined
    constructor(props: UserOrderProps) {
        super(props)
        this.type = props.route.params ? props.route.params.type : 0
        this.lFlatList = []
        this.state = {
            order: [
                {
                    name: '全部',
                    type: orderType[0],
                },
                {
                    name: '待付款',
                    type: orderType[1],
                },
                {
                    name: '待收货',
                    type: orderType[2],
                },
                {
                    name: '已完成',
                    type: orderType[3],
                },
                {
                    name: '已关闭',
                    type: orderType[4],
                }
            ],
            type: ''
        }
    }

    UNSAFE_componentWillMount() {
        this.listener = registerEvent('REFLESH_ORDER', this.refreshOrder.bind(this))
    }

    componentWillUnmount() {
        this.listener?.remove()
    }

    refreshOrder() {
        this.lFlatList.forEach(item => {
            if (item) {
                item._onRefresh()
            }
        })
    }
    getOrderText(type: number) {
        switch (type) {
            case 0: return '待支付'
            case 1: return '待发货'
            case 2: return '待收货'
            case 3: return '已完成'
            case 4: return '订单已关闭'
        }
    }
    _onLoadMore(type: string, pageNum = 1, callback: any) {
        this._getData(type, pageNum, callback);
    }
    _getData(type: string, pageNum: number, callback: any) {
        getOrderList({ page_no: pageNum, type })
            .then((res: any) => {
                if (isSuccess(res)) {
                    callback(res.data.list, { haveNext: Boolean(res.data.more) })
                }
            }).catch(e => {
            })
    }
    _onRefresh(type: string, callback: any) {
        this._getData(type, 1, callback);
    }
    orderHandel(id: number, type: number) {
        this.id = id
        this.setState({
            type: type
        })
        this.onShowDialog()
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
            Toast.info(res.msg)
            this.refreshOrder()
        }
    }
    async _pay(id: number) {
        let payOpt: any = await prepay({
            from: 'order',
            order_id: id
        }, true)
        if (isSuccess(payOpt)) {
            let opt = payOpt.data
            WXPay(opt).then(() => {
                this.refreshOrder()
            }).catch(() => {
                // Toast.info('支付失败')
            })
        }
    }
    orderItem(item: any) {
        return (
            <View style={Style.orderItem}  >
                <TouchableOpacity activeOpacity={1} onPress={() => navigate('OrderDetails', { id: item.id })}>
                    <View style={{ ...rowBetween, height: 40, paddingHorizontal: 10,  borderBottomWidth: Theme.border_width_sm, borderBottomColor: Theme.border_color_base, }}>
                        <View style={row}>{item.order_type == 1 ? <Tag text="秒杀" style={{ marginRight: 5 }} /> : null }<Text>订单编号: {item.order_sn}</Text></View>
                        <Text style={{ color: item.order_status == 4 ? Theme.color_text_muted : Theme.brand_primary }}>{this.getOrderText(item.order_status)}</Text>
                    </View>
                    <OrderGoods goods={item.order_goods} />
                    <View style={[rowEnd, Style.priceInfo]}>
                        <Text style={{ fontSize: Theme.font_size_xs, color: Theme.color_text_muted }}>共{item.goods_count}件商品，应付款：<PriceFormate style={{ fontWeight: 'bold', color: Theme.color_text_base }} prevSize={15} nextSize={15} price={item.order_amount} /></Text>
                    </View>
                </TouchableOpacity>
                <View style={[Style.btnContain, row]}>
                    <View style={{ flex: 1, }}>
                        {item.order_cancel_time * 1000 - Date.now() > 0 ? <View style={row}>
                            <CountDown
                                style={{ marginLeft: 10, color: Theme.brand_primary, fontSize: Theme.font_size_sm }}
                                time={item.order_cancel_time * 1000 - Date.now()}
                                format="mm分钟"
                                onFinish={() => this.refreshOrder()}
                            />
                            <Text style={{ color: Theme.brand_primary, fontSize: Theme.font_size_sm }}>后订单自动关闭</Text>
                        </View> : null}
                    </View>
                    {item.cancel_btn ? <TouchableOpacity activeOpacity={1} style={{ ...Style.btn, borderColor: Theme.border_color_base }} onPress={() => this.orderHandel(item.id, 0)}>
                        <Text style={{ color: Theme.color_text_secondary }}>取消订单</Text>
                    </TouchableOpacity> : null}
                    {item.pay_btn ? <TouchableOpacity activeOpacity={1} style={{ ...Style.btn, backgroundColor: Theme.brand_primary, borderWidth: 0 }} onPress={() => this._pay(item.id)}>
                        <Text style={{ color: 'white', }}>立即付款</Text>
                    </TouchableOpacity> : null}
                    {item.delivery_btn ? <TouchableOpacity activeOpacity={1} style={{ ...Style.btn, borderColor: Theme.border_color_base, }} onPress={() => navigate('Logistics', { id: item.id })}>
                        <Text style={{ color: Theme.color_text_secondary }}>查看物流</Text>
                    </TouchableOpacity> : null}
                    {item.del_btn ? <TouchableOpacity activeOpacity={1} style={{ ...Style.btn, borderColor: Theme.border_color_base }} onPress={() => this.orderHandel(item.id, 1)}>
                        <Text style={{ color: Theme.color_text_secondary }}>删除订单</Text>
                    </TouchableOpacity> : null}
                    {item.take_btn ? <TouchableOpacity activeOpacity={1} style={{ ...Style.btn, borderColor: Theme.brand_primary }} onPress={() => this.orderHandel(item.id, 2)}>
                        <Text style={{ color: Theme.brand_primary }}>确认收货</Text>
                    </TouchableOpacity> : null}
                </View>
            </View>
        )
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
    render() {
        const { order, showDialog } = this.state
        const orderView = order.map((item: any, index: number) => {
            return (
                <LFlatList
                    ref={ref => { if (ref) this.lFlatList[index] = ref }}
                    tabLabel={item.name}
                    key={item.type}
                    showsHorizontalScrollIndicator={false}
                    emptyView={() => <EmptyView source={order_null} text="暂无订单~" />}
                    ListHeaderComponent={() => (<View style={{ height: 10, backgroundColor: Theme.fill_body }} />)}
                    onLoadMore={this._onLoadMore.bind(this, item.type)}
                    onRefresh={this._onRefresh.bind(this, item.type)}
                    ItemSeparatorComponent={() => <View style={{ height: 10, backgroundColor: Theme.fill_body }} />}
                    loadMoreable={true}
                    refreshable={true}
                    renderItem={({ item, index }) => this.orderItem(item)}
                />
            )
        })

        return (
            <SafeAreaView style={contain}>
                <ScrollableTabView
                    style={{ flex: 1, borderBottomWidth: 0 }}
                    initialPage={this.type}
                    tabBarPosition='top'
                    renderTabBar={() => <CustomTabBar
                        activeColor={Theme.brand_primary}
                        inactiveColor={Theme.color_text_base}
                        activeTab={0}
                        tabUnderlineDefaultWidth={40}
                    />}
                >
                    {orderView}
                </ScrollableTabView>
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

const Style = StyleSheet.create({
    orderItem: {
        backgroundColor: Theme.fill_base,
        marginHorizontal: 10,
        borderRadius: 5,
        overflow: 'hidden'
    },
    storeHeader: {
        height: 40,
        ...row,
        borderBottomWidth: Theme.border_width_sm,
        borderBottomColor: Theme.border_color_base,
        paddingHorizontal: 12
    },
    priceInfo: {
        paddingVertical: 10,
        paddingRight: 12,
        borderBottomColor: Theme.border_color_base,
        borderBottomWidth: Theme.border_width_sm
    },
    btnContain: {
        paddingRight: 10
    },
    btn: {
        width: 86,
        marginLeft: 10,
        height: 30,
        borderWidth: Theme.border_width_sm,
        marginVertical: 9,
        borderRadius: 60,
        justifyContent: 'center',
        alignItems: 'center'
    },
})