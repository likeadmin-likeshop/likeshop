import React from 'react'
import { ScreenProps, RootState } from '../../typing'
import { contain, getImageSize, row, rowBetween, columnCenter, rowCenter, rowEnd } from '../../constraint/Style';
import { View, StyleSheet, Text, Image, FlatList, ScrollView, ImageBackground, SafeAreaView, Platform, EmitterSubscription, Animated, Easing } from 'react-native';
import HTML from 'react-native-render-html';
import Theme from '../../constraint/Theme';
import { icon_share, arrow_right, icon_collection, icon_collection_s, icon_cart, details_bg_sale, coupon_null, icon_wechat, icon_shaer_poster, icon_share_moments, icon_contact } from '../../constraint/Image';
import PressButton from '../../components/main/PressButton';
import { getGoodsDetail, getGoodsCoupon} from '../../api/store';
import { host, isSuccess } from '../../utils/request';
import CustomImage from '../../components/main/CustomImage';
import PriceFormate from '../../components/bussiness/PriceFormate';
import GoodsSpec from '../../components/bussiness/GoodsSpec';
import { handleCollectGoods } from '../../api/user';
import { navigate, goBack } from '../../utils/navigation';
import { connect } from 'react-redux';
import Popup from '../../components/main/Popup';
import EmptyView from '../../components/bussiness/EmptyView';
import CouponItem from '../../components/bussiness/CouponItem';
import LFlatList from '../../components/main/LFlatList';
import Carousel from 'react-native-snap-carousel';
import CountDown from '../../components/main/CountDown';
import ImagePreview from '../../components/main/ImagePreview';
import WeChat, { isWXAppInstalled, WXRegisterApp } from '../../utils/wechat';
import { ScreenWidth } from '../../utils/app';
import { saveImageToRoll } from '../../utils/cameraRoll';
import Tag from '../../components/main/Tag';
import GoodsLike from '../../components/bussiness/GoodsLike';
import { postEvent } from "../../utils/event"
import GoodsBall from '../../components/bussiness/GoodsBall';
import { Toast } from '@ant-design/react-native';
type GoodsDetailProps = ScreenProps<'GoodsDetail'> & ReturnType<typeof mapStateToProps>

const CollectType = {
    COLLECTION: 1,
    CANCEL_COLLECTION: 0,
};



class GoodsDetail extends React.Component<GoodsDetailProps, any> {
    [x: string]: any;
    listener!: EmitterSubscription;
    constructor(props: GoodsDetailProps) {
        super(props);
        this.id = props.route.params?.id
        this.state = {
            buyType: 0,
            showSpec: false,
            showCoupon: false,
            currentIndex: 0,
            bannerList: [],
            goodsDetail: {},
            comment: {},
            goodsLike: [],
            couponList: [],
            checkedGoods: {},
            activity: {},
            timeData: {},
            preImages: [],
            showImagePreview: false,
            showShare: false,
            sharePoster: '',
            showPoster: false,
            isCollection: CollectType.CANCEL_COLLECTION,
            preImgIndex: 0,
            // 动画变量
            showAnim: false,
            scaleAction: new Animated.Value(1.5),
            fadeInAction: new Animated.Value(0),
            translateXAction: new Animated.Value(0),
            translateYAction: new Animated.Value(0),
            rotateAction: new Animated.Value(0),
            // 曲线速度
            lineSpeed: 300,
            cartLeft: 0,
            cartTop: 0
        }
    }
 
    UNSAFE_componentWillMount() {
        this._getGoodsDetails()
        if (!this.props.isLogin) return
        this._getCoupons()
    }

    componentWillUnmount() {

    }

    _getGoodsDetails() {
        getGoodsDetail({
            id: this.id
        }, true).then((res: any) => {
            if (isSuccess(res)) {
                const { goods_image, comment, activity, like, } = res.data
                let time = activity.info ? (activity.info.end_time * 1000 - Date.now()) : 0
                this.setState({
                    bannerList: goods_image,
                    goodsDetail: res.data,
                    isCollection: res.data.is_collect,
                    goodsLike: like,
                    comment,
                    activity,
                    remainTime: time,
                })
            } else {
                setTimeout(() => {
                    goBack()
                }, 500)
            }
        })
    }
    _getCoupons() {
        getGoodsCoupon({
            id: this.id
        }).then((res: any) => {
            if (isSuccess(res)) {
                this.setState({
                    couponList: res.data
                })
            }
        })
    }

    $handleCollectGoods() {
        if (!this.props.isLogin) return navigate('Login')
        let { isCollection } = this.state
        if (isCollection == CollectType.COLLECTION) {
            isCollection = CollectType.CANCEL_COLLECTION
        } else {
            isCollection = CollectType.COLLECTION
        }
        handleCollectGoods({ is_collect: isCollection, goods_id: this.id }).then((res: any) => {
            if (isSuccess(res)) {
                if(isCollection == 1) {
                    Toast.info("收藏成功")
                }else {
                    Toast.info("取消收藏")
                }
                this.setState({
                    isCollection: isCollection
                })
            }
        })
    }
    _onLoadMore(pageNum = 1, callback: any) {
        this._getData(pageNum, callback);
    }
    _getData(pageNum: number, callback: any) {
        getGoodsCoupon({
            id: this.id
        }).then((res: any) => {
            callback(res.data, { haveNext: false })
        }).catch(e => {
        })
    }
    _onRefresh(callback: any) {
        this._getData(1, callback);
    }
    swiperList() {
        const { bannerList, currentIndex } = this.state
        const bannerView = ({ item, index }: any) => {
            return (
                <PressButton activeOpacity={1} key={index} onPress={() => {
                    this.setState({
                        preImages: bannerList,
                        showImagePreview: true,
                        preImgIndex: currentIndex
                    })
                }} >
                    <CustomImage source={{ uri: item.uri }} width={ScreenWidth} height={ScreenWidth} />
                </PressButton>
            )
        }
        return (
            <View style={Style.wrapperContain}>
                <Carousel
                    data={bannerList}
                    loop={true}
                    renderItem={bannerView}
                    sliderWidth={ScreenWidth}
                    layout="default"
                    autoplay={true}
                    inactiveSlideScale={1}
                    itemWidth={ScreenWidth}
                    onSnapToItem={(index) => { this.setState({ currentIndex: index }) }}
                />
                <View style={Style.wrapperDot}>
                    <Text>{currentIndex + 1} / {bannerList.length}</Text>
                </View>
            </View>
        )
    }

    goodsOrdinary() {
        const { goodsDetail: { name, min_price, market_price, }, checkedGoods } = this.state
        return (
            <View style={{ paddingTop: 10 }}>
                <View style={rowBetween}>
                    <View style={[row, { marginLeft: 12 }]}>
                        <PriceFormate signSize={16} prevSize={23} nextSize={16} color={Theme.brand_primary} price={checkedGoods.price || min_price} />
                        <PriceFormate style={{ color: Theme.color_text_muted, fontSize: Theme.font_size_md, textDecorationLine: 'line-through', marginLeft: Theme.h_spacing_md }} price={checkedGoods.market_price || market_price} />
                    </View>
                </View>
                <View style={{ marginHorizontal: 12, marginTop: 10 }}>
                    <Text style={{ fontSize: Theme.font_size_lg, fontWeight: 'bold', lineHeight: 24 }}>{name}</Text>
                </View>
            </View>
        )
    }
    goodsInfo() {
        const { goodsDetail: { sales_sum, stock, click_count }, checkedGoods } = this.state
        return (
            <View style={Style.goodsInfo}>
                {this.goodsOrdinary()}
                <View style={[rowBetween, { marginHorizontal: 12, marginTop: Theme.h_spacing_sm }]}>
                    {stock !== true ? <Text style={{ fontSize: Theme.font_size_xs, color: '#A7A7A7', }}>库存：{checkedGoods.stock || stock}件</Text> : null}
                    <Text style={{ fontSize: Theme.font_size_xs, color: '#A7A7A7', }}>销量：{sales_sum}件</Text>
                    <Text style={{ fontSize: Theme.font_size_xs, color: '#A7A7A7', }}>浏览量：{click_count}次</Text>
                </View>
            </View>
        )
    }

    goodsComment() {
        const { comment: { goods_rate, avatar, nickname, create_time, comment, spec_value_str } } = this.state
        
        return (
            <View style={Style.commentContain}>
                <PressButton style={{ ...Style.commentHeader, ...rowBetween }} onPress={() => {
                    navigate('GoodsAllEvaluation', {
                        id: this.id
                    })
                }}>
                    <View style={row}>
                        <Text style={{ fontSize: Theme.font_size_md }}>用户评价 </Text>
                        <Text style={{ color: Theme.brand_primary, fontSize: Theme.font_size_sm }}>好评率{goods_rate || "0%"}</Text>
                    </View>
                    <View style={row}>
                        <Text style={{ color: Theme.color_text_secondary, fontSize: Theme.font_size_xs }}>查看全部</Text>
                        <Image source={arrow_right} style={[getImageSize(14), { marginLeft: 5 }]} />
                    </View>
                </PressButton>
                {goods_rate ? (
                      <View style={Style.userCommentContainer}>
                      <View style={row}>
                          <Image source={{ uri: avatar }} style={{ ...getImageSize(35), borderRadius: 35 }} />
                          <Text style={{ fontSize: Theme.font_size_md, marginLeft: Theme.h_spacing_md }}>{nickname}</Text>
                      </View>
                      <View style={[row, { marginTop: 5, marginBottom: 5 }]}>
                          <Text style={{ marginRight: 10, color: Theme.color_text_muted, fontSize: Theme.font_size_xs }}>{create_time}</Text>
                          <Text style={{ color: Theme.color_text_muted, fontSize: Theme.font_size_xs, }}>{spec_value_str}</Text>
                      </View>
                      <Text>{comment}</Text>
                  </View>
                ): (
                    <View style={Style.userCommentContainer}>
                      <Text style={{textAlign: "center", color: Theme.color_text_muted}}>暂无评价</Text>
                  </View>
                )}
              
            </View>
        )
    }
   
    goodsItem(item: any) {
        const { navigation } = this.props
        return (
            <PressButton style={{ ...Style.goodsItem, }} onPress={() => navigation.push('GoodsDetail', { id: item.id })} >
                <CustomImage source={{ uri: item.image }} width={120} height={120} radius={4} />
                <Text numberOfLines={1} style={{ fontSize: Theme.font_size_sm, marginVertical: Theme.h_spacing_sm }} >{item.name}</Text>
                <View style={[row, { alignSelf: 'flex-start' }]}>
                    <PriceFormate color={Theme.brand_primary} price={item.min_price} signSize={11} prevSize={14} nextSize={11} />
                    <PriceFormate style={{ textDecorationLine: 'line-through', fontSize: Theme.font_size_xxs, marginLeft: Theme.h_spacing_sm }} color={Theme.color_text_muted} price={item.market_price} />
                </View>
            </PressButton>
        )
    }
    goodsContent() {
        const { goodsDetail: { content } } = this.state
        return (
            <View style={Style.detail}>
                <View style={[Style.detailTitle, rowCenter]}>
                    <Text style={{ fontSize: Theme.font_size_lg, }}>商品详情</Text>
                </View>
                {content ? <View style={{ paddingHorizontal: 10 }}>
                    <HTML html={content}
                        imagesMaxWidth={ScreenWidth - 20}
                        baseFontStyle={{ fontSize: 14 }} />
                </View> : null}
            </View>
        )
    }
    footerView() {
        const {cartNum} = this.props
        const { activity } = this.state;
        // 映射旋转
        const rotateMap = this.state.rotateAction.interpolate({
            inputRange: [0, 1],
            outputRange: ['0deg', '360deg']
        })
        return (
            <View style={[Style.footer, row]} onLayout={({nativeEvent: { layout: {x, y, width, height}}}) => {
                this.setState({
                    cartTop: y
                })
            }}>
                <PressButton style={{ ...columnCenter, ...Style.footerIcon }}
                    onPress={() => {
                        navigate('ContactService')
                    }}>
                    <Image source={icon_contact} style={getImageSize(22)} />
                    <Text style={{ fontSize: Theme.font_size_xxs, color: Theme.color_text_secondary }}>客服</Text>
                </PressButton>
                <PressButton
                    style={{ ...columnCenter, ...Style.footerIcon }}
                    onPress={() => {
                        this.$handleCollectGoods()
                    }}>
                    <Image source={this.state.isCollection ? icon_collection_s : icon_collection} style={getImageSize(22)} />
                    <Text style={{ fontSize: Theme.font_size_xxs, color: Theme.color_text_secondary }}>收藏</Text>
                </PressButton>
                <View style={Style.footerIcon} onLayout={({nativeEvent: { layout: {x, y, width, height}}}) => {
                    this.setState({
                        cartLeft: x,
                    })
                }}>
                    <PressButton style={{ ...columnCenter, ...Style.footerIcon }} onPress={() => navigate('ShopCart')}>
                        <Animated.View style={{
                            transform: [{ rotate: rotateMap }]
                        }}>
                            <Image source={icon_cart} style={getImageSize(22)} />
                        </Animated.View>
                        <Text style={{ fontSize: Theme.font_size_xxs, color: Theme.color_text_secondary }}>购物车</Text>
                        {cartNum ? <View style={{ minWidth: 15, height: 15, backgroundColor: Theme.brand_primary, borderRadius: 50, position: "absolute", left: 25, top: 3.5, ...rowCenter}}>
                            <Text style={{color: Theme.fill_base, textAlign: "center", fontSize: Theme.font_size_xxs}}>{cartNum}</Text>
                        </View> : null}
                    </PressButton>
                </View>
                {activity.type ? null : <PressButton
                    size="md"
                    style={Style.yellowBtn}
                    textStyle={{ color: Theme.fill_base }}
                    onPress={() => {
                        this.onShowSpec()
                        this.setState({
                            buyType: 1
                        })
                    }}
                >加入购物车</PressButton>}
                <PressButton
                    size="md"
                    style={Style.redBtn}
                    textStyle={{ color: Theme.fill_base }}
                    onPress={() => {
                        this.onShowSpec()
                        this.setState({
                            buyType: 2
                        })
                    }}
                >立即购买</PressButton>
            </View>
        )
    }
    onShowSpec() {
        if (!this.props.isLogin) return navigate('Login')
        this.setState({
            showSpec: !this.state.showSpec
        })
    }
    closeCoupon() {
        if (!this.props.isLogin) return navigate('Login')
        this.setState({
            showCoupon: !this.state.showCoupon
        })
    }
    coupons() {
        const { couponList } = this.state
        const couponListView = couponList.map((item: any, index: number) => {
            if (index >= 2) return null
            return (
                <View style={{ ...row, overflow: 'hidden', marginRight: 10, }} key={item.id}>
                    <View style={{ ...Style.couponItemCircle, left: -6 }} />
                    <View style={Style.couponItem}>
                        <Text style={{ fontSize: Theme.font_size_xs, color: Theme.fill_base, lineHeight: 20 }}>{item.use_condition}</Text>
                    </View>
                    <View style={{ ...Style.couponItemCircle, right: -6, }} />
                </View>
            )
        })
        return (
            couponList.length ? <View style={{ padding: 12, backgroundColor: Theme.fill_base, marginTop: 10, flexDirection: 'row' }}>
                <Text style={{ color: Theme.color_text_muted, ...Style.infoLabel }}>优惠</Text>
                <View style={{ flex: 1 }}>
                   <PressButton style={{ ...row, }} onPress={() => this.closeCoupon()}>
                        <View style={{ flex: 1, ...row }}>
                            <Tag text="领券" style={{ marginRight: 10 }} />
                            {couponListView}
                        </View>
                        <Image source={arrow_right} style={{ ...getImageSize(15), marginLeft: Theme.h_spacing_md }} />
                    </PressButton> 
                    {/* <View style={{ ...row }}>
                        <Tag text="积分" style={{ marginRight: 10 }} />
                        <Text>订单完成可获得72积分</Text>
                    </View> */}
                </View>
            </View>: null
        )
    }
    couponsPopup() {
        return (
            <Popup isVisible={this.state.showCoupon} closeable position="bottom" round onClose={() => this.closeCoupon()}>
                <Text style={{ padding: 15, fontSize: Theme.font_size_md, fontWeight: 'bold' }}>领券</Text>
                <View style={{ height: 350, backgroundColor: Theme.fill_body }}>
                    <LFlatList
                        showsHorizontalScrollIndicator={false}
                        onLoadMore={this._onLoadMore.bind(this)}
                        onRefresh={this._onRefresh.bind(this)}
                        noMoreFooterView={() => <View />}
                        emptyView={() => <EmptyView style={{ paddingTop: 50 }} source={coupon_null} text="暂无优惠券～" />}
                        ListHeaderComponent={() => <View style={{ height: 10, backgroundColor: Theme.fill_body }} />}
                        ItemSeparatorComponent={() => <View style={{ height: 10, backgroundColor: Theme.fill_body }} />}
                        loadMoreable={false}
                        refreshable={true}
                        keyExtractor={(item: any, index: any) => index}
                        renderItem={({ item, index }) => <CouponItem btnType='receive' data={item} index={index} onRefresh={() => {
                            this.lFlatList?._onRefresh()
                            this.closeCoupon()
                        }} />}
                    />
                </View>
            </Popup>
        )
    }

    animateEnd() {
        this.setState({showAnim: false})
        Animated.sequence([
            Animated.timing(this.state.rotateAction, {
                // 30 度弧度
                // toValue: Math.PI / 12,
                toValue: 1 / 12,
                duration: 100,
                useNativeDriver: true,
                easing: Easing.ease
            }),
            Animated.timing(this.state.rotateAction, {
                // toValue: -Math.PI / 12,
                toValue: -1 / 12,
                duration: 100,
                useNativeDriver: true,
                easing: Easing.ease
            }),
            Animated.timing(this.state.rotateAction, {
                // 15度的弧度
                // toValue: Math.PI / 24,
                toValue: 1 / 24,
                duration: 100,
                useNativeDriver: true,
                easing: Easing.ease
            }),
            Animated.timing(this.state.rotateAction, {
                // toValue: -Math.PI / 24,
                toValue: -1 / 24,
                duration: 100,
                useNativeDriver: true,
                easing: Easing.ease
            }),
            Animated.timing(this.state.rotateAction, {
                toValue: 0,
                duration: 100,
                useNativeDriver: true,
                easing: Easing.ease
            }),
        ]).start(() => postEvent('GET_CART_NUM'))

    }
    render() {
        const { showSpec, goodsDetail, checkedGoods, buyType, preImages, showImagePreview, preImgIndex, goodsLike, cartLeft,  cartTop} = this.state

        return (
            <SafeAreaView style={[contain, { position: 'relative' }]}>
                <ScrollView showsVerticalScrollIndicator={false}>
                    {goodsDetail.name ? <View>
                        {this.swiperList()}
                        {this.goodsInfo()}
                        {this.coupons()}
                        <PressButton style={Style.rowInfo}
                            onPress={() => {
                                this.onShowSpec()
                                this.setState({
                                    buyType: 0
                                })
                            }}>
                            <Text style={Style.infoLabel}>已选</Text>
                            <Text style={{ flex: 1 }}>{checkedGoods.spec_value_str}</Text>
                            <Image source={arrow_right} style={{ ...getImageSize(15), marginLeft: Theme.h_spacing_md }} />
                        </PressButton>
                        {this.goodsComment()}
                        {<GoodsLike lists={goodsLike} />}
                        {this.goodsContent()}
                    </View> : null}
                    <GoodsSpec
                        show={showSpec}
                        showAdd={buyType != 2}
                        showBuy={buyType != 1}
                        goods={goodsDetail}
                        onClose={() => this.onShowSpec()}
                        onAdd={() => this.setState({showAnim: true})}
                        onChange={(val) => this.setState({ checkedGoods: val })}
                    />
                    <ImagePreview show={showImagePreview} imageUrls={preImages} index={preImgIndex} onClose={() => this.setState({ showImagePreview: false })} />
                </ScrollView>
                {
                    this.state.showAnim && <GoodsBall source={{ uri: goodsDetail.image }} toX={cartLeft} toY={cartTop} onFinish={() =>  this.animateEnd()} />
                }
                {this.couponsPopup()}
                {goodsDetail.name ? this.footerView() : null}
            </SafeAreaView>
        )
    }
}


const Style = StyleSheet.create({
    wrapperContain: {
        height: ScreenWidth,
        width: ScreenWidth
    },
    wrapperItem: {
        flex: 1,
    },
    wrapperDot: {
        position: 'absolute',
        right: 20,
        bottom: 20,
        borderRadius: Theme.radius_circel,
        backgroundColor: 'white',
        paddingHorizontal: 5
    },
    goodsInfo: {
        backgroundColor: Theme.fill_base,
        paddingBottom: 10
    },
    rowInfo: {
        backgroundColor: Theme.fill_base,
        paddingHorizontal: 12,
        paddingVertical: 15,
        marginTop: Theme.v_spacing_md,
        ...rowBetween
    },
    infoLabel: {
        width: 60
    },
    couponItem: {
        paddingHorizontal: 9,
        borderRadius: Theme.radius_sm,
        backgroundColor: Theme.brand_primary
    },
    couponItemCircle: {
        position: 'absolute',
        width: 10,
        height: 10,
        borderRadius: 10,
        borderColor: Theme.brand_primary,
        borderWidth: 0.5,
        backgroundColor: Theme.fill_base,
        zIndex: 10
    },
    commentContain: {
        backgroundColor: Theme.fill_base,
        paddingVertical: 15,
        marginTop: 10
    },
    commentHeader: {
        paddingBottom: 15,
        paddingHorizontal: 12,
        borderBottomColor: Theme.border_color_base,
        borderBottomWidth: Theme.border_width_sm
    },
    userCommentContainer: {
        marginTop: 10,
        marginHorizontal: 12
    },
    storeContainer: {
        marginTop: 10,
        paddingVertical: 10,
        backgroundColor: Theme.fill_base
    },
    storeHeader: {
        paddingBottom: 10,
        paddingHorizontal: 12,
        borderBottomColor: Theme.border_color_base,
        borderBottomWidth: Theme.border_width_sm
    },
    storeInfo: {
        marginLeft: 10
    },
    primaryBtn: {
        borderColor: Theme.brand_primary,
        borderWidth: Theme.border_width_md,
        borderRadius: Theme.radius_circel,
        paddingHorizontal: 14,
        paddingVertical: 3
    },
    goodsItem: {
        width: 120,
    },
    detail: {
        backgroundColor: Theme.fill_base,
        marginTop: 10
    },
    detailTitle: {
        paddingVertical: 10
    },
    footer: {
        backgroundColor: Theme.fill_base,
        paddingRight: 12
    },
    footerIcon: {
        width: 50,
        height: 50
    },
    yellowBtn: {
        borderRadius: Theme.radius_circel,
        backgroundColor: '#FFA630',
        flex: 1,
        paddingVertical: 7
    },
    redBtn: {
        borderRadius: Theme.radius_circel,
        backgroundColor: Theme.brand_primary,
        flex: 1,
        paddingVertical: 7,
        marginLeft: 7
    },
    timeItem: {
        width: 20,
        height: 20,
        borderRadius: 3,
        backgroundColor: Theme.brand_primary,
        ...rowCenter
    },
    timeText: {
        fontSize: Theme.font_size_xs,
        color: Theme.fill_base
    },
    goodsBall: {
        position: 'absolute',
        top: '2%',
        left: '50%',
        width: 300,
        height: 300,
        borderRadius: 1000,
        marginLeft: -150,
        overflow: "hidden"
    }
})
let mapStateToProps = (state: RootState) => {
    return {
        isLogin: state.userStore.isLogin,
        cartNum: state.userStore.cartNum
    }
}
export default connect(mapStateToProps)(GoodsDetail)