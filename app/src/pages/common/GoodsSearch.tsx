import React from 'react'
import { ScreenProps, RootState } from '../../typing'
import { SafeAreaView, View, StyleSheet, Text, Animated, Image, Keyboard } from 'react-native'
import { contain, row, rowCenter, twoGoodsWrap, rowBetween, getImageSize } from '../../constraint/Style'
import Search from '../../components/main/Search'
import Theme from '../../constraint/Theme'
import Triangle from '../../components/main/Triangle'
import PressButton from '../../components/main/PressButton'
import StickyHeader from '../../components/main/StickyHeader'
import LFlatList from '../../components/main/LFlatList'
import { goods_null, icon_one, icon_double } from '../../constraint/Image'
import GoodsItem from '../../components/bussiness/GoodsItem'
import { getGoodsSearch, getSearchpage, clearSearch } from '../../api/store'
import { isSuccess } from '../../utils/request'
import { trottle } from '../../utils/util'
import { TextInput } from 'react-native-gesture-handler'
import EmptyView from '../../components/bussiness/EmptyView'
import { connect } from 'react-redux'
//降序
const DESC = 'desc'
//升序
const ASC = 'asc'
type GoodsSearchProps = ScreenProps<'GoodsSearch'> &  ReturnType<typeof mapStateToProps> 
class GoodsSearch extends React.Component<GoodsSearchProps, any> {
    lFlatList!: LFlatList | null
    [x: string]: any
    constructor(props: GoodsSearchProps) {
        super(props)
        this.id = props.route.params?.id
        let isFocus = this.id ? false : true
        this.type = props.route.params?.type
        this.state = {
            scrollY: new Animated.Value(0),
            keyword: '',
            price: '',
            sales: '',
            isFocus: isFocus,
            hotList: [],
            historyList: [],
            type: 'double'
        }
    }
    UNSAFE_componentWillUpdate(nextProps: any, nextState: any) {
        if (nextState.isFocus == true) {
            this._getSearchpage()
        }
    }
    UNSAFE_componentWillMount() {
        this._getSearchpage()
    }
    _onLoadMore(pageNum = 1, callback: any) {
        this._getData(pageNum, callback);
    }
    _getData(pageNum: number, callback: any) {
        const { keyword, price, sales } = this.state
        getGoodsSearch({
            page_no: pageNum,
            category_id: this.type == 1 ? this.id : '',
            brand_id: this.type == 0 ? this.id : '',
            keyword,
            sales_sum: sales,
            price
        })
            .then((res: any) => {
                if (isSuccess(res)) {
                    callback(res.data.list, { haveNext: Boolean(res.data.more) })
                }
            }).catch(e => {
            })
    }
    _onRefresh(callback: any) {
        this._getData(1, callback);
    }
    _getSearchpage() {
        if(!this.props.isLogin) return
        getSearchpage().then((res: any) => {
            if (isSuccess(res)) {
                let { history_lists, hot_lists } = res.data
                this.setState({
                    hotList: hot_lists || [],
                    historyList: history_lists || []
                })
            }
        })
    }
    _clearSearch() {
        clearSearch().then(res => {
            if (isSuccess(res)) {
                this._getSearchpage()
            }
        })
    }
    onSearch = trottle(() => {
        this.setState({
            isFocus: false
        })
        this.lFlatList?.reset()
    }, 500, this)
    changeCondition = trottle((type?: 'price' | 'sales') => {
        let price = ''
        let sales = ''
        if (type == 'price') {
            if (this.state.price == ASC) {
                price = DESC
            } else {
                price = ASC
            }
        } else if (type == 'sales') {
            if (this.state.sales == DESC) {
                sales = ASC
            } else {
                sales = DESC
            }
        }
        this.setState({
            price,
            sales
        }, () => this.lFlatList?.reset())
    }, 500, this)
    searchHistory() {
        const { hotList, historyList } = this.state
        return (
            <View style={Style.tagContainer}>
                {hotList.length ? <View style={Style.hotSearch}>
                    <View style={Style.Title}>
                        <Text style={{ fontWeight: 'bold', }}>热门搜索</Text>
                    </View>
                    {this.getHistoryItem(hotList)}
                </View> : null}
                <View>
                    <View style={[Style.Title, rowBetween]}>
                        <Text style={{ fontWeight: 'bold', }}>历史搜索</Text>
                        <Text onPress={() => this._clearSearch()} style={{ color: Theme.color_text_muted, fontSize: Theme.font_size_xs }}>清空</Text>
                    </View>
                    {this.getHistoryItem(historyList)}
                </View>
            </View>
        )
    }
    getHistoryItem(list = []) {
        const listView = list.map((item: any, index: number) => {
            return (
                <PressButton style={Style.tagItem} key={index} onPress={() => {
                    Keyboard.dismiss()
                    this.setState({
                        keyword: item
                    }, () => this.onSearch())
                }} >
                    <Text numberOfLines={1} style={{ fontSize: Theme.font_size_sm, lineHeight: 18 }}>{item}</Text>
                </PressButton>
            )
        })
        return (
            <View style={[Style.tagContain, row]}>
                {listView}
            </View>
        )
    }
    screenNav() {
        const { price, sales, isFocus, type } = this.state
        if(isFocus) return null
        return (
            <View style={{ ...row, height: 40, backgroundColor: Theme.fill_base }}>
                <PressButton
                    style={{ flex: 1, alignItems: 'center' }}
                    textStyle={{ color: price == '' && sales == '' ? Theme.brand_primary : Theme.color_text_base }}
                    onPress={() => this.changeCondition()}
                >全部</PressButton>
                <PressButton style={{ flex: 1, ...rowCenter }} onPress={() => this.changeCondition('sales')}>
                    <Text style={{ marginRight: 3, color: sales ? Theme.brand_primary : Theme.color_text_base }}>销量</Text>
                    <View>
                        <Triangle color={sales == DESC ? Theme.brand_primary : Theme.color_text_secondary} direction="up" style={{ marginBottom: 2 }} />
                        <Triangle color={sales == ASC ? Theme.brand_primary : Theme.color_text_secondary} />
                    </View>
                </PressButton>
                <PressButton style={{ flex: 1, ...rowCenter }} onPress={() => this.changeCondition('price')}>
                    <Text style={{ marginRight: 3, color: price ? Theme.brand_primary : Theme.color_text_base }}>价格</Text>
                    <View>
                        <Triangle color={price == DESC ? Theme.brand_primary : Theme.color_text_secondary} direction="up" style={{ marginBottom: 2 }} />
                        <Triangle color={price == ASC ? Theme.brand_primary : Theme.color_text_secondary} />
                    </View>
                </PressButton>
                <PressButton style={{ flex: 1, ...rowCenter }} onPress={() => {
                    if(type == 'one') {
                        this.setState({
                            type: 'double'
                        })
                    }else {
                        this.setState({
                            type: 'one'
                        })
                    }
                }}>
                    <Image source={type == 'one' ? icon_double : icon_one} style={getImageSize(15)} />
                </PressButton>
            </View>
        )
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
    render() {
        const { scrollY, keyword, isFocus, type } = this.state
        return (
            <SafeAreaView style={contain}>
                <View style={{ display: isFocus ? 'flex' : 'none', flex: 1 }}>
                    <Search
                        ref={ref => this.search = ref}
                        value={keyword}
                        onChange={(val) => this.setState({ keyword: val })}
                        onSearch={() => this.onSearch()}
                    />
                    {this.searchHistory()}
                </View>
                <Animated.ScrollView
                    style={{ display: isFocus ? 'none' : 'flex' }}
                    showsVerticalScrollIndicator={false}
                    onScroll={Animated.event([{
                        nativeEvent: { contentOffset: { y: this.state.scrollY, } }
                    }], { useNativeDriver: true })}
                    scrollEventThrottle={1}
                    onMomentumScrollEnd={(e) => this._contentViewScroll(e)}
                    >
                    <Search
                        value={keyword}
                        onChange={(val) => this.setState({ keyword: val })}
                        onSearch={() => this.onSearch()}
                        onFocus={() => {
                            this.setState({ isFocus: true })
                            this.search.focus()
                        }}
                    />
                    <View>
                        <StickyHeader stickyScrollY={scrollY} stickyHeaderY={45}>
                            {this.screenNav()}
                        </StickyHeader>
                        <LFlatList
                            ref={(lf) => { this.lFlatList = lf }}
                            showsHorizontalScrollIndicator={false}
                            ListHeaderComponent={() => (<View style={{ height: 10, backgroundColor: Theme.fill_body }} />)}
                            onLoadMore={this._onLoadMore.bind(this)}
                            onRefresh={this._onRefresh.bind(this)}
                            ItemSeparatorComponent={() => type == 'double' ? <View style={{ height: 10, backgroundColor: Theme.fill_body }} />: null }
                            emptyView={() => <EmptyView source={goods_null} text="暂无商品~" />}
                            columnWrapperStyle={type == 'one' ? {flexWrap: 'wrap'} : twoGoodsWrap}
                            numColumns={2}
                            loadMoreable={true}
                            refreshable={false}
                            keyExtractor={(item: any, index: any) => index}
                            renderItem={({ item, index }) => <GoodsItem data={item} type={type} />}
                        />
                    </View>
                </Animated.ScrollView>
            </SafeAreaView>
        )
    }
}

const Style = StyleSheet.create({
    tagContainer: {
        flex: 1,
        paddingHorizontal: 12,
        backgroundColor: Theme.fill_base,
    },
    hotSearch: {
        borderBottomWidth: Theme.border_width_sm,
        borderColor: Theme.border_color_base
    },
    Title: {
        paddingVertical: 12,
    },
    tagContain: {
        paddingVertical: 15,
        flexWrap: 'wrap'
    },
    tagItem: {
        height: 26,
        paddingHorizontal: 12,
        backgroundColor: '#F4F4F4',
        borderRadius: Theme.radius_circel,
        justifyContent: 'center',
        marginRight: 10,
        marginBottom: 10
    }
})

let mapStateToProps = (state: RootState) => {
    return {
        isLogin: state.userStore.isLogin
    }
}

export default connect(mapStateToProps)(GoodsSearch);