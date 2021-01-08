import React from 'react';
import { StyleSheet, Text, View, Image, Animated, RefreshControl, FlatList } from 'react-native';
import { Dispatch } from 'redux';
import { connect } from 'react-redux'
import Theme from '../../constraint/Theme'
import { contain, row, getImageSize, columnCenter, rowBetween, twoGoodsWrap, rowCenter } from '../../constraint/Style'
import { bg_hometop, icon_toutiao, arrow_right, arrow_right_w, icon_new_recommend, icon_like } from '../../constraint/Image'
import { showLoading } from '../../store/reducers/cacheReducer';
import LFlatList from '../../components/main/LFlatList';
import Swiper from 'react-native-swiper';
import { ScreenProps, RootState } from '../../typing'
import { StatusBarHeight, ScreenWidth } from '../../utils/app'
import PressButton from '../../components/main/PressButton';
import { getBestList, getHome } from '../../api/store'
import Search from '../../components/main/Search';
import CustomImage from '../../components/main/CustomImage';
import GoodsItem from '../../components/bussiness/GoodsItem';
import StickyHeader from '../../components/main/StickyHeader';
import { isSuccess } from '../../utils/request';
import { navigate } from '../../utils/navigation';
import LoadingView from '../../components/main/LoadingView';
import AdSwiper from '../../components/bussiness/AdSwiper';
import PriceFormate from '../../components/bussiness/PriceFormate';
import Carousel from 'react-native-snap-carousel';
import { getCouponPopList, getMenu } from '../../api/app';
import { getUrlparams } from '../../utils/util';

type HomeProps = ScreenProps<'Home'> & ReturnType<typeof mapStateToProps> & ReturnType<typeof mapDispatchToProps>

let colors = ["#FE41B7","#FA444D","#BD5AFF", "#FB831C", "#2DC1B9"]

class Home extends React.Component<HomeProps, any> {
    [x: string]: any;
    lFlatList!: LFlatList | null;
    adSwiper!: AdSwiper | null;
    constructor(props: HomeProps) {
        super(props)
        this.state = {
            currentIndex:0,
            refreshing: false,
            scrollY: new Animated.Value(0),
            coupon: [],
            news: [],
            activityArea: [],
            remainTime: 0,
            hotGoods: [],
            logo: '',
            newGoods: [],
            navList: [],
            isLoading: true,
            showCoupon: false,
            couponPopList: []
        };
    }

    handleArray(data: any[], array:any[] = [] , optNum = 10): any[] {
        if(data.length <= optNum) {
            data.length > 0 && array.push(data)
            return array;
        }
        array.push(data.splice(0,optNum))
        return this.handleArray(data, array,optNum)
    }
    $getMenu() {
        getMenu({type: 1}).then((res: any) => {
            if(isSuccess(res)) {
                let data =  JSON.parse(JSON.stringify(res.data)) 
                const arr:any[] = this.handleArray(data)
                this.setState({
                    navList: arr
                })
            }
        })
    }

    $getCouponPopList() {
        getCouponPopList().then((res: any) => {
            if(isSuccess(res)) {
                this.setState({
                    couponPopList: res.data,
                    showCoupon: res.data.length > 0 ? true : false
                })
            }
        })
    }

    UNSAFE_componentWillMount() {
        const {isLogin} = this.props
        this.$getMenu()
        this._getHome()
        if(isLogin) {
            this.$getCouponPopList()
        }
    }
    _getHome() {
        getHome().then((res: any) => {
            if (isSuccess(res)) {
                const { coupon, host_goods, shop_logo, news, new_goods, activity_area } = res.data
                let remainTime
                this.setState({
                    coupon,
                    news,
                    remainTime,
                    hotGoods: host_goods,
                    logo: shop_logo,
                    newGoods: new_goods,
                    isLoading: false,
                    activityArea: activity_area
                })
            }

        })
    }
    _onLoadMore(pageNum = 1, callback: any) {
        this._getData(pageNum, callback);
    }
    _getData(pageNum: number, callback: any) {
        getBestList({ page_no: pageNum })
            .then((res: any) => {
                if (isSuccess(res)) {
                    callback(res.data.list, { haveNext: Boolean(res.data.more) })
                    this.setState({
                        refreshing: false
                    })
                }
            }).catch(e => {
            })
    }
    _onRefresh(callback: any) {
        this._getData(1, callback);
    }
    headerView() {
        const { logo } = this.state
        const logoImg = logo ? <CustomImage source={{ uri: logo }} showLoading={false} height={25} autoSize="width" /> : null
        return (
            <View style={{ zIndex: 99 }}>
                <StickyHeader
                    stickyScrollY={this.state.scrollY}
                >
                    <View style={[styles.headerTitle, { paddingTop: StatusBarHeight }]}>
                        <View style={[row, {
                            height: 46,
                            paddingHorizontal: Theme.h_spacing_md
                        }]}>
                            {logoImg}
                        </View>
                    </View>
                </StickyHeader>
                <Image source={bg_hometop} style={{ width: ScreenWidth, height: 183 }} />
                <StickyHeader
                    style={{ marginTop: -183, }}
                    stickyHeaderY={46} // 滑动到多少悬浮
                    stickyScrollY={this.state.scrollY}
                >
                    <Search editable={false} link={true} bgColor={Theme.brand_primary} onPress={() => navigate('GoodsSearch')} />
                </StickyHeader>
                {this.mainView()}
            </View>
        )
    }
    mainView() {
        const { coupon } = this.state
        return (
            <View>
                <AdSwiper pid={3} ref={(as) => this.adSwiper = as} />
                {this.entryView()}
                {this.newsView()}
                {this.newGoods()}
            </View>
        )
    }
    entryView() {
        const {navList, currentIndex} = this.state;
        if(!navList.length) return <View style={{height: 10}}/>
        return (
            <View style={{backgroundColor: Theme.fill_base, marginTop: 10, alignItems: "center"}}>
                <Carousel
                    data={navList}
                    renderItem={this.navItem}
                    sliderWidth={ScreenWidth}
                    layout="default"
                    itemWidth={ScreenWidth}
                    onSnapToItem={(index) => { this.setState({ currentIndex: index }) }}
                />
               {navList.length > 1 ? <View style={{ position: 'absolute', bottom: 5, flexDirection: 'row' }}>
                    {
                        navList.map((item: any, index: number) => (
                            <View
                            key={index} 
                            style={[{ width: 5, height: 3, backgroundColor: 'rgba(255, 44, 60, 0.4)', marginHorizontal: 3, borderRadius: 5, },
                                 currentIndex == index ? {width: 10, backgroundColor: Theme.brand_primary} : {}]}></View>
                        ))
                    }
                </View> : null}
            </View>
        )
    }

    navItem({ item: items, index }: any) {
        return (
            <View style={[row, styles.entryContainer]}>
                {
                    items.map((item: any, index: number) => (
                        <PressButton style={{ ...columnCenter, ...styles.entryItem }} key={index}
                            onPress={() => {
                                // navigate(item.link, item.params)
                                switch(item.link_type) {
                                    case 1:
                                    case 3:
                                        let url = item.link.split('?');
                                        console.log(getUrlparams(item.link), item)
                                        navigate(url[0], getUrlparams(item.link))
                                        break;
                                    case 2:
                                        // webview
                                        navigate("MyWebView", {
                                            url: item.link
                                        })
                                        break;
                                }
                            }}
                        >
                            <Image style={getImageSize(41)} source={{uri: item.image}} />
                            <Text style={styles.navName}>{item.name}</Text>
                        </PressButton>
                    ))
                }
            </View>
        )
    }

    newsView() {
        const { news } = this.state
        const newsList = news.map((item: any) => (
            <PressButton style={{ height: '100%', ...row }} key={item.id} onPress={() => navigate('NewsList', { type: 0 })}>
                <Text style={{ flex: 1 }} numberOfLines={1}>{item.title}</Text>
                <Image source={arrow_right} style={[getImageSize(15), { marginLeft: Theme.h_spacing_md }]} />
            </PressButton>
        ))
        if (!newsList.length) return null
        return (
            <View style={[styles.newsContainer, row]}>
                <Image source={icon_toutiao} style={{ width: 57, height: 17 }} />
                <View style={{ height: 14, width: 0.5, backgroundColor: Theme.border_color_base, marginHorizontal: 10 }}></View>
                <View style={{ flex: 1 }}>
                    <Swiper
                        key={newsList.length}
                        height={38}
                        horizontal={false}
                        loop={true}
                        autoplay
                        showsPagination={false}
                        autoplayDirection={false}
                    >
                        {newsList}
                    </Swiper>
                </View>
            </View>
        )
    }

    goodsHeader(type: 'new' | 'best') {
        return (
            <View style={{ ...rowCenter, height: 50 }}>
                <Text style={{ height: 0.5, width: 29, backgroundColor: '#ccc' }} />
                <View style={{ marginHorizontal: 10, ...row }}>
                    <Image source={type == 'new' ? icon_new_recommend : icon_like} style={getImageSize(19)} />
                    <Text style={{ fontSize: 18, fontWeight: 'bold', marginLeft: 5 }}>{type == 'new' ? '新品推荐' : '好物优选'}</Text>
                </View>
                <Text style={{ height: 0.5, width: 29, backgroundColor: '#ccc' }} />
            </View>
        )
    }

    newGoods() {
        const { newGoods } = this.state
        if (!newGoods.length) return null
        return (
            <FlatList
                data={newGoods}
                ListHeaderComponent={() => this.goodsHeader('new')}
                ItemSeparatorComponent={() => <View style={{ height: 10 }} />}
                keyExtractor={(item, index) => item.id}
                renderItem={({ item, index }) => {
                    return (
                        <PressButton style={{ ...row, marginHorizontal: 10, backgroundColor: Theme.fill_base, borderRadius: 5 }} onPress={() => navigate('GoodsDetail', { id: item.id })}>
                            <CustomImage source={{ uri: item.image }} radius={5} width={120} height={120} />
                            <View style={{ flex: 1, paddingHorizontal: 10 }}>
                                <Text numberOfLines={2} style={{ lineHeight: 18 }}>{item.name}</Text>
                                <View style={{ ...rowBetween, marginVertical: 10 }}>
                                    <Text style={{ color: Theme.color_text_muted, fontSize: Theme.font_size_xxs, textDecorationLine: 'line-through' }}>
                                        原价<PriceFormate price={item.market_price} />
                                    </Text>
                                    <Text style={{ color: Theme.color_text_muted, fontSize: Theme.font_size_xxs, }}>{item.sales_sum}人购买</Text>
                                </View>
                                <View style={{ ...rowBetween }}>
                                    <PriceFormate price={item.price} color={Theme.brand_primary} prevSize={19} nextSize={13} signSize={13} />
                                    <PressButton disabled style={{ paddingHorizontal: 12 }} round type="primary" size="sm">立即抢购</PressButton>
                                </View>
                            </View>
                        </PressButton>
                    )
                }}
            />
        )
    }
    onRefresh() {
        this.setState({
            refreshing: true
        })
        this.adSwiper?._getBanner();
        this._getHome()
        this.lFlatList?._onRefresh()
    }
    _contentViewScroll(event: any) {
        const contentHeight = event.nativeEvent.contentSize.height;
        const scrollViewHeight = event.nativeEvent.layoutMeasurement.height;
        const scrollOffset = event.nativeEvent.contentOffset.y;
        // 是否滑动到底部
        const isEndReached = scrollOffset + scrollViewHeight >= contentHeight - 10;
        // 内容高度是否大于列表高度
        const isContentFillPage = contentHeight >= scrollViewHeight;
        if (isContentFillPage && isEndReached) {
            this.lFlatList?._toEnd()
            // 已滑动scrollview底部，触发加载分页请求
        }

    }

    // 活动模块
    specialArea() {
        const { activityArea } = this.state;
        if (activityArea.length <= 0) {
            return null;
        }
        
        return (
            <View style={[row, { marginTop: 10, flexWrap: "wrap", alignItems: "stretch" }]}>
                {
                    activityArea.map((item: any, index: number) =>{
                        const styleShow = (index + 1) % 3 == 0 ? { marginRight: 0 } : { marginRight: 2 }
                        return (
                            <PressButton key={index} onPress={() => {
                                navigate("ActivityDetail", {
                                    id: item.id,
                                    title: item.name,
                                    name: item.title
                                })
                            }}
                            style={{
                                backgroundColor: Theme.fill_base, 
                                paddingTop: 10, 
                                paddingHorizontal: 10, 
                                paddingBottom: 5, 
                                borderRadius: 3, 
                                width: (ScreenWidth - 24) / 3, 
                                marginBottom: 2, 
                                alignItems: "center",
                                ...styleShow
                            }}>
                                <Text style={{ fontSize: Theme.font_size_lg, fontWeight: "bold" }}>{item.name}</Text>
                                <Text numberOfLines={2} style={{ marginVertical: 5, fontSize: Theme.font_size_xs, color: colors[index%colors.length] }}>{item.title}</Text>
                                <CustomImage source={{ uri: item.image }} width={65} height={65} />
                            </PressButton>
                        )}
                    )
                }
            </View>
        )
    }
    // end


    render() {
        const { refreshing, isLoading } = this.state
        if (isLoading) return <LoadingView />
        return (
            <Animated.ScrollView
                style={contain}
                showsVerticalScrollIndicator={false}
                onScroll={Animated.event([{
                    nativeEvent: { contentOffset: { y: this.state.scrollY, } }
                }], { useNativeDriver: true })}
                // scrollEventThrottle={1}
                refreshControl={<RefreshControl refreshing={refreshing} onRefresh={() => this.onRefresh()} />}
                onMomentumScrollEnd={(e) => this._contentViewScroll(e)}
                scrollsToTop={true}
            >
                {this.headerView()}
                <LFlatList
                    ref={(lf) => { this.lFlatList = lf }}
                    containerStyle={{ zIndex: 10 }}
                    showsHorizontalScrollIndicator={false}
                    ListHeaderComponent={() => this.goodsHeader('best')}
                    onLoadMore={this._onLoadMore.bind(this)}
                    onRefresh={this._onRefresh.bind(this)}
                    ItemSeparatorComponent={() => {
                        return (
                            <View style={{ height: 10, backgroundColor: Theme.fill_body }} />
                        )
                    }}
                    columnWrapperStyle={twoGoodsWrap}
                    numColumns={2}
                    loadMoreable={true}
                    refreshable={false}
                    renderItem={({ item, index }) => <GoodsItem data={item} />}
                />
            </Animated.ScrollView>
        );
    }
};

const styles = StyleSheet.create({
    headerTitle: {
        backgroundColor: Theme.brand_primary,
    },
    logo: {
        width: 66,
        height: 30
    },
    titleText: {
        color: Theme.color_text_base_inverse,
        marginLeft: Theme.h_spacing_sm,
        paddingLeft: Theme.h_spacing_md,
        borderColor: Theme.border_color_base,
        borderLeftWidth: 1,
        fontSize: Theme.font_size_lg
    },
    wrapper: {
        backgroundColor: '#fff',
        height: 142,
        marginHorizontal: Theme.h_spacing_md
    },
    containerHorizontal: {
        flexGrow: 1,
        alignItems: 'center',
        justifyContent: 'center',
        height: 150,
    },
    entryContainer: {
        backgroundColor: Theme.fill_base,
        paddingVertical: 15,
        flexWrap: 'wrap',
    },
    entryItem: {
        width: '20%',
        marginTop: 16
    },
    navName: {
        marginTop: 7,
    },
    newsContainer: {
        backgroundColor: 'white',
        paddingHorizontal: 15,
        height: 38
    },
    timeItem: {
        width: 18,
        height: 18,
        borderRadius: 3,
        backgroundColor: Theme.fill_base,
        ...rowCenter
    },
    timeText: {
        fontSize: Theme.font_size_xs,
        color: Theme.brand_primary
    }
});

let mapStateToProps = (state: RootState) => {
    return {
        isShow: state.cacheStore.showLoading.isShow,
        isLogin: state.userStore.isLogin
    }
}
let mapDispatchToProps = (dispatch: Dispatch) => ({
    showLoading: () => dispatch(showLoading(true)),
})

export default connect(mapStateToProps)(Home);