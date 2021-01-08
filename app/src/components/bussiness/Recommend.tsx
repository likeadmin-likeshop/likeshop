import React from "react";
import { View, Image, Text, StyleSheet } from "react-native";
import Theme from "../../constraint/Theme";
import { getImageSize, row, rowCenter, twoGoodsWrap } from "../../constraint/Style";
import LFlatList from "../main/LFlatList";
import { icon_like, recommend_title } from "../../constraint/Image";
import GoodsItem from "./GoodsItem";
import { getBestList } from "../../api/store";
interface RecommendProps {
    
}
class Recommend extends React.Component<RecommendProps, any> {
    [x: string]: any;
    constructor(props: RecommendProps) {
        super(props);
    }
    _onLoadMore(pageNum = 1, callback: any) {
        this._getData(pageNum, callback);
    }
    _getData(pageNum: number, callback: any) {
        getBestList({ page_size: 6})
            .then((res: any) => {
                callback(res.data.list, { haveNext: false})
            }).catch(e => {
            })
    }
    _onRefresh(callback: any) {
        this._getData(1, callback);
    }
    render() {
        return (
            <LFlatList
                style={{marginBottom: 10}}
                ref={(lf) => { this.lFlatList = lf }}
                showsHorizontalScrollIndicator={false}
                ListHeaderComponent={() => (<View style={[rowCenter, {height: 50}]}>
                    <Text style={{ height: 0.5, width: 29, backgroundColor: '#ccc' }} />
                    <View style={{ marginHorizontal: 10, ...row }}>
                        <Image source={icon_like} style={getImageSize(19)} />
                        <Text style={{ fontSize: 18, fontWeight: 'bold', marginLeft: 5 }}>{'好物优选'}</Text>
                    </View>
                    <Text style={{ height: 0.5, width: 29, backgroundColor: '#ccc' }} />
                </View>)}
                noMoreFooterView={() => <View/>}
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
        );
    }
}
const styles = StyleSheet.create({

})
export default Recommend