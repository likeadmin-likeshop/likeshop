import React from 'react'
import { ScreenProps } from '../../typing'
import { contain, row, getImageSize, rowBetween, rowCenter } from '../../constraint/Style';
import { StyleSheet, View, Image, Text, Platform, SafeAreaView, Keyboard } from 'react-native';
import { getGoodsInfo, applyAfterSale, applyAgain } from '../../api/user';
import { isSuccess } from '../../utils/request';
import Theme from '../../constraint/Theme';
import { arrow_right } from '../../constraint/Image';
import PressButton from '../../components/main/PressButton';
import { TextInput, ScrollView } from 'react-native-gesture-handler';
import Popup from '../../components/main/Popup';
import CheckBox from '../../components/bussiness/CheckBox';
import { navigate, replace } from '../../utils/navigation';
import { Toast } from '@ant-design/react-native';
import UploadProfile from '../../components/bussiness/UploadProfile';
import PriceFormate from '../../components/bussiness/PriceFormate';
import { imageUpload } from '../../utils/imageUpload';

type ApplyRefundProps = ScreenProps<'ApplyRefund'>

const refundOPtType = {
    // 仅退款
    ONLY_REFUND: 0,
    // 退货退款
    REFUNDS: 1
}

export default class ApplyRefund extends React.Component<ApplyRefundProps, any> {
    orderId: number | undefined;
    itemId: number | undefined;
    afterSaleId: number | undefined;
    constructor(props: ApplyRefundProps) {
        super(props);
        this.orderId = props.route.params?.orderId
        this.itemId = props.route.params?.itemId,
            this.afterSaleId = props.route.params?.afterSalesId
        this.state = {
            goodsObj: {},
            reasonObj: [],
            type: refundOPtType.ONLY_REFUND,
            hiddenOpt: false,
            reasonIndex: -1,
            showReason: false,
            remark: '',
            fileList: []
        }
    }

    $applyAgain() {
        let { reasonObj, reasonIndex, type, remark, fileList } = this.state;
        if (reasonIndex < 0) {
            Toast.info("请选择退款原因");
            return;
        }
        let data = {
            id: this.afterSaleId,
            reason: reasonObj[reasonIndex],
            refund_type: type,
            remark: remark,
            img: fileList.length ? fileList[0].url : ""
        }
        applyAgain(data).then((res: any) => {
            if (isSuccess(res)) {
                this.afterSaleId = res.data.after_sale_id;
                Toast.info('提交成功', 1, () => {
                    replace('AfterSalesDetail', {
                        afterSalesId: res.data.after_sale_id,
                        orderId: this.orderId,
                        itemId: this.itemId
                    })
                })
            }
        })
    }

    $getGoodsInfo() {
        getGoodsInfo({
            order_id: this.orderId,
            item_id: this.itemId
        }).then((res: any) => {
            if (isSuccess(res)) {
                this.setState({
                    goodsObj: res.data.goods,
                    reasonObj: res.data.reason
                })
            }
        })
    }

    $applyAfterSale() {
        let { reasonObj, reasonIndex, type, remark, fileList } = this.state;
        if (reasonIndex < 0) {
            Toast.info("请选择退款原因");
            return;
        }
        let data = {
            item_id: this.itemId,
            order_id: this.orderId,
            reason: reasonObj[reasonIndex],
            refund_type: type,
            remark: remark,
            img: fileList.length ? fileList[0].url : ""
        }
        applyAfterSale(data).then((res: any) => {
            if (isSuccess(res)) {
                this.afterSaleId = res.data.after_sale_id;
                Toast.info('提交成功', 1, () => {
                    replace('AfterSalesDetail', {
                        afterSalesId: res.data.after_sale_id,
                        orderId: this.orderId,
                        itemId: this.itemId
                    })
                })

            }
        })
    }

    UNSAFE_componentWillMount() {
        this.$getGoodsInfo();
    }

    onSubmit() {
        console.log(this.afterSaleId)
        if (this.afterSaleId) {
            this.$applyAgain()
        } else {
            this.$applyAfterSale()
        }
    }

    render() {
        let { goodsObj, reasonObj } = this.state;
        return (
            <SafeAreaView style={contain}>
                <ScrollView style={Style.applyRefundContain}>
                    <View style={[row, Style.goodsInfo]}>
                        <Image source={{ uri: goodsObj.image }} style={getImageSize(80)} />
                        <View style={Style.goodsDesc}>
                            <Text style={Style.goodsName} numberOfLines={2}>{goodsObj.goods_name}</Text>
                            <Text style={Style.goodsSpec}>{goodsObj.spec_value}</Text>
                        </View>
                    </View>
                    <View style={[Style.optBox, { display: this.state.hiddenOpt ? 'none' : 'flex' }]}>
                        <PressButton
                            style={{
                                ...Style.optItem,
                                ...rowBetween,
                                borderWidth: Theme.border_width_sm,
                                borderColor: Theme.border_color_base
                            }}
                            onPress={() => {
                                this.setState({
                                    hiddenOpt: true,
                                    type: refundOPtType.ONLY_REFUND
                                })
                            }}
                        >
                            <View>
                                <Text style={{ fontSize: Theme.font_size_lg }}>仅退款</Text>
                                <Text style={{ color: Theme.color_text_muted, fontSize: Theme.font_size_xs, marginTop: 5 }}>未收到货，与卖家协商同意无需退货只需退款</Text>
                            </View>
                            <Image style={Style.arrow} source={arrow_right} />
                        </PressButton>
                        <PressButton
                            style={{
                                ...Style.optItem,
                                ...rowBetween,
                                borderWidth: Theme.border_width_sm,
                                borderColor: Theme.border_color_base
                            }}
                            onPress={() => {
                                this.setState({
                                    hiddenOpt: true,
                                    type: refundOPtType.REFUNDS
                                })
                            }}
                        >
                            <View>
                                <Text style={{ fontSize: Theme.font_size_lg }}>退货退款</Text>
                                <Text style={{ color: Theme.color_text_muted, fontSize: Theme.font_size_xs, marginTop: 5 }}>已收到货，需退还收到的实物</Text>
                            </View>
                            <Image style={Style.arrow} source={arrow_right} />
                        </PressButton>
                    </View>
                    <View style={[Style.afterSalesFormContain, { display: this.state.hiddenOpt ? 'flex' : 'none' }]}>
                        <View style={[Style.afterSalesItem, rowBetween, Style.lineBorder]}>
                            <Text style={{ lineHeight: 18 }}>数量</Text>
                            <Text style={{ marginRight: 10, lineHeight: 18 }}>{goodsObj.goods_num}</Text>
                        </View>
                        <View style={[Style.afterSalesItem, rowBetween, Style.lineBorder]}>
                            <Text style={{ lineHeight: 18 }}>退款金额</Text>
                            <PriceFormate style={{ marginRight: 10 }} price={goodsObj.goods_price} color={Theme.brand_primary} signSize={Theme.font_size_base} prevSize={Theme.font_size_base} />
                        </View>
                        <PressButton
                            style={{ ...Style.afterSalesItem, ...rowBetween, ...Style.lineBorder }}
                            onPress={() => this.setState({ showReason: true })}
                        >
                            <Text style={{ lineHeight: 18 }}>退款原因</Text>
                            <View style={row}>
                                <Text style={{ marginRight: 5, color: this.state.reasonIndex == -1 ? Theme.color_text_muted : Theme.color_text_base }}>
                                    {
                                        this.state.reasonIndex == -1 ? '请选择' : reasonObj[this.state.reasonIndex]
                                    }
                                </Text>
                                <Image source={arrow_right} style={[Style.arrow, { marginRight: 10 }]} />
                            </View>
                        </PressButton>
                        <View style={[Style.afterSalesItem, row, Style.lineBorder]}>
                            <Text style={{ lineHeight: 18, alignSelf: 'flex-start', marginTop: 10 }}>退款说明</Text>
                            <View style={Style.inputReasonArea}>
                                <TextInput style={Style.inputReason} multiline={true} placeholder={'请描述申请售后的具体原因，100字以内'} onBlur={() => {
                                    Keyboard.dismiss();
                                }} onChangeText={(text) => this.setState({ remark: text })} />
                            </View>
                        </View>
                        <View style={[Style.afterSalesItem]}>
                            <View style={rowBetween}>
                                <Text style={{ lineHeight: 18 }}>上传凭证</Text>
                                <Text style={{ color: Theme.color_text_muted, lineHeight: 18 }}>（选填，最多可上传3张）</Text>
                            </View>
                            <UploadProfile
                                maxCount={1}
                                fileList={this.state.fileList}
                                deleteImage={(index) => {
                                    let { fileList } = this.state;
                                    fileList.splice(index, 1)
                                    this.setState({
                                        fileList: fileList
                                    })
                                }}
                                afterRead={(file) => {
                                    console.log(file);
                                    this.setState({
                                        fileList: file
                                    })
                                    console.log(file[0])
                                    imageUpload(file[0]).then((res: any) => {
                                        this.setState({
                                            fileList: [res]
                                        })
                                    })
                                }} />
                        </View>
                    </View>
                    <PressButton
                        style={{ ...Style.primaryBtn, display: this.state.hiddenOpt ? 'flex' : 'none' }}
                        onPress={() => {
                            this.onSubmit();
                        }}>
                        <Text style={{ color: Theme.fill_base, fontSize: Theme.font_size_lg }}>
                            申请退款
                        </Text>
                    </PressButton>
                </ScrollView>

                <Popup
                    isVisible={this.state.showReason}
                    position={'bottom'}
                    onClose={() => {
                        this.setState({
                            showReason: false
                        })
                    }}
                    round
                    closeable={true}
                >

                    <View style={[Style.popHeader, rowCenter]}>
                        <Text style={{ fontSize: Theme.font_size_md }}>退款原因</Text>
                    </View>
                    <ScrollView style={{ height: 400 }}>
                        <View style={Style.reasonContain}>
                            {
                                this.state.reasonObj.map((item: any, index: any) => (
                                    <PressButton
                                        style={Style.reasonItem}
                                        key={index}
                                        onPress={() => {
                                            this.setState({
                                                reasonIndex: index,
                                                showReason: false
                                            })
                                        }}
                                    >
                                        <Text style={{ lineHeight: 22 }}>{item}</Text>
                                        <CheckBox
                                            checked={this.state.reasonIndex == index}
                                            onClick={() => {
                                                this.setState({
                                                    reasonIndex: index,
                                                    showReason: false,
                                                })
                                            }} />
                                    </PressButton>
                                ))
                            }
                        </View>
                    </ScrollView>
                </Popup>
            </SafeAreaView>
        )
    }
}


const Style = StyleSheet.create({
    applyRefundContain: {
        flex: 1
    },
    goodsInfo: {
        backgroundColor: Theme.fill_base,
        paddingVertical: 10,
        paddingHorizontal: 12,
        marginTop: 10
    },
    goodsDesc: {
        marginLeft: 12,
        flex: 1
    },
    goodsName: {
        lineHeight: 20
    },
    goodsSpec: {
        lineHeight: 20,
        marginTop: 5,
        color: Theme.color_text_muted,
        fontSize: Theme.font_size_xs
    },

    optBox: {
        marginTop: 10
    },
    optItem: {
        paddingVertical: 10,
        paddingLeft: 15,
        paddingRight: 10,
        backgroundColor: Theme.fill_base
    },
    arrow: {
        ...getImageSize(14)
    },

    afterSalesFormContain: {
        backgroundColor: Theme.fill_base,
        marginTop: 10,
        paddingLeft: 10
    },
    afterSalesItem: {
        paddingVertical: 12
    },
    lineBorder: {
        borderBottomWidth: Theme.border_width_sm,
        borderBottomColor: Theme.border_color_base
    },
    inputReasonArea: {
        backgroundColor: '#F8F8F8',
        marginLeft: 10,
        flex: 1,
        marginRight: 10,
        height: 86,
        borderRadius: Theme.radius_md
    },
    inputReason: {
        padding: 10,
        flex: 1,
        textAlign: "left",
        textAlignVertical: "top",

    },

    primaryBtn: {
        ...rowCenter,
        backgroundColor: Theme.brand_primary,
        marginHorizontal: 13,
        paddingVertical: 10,
        borderRadius: Theme.radius_circel,
        marginTop: 15
    },

    popHeader: {
        paddingVertical: 20
    },
    reasonContain: {
        marginTop: 20
    },
    reasonItem: {
        paddingVertical: 12,
        paddingHorizontal: 10,
        ...rowBetween
    }
})