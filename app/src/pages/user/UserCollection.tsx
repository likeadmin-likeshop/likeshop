import React from "react"
import { Text, View, StyleSheet, Image, SafeAreaView } from "react-native"
import { ScreenProps } from '../../typing';
import Theme from "../../constraint/Theme";
import { rowCenter, getImageSize, row, rowBetween, contain, columnCenter } from "../../constraint/Style";
import { icon_del, profit_null, icon_warning } from "../../constraint/Image";
import PressButton from "../../components/main/PressButton";
import LFlatList from "../../components/main/LFlatList";
import { getCollectGoods, handleCollectGoods } from "../../api/user";
import Dialog from "../../components/main/Dialog";
import { isSuccess } from "../../utils/request";
import EmptyView from "../../components/bussiness/EmptyView";
import PriceFormate from "../../components/bussiness/PriceFormate";
import { navigate } from "../../utils/navigation";
type UserCollectionProps = ScreenProps<'UserCollection'>;



export default class UserCollection extends React.Component<UserCollectionProps, any> {
    goodsLFlat: LFlatList | null | undefined;
    constructor(props: UserCollectionProps) {
        super(props);
        this.state = {
            selectedGoodsId: -1,
            showDialog: false,
            // 0 为商品 1为店铺
            type: 0
        }
    }

    $handleCollectGoods() {
        handleCollectGoods({
            is_collect: 0,
            goods_id: this.state.selectedGoodsId
        }).then((res: any) => {
            if (isSuccess(res)) {
                this.setState({
                    showDialog: false
                })
                this.goodsLFlat?._onRefresh()
            }
        })
    }




    goodsListItem(data: any) {
        const item = data.item;
        return (
            <PressButton style={{ ...Style.goodsListItem, ...row }} onPress={() => {navigate("GoodsDetail", {id: item.id})}}>
                <Image source={{ uri: item.image }} style={[getImageSize(80), {borderRadius: Theme.radius_sm}]} />
                <View style={{ flex: 1, marginLeft: 10 }}>
                    <View style={[row]}>
                        <View style={{ flex: 1 }}>
                            <Text ellipsizeMode={"tail"} style={{ fontSize: Theme.font_size_base, lineHeight: 20 }} numberOfLines={2}>{item.name}</Text>
                        </View>
                        <PressButton style={{ marginLeft: 7 }} onPress={() => {
                            this.setState({
                                showDialog: true,
                                selectedGoodsId: item.id,
                                type: 0
                            })
                        }}>
                            <Image source={icon_del} style={[getImageSize(28)]}></Image>
                        </PressButton>
                    </View>
                    <View style={[rowBetween, { marginTop: 10 }]}>
                        <PriceFormate 
                            price={item.price}
                            showSign={true}
                            signSize={Theme.font_size_sm}
                            prevSize={Theme.font_size_lg}
                            nextSize={Theme.font_size_sm}
                            color={Theme.brand_primary}
                        />
                        <View style={Style.primaryBtn}>
                            <Text style={{ fontSize: Theme.font_size_sm, color: Theme.brand_primary }}>去购买</Text>
                        </View>
                    </View>
                </View>
            </PressButton>
        )
    }



    _onLoadCollectionGoods(pageNum = 1, callback: any) {
        this._getCollectGoodsData(pageNum, callback)
    }

    _getCollectGoodsData(pageNum: number, callback: any) {
        getCollectGoods({ page_no: pageNum }).then((res: any) => {
            callback(res.data.list, { haveNext: res.data.more })
        }).catch(e => {
        })
    }

    _onCollectGoodsRefresh(callback: any) {
        this._getCollectGoodsData(1, callback)
    }

    goodsList() {
        return (
            <View style={Style.goodsListContain}>
                <LFlatList
                    style={{ flex: 1 }}
                    ref={(lf) => this.goodsLFlat = lf}
                    showsHorizontalScrollIndicator={false}
                    onLoadMore={this._onLoadCollectionGoods.bind(this)}
                    onRefresh={this._onCollectGoodsRefresh.bind(this)}
                    loadMoreable={true}
                    refreshable={true}
                    keyExtractor={(item: any, index: any) => index}
                    renderItem={(data) => this.goodsListItem(data)}
                    emptyView={() => <EmptyView source={profit_null} text="暂无收藏" />}
                />
            </View>
        )
    }

    render() {

        return (
            <SafeAreaView style={contain}>
                <View style={{ flex: 1 }}>
                    {this.goodsList()}
                </View>
                <Dialog
                    isVisible={this.state.showDialog}
                    confirmButtonText={"确认"}
                    onConfirm={() => {
                        console.log(this.state.type, 'type')
                        this.$handleCollectGoods();
                    }}
                    onCancel={() => this.setState({ showDialog: false })}
                >
                    <View style={columnCenter}>
                        <Image source={icon_warning} style={getImageSize(28)} />
                        <Text style={{ marginTop: 15, fontSize: Theme.font_size_md }} >确定要取消收藏吗？</Text>
                    </View>
                </Dialog>
            </SafeAreaView>
        )
    }
}


const Style = StyleSheet.create({
    goodsListContain: {
        marginTop: 10,
        flex: 1
    },
    goodsListItem: {
        padding: 10,
        flex: 1,
        backgroundColor: "#fff"
    },
    primaryBtn: {
        borderColor: Theme.brand_primary,
        borderWidth: 1,
        borderRadius: Theme.radius_circel,
        paddingHorizontal: 17.5,
        paddingVertical: 3.75
    },
    storeListContain: {
        marginTop: 10,
        flex: 1
    },
    storeListItem: {
        padding: 10,
        backgroundColor: "#fff",
    },
    dataNull: {
        ...columnCenter,
        paddingTop: 100,
    }
})