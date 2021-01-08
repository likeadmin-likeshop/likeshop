import React from 'react'
import {View, StyleSheet, Image, Text, SafeAreaView} from 'react-native'
import {ScreenProps} from '../../typing'
import Theme from '../../constraint/Theme'
import {rowCenter, row, getImageSize, rowBetween, rowEnd, columnCenter, contain} from '../../constraint/Style'
import CustomTabBar from "../../components/main/CustomTabBar";
import ScrollableTabView, { DefaultTabBar, ScrollableTabBar } from 'react-native-scrollable-tab-view';
import { icon_shop, arrow_right, null_news } from '../../constraint/Image'
import PressButton from '../../components/main/PressButton'
import { navigate } from '../../utils/navigation'
import LFlatList from '../../components/main/LFlatList'
import { getBeforeGoodsCommentList, getAfterGoodsCommentList, getOrderCommentList } from '../../api/user'
import PriceFormate from '../../components/bussiness/PriceFormate';
import StarRating from 'react-native-star-rating';
import { TouchableOpacity } from 'react-native-gesture-handler'
type UserEvaluationProps = ScreenProps<'UserEvaluation'>

export default class UserEvaluation extends React.Component <UserEvaluationProps, any> {
    beforeEvaluateLf: LFlatList | null | undefined
    afterEvaluateLf: LFlatList | null | undefined
    active: number | undefined
    enter: (() => void) | undefined
    constructor(props : UserEvaluationProps) {
        super(props)
        this.state = {
            active: props.route.params?.active
        }
    }

    dataNull() {
        return (
            <View style={[Style.dataNull, columnCenter]}>
                <Image source={null_news} style={getImageSize(150)} />
                <Text style={{fontSize: Theme.font_size_sm, color: Theme.color_text_muted}} >暂无商品评价～</Text>
            </View>
        )
    }

    componentDidMount() {
        this.enter = this.props.navigation.addListener('focus', () => {
            this.beforeEvaluateLf?._onRefresh();
            this.afterEvaluateLf?._onRefresh();
        })
    }

    UNSAFE_componentWillReceiveProps(props: UserEvaluationProps) {
        this.setState({
            active: props.route.params.active
        })
    }

    componentWillUnmount() {
        if(this.enter) {
            this.props.navigation.removeListener('focus', this.enter)
        }
    }

    _onLoadBeforeEvaluate(pageNum = 1, callback: any) {
        this._getBeforeEvaluateData(pageNum, callback);
    }

    _getBeforeEvaluateData(pageNum: number, callback: any) {
        getOrderCommentList({ page_no: pageNum, type: 1 })
            .then((res: any) => {
                callback(res.data.list, { haveNext: res.data.more })
            }).catch(e => {
            })
    }

    _onRefreshbeforeEvaluate(callback: any) {
        this._getBeforeEvaluateData(1, callback)
    }

    beforeEvaluate() {
        return (
            <View style={Style.beforeEvaluteContain}>
                <LFlatList
                    style={{ flex: 1 }}
                    ref={(lf) => {this.beforeEvaluateLf = lf}}
                    showsHorizontalScrollIndicator={false}
                    onLoadMore={this._onLoadBeforeEvaluate.bind(this)}
                    onRefresh={this._onRefreshbeforeEvaluate.bind(this)}
                    loadMoreable={true}
                    refreshable={true}
                    keyExtractor={(item: any, index: any) => index}
                    renderItem={(data) => this.renderBeforeEvaluateItem(data)}
                    emptyView={() => this.dataNull()}
                />
            </View>
        )
    }

    renderBeforeEvaluateItem(data: any) {
        const {item: items} = data;
        console.log(items)
        return (
            <View style={Style.beforeEvaluteItem}>
                <View style={Style.goodsContainer}>
                    <TouchableOpacity activeOpacity={0.7} style={{...Style.goodsItem, ...row}} onPress={() => navigate('GoodsDetail', {id: item.goods_id})}>
                        <Image style={getImageSize(80)} source={{uri: items.image}} />
                        <View style={Style.goodsInfo}>
                            <Text style={Style.goodsName} numberOfLines={2}>{items.goods_name}</Text>
                            <View style={[{marginTop: 10}, rowBetween]}>
                                <PriceFormate price={items.goods_price} signSize={Theme.font_size_sm} prevSize={Theme.font_size_md} style={{fontWeight: 'bold',lineHeight: 20}}></PriceFormate>
                                <Text style={{fontSize: Theme.font_size_base, lineHeight: 20}}>x{items.goods_num}</Text>
                            </View>
                        </View>
                    </TouchableOpacity>
                    <View style={[rowEnd, Style.goodsOpt]}>
                        <TouchableOpacity activeOpacity={0.7} onPress={() => navigate('GoodsReview', {
                            id: items.id
                        })}>
                            <View style={[Style.evaluteGoodsBtn, rowCenter]}>
                                <Text style={{color: Theme.brand_primary, fontSize: Theme.font_size_base}}>评价商品</Text>
                            </View>
                        </TouchableOpacity>
                    </View>
                </View>
            </View>
        )
    }


    renderAfterEvaluateItem(data: any) {
        const {item: items} = data;
        return (
            <TouchableOpacity activeOpacity={0.7} style={Style.afterEvaluateItem}>
                <View style={[{paddingBottom: 10}, row]}>
                    <Image style={getImageSize(80)} source={{uri: items.image}}/>
                    <View style={[Style.goodsInfo]}>
                        <Text style={Style.goodsName} numberOfLines={2}>{items.goods_name}</Text>
                        <View style={[{marginTop: 8.5}, row]}>
                            <Text>评分</Text>
                            <StarRating
                            fullStarColor={'#FF2C3C'}
                            emptyStarColor={'#e2e2e2'}
                            starStyle={{marginRight: 4}}
                            containerStyle={{marginLeft: 5}}
                            starSize={12}
                            maxStars={5}
                            rating={items.goods_comment}
                            disabled={true}
                            />
                        </View>
                    </View>
                </View>
                <View style={[Style.evaluteContain, {display: items.comment ? 'flex' : 'none'}]}>
                    <View style={Style.evaluteContent}>
                        <Text style={{fontSize: Theme.font_size_base, lineHeight: 20}} numberOfLines={2}>{items.comment}</Text>
                    </View>
                </View>
            </TouchableOpacity>
        )
    }

    _onLoadAfterEvaluate(pageNum = 1, callback: any) {
        this._getAfterEvaluateData(pageNum, callback)
    }

    _getAfterEvaluateData(pageNum: number, callback: any) {
        getOrderCommentList({ page_no: pageNum, type: 2 })
        .then((res: any) => {
            callback(res.data.list, { haveNext: res.data.more })
        }).catch(e => {
        })
    }

    _onRefreshAfterEvaluate(callback: any) {
        this._getAfterEvaluateData(1, callback)
    }

    afterEvaluate() {
        return (
            <View style={Style.afterEvaluateContain}>
                <LFlatList
                    style={{ flex: 1 }}
                    ref={(lf) => {this.afterEvaluateLf = lf}}
                    showsHorizontalScrollIndicator={false}
                    onLoadMore={this._onLoadAfterEvaluate.bind(this)}
                    onRefresh={this._onRefreshAfterEvaluate.bind(this)}
                    loadMoreable={true}
                    refreshable={true}
                    keyExtractor={(item: any, index: any) => index}
                    renderItem={(data) => this.renderAfterEvaluateItem(data)}
                    emptyView={() => this.dataNull()}
                />
            </View>
        )
    }

    render() {
        return (
            <SafeAreaView style={contain}>
                <ScrollableTabView
                    style={{ flex: 1, borderBottomWidth: 0 }}
                    initialPage={0}
                    tabBarPosition='top'
                    renderTabBar={() => <CustomTabBar
                        activeColor={Theme.brand_primary}
                        inactiveColor={Theme.color_text_base}
                        activeTab={this.state.active}
                        tabUnderlineDefaultWidth= {40}
                    />}
                >
                <View tabLabel='待评价' style={{flex: 1}}>
                    {this.beforeEvaluate()}
                </View>
                <View tabLabel='已评价' style={{flex: 1}}>
                    {this.afterEvaluate()}
                </View>

                </ScrollableTabView>
            </SafeAreaView>
        )
    }
}

const Style = StyleSheet.create({
    beforeEvaluteContain: {
        flex: 1
    },
    beforeEvaluteItem: {
        backgroundColor: Theme.fill_base,
        marginTop: 10
    },
    header: {
        paddingHorizontal: 12,
        paddingVertical: 10
    },
    goodsContainer: {

    },
    goodsItem: {
        paddingHorizontal: 12,
        paddingVertical: 10
    },
    goodsInfo: {
        flex: 1,
        marginLeft: 12
    },
    goodsName: {
        fontSize: Theme.font_size_base,
        lineHeight: 20
    },
    goodsOpt: {
        paddingHorizontal: 12,
        paddingBottom: 14
    },
    evaluteGoodsBtn: {
        paddingVertical: 3,
        paddingHorizontal: 16,
        borderColor: Theme.brand_primary,
        borderWidth: Theme.border_width_md,
        borderRadius: Theme.radius_circel
    },
    afterEvaluateContain: {
        flex: 1
    },
    afterEvaluateItem: {
        paddingHorizontal: 12,
        paddingVertical: 10,
        backgroundColor: Theme.fill_base,
        flex: 1,
        marginTop: 10
    },
    evaluteContain: {

    },
    evaluteContent: {
        backgroundColor: "#F6F6F6",
        paddingHorizontal: 10,
        paddingTop: 10,
        paddingBottom: 8.5
    },
    dataNull: {
        paddingTop: 150
    }
})