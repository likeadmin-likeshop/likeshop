import React from 'react'
import { ScreenProps } from '../../typing'
import { contain } from '../../constraint/Style';
import { View, StyleSheet, SafeAreaView } from 'react-native';
import {  coupon_null } from '../../constraint/Image';
import Theme from '../../constraint/Theme';
import LFlatList from '../../components/main/LFlatList';
import CouponItem from '../../components/bussiness/CouponItem';
import ScrollableTabView from 'react-native-scrollable-tab-view';
import CustomTabBar from '../../components/main/CustomTabBar';
import EmptyView from '../../components/bussiness/EmptyView';
import { getMyCoupon } from '../../api/user';
import { isSuccess } from '../../utils/request';

type UserCouponProps = ScreenProps<'UserCoupon'>;

export default class UserCoupon extends React.Component<UserCouponProps, any> {
    lFlatList: LFlatList | null | undefined;
    [x: string]: any;
    constructor(props: UserCouponProps) {
        super(props);
        this.state = {
            myCoupon: [{
                title: '可使用',
                type: 'use',
                num: '',
                typeNum: 0
            }, {
                title: '已使用',
                type: 'used',
                num: '',
                typeNum: 1
            }, {
                title: '已失效',
                type: 'Invalid' ,
                num: '',
                typeNum: 2
            }],
        }
    }


    _onLoadMore(type:number, pageNum = 1, callback: any) {
        this._getData(type, pageNum, callback);
    }
    _getData(type:number, pageNum: number, callback: any) {
        getMyCoupon({
            type
        }).then((res: any) => {
            if(isSuccess(res)) {
                callback(res.data, { haveNext: false })
            } 
        }).catch(e => {
        })
    }
    _onRefresh(type:number,callback: any ) {
        this._getData(type,1, callback);
    }

    couponList() {
        const { myCoupon } = this.state
        return myCoupon.map((tItem: any, index: number) => (
            <LFlatList
                tabLabel={tItem.title}
                key={index}
                ref={(lf) => { this.lFlatList = lf }}
                onLoadMore={this._onLoadMore.bind(this, tItem.typeNum)}
                onRefresh={this._onRefresh.bind(this, tItem.typeNum)}
                emptyView={() => <EmptyView source={coupon_null} text="暂无优惠券～" />}
                ListHeaderComponent={() => <View style={{ height: 10, backgroundColor: Theme.fill_body }} />}
                ItemSeparatorComponent={() => <View style={{ height: 10, backgroundColor: Theme.fill_body }} />}
                loadMoreable={false}
                refreshable={true}
                keyExtractor={(item: any, index: any) => index}
                renderItem={({ item, index }) => <CouponItem btnType={tItem.type} data={item} index={index} onRefresh={() => this.lFlatList?._onRefresh()} />}
            />
        ))
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
                        activeTab={0}
                        tabUnderlineDefaultWidth={40}
                    />}
                    onChangeTab={(val) => this.currentIndex = val.i}
                >
                    {this.couponList()}
                </ScrollableTabView>
            </SafeAreaView>
        )
    }
}

const Style = StyleSheet.create({

})