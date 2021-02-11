import React from 'react'
import { View, StyleSheet, Image, Text, FlatList } from 'react-native'
import { getImageSize, row, rowBetween, rowCenter, rowEnd } from '../../constraint/Style'
import Theme from '../../constraint/Theme'
import PressButton from '../main/PressButton'
import CustomImage from '../main/CustomImage'
import PriceFormate from './PriceFormate'
import { navigate } from '../../utils/navigation'

interface OrderGoodsProps {
    goods?: Array<any>
    link?: boolean
}

export default class OrderGoods extends React.Component<OrderGoodsProps, any> {
    [x: string]: any
    constructor(props: OrderGoodsProps) {
        super(props)
    }

    static defaultProps = {
        link: false,
    }
    render() {
        const { goods, link } = this.props
        console.log(goods)
        return (
            <View style={{ backgroundColor: Theme.fill_base }}>
                <FlatList
                    data={goods}
                    keyExtractor={(item, index) => index.toString()}
                    renderItem={({ item }) => (
                        <View>
                            <PressButton disabled={!link} style={{ ...Style.goodsContainer, ...row }} onPress={() => navigate('GoodsDetail', { id: item.goods_id })}>
                                <CustomImage radius={5} width={80} height={80} source={{ uri: item.image_str || item.image }} />
                                <View style={Style.goodsInfo}>
                                    <Text numberOfLines={2} style={{lineHeight: 20}}>{item.goods_name}</Text>
                                    <Text style={{ fontSize: Theme.font_size_sm, color: Theme.color_text_muted, marginTop: 5 }}>{item.spec_value_str || item.spec_value}</Text>
                                    <View style={[rowBetween, { marginTop: 10 }]}>
                                        <PriceFormate style={{ fontSize: Theme.font_size_lg }} color={Theme.brand_primary} price={item.goods_price} />
                                        <Text style={{ color: Theme.color_text_secondary }}>x{item.goods_num}</Text>
                                    </View>
                                </View>
                            </PressButton>
                            {link && item.comment_btn || item.refund_btn ? <View style={[rowEnd, { height: 35, alignItems: 'flex-start' }]}>
                                {item.comment_btn ? <PressButton round style={{ borderColor: '#999', borderWidth: Theme.border_width_sm, height: 26, width: 87, marginRight: 12, ...rowCenter }} onPress={() => navigate('GoodsReview', { id: item.id })}>评价晒图</PressButton> : null}
                                {item.refund_btn ? <PressButton round style={{ borderColor: '#999', borderWidth: Theme.border_width_sm, height: 26, width: 87, marginRight: 12, ...rowCenter }} onPress={() => navigate('ApplyRefund', { orderId: item.order_id, itemId: item.item_id })}>申请退款</PressButton> : null}
                            </View> : null}
                        </View>
                    )}
                />

            </View>
        )
    }
}

const Style = StyleSheet.create({
    shop: {
        height: 40,
        paddingHorizontal: 12,
        borderColor: Theme.border_color_base,
        borderBottomWidth: Theme.border_width_sm,
        ...row
    },
    goodsContainer: {
        backgroundColor: 'white',
        paddingHorizontal: 12,
        paddingVertical: 10
    },
    goodsInfo: {
        flex: 1,
        marginLeft: 12
    },
})