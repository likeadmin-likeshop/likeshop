import React from 'react'
import {ScreenProps} from '../../typing'
import { View, SafeAreaView, StyleSheet, Text, Image } from 'react-native'
import { contain, rowBetween, getImageSize, columnCenter } from '../../constraint/Style'
import ScrollableTabView from 'react-native-scrollable-tab-view'
import CustomTabBar from '../../components/main/CustomTabBar'
import Theme from '../../constraint/Theme'
import { FlatList } from 'react-native-gesture-handler'
import { order_null } from '../../constraint/Image'
import {getAccountLog} from '../../api/user'
import LFlatList from '../../components/main/LFlatList'
import EmptyView from '../../components/bussiness/EmptyView'

type UserBillProps = ScreenProps<'UserBill'>

export default class UserBill extends React.Component <UserBillProps, any> {
    constructor(props : UserBillProps) {
        super(props);
        this.state = {
            active: props.route?.params.active || 0
        }
    }

    UNSAFE_componentWillMount() {

    }

    _renderListItem(item: any) {
        console.log(item)
        return (
            <View style={[Style.listItem, rowBetween]}>
                <View>
                    <Text style={{fontSize: Theme.font_size_base, fontWeight: 'bold'}}>{item.source_type}</Text>
                    <Text style={{marginTop: 5, color: Theme.color_text_muted, fontSize: Theme.font_size_xs}}>{item.create_time}</Text>
                </View>
                <Text style={{fontSize: Theme.font_size_xl, color: item.change_type == 1 ? Theme.brand_primary : undefined}}>{item.change_amount}</Text>
            </View>
        )
    }

    dataNull() {
        return (
            <View style={[Style.dataNull, columnCenter]}>
                <Image source={order_null} style={getImageSize(150)} />
                <Text style={{fontSize: Theme.font_size_base, color: Theme.color_text_muted}}>暂无充值记录~</Text>
            </View>
        )
    }

    _onLoadMore(pageNum = 1, callback: any) {
        this._getData(pageNum, callback);
    }

    _getData(pageNum: any, callback: any) {
        getAccountLog({ page_no: pageNum, source: 1 })
            .then((res:any) => {
                callback(res.data.list, { haveNext: res.data.more })
            }).catch(e => {
            })
    }
    _onRefresh(callback: any) {
        this._getData(1, callback);
    }

    allList() {
        return (
            <View style={[Style.listContain]}>
                <LFlatList
                    style={{flex: 1}}
                    showsHorizontalScrollIndicator={false}
                    onLoadMore={this._onLoadMore.bind(this)}
                    onRefresh={this._onRefresh.bind(this)}
                    loadMoreable={true}
                    refreshable={true}
                    emptyView={() => <EmptyView source={order_null} text="暂无记录~" />}
                    keyExtractor={(item:any, index: number) => index}
                    renderItem={({ item }) => this._renderListItem(item)}
                >
                </LFlatList>
            </View>
        )
    }

    _onCusLoadMore(pageNum = 1, callback: any) {
        this._getCusData(pageNum, callback);
    }

    _getCusData(pageNum: any, callback: any) {
        getAccountLog({ page_no: pageNum, source: 1, type: 2 })
            .then((res:any) => {
                callback(res.data.list, { haveNext: res.data.more })
            }).catch(e => {
            })
    }

    _onCusRefresh(callback: any) {
        this._getCusData(1, callback);
    }

    customList() {
        return (
            <View style={Style.listContain}>
                <LFlatList
                    style={{flex: 1}}
                    showsHorizontalScrollIndicator={false}
                    onLoadMore={this._onCusLoadMore.bind(this)}
                    onRefresh={this._onCusRefresh.bind(this)}
                    loadMoreable={true}
                    refreshable={true}
                    emptyView={() => <EmptyView source={order_null} text="暂无消费记录~" />}
                    keyExtractor={(item:any, index: number) => index}
                    renderItem={({ item }) => this._renderListItem(item)}
                />
            </View>
        )
    }

    render() {
        return (
            <SafeAreaView style={contain}>
                <View style={Style.userBillContainer}>
                    <ScrollableTabView
                    style={{ flex: 1, borderBottomWidth: 0 }}
                    initialPage={this.state.active}
                    tabBarPosition='top'
                    renderTabBar={() => <CustomTabBar
                        activeColor={Theme.brand_primary}
                        inactiveColor={Theme.color_text_base}
                        activeTab={0}
                        tabUnderlineDefaultWidth= {40}
                    />}
                    >
                        <View tabLabel='全部' style={{flex: 1}}>
                            {this.allList()}
                        </View>
                        <View tabLabel='消费' style={{flex: 1}}>
                           {this.customList()}
                        </View>
                    </ScrollableTabView>
                </View>
            </SafeAreaView>
        )
    }
}

const Style = StyleSheet.create({
    userBillContainer: {
        flex: 1
    },
    listContain: {
        flex: 1,
        paddingTop: 10
    },
    listHeader: {
        padding: 15,
    },
    listItem: {
        paddingHorizontal: 15,
        paddingVertical: 10,
        backgroundColor: Theme.fill_base,
        borderBottomColor: Theme.border_color_base,
        borderBottomWidth: Theme.border_width_md
    },
    dataNull: {

    }
})