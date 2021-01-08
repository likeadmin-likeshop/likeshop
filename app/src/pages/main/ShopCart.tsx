import React from 'react';
import { StyleSheet, Text, View, ViewStyle, ImageStyle, TextStyle, Image, FlatList, Platform, RefreshControl, ScrollView } from 'react-native';
import Theme from '../../constraint/Theme'
import { ScreenProps, RootState } from '../../typing'
import { cart_null, arrow_right, icon_del, icon_warning } from '../../constraint/Image';
import { getImageSize, columnCenter, row, rowBetween, contain } from '../../constraint/Style';
import PressButton from '../../components/main/PressButton';
import Stepper from "../../components/main/Stepper"
import { getCartList, changeGoodsCount, changeCartSelset, deleteGoods } from '../../api/store'
import { isSuccess } from '../../utils/request';
import { connect } from 'react-redux';
import CheckBox from '../../components/bussiness/CheckBox';
import { navigate } from '../../utils/navigation';
import { StatusBarHeight } from '../../utils/app';
import LFlatList from '../../components/main/LFlatList';
import Recommend from '../../components/bussiness/Recommend';
import Dialog from '../../components/main/Dialog';
import PriceFormate from '../../components/bussiness/PriceFormate';
import { postEvent, registerEvent } from '../../utils/event';
import LoadingView from '../../components/main/LoadingView';
import LinearGradient from 'react-native-linear-gradient';
import { Toast } from '@ant-design/react-native';



type ShopCartProps = ScreenProps<'ShopCart'> & { shopCartList: any } & ReturnType<typeof mapStateToProps>;

const SelectStatus = {
    NOT_SELECT: 0,
    SELECTED: 1
};

class ShopCart extends React.Component<ShopCartProps, any> {
    lFlatList!: LFlatList | null;
    enter: (() => void) | undefined;
    listener: any;
    cartId: any;
    constructor(props: ShopCartProps) {
        super(props);
        this.state = {
            // 0 loading 1为有 2 为空
            cartType: 0,
            cartList: [],
            isSelectAll: 0,
            showDialog: false,
            refreshing: false,
            totalAmount: '',
            nullSelect: false
        }
    }

    $changeGoodsCount(cartId: number, goodsNum: number) {
        changeGoodsCount({
            cart_id: cartId,
            goods_num: goodsNum,
        }).then((res: any) => {
            if (isSuccess(res)) {
                this.lFlatList?._onRefresh()
            }
        })
    }



    checkSelectAll() {
        const { cartList } = this.state
        let index = (cartList as any[]).findIndex((item: any) => item.selected == SelectStatus.NOT_SELECT)
        if (index != -1) {
            this.setState({
                isSelectAll: SelectStatus.NOT_SELECT
            })
            return
        }
        this.setState({
            isSelectAll: SelectStatus.SELECTED
        })
    }
    checkNullSelect() {
        const { cartList } = this.state
        let index = (cartList as any[]).findIndex((item: any) => item.selected == SelectStatus.SELECTED)
        if (index != -1) {
            this.setState({
                nullSelect: false
            })
            return
        }
        this.setState({
            nullSelect: true
        })
    }

    $deleteGoods() {
        deleteGoods({ cart_id: this.cartId }).then(res => {
            if (isSuccess(res)) {
                this.setState({
                    showDialog: false
                })
                this.lFlatList?._onRefresh()
            }
        })
    }

    componentDidMount() {
        this.listener = this.props.navigation.addListener("focus", (e) => {
            this.lFlatList?._onRefresh()
        })
    }

    componentWillUnmount() {
        this.listener()
    }
    changeCartSelset(cartId: number[], selected: number) {
        selected = selected ? 0 : 1
        changeCartSelset({
            cart_id: cartId,
            selected
        }).then((res: any) => {
            if (isSuccess(res)) {
                this.lFlatList?._onRefresh()
            }
        })
    }
    _renderGoodsItem(item: any) {
        return (
            <View style={styles.goodsItem}>
                <View style={{ ...rowBetween, ...styles.checkWrap }}>
                    <CheckBox
                        checked={item.selected}
                        onClick={() => {
                            this.changeCartSelset([item.cart_id], item.selected)
                        }}
                    >
                        <Text style={{ fontSize: Theme.font_size_sm, marginLeft: 10 }}>选择</Text>
                    </CheckBox>
                    <PressButton onPress={() => {
                        this.cartId = item.cart_id
                        this.setState({
                            showDialog: true,
                        })
                    }}>
                        <Image source={icon_del} style={[getImageSize(28)]} />
                    </PressButton>
                </View>
                <PressButton style={{ ...row, padding: 10 }} onPress={() => navigate('GoodsDetail', { id: item.goods_id })}>
                    <Image
                        style={[getImageSize(90), { borderRadius: Theme.radius_md }]}
                        source={{ uri: item.img }}
                    />
                    <View style={styles.goodsInfo}>
                        <View style={row}>
                            <Text numberOfLines={2} style={{ flex: 1, fontSize: Theme.font_size_base, lineHeight: 20 }} >{item.name}</Text>
                        </View>
                        <View style={{ marginTop: 5 }}>
                            <Text style={{ color: Theme.color_text_muted, fontSize: Theme.font_size_xs }}>{item.spec_value_str}</Text>
                        </View>
                        <View style={[rowBetween, { marginTop: 10 }]}>
                            <PriceFormate price={item.price} color={Theme.brand_primary} signSize={Theme.font_size_xs} prevSize={Theme.font_size_lg} nextSize={Theme.font_size_xs} />
                            <View>
                                <Stepper
                                    changeValue={(value: number) => {
                                        this.$changeGoodsCount(item.cart_id, value);
                                    }}
                                    value={item.goods_num} min={1} async />
                            </View>
                        </View>
                    </View>
                </PressButton>
            </View>
        )
    }
    _onLoadGoods(pageNum = 1, callback: any) {
        this._getGoodsData(pageNum, callback)
    }

    _getGoodsData(pageNum: number, callback: any) {
        const { isLogin } = this.props
        if (!isLogin) {
            callback([], { haveNext: false })
            this.setState({
                cartType: 2
            })
            return
        }
        getCartList().then((res: any) => {
            if (isSuccess(res)) {
                const { total_amount, lists } = res.data
                let cartType = 0
                callback(lists, { haveNext: false })
                cartType = lists.length == 0 ? 2 : 1
                this.setState({
                    cartType,
                    cartList: lists,
                    totalAmount: total_amount,
                    refreshing: false
                }, () => {
                    this.checkSelectAll()
                    this.checkNullSelect()
                })
            }
            postEvent('GET_CART_NUM')
        }).catch(e => {
        })
    }

    _onGoodsRefresh(callback: any) {
        this._getGoodsData(1, callback)
    }

    shopCartNull() {
        const { isLogin } = this.props
        return (
            <View style={[{ flex: 1 }]}>
                <View style={[styles.dataNullContain, columnCenter]}>
                    <Image source={cart_null} style={getImageSize(150)} />
                    <Text style={{ fontSize: Theme.font_size_base, color: Theme.color_text_secondary, marginBottom: 10 }}>{isLogin ? '购物车暂无任何商品' : '你还没登录哦,快去登录吧～'}</Text>
                    <PressButton style={styles.bdPrimary} onPress={() => {
                        isLogin ? navigate("Home") : navigate('Login')
                    }}>
                        <Text style={{ fontSize: Theme.font_size_md, color: Theme.brand_primary }}>{isLogin ? '去逛逛' : '去登录'}</Text>
                    </PressButton>
                </View>
            </View>
        )
    }
    footerView() {
        const { cartType, isSelectAll, cartList, nullSelect } = this.state
        return (
            <View style={[styles.footer, rowBetween, { display: cartType != 1 ? 'none' : "flex" }]}>
                <View style={row}>
                    <CheckBox
                        checked={isSelectAll}
                        onClick={() => {
                            let cartId = cartList.map((item: any) => item.cart_id)
                            this.changeCartSelset(cartId, isSelectAll)
                        }}
                    >
                        <Text style={{ marginLeft: 5, fontSize: Theme.font_size_base }}>全选</Text>
                    </CheckBox>
                </View>
                <View style={row}>
                    <Text style={{ fontSize: Theme.font_size_base }}>合计：</Text>
                    <PriceFormate price={this.state.totalAmount} color={Theme.brand_primary} prevSize={Theme.font_size_xxl} />
                    <PressButton
                        style={{ marginLeft: 10 }} onPress={() => {
                            let cartList = this.lFlatList?.state.dataSource
                            let goods: any[] = []
                            cartList.forEach((item: any) => {
                                if (item.selected) {
                                    goods.push({
                                        item_id: item.item_id,
                                        num: item.goods_num
                                    })
                                }
                            })
                            if(goods.length <= 0) {
                                return Toast.info('您还没有选择商品哦')
                            }
                            navigate('ConfirmOrder', {
                                type: 'cart',
                                goods
                            })
                        }}>
                        <LinearGradient style={styles.primaryBtn} colors={nullSelect ? ['#e5e5e5', '#e5e5e5'] : ['#F95F2F', '#FF2C3C']} start={{ x: 0, y: 0 }} end={{ x: 1, y: 0 }}>
                            <Text style={{ color: '#fff' }}>去结算</Text>
                        </LinearGradient>
                    </PressButton>
                </View>
            </View>
        )
    }
    tipDialog() {
        return (
            <Dialog
                isVisible={this.state.showDialog}
                confirmButtonText={"狠心删除"}
                onConfirm={() => {
                    this.$deleteGoods()
                }}
                onCancel={() => this.setState({ showDialog: false })}
            >
                <View style={columnCenter}>
                    <Image source={icon_warning} style={getImageSize(28)} />
                    <Text style={{ marginTop: 15, fontSize: Theme.font_size_md }} >确认删除该商品吗？</Text>
                </View>
            </Dialog>
        )
    }
    render() {
        const { cartType, refreshing } = this.state
        return (
            <View style={contain} >
                <View style={[styles.header, { paddingTop: StatusBarHeight }]}>
                    <Text style={[styles.headerTitle]}>购物车</Text>
                </View>
                {cartType == 0 ? <LoadingView /> : null}
                <ScrollView
                    showsVerticalScrollIndicator={false}
                    refreshControl={<RefreshControl refreshing={refreshing}
                        onRefresh={() => {
                            this.setState({
                                refreshing: true
                            })
                            this.lFlatList?._onRefresh()
                        }} />}>
                    < LFlatList
                        style={{ flex: 1 }}
                        noMoreFooterView={() => <View />}
                        ref={(lf) => { this.lFlatList = lf }}
                        showsHorizontalScrollIndicator={false}
                        onLoadMore={this._onLoadGoods.bind(this)}
                        onRefresh={this._onGoodsRefresh.bind(this)}
                        loadMoreable={true}
                        refreshable={false}
                        keyExtractor={(item: any, index: any) => index}
                        emptyView={() => this.shopCartNull()}
                        renderItem={({ item, index }) => this._renderGoodsItem(item)}
                    />
                    <Recommend />
                </ScrollView>
                {this.footerView()}
                {this.tipDialog()}
            </View>
        );
    }
};

let mapStateToProps = (state: RootState) => {
    return {
        isLogin: state.userStore.isLogin
    }
}

export default connect(mapStateToProps)(ShopCart);

const styles = StyleSheet.create({
    header: {
        height: Theme.title_height + StatusBarHeight,
        alignItems: 'center',
        justifyContent: 'center',
        backgroundColor: Theme.fill_base
    },
    headerTitle: {
        fontSize: 16,
        fontWeight: 'bold',
        textAlign: 'center',
    },
    bdPrimary: {
        height: 31,
        justifyContent: 'center',
        paddingHorizontal: 37.5,
        borderRadius: Theme.radius_circel,
        borderColor: Theme.brand_primary,
        borderWidth: Theme.border_width_md
    },
    dataNullContain: {
        backgroundColor: Theme.fill_base,
        paddingTop: 40,
        paddingBottom: 27.5
    },
    goodsItem: {
        marginHorizontal: 10,
        marginTop: 10,
        borderRadius: 5,
        backgroundColor: Theme.fill_base
    },
    checkWrap: {
        height: 40,
        paddingHorizontal: 10,
        borderBottomWidth: 0.5,
        borderColor: Theme.border_color_base
    },
    goodsInfo: {
        flex: 1,
        marginLeft: 10
    },
    footer: {
        paddingVertical: 8,
        paddingHorizontal: 12,
        backgroundColor: Theme.fill_base
    },
    primaryBtn: {
        paddingHorizontal: 22.5,
        height: 34,
        justifyContent: 'center',
        borderRadius: Theme.radius_circel
    },
})

