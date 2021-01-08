import React from 'react'
import { Image, ImageBackground, SafeAreaView, ScrollView, StyleSheet, Text, View } from 'react-native'
import LinearGradient from 'react-native-linear-gradient'
import { getActivityGoodsLists } from '../../api/store'
import PriceFormate from '../../components/bussiness/PriceFormate'
import LFlatList from '../../components/main/LFlatList'
import PressButton from '../../components/main/PressButton'
import { order_null, zhuanqu_bg } from '../../constraint/Image'
import { columnCenter, contain, getImageSize, row, rowBetween, rowCenter } from '../../constraint/Style'
import Theme from '../../constraint/Theme'
import { ScreenProps } from '../../typing'
import { ScreenWidth } from '../../utils/app'
import { navigate } from '../../utils/navigation'
import { isSuccess } from '../../utils/request'

type ActivityDetailProps = ScreenProps<'ActivityDetail'>

export default class ActivityDetail extends React.Component<ActivityDetailProps, any> {
    constructor(props: ActivityDetailProps) {
        super(props)
        this.state = {
            id: props.route.params.id,
            title: props.route.params.title,
            name: props.route.params.name,
            noData: false
        }
    }

    dataNull() {
        return (
            <View style={[Style.dataNull, columnCenter]}>
                <Image source={order_null} style={getImageSize(150)} />
                <Text style={{ color: Theme.color_text_muted }}>暂无活动商品～</Text>
            </View>
        )
    }

    goodsList(item: any) {
        return (
            <PressButton style={{ ...Style.goodsItem, ...row }} onPress={() => {
                navigate("GoodsDetail", {
                    id: item.id
                })
            }}>
                <Image source={{ uri: item.image }} style={getImageSize(90)} />
                <View style={Style.goodsInfo}>
                    <Text style={Style.goodsName} numberOfLines={2}>{item.name}</Text>
                    <View style={[Style.goodsSale, rowCenter]}>
                        <Text style={{ color: '#F77A0C', fontSize: Theme.font_size_xxs }}>累计{item.sales_sum}人购买</Text>
                    </View>
                    <View style={[{ marginTop: 7 }, rowBetween]}>
                        <View style={row}>
                            <PriceFormate
                                price={item.price}
                                signSize={Theme.font_size_sm}
                                prevSize={Theme.font_size_xl}
                                nextSize={Theme.font_size_sm}
                                color={Theme.brand_primary}
                                style={{ marginRight: 5 }}
                            />
                            <PriceFormate
                                price={item.market_price}
                                signSize={Theme.font_size_xs}
                                prevSize={Theme.font_size_xs}
                                nextSize={Theme.font_size_xs}
                                color={Theme.color_text_muted}
                            />
                        </View>
                        <LinearGradient style={[Style.quickBuyBtn, rowCenter]} colors={['#F95F2F', '#FF2C3C']} start={{ x: 0, y: 0 }} end={{ x: 1, y: 0 }}>
                            <Text style={{ color: 'white' }}>马上抢</Text>
                        </LinearGradient>
                    </View>
                </View>
            </PressButton>
        )
    }

    _onLoadMore(pageNum = 1, callback: any) {
        this._getData(pageNum, callback);
    }

    _getData(pageNum: any, callback: any) {
        getActivityGoodsLists({ page_no: pageNum, id: this.state.id }).then((res: any) => {
           if(isSuccess(res)) {
                callback(res.data.list, { haveNext: Boolean(res.data.more) })
                if(!res.data.list.length) {
                    this.setState({
                        noData: true
                    })
                }
           }
        })
    }

    _onRefresh(callback: any) {
        this._getData(1, callback);
    }

    render() {
        const {noData} = this.state
        return (
            <SafeAreaView style={contain}>
                <LFlatList
                    ListHeaderComponent={() => (
                        noData ? <View /> : <View style={{height: 50}}>
                            <ImageBackground source={zhuanqu_bg} style={Style.header}>
                                <Text style={Style.headerTitle}>{this.state.title}  <Text style={{ color: 'white', fontSize: Theme.font_size_xxs }}>{this.state.name}</Text></Text>
                            </ImageBackground>
                        </View>
                    )}
                    onLoadMore={this._onLoadMore.bind(this)}
                    onRefresh={this._onRefresh.bind(this)}
                    ItemSeparatorComponent={() => <View style={{height: 10}} />}
                    keyExtractor={(item: any, index: number) => item.id}
                    renderItem={({ item, index }) => this.goodsList(item)}
                    emptyView={() => this.dataNull()}
                />
            </SafeAreaView>
        )
    }
}

const Style = StyleSheet.create({
    header: {
        width: ScreenWidth,
        height: 170,
        paddingLeft: 12,
        position: "absolute",

    },
    headerTitle: {
        color: 'white',
        marginTop: 10,
        fontSize: 23
    },
    goodsItem: {
        paddingVertical: 15,
        paddingHorizontal: 10,
        borderRadius: 5,
        backgroundColor: 'white',
        marginHorizontal: 10
    },
    goodsInfo: {
        marginLeft: 10,
        flex: 1
    },
    goodsName: {
        lineHeight: 20,
        color: Theme.color_text_base,
        marginBottom: 5
    },
    goodsSale: {
        backgroundColor: '#FEF0DA',
        paddingHorizontal: 9,
        paddingVertical: 2,
        borderRadius: Theme.radius_circel,
        alignSelf: 'baseline',
    },
    quickBuyBtn: {
        borderRadius: Theme.radius_circel,
        paddingHorizontal: 17,
        height: 31
    },
    dataNull: {
        paddingTop: 150
    }
})