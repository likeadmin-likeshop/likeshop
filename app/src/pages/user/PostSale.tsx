import React from 'react'
import { ScreenProps } from '../../typing';
import { View, StyleSheet, Image, Text, SafeAreaView } from 'react-native';
import ScrollableTabView, { DefaultTabBar, ScrollableTabBar } from 'react-native-scrollable-tab-view';
import CustomTabBar from '../../components/main/CustomTabBar';
import Theme from '../../constraint/Theme';
import { icon_shop, arrow_right, order_null, icon_warning } from '../../constraint/Image';
import { row, getImageSize, rowBetween, rowEnd, contain, columnCenter } from '../../constraint/Style';
import { getAfterSaleList, cancelApply } from '../../api/user';
import LFlatList from '../../components/main/LFlatList';
import { navigate } from '../../utils/navigation';
import { isSuccess } from '../../utils/request';
import Dialog from '../../components/main/Dialog';
import { Toast } from '@ant-design/react-native';
import { TouchableOpacity } from 'react-native-gesture-handler';

type PostSaleProps = ScreenProps<'PostSale'>

const AfterSaleType = {
    // 售后申请 
    NORMAL: 'normal',
    // 处理中
    HANDLING: 'apply',
    // 已处理
    FINISH: 'finish'
}

export default class PostSale extends React.Component<PostSaleProps, any> {
    applyFlat!: LFlatList | null;
    handlingFlat!: LFlatList | null;
    handledFlat!: LFlatList | null;
    enter: (() => void) | undefined;
    constructor(props: PostSaleProps) {
        super(props);
        this.state = {
            type: AfterSaleType.NORMAL,
            showDialog: false,
            selectedId: -1
        }
    }

    dataNull() {
        return (
            <View style={[Style.dataNull, columnCenter]}>
                <Image source={order_null} style={getImageSize(150)} />
                <Text style={{fontSize: Theme.font_size_sm, color: Theme.color_text_muted}} >暂无售后信息～</Text>
            </View>
        )
    }

    componentDidMount() {
        this.enter = this.props.navigation.addListener("focus", (e) => {
            this.applyFlat?._onRefresh();
            this.handledFlat?._onRefresh();
            // this.handledFlat?._onRefresh();
        })
    }

    componentWillUnmount() {
        if(this.enter) {
            this.props.navigation.removeListener("focus", this.enter);
        }
    }

    $cancelApply(id: number) {
        cancelApply({id: id}).then((res: any) => {
            if(isSuccess(res)) {
                this.setState({
                    showDialog: false
                })
                Toast.info("撤销成功", 1, () => {
                    this.handlingFlat?._onRefresh();
                    this.applyFlat?._onRefresh();
                })
            }
        })
    }

    applyAfterPostItem(data: any) {
        const items = data.item;
        return (
            <View style={Style.applyAfterPostItem}>
                <View style={[Style.applyAfterPostHeader, row]}>
                    <Image source={icon_shop} style={getImageSize(20)} />
                    <Text style={Style.storeName}>{items.time}</Text>
                    <Image source={arrow_right} style={getImageSize(14)}></Image>
                </View>
                {
                    items.order_goods.map((item: any, index: number) => (
                        <View style={Style.goodsContainer} key={index}>
                            <View style={[Style.goodsItem, row]} >
                                <Image style={getImageSize(80)} source={{ uri: item.image }} />
                                <View style={Style.goodsInfo}>
                                    <Text style={Style.goodsName} numberOfLines={2}>{item.goods_name}</Text>
                                    <View style={[{ marginTop: 10 }, rowBetween]}>
                                        <Text style={{ fontWeight: 'bold', fontSize: Theme.font_size_sm, lineHeight: 20 }}>￥{item.goods_price}</Text>
                                        <Text style={{ fontSize: Theme.font_size_sm, lineHeight: 20 }}>x{item.goods_num}</Text>
                                    </View>
                                </View>
                            </View>
                            <View style={[Style.bottomOpt, rowEnd]}>
                                <TouchableOpacity
                                    activeOpacity={0.7}
                                    style={{...Style.primaryBtn, opacity: items.after_sale.able_apply == 1 ? 1 : 0.5}}
                                    disabled={items.after_sale.able_apply == 0}
                                    onPress={() => {
                                        navigate("ApplyRefund", {
                                            orderId: items.order_id,
                                            itemId: item.item_id,
                                        })
                                    }}
                                >
                                    <Text style={{ color: Theme.brand_primary, fontSize: Theme.font_size_base, lineHeight: 20 }}>申请售后</Text>
                                </TouchableOpacity>
                            </View>
                        </View>
                    ))
                }
            </View>
        )
    }

    _onLoadApplyPost(pageNum = 1, callback: any) {
        this._getApplyPostData(pageNum, callback);
    }

    _getApplyPostData(pageNum: number, callback: any) {
        getAfterSaleList({ page_no: pageNum, type: AfterSaleType.NORMAL })
            .then((res: any) => {
                callback(res.data.list, { haveNext: res.data.more })
            }).catch(e => {
            })
    }

    _onApplyRefresh(callback: any) {
        this._getApplyPostData(1, callback)
    }

    applyAfterPost() {
        return (
            <View style={Style.applyAfterPostContain}>
                <LFlatList
                    style={{ flex: 1 }}
                    ref={(lf) => {this.applyFlat = lf}}
                    showsHorizontalScrollIndicator={false}
                    onLoadMore={this._onLoadApplyPost.bind(this)}
                    onRefresh={this._onApplyRefresh.bind(this)}
                    loadMoreable={true}
                    refreshable={true}
                    keyExtractor={(item: any, index: any) => index}
                    renderItem={(data) => this.applyAfterPostItem(data)}
                    emptyView={() => this.dataNull()}
                />
            </View>
        )
    }

    // 处理中
    handerItem(data: any) {
        const items = data.item
        return (
            <View style={Style.handlerItem}>
                <View style={{ ...Style.storeHeader, ...rowBetween }}>
                    <View style={row}>
                        <Text style={{ color: Theme.color_text_paragraph, fontSize: Theme.font_size_base, lineHeight: 20 }}>{items.time}</Text>
                    </View>
                    <View>
                        <Text style={{ color: Theme.brand_primary, fontSize: Theme.font_size_base, lineHeight: 20 }}>{items.after_sale.type_text}</Text>
                    </View>
                </View>
                {
                    items.order_goods.map((item: any, index:number) => (
                        <TouchableOpacity activeOpacity={0.7} key={index} onPress={() => {
                            navigate("AfterSalesDetail", {
                                afterSalesId: items.after_sale.after_sale_id,
                                orderId: items.order_id,
                                itemId: item.item_id
                            })
                        }}>
                            <View style={[Style.goodsItem, row]}>
                                <Image style={getImageSize(80)} source={{ uri: item.image }} />
                                <View style={Style.goodsInfo}>
                                    <Text style={Style.goodsName}>{item.goods_name}</Text>
                                    <View style={[{ marginTop: 10 }, rowBetween]}>
                                        <Text style={{ fontWeight: 'bold', fontSize: Theme.font_size_sm, lineHeight: 20 }}>￥{item.goods_price}</Text>
                                        <Text style={{ fontSize: Theme.font_size_sm, lineHeight: 20 }}>x{item.goods_num}</Text>
                                    </View>
                                </View>
                            </View>
                            <View style={{ paddingHorizontal: 10 }}>
                                <View style={Style.saleStatus}>
                                    <Text style={{ color: Theme.color_text_paragraph, fontSize: Theme.font_size_base, fontWeight: 'bold', lineHeight: 20 }}>
                                        {items.after_sale.status_text}   <Text style={{ fontWeight: '400', marginLeft: 5 }}>{items.after_sale.desc}</Text>
                                    </Text>
                                </View>
                            </View>
                        </TouchableOpacity>
                    ))
                }
                <View style={[Style.bottomBtnContainer, rowEnd]}>
                    <TouchableOpacity activeOpacity={0.7} style={{...Style.borderBtn, marginRight: 5}} onPress={() => {
                        this.setState({
                            showDialog: true,
                            selectedId: items.after_sale.after_sale_id
                        })
                    }}>
                        <Text style={{ fontSize: Theme.font_size_base, lineHeight: 20 }}>撤销申请</Text>
                    </TouchableOpacity>
                    <TouchableOpacity
                    activeOpacity={0.7}
                    style={{...Style.borderBtn, marginRight: 5, display: items.after_sale.status==2 ? 'flex': 'none' }}
                    onPress={() => {
                        navigate('AfterSalesDetailForm', {
                            id: items.after_sale.after_sale_id,
                        })
                    }}
                    >
                        <Text style={{ fontSize: Theme.font_size_base, lineHeight: 20 }}>填写快递单号</Text>
                    </TouchableOpacity>
                    <TouchableOpacity activeOpacity={0.7} style={{...Style.borderBtn, display: 'none'}}>
                        <Text style={{ fontSize: Theme.font_size_base, lineHeight: 20 }}>平台退款</Text>
                    </TouchableOpacity>
                </View>
            </View>
        )
    }

    _onLoadHandle(pageNum = 1, callback: any) {
        this._getHandlerData(pageNum, callback);
    }

    _getHandlerData(pageNum: number, callback: any) {
        getAfterSaleList({ page_no: pageNum, type: AfterSaleType.HANDLING })
            .then((res: any) => {
                callback(res.data.list, { haveNext: res.data.more })
            }).catch(e => {
            })
    }

    _onHandleRefresh(callback: any) {
        this._getHandlerData(1, callback)
    }

    // 处理中
    handling() {
        return (
            <View style={Style.handleContain}>
                <LFlatList
                    style={{ flex: 1 }}
                    ref={(lf) => {this.handlingFlat = lf}}
                    showsHorizontalScrollIndicator={false}
                    onLoadMore={this._onLoadHandle.bind(this)}
                    onRefresh={this._onHandleRefresh.bind(this)}
                    loadMoreable={true}
                    refreshable={true}
                    keyExtractor={(item: any, index: any) => index}
                    renderItem={(data) => this.handerItem(data)}
                    emptyView={() => this.dataNull()}
                />
            </View>
        )
    }

    // 已处理
    handledItem(data: any) {
        const items = data.item;
        return (
            <View style={[Style.handlerItem, { paddingBottom: 10 }]}>
                <View style={{ ...Style.storeHeader, ...rowBetween }}>
                    <View style={row}>
                        <Text style={{ color: Theme.color_text_paragraph, fontSize: Theme.font_size_base, lineHeight: 20 }}>{items.time}</Text>
                    </View>
                    <View>
                        <Text style={{ color: Theme.brand_primary, fontSize: Theme.font_size_base, lineHeight: 20 }}>{items.after_sale.type_text}</Text>
                    </View>
                </View>
                {
                    items.order_goods.map((item: any, index: number)  => (
                        <TouchableOpacity activeOpacity={0.7} onPress={() => {
                            navigate('AfterSalesDetail', {
                                afterSalesId: items.after_sale.after_sale_id,
                                orderId: items.order_id,
                                itemId: item.item_id
                            })
                        }}>        
                            <View style={[Style.goodsItem, row]}>
                                <Image style={getImageSize(80)} source={{ uri: item.image}} />
                                <View style={Style.goodsInfo}>
                                    <Text style={Style.goodsName}>{item.goods_name}</Text>
                                    <View style={[{ marginTop: 10 }, rowBetween]}>
                                        <Text style={{ fontWeight: 'bold', fontSize: Theme.font_size_sm, lineHeight: 20 }}>￥{item.goods_price}</Text>
                                        <Text style={{ fontSize: Theme.font_size_sm, lineHeight: 20 }}>x{item.goods_num}</Text>
                                    </View>
                                </View>
                            </View>
                            <View style={{ paddingHorizontal: 10 }}>
                                <View style={Style.saleStatus}>
                                    <Text style={{ color: Theme.color_text_paragraph, fontSize: Theme.font_size_base, fontWeight: 'bold', lineHeight: 20 }}>
                                    {items.after_sale.status_text}   <Text style={{ fontWeight: '400', marginLeft: 5 }}>{items.after_sale.desc}</Text>
                                    </Text>
                                </View>
                            </View>
                        </TouchableOpacity>
                    ))
                }
            </View>
        )
    }

    _onLoadHanded(pageNum = 1, callback: any) {
        this._onGetHandedData(pageNum, callback)
    }

    _onGetHandedData(pageNum: number, callback: any) {
        getAfterSaleList({ page_no: pageNum, type: AfterSaleType.FINISH })
            .then((res: any) => {
                callback(res.data.list, { haveNext: res.data.more })
            }).catch(e => {
            })
    }

    _onHandedRefresh(callback: any) {
        this._onGetHandedData(1, callback)
    }

    handled() {
        return (
            <View style={Style.handleContain}>
                <LFlatList
                    style={{ flex: 1 }}
                    ref={(lf) => {this.handledFlat = lf}}
                    showsHorizontalScrollIndicator={false}
                    onLoadMore={this._onLoadHanded.bind(this)}
                    onRefresh={this._onHandedRefresh.bind(this)}
                    loadMoreable={true}
                    refreshable={true}
                    keyExtractor={(item: any, index: any) => index}
                    renderItem={(data) => this.handledItem(data)}
                    emptyView={() => this.dataNull()}
                />
            </View>
        )
    }

    render() {
        return (
            <SafeAreaView style={contain}>
                <View style={Style.postSaleContainer}>
                    <ScrollableTabView
                        style={{ flex: 1, borderBottomWidth: 0 }}
                        initialPage={0}
                        tabBarPosition='top'
                        onChangeTab={(obj) => {
                            switch(obj.i) {
                                case 0:
                                    this.setState({
                                        type: AfterSaleType.NORMAL
                                    })
                                    this.applyFlat?._onRefresh();
                                break;
                                case 1:
                                    this.setState({
                                        type: AfterSaleType.HANDLING
                                    })
                                    this.handlingFlat?._onRefresh();
                                break;
                                case 2: 
                                    this.setState({
                                        type: AfterSaleType.FINISH
                                    })
                                    this.handledFlat?._onRefresh()
                                break;
                            }
                        }}
                        renderTabBar={() => <CustomTabBar
                            activeColor={Theme.brand_primary}
                            inactiveColor={Theme.color_text_base}
                            activeTab={0}
                            tabUnderlineDefaultWidth={40}
                        />}
                    >
                        <View tabLabel='售后申请' style={{flex: 1}}>
                            {this.applyAfterPost()}
                        </View>
                        <View tabLabel='处理中' style={{flex: 1}}>
                            {this.handling()}
                        </View>
                        <View tabLabel='已处理' style={{flex: 1}}>
                            {this.handled()}
                        </View>

                    </ScrollableTabView>
                    <Dialog
                    isVisible={this.state.showDialog}
                    confirmButtonText={"撤销"}
                    onConfirm={() => {
                        this.$cancelApply(this.state.selectedId);
                    }}
                    onCancel={() => this.setState({showDialog: false})}
                    >
                        <View style={columnCenter}>
                            <Image source={icon_warning} style={getImageSize(28)}/>
                            <Text style={{marginTop: 15, fontSize: Theme.font_size_md}} >确认撤销申请吗？</Text>
                        </View>
                    </Dialog>
                </View>
            </SafeAreaView>
        )
    }
}

const Style = StyleSheet.create({
    postSaleContainer: {
        flex: 1
    },
    applyAfterPostContain: {
        flex: 1,
    },
    applyAfterPostItem: {
        backgroundColor: Theme.fill_base,
        flex: 1,
        marginTop: 10
    },
    storeName: {
        marginHorizontal: 5,
        fontWeight: 'bold',
        fontSize: Theme.font_size_base,
        lineHeight: 20
    },
    applyAfterPostHeader: {
        paddingVertical: 10,
        paddingHorizontal: 12
    },
    goodsContainer: {

    },
    goodsItem: {
        paddingVertical: 10,
        paddingHorizontal: 12
    },
    goodsInfo: {
        marginLeft: 12,
        flex: 1
    },
    goodsName: {
        fontSize: Theme.font_size_base,
        lineHeight: 20
    },
    bottomOpt: {
        paddingHorizontal: 12,
        paddingBottom: 11
    },
    primaryBtn: {
        borderColor: Theme.brand_primary,
        borderWidth: Theme.border_width_md,
        borderRadius: Theme.radius_circel,
        paddingHorizontal: 17,
        paddingVertical: 4.5
    },
    handleContain: {
        flex: 1
    },
    handlerItem: {
        backgroundColor: Theme.fill_base,
        marginTop: 10,
    },
    storeHeader: {
        paddingVertical: 10,
        paddingHorizontal: 12
    },
    saleStatus: {
        backgroundColor: "#F6F6F6",
        paddingVertical: 10,
        paddingHorizontal: 20,
        borderRadius: Theme.radius_sm
    },
    bottomBtnContainer: {
        paddingVertical: 7.5,
        paddingHorizontal: 12
    },
    borderBtn: {
        paddingHorizontal: 16.5,
        paddingVertical: 4.5,
        borderColor: Theme.border_color_base,
        borderWidth: Theme.border_width_md,
        borderRadius: Theme.radius_circel
    },
    dataNull: {
        paddingTop: 150
    }
})