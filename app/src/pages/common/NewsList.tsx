import React from "react"
import {SafeAreaView, View, StyleSheet, Text, FlatList, Image, ScrollView, Platform} from "react-native"
import {ScreenProps} from '../../typing'
import { contain, columnCenter, row, getImageSize, rowBetween, rowCenter } from "../../constraint/Style";
import Theme from "../../constraint/Theme";
import CustomTabBar from "../../components/main/CustomTabBar";
import {icon_see, news_null} from '../../constraint/Image'
import ScrollableTabView, {ScrollableTabBar} from "react-native-scrollable-tab-view";
import { getCategoryList, getArticleList } from "../../api/store";
import { isSuccess } from "../../utils/request";
import Swiper from "react-native-swiper";
import CustomImage from "../../components/main/CustomImage";
import LFlatList from "../../components/main/LFlatList";
import PressButton from "../../components/main/PressButton";
import { navigate } from "../../utils/navigation";
import { getAdList } from "../../api/store";
import { Carousel } from "@ant-design/react-native";
import AdSwiper from "../../components/bussiness/AdSwiper";
import LoadingView from "../../components/main/LoadingView";
import { TouchableOpacity } from "react-native-gesture-handler";
import { ScreenWidth } from "../../utils/app";
type newsListProps = ScreenProps<'NewsList'>;

export default class NewsList extends React.Component <newsListProps, any> {
    [x: string]: any;
    type: number | undefined;
    constructor(props: newsListProps) {
        super(props);
        // 1 ==> 帮助中心 0 ==> 文章列表
        this.type = props.route.params.type;
        this.state = {
            categoryList: [],
            bannerList: [],
            active: 0,
            delayShow: Platform.OS == 'android' ? false : true,
            currentIndex: 0,
            loadingShow: true,
        }
    }
    componentDidMount() {
    }

    dataNull() {
        return (
            <View style={[Style.dataNull, columnCenter]}>
                <Image source={news_null} style={getImageSize(150)} />
                <Text style={{fontSize: Theme.font_size_sm, color: Theme.color_text_muted}} >暂无数据～</Text>
            </View>
        )
    }
 

    $getCategoryList() {
        getCategoryList({type: this.type}).then((res:any) => {
            if(isSuccess(res)) {
                this.setState({
                    categoryList: res.data,
                    // 延迟显示lflatlist， 否则安卓会出现没有展示的情况
                    delayShow: true,
                    loadingShow: false
                })
            }
        })
    }


    UNSAFE_componentWillMount() {
        this.$getCategoryList();
    }

    newsItem(data?: any) {
        const {item, index} = data;
        return (
            <TouchableOpacity activeOpacity={0.7} style={Style.newsItem} 
                onPress={() => {
                    navigate("NewsDetail", {
                        id: item.id,
                        type: this.type || 0
                    })
                }}
            >
                <View style={[Style.newsContent, row]}>
                    <View style={{flex: 1, alignSelf: 'flex-start'}}>
                        <Text style={{fontSize: Theme.font_size_lg, fontWeight: '500', lineHeight: 24}} numberOfLines={2}>{item.title}</Text>
                        <Text style={{fontSize: Theme.font_size_base, color: Theme.color_text_secondary, lineHeight: 18, marginTop: 10}} numberOfLines={2} >{item.synopsis}</Text>
                    </View>
                    <Image source={{uri: item.image}} style={{width: 120, height: 90, marginLeft: 10}}/>
                </View>
                <View style={[Style.newsInfo, rowBetween]}>
                    <Text style={{fontSize: Theme.font_size_xs, color: Theme.color_text_muted}}>发布时间：{item.create_time}</Text>
                    <View style={row}>
                        <Image source={icon_see} style={getImageSize(15)} />
                        <Text style={{fontSize: Theme.font_size_xs, color: Theme.color_text_muted, marginLeft: 5}}>{item.visit}人浏览</Text>
                    </View>
                </View>
            </TouchableOpacity>
        )
    }

    _onLoadAllList(id: number | null, pageNum = 1, callback: any) {
        this._getAllListData(id, pageNum, callback);
    }

    _getAllListData(id: number | null, pageNum: number, callback: any) {
        getArticleList({ type: this.type, page_no: pageNum, id: id})
        .then((res: any) => {
            callback(res.data.list, { haveNext: res.data.more })
        }).catch(e => {
        })
    }

    _onAllDataRefresh(id: number | null, callback: any) {
        this._getAllListData(id, 1, callback);
    }

    render() {
        return (
            <SafeAreaView style={contain}>
                {this.state.loadingShow && (<LoadingView/>)}
                <AdSwiper height={ScreenWidth*0.4} width={ScreenWidth} pid={this.type == 1 ? 12 : 9} />
                    {/*<TabView
                        tabs={this.state.tabBar}
                        renderScene={(sceneProps) => this.tabItem(sceneProps)}
                        renderTabItem={() => <CustomTabBar
                            activeColor={Theme.brand_primary}
                            inactiveColor={Theme.color_text_base}
                            activeTab={0}
                            tabUnderlineDefaultWidth= {40}
                        />}
                    /> */}
                    {
                        this.state.delayShow && (<ScrollableTabView
                        style={{ flex: 1, borderBottomWidth: 0 }}
                        initialPage={0}
                        tabBarPosition='top'
                        tabBarUnderlineStyle={{backgroundColor: Theme.brand_primary, height: 2, }}
                        tabBarActiveTextColor={Theme.brand_primary}
                        renderTabBar={() => <ScrollableTabBar
                            underlineStyle={{width: 30}}
                            style={{backgroundColor:'#fff', borderWidth: 0}}
                        />}
                    >
                    <View tabLabel='全部' style={{flex: 1}}>
                        <View style={{flex: 1, }}>
                            <LFlatList
                                style={{ flex: 1, marginTop: 10 }}
                                showsHorizontalScrollIndicator={false}
                                onLoadMore={this._onLoadAllList.bind(this, null)}
                                onRefresh={this._onAllDataRefresh.bind(this, null)}
                                loadMoreable={true}
                                refreshable={true}
                                keyExtractor={(item: any, index: any) => index}
                                renderItem={(data: any) => this.newsItem(data)}
                                emptyView={() => this.dataNull()}
                            />
                        </View>
                    </View>
                        {
                            this.state.categoryList.map((item: any, index: number) => {
                                return (
                                    <View tabLabel={item.name} style={{flex: 1, borderWidth: 0}} key={item.id}>
                                        <View style={{flex: 1}}>
                                            <LFlatList
                                            style={{ flex: 1, marginTop: 10 }}
                                            showsHorizontalScrollIndicator={false}
                                            onLoadMore={this._onLoadAllList.bind(this, item.id)}
                                            onRefresh={this._onAllDataRefresh.bind(this, item.id)}
                                            loadMoreable={true}
                                            refreshable={true}
                                            keyExtractor={(item: any, index: any) => index}
                                            renderItem={(data: any) => this.newsItem(data)}
                                            emptyView={() => this.dataNull()}
                                            />
                                        </View>
                                    </View>
                                )
                            })
                        }
                    </ScrollableTabView>)}

            </SafeAreaView>
        )
    }
}

const Style = StyleSheet.create({
    header: {
        // backgroundColor: '#3497F7',
        // height: 150
    },
    newsItem: {
        flex: 1,
        paddingTop: 14,
        paddingHorizontal: 10,
        paddingBottom: 11,
        backgroundColor: Theme.fill_base,
        borderBottomWidth: Theme.border_width_md,
        borderBottomColor: Theme.border_color_base,
    },
    newsContent: {
        flex: 1
    },
    newsInfo: {
        paddingTop: 10
    },
    dataNull: {
        paddingTop: 100
    }
})