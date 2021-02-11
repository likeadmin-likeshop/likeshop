import React from 'react'
import { ScreenProps } from '../../typing'
import { SafeAreaView, StyleSheet, View, ImageBackground, Image, Text, FlatList } from 'react-native'
import { contain, row, getImageSize, rowCenter, rowBetween, columnCenter } from '../../constraint/Style'
import { bg_growth_value } from '../../constraint/Image'
import Theme from '../../constraint/Theme'
import { getHotGoods } from '../../api/store'
import { isSuccess } from '../../utils/request'
import LFlatList from '../../components/main/LFlatList'
import { navigate } from '../../utils/navigation'
import { ScreenWidth } from '../../utils/app'
import { getAccountLog, getWallet } from '../../api/user'
type GrowthValueProps = ScreenProps<'GrowthValue'>

export default class GrowthValue extends React.Component<GrowthValueProps, any> {
    [x: string]: any
    constructor(props: GrowthValueProps) {
        super(props)
        this.state = {
            currentIndex: 0,
            growth: ""
        }
    }

    UNSAFE_componentWillMount() {
        this._getWallet()
    }
    _getWallet() {
        getWallet().then((res: any) => {
            if (isSuccess(res)) {
                this.setState({
                    growth: res.data.user_growth
                })
            }
        })
    }
    headerView() {
        const { growth } = this.state
        return (
            <View style={{ ...row, paddingHorizontal: 15, paddingVertical: 18 }}>
                <Image source={bg_growth_value} style={{ height: ScreenWidth / 375 * 213, width: ScreenWidth, position: 'absolute', top: 0 }} />
                <Text style={{ color: Theme.fill_base, fontSize: Theme.font_size_md }}>当前成长值：</Text>
                <Text style={{ color: Theme.fill_base, fontSize: 28, fontWeight: 'bold' }}>{growth}</Text>
            </View>
        )
    }



    getItem(item: any) {
        return (
            <View style={{ backgroundColor: Theme.fill_base, marginHorizontal: 12.5, paddingVertical: 15, paddingHorizontal: 15, borderColor: Theme.border_color_base, borderBottomWidth: 0.5 }}>
                <View style={rowBetween}>
                    <Text style={{ fontSize: Theme.font_size_lg, lineHeight: 28 }}>{item.source_type}</Text>
                    <Text style={{ fontSize: Theme.font_size_lg, color: Theme.brand_primary, fontWeight: 'bold' }}>{item.change_amount}</Text>
                </View>
                <Text style={{ fontSize: Theme.font_size_xs, color: Theme.color_text_muted }}>{item.create_time}</Text>
            </View>
        )
    }

    _onLoad(pageNum = 1, callback: any) {
        this._getData(pageNum, callback)
    }

    _getData(pageNum: number, callback: any) {
        getAccountLog({ page_no: pageNum, source: 3 })
            .then((res: any) => {
                callback(res.data.list, { haveNext: res.data.more })
            }).catch(e => {
            })
    }

    _onRefresh(callback: any) {
        this._getData(1, callback)
    }

    render() {
        return (
            <SafeAreaView style={contain}>
                <LFlatList
                    ListHeaderComponent={() => this.headerView()}
                    showsHorizontalScrollIndicator={false}
                    onLoadMore={this._onLoad.bind(this)}
                    onRefresh={this._onRefresh.bind(this)}
                    loadMoreable={true}
                    refreshable={false}
                    renderItem={({ item }) => this.getItem(item)}
                    keyExtractor={(item: any, index: any) => index}
                />
            </SafeAreaView>
        )
    }
}

const Style = StyleSheet.create({

})