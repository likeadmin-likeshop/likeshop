import React from 'react'
import { ScreenProps } from '../../typing'
import { contain, columnCenter, getImageSize } from '../../constraint/Style';
import { View, StyleSheet,  SafeAreaView, Image } from 'react-native';
import {  coupon_null } from '../../constraint/Image';
import Theme from '../../constraint/Theme';
import LFlatList from '../../components/main/LFlatList';
import CouponItem from '../../components/bussiness/CouponItem';
import { getCouponList } from '../../api/store';
import EmptyView from '../../components/bussiness/EmptyView';
import { isSuccess } from '../../utils/request';

type CouponCenterProps = ScreenProps<'CouponCenter'>;

export default class CouponCenter extends React.Component<CouponCenterProps, any> {
    lFlatList: LFlatList | null | undefined;
    [x: string]: any;
    constructor(props: CouponCenterProps) {
        super(props);
    }

    _onLoadMore(pageNum = 1, callback: any) {
        this._getData(pageNum, callback);
    }
    _getData(pageNum: number, callback: any) {
        getCouponList().then((res: any) => {
            if(isSuccess(res)) {
                callback(res.data, { haveNext: false })
            }
        }).catch(e => {
        })
    }
    _onRefresh(callback: any) {
        this._getData(1, callback);
    }

   
    render() {
        return (
            <SafeAreaView style={contain}>
                <LFlatList
                    style={{ flex: 1 }}
                    showsHorizontalScrollIndicator={false}
                    onLoadMore={this._onLoadMore.bind(this)}
                    onRefresh={this._onRefresh.bind(this)}
                    emptyView={() => <EmptyView source={coupon_null} text="暂无优惠券～" />}
                    ListHeaderComponent={() => <View style={{ height: 10, backgroundColor: Theme.fill_body }} />}
                    ItemSeparatorComponent={() => <View style={{ height: 10, backgroundColor: Theme.fill_body }} />}
                    loadMoreable={false}
                    refreshable={true}
                    keyExtractor={(item: any, index: any) => index}
                    renderItem={({ item, index }) => <CouponItem btnType='receive' data={item} index={index} onRefresh={() => this.lFlatList?._onRefresh()} />}
                />
            </SafeAreaView>
        )
    }
}

const Style = StyleSheet.create({
    dataNull: {
        flex: 1,
        paddingTop: 150
    }
})