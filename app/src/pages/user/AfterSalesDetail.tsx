import React from 'react'
import {ScreenProps} from '../../typing'
import { contain, row, getImageSize, rowBetween, rowEnd, columnCenter } from '../../constraint/Style';
import { View, StyleSheet, Text, Image, SafeAreaView, Clipboard } from 'react-native';
import Theme from '../../constraint/Theme';
import PressButton from '../../components/main/PressButton';
import { icon_warning } from '../../constraint/Image';
import { ScrollView } from 'react-native-gesture-handler';
import { afterSaleDetail, cancelApply } from '../../api/user';
import { isSuccess } from '../../utils/request';
import { navigate, replace } from '../../utils/navigation';
import { Toast } from '@ant-design/react-native';
import Dialog from '../../components/main/Dialog';

type AfterSalesDetailProps = ScreenProps<'AfterSalesDetail'>;

export default class AfterSalesDetail extends React.Component <AfterSalesDetailProps, any> {
    afterSaleId: number | undefined;
    orderId: number | undefined;
    itemId: number | undefined;
    enter: (() => void) | undefined;
    constructor(props: AfterSalesDetailProps) {
        super(props);
        this.afterSaleId = props.route.params.afterSalesId;
        this.orderId = props.route.params.orderId;
        this.itemId = props.route.params.itemId;
        this.state = {
            lists: {
                shop: {},
                order_goods: {},
                showDialog: false
            }
        }
    }
    
    onCopy() {
        const {lists: {shop: { address }}} = this.state
        Clipboard.setString(`${address}`);
        Toast.success('复制成功')
    }

    $afterSaleDetail() {
        afterSaleDetail({id: this.afterSaleId}).then((res: any) => {
            if(isSuccess(res)) {
                this.setState({
                    lists: res.data,
                })
            }
        })
    }

    $cancelApply() {
        cancelApply({id: this.afterSaleId}).then((res: any) => {
            if(isSuccess(res)) {
                this.setState({
                    showDialog: false
                })
                Toast.info(res.msg, 1, () => navigate("PostSale"))
            }
        })
    }

    UNSAFE_componentWillMount() {
        // this.$afterSaleDetail();
    }

    componentDidMount() {
        this.enter = this.props.navigation.addListener("focus", (e) => {
            this.$afterSaleDetail()
        })
    }

    componentWillUnmount() {
        if(this.enter) {
            this.props.navigation.removeListener("focus", this.enter)
        }
    }

    render() {
        console.log(this.state.lists.status, '####')
        return (
            <SafeAreaView style={contain}>
                <ScrollView style={{flex: 1}}>
                    <View style={Style.afterSalesHeader}>
                        <Text style={Style.afterSalesStatus}>{this.state.lists.status_text}</Text>
                    </View>
                    <View style={[Style.returnAddressContain, row, {display: this.state.lists.refund_type == 1 ? "flex" : 'none'}]}>
                        <Text style={Style.addressTitle}>退货地址:</Text>
                        <Text style={Style.address} numberOfLines={2}>{this.state.lists.shop.address}</Text>
                        <PressButton style={Style.copyBtn} onPress={() => {
                            this.onCopy();
                        }}>
                            <Text>复制</Text>
                        </PressButton>
                    </View>
                    <View style={Style.goodsContainer}>
                        <View style={[row, Style.goodsItem]}>
                            <Image source={{uri: this.state.lists.order_goods.image}} style={getImageSize(90)} />
                            <View style={Style.goodsInfo}>
                                <Text numberOfLines={2}>{this.state.lists.order_goods.goods_name}</Text>
                                <View style={[rowBetween, {marginTop: 10}]}>
                                    <Text>￥{this.state.lists.order_goods.goods_price}</Text>
                                    <Text>x{this.state.lists.order_goods.goods_num}</Text>
                                </View>
                            </View>
                        </View>
                    </View>
                    <View style={Style.returnGoodsContainer}>
                        <View style={[Style.returnGoodsRow, row]}>
                            <Text style={Style.returnTitle}>退款方式：</Text>
                            <Text style={Style.returnExplain}>{this.state.lists.refund_type == 0 ? '仅退款' : '退款退货'}</Text> 
                        </View>
                        <View style={[Style.returnGoodsRow, row, {marginTop: 10}]}>
                            <Text style={Style.returnTitle}>退款原因：</Text>
                            <Text style={Style.returnExplain}>{this.state.lists.refund_reason}</Text> 
                        </View>
                        <View style={[Style.returnGoodsRow, row, {marginTop: 10}]}>
                            <Text style={Style.returnTitle}>退款金额：</Text>
                            <Text style={[Style.returnExplain, {color: Theme.brand_primary}]}>￥{this.state.lists.refund_price}</Text> 
                        </View>
                        <View style={[Style.returnGoodsRow, row, {marginTop: 10}]}>
                            <Text style={Style.returnTitle}>退款编号：</Text>
                            <Text style={Style.returnExplain}>{this.state.lists.sn}</Text> 
                        </View>
                        <View style={[Style.returnGoodsRow, row, {marginTop: 10}]}>
                            <Text style={Style.returnTitle}>申请时间：</Text>
                            <Text style={Style.returnExplain}>{this.state.lists.create_time}</Text> 
                        </View>
                    </View>
                </ScrollView>
                <View style={[Style.footer, rowEnd, {display: this.state.lists.status == 6 ? 'none' : 'flex'}]}>
                    <PressButton 
                    style={{...Style.btn, marginLeft: 10}}
                    onPress={() => {
                        this.setState({
                            showDialog: true
                        })
                    }}
                    >
                        <Text style={{lineHeight: 18}}>撤销申请</Text>
                    </PressButton>
                    <PressButton 
                    style={{...Style.btn, marginLeft: 10, display: (this.state.lists.status == 4 || this.state.lists.status == 1) ? 'flex' : 'none'}}
                    onPress={() => {
                        replace("ApplyRefund", {
                            orderId: this.orderId,
                            itemId: this.itemId,
                            afterSalesId: this.afterSaleId
                        })
                    }}
                    >
                        <Text style={{lineHeight: 18}}>重新申请</Text>
                    </PressButton>
                    <PressButton 
                    style={{...Style.btn, marginLeft: 10, display: this.state.lists.status == 2 ? 'flex' : 'none'}}
                    onPress={() => {
                        navigate('AfterSalesDetailForm', {
                            id: this.afterSaleId
                        })
                    }}
                    >
                        <Text style={{lineHeight: 18}}>填写快递单号</Text>
                    </PressButton>
                    <PressButton style={{...Style.btn, marginLeft: 10, display: 'none'}}>
                        <Text style={{lineHeight: 18}}>平台退款</Text>
                    </PressButton>
                </View>
                <Dialog
                    isVisible={this.state.showDialog}
                    confirmButtonText={"撤销"}
                    onConfirm={() => {
                        this.$cancelApply()
                    }}
                    onCancel={() => this.setState({showDialog: false})}
                    >
                        <View style={columnCenter}>
                            <Image source={icon_warning} style={getImageSize(28)}/>
                            <Text style={{marginTop: 15, fontSize: Theme.font_size_md}} >确认撤销申请吗？</Text>
                        </View>
                    </Dialog>
            </SafeAreaView>
        )
    }
}

const Style = StyleSheet.create({
    afterSalesHeader: {

    },
    afterSalesStatus: {
        color: Theme.fill_base,
        fontSize: Theme.font_size_lg,
        paddingVertical: 24,
        paddingHorizontal: 15,
        backgroundColor: '#555555'
    },
    returnAddressContain: {
        backgroundColor: Theme.fill_base,
        marginTop: 10,
        paddingTop: 10,
        paddingRight: 12,
        paddingBottom: 14,
        paddingLeft: 15
    },
    addressTitle: {
        width: 75,
        alignSelf: "flex-start",
        lineHeight: 20
    },
    address: {
        flex: 1,
        lineHeight: 19
    },
    copyBtn: {
        flexShrink: 7,
        backgroundColor: "#f4f4f4",
        color: '#555555',
        alignSelf: 'flex-start',
        paddingVertical: 2,
        paddingHorizontal: 8,
        marginLeft: 6,
        borderRadius: 2
    },

    goodsContainer: {
        backgroundColor: Theme.fill_base,
        marginTop: 10
    },
    goodsHeader: {
        paddingVertical: 10,
        paddingHorizontal: 12
    },
    storeName: {
        lineHeight: 20,
        alignSelf: "flex-end",
        fontWeight: 'bold'
    },
    goodsItem: {
        paddingVertical: 12.5,
        paddingHorizontal: 12
    },
    goodsInfo: {
        marginLeft: 12,
        flex: 1
    },

    returnGoodsContainer: {
        backgroundColor: Theme.fill_base,
        marginTop: 10,
        paddingTop: 10,
        paddingHorizontal: 12,
        paddingBottom: 27.5
    },
    returnGoodsRow: {
    },
    returnTitle: {
        fontSize: Theme.font_size_sm,
        fontWeight: '400'
    },
    returnExplain: {
        fontSize: Theme.font_size_sm,
        fontWeight: '400'
    },

    footer: {
        backgroundColor: Theme.fill_base,
        paddingHorizontal: 12,
        paddingVertical: 10,
    },
    btn: {
        paddingVertical: 5,
        paddingHorizontal: 17,
        borderWidth: 1,
        borderColor: Theme.color_text_muted,
        borderRadius: Theme.radius_circel
    }
})