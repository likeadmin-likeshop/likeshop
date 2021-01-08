import React, { Component } from 'react'
import Theme from '../../constraint/Theme';
import { View, StyleSheet, Text, Image, FlatList } from 'react-native';
import { row, rowBetween, getImageSize, rowCenter, columnCenter } from '../../constraint/Style';
import { icon_like } from '../../constraint/Image';
import Progress from '../../components/bussiness/Progress';
import PressButton from '../main/PressButton';
import PriceFormate from './PriceFormate';
import { navigate, push } from '../../utils/navigation';
import CustomImage from '../main/CustomImage';
type GoodsLikeProps = {
    lists: Array<any>;
}

class GoodsLike extends Component<GoodsLikeProps, any> {
    [x: string]: any;
    constructor(props: GoodsLikeProps) {
        super(props);
        this.state = {
            leftDiff: 0,
            left: '0%'
        }
    }

    static defaultProps = {
        lists: []
    }

    goodsItem(item: any) {
        const itemWidth = 120
        return (
            <PressButton style={{ width: itemWidth }} onPress={() => push("GoodsDetail", {id: item.id})}>
                <CustomImage radius={3} source={{ uri: item.image }} width={itemWidth} height={itemWidth} />
                <Text numberOfLines={1} style={{marginVertical: 5}}>{item.name}</Text>
                <View style={row}>
                    <PriceFormate color={Theme.brand_primary} signSize={11} nextSize={11} price={item.price} />
                    <PriceFormate style={{ fontSize: Theme.font_size_xxs, color: Theme.color_text_muted, textDecorationLine: 'line-through' }} price={item.market_price} />
                </View>
            </PressButton>
        )
    }
    render() {
        const { lists } = this.props
        if (!lists.length) return null
        return (
            <View style={{ backgroundColor: Theme.fill_base, marginTop: 10 }}>
                <View style={{ ...rowCenter, height: 50 }}>
                    <Text style={{ height: 0.5, width: 29, backgroundColor: '#ccc' }} />
                    <View style={{ marginHorizontal: 10, ...row }}>
                        <Image source={icon_like} style={getImageSize(19)} />
                        <Text style={{ fontSize: 18, fontWeight: 'bold', marginLeft: 5 }}>猜你喜欢</Text>
                    </View>
                    <Text style={{ height: 0.5, width: 29, backgroundColor: '#ccc' }} />
                </View>
                <FlatList
                    horizontal={true}
                    showsHorizontalScrollIndicator={false}
                    style={{ height: 170, marginBottom: 10 }}
                    keyExtractor={(item, index) => index.toString()}
                    ItemSeparatorComponent={() => <View style={{width: 8}} />}
                    ListHeaderComponent={() => <View style={{width: 12}} />}
                    ListFooterComponent={() => <View style={{width: 12}} />}
                    data={lists}
                    onScroll={(e) => {
                        // 滑块总长度
                        const scrollSize = e.nativeEvent.contentSize.width;
                        // 容器初始长度
                        const containWidth = e.nativeEvent.layoutMeasurement.width;
                        // 滑动偏移量
                        const xOffset = e.nativeEvent.contentOffset.x;
                        let { leftDiff, left } = this.state;
                        leftDiff = xOffset / (scrollSize - containWidth) * 100;
                        this.setState({
                            leftDiff: leftDiff,
                        });
                    }}
                    renderItem={({ item, index }) => this.goodsItem(item)}
                />
                {lists.length >3 ?<View style={[{ marginVertical: 12 }, rowCenter]}>
                    <Progress progressBarColor={Theme.brand_primary} left={this.state.leftDiff}></Progress>
                </View> : null}
            </View>
        )
    }
}

const styles = StyleSheet.create({

})

export default GoodsLike