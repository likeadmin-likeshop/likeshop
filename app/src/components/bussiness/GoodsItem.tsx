import React from "react";
import { View, Image, Text, StyleSheet } from "react-native";
import Theme from "../../constraint/Theme";
import { getImageSize, row } from "../../constraint/Style";
import PressButton from "../main/PressButton";
import CustomImage from "../main/CustomImage";
import PriceFormate from "./PriceFormate";
import { navigate, push } from "../../utils/navigation";
import { ScreenWidth } from "../../utils/app";
const goodsWidth = (ScreenWidth - 28) / 2
interface GoodsItemProps {
    data: any
    type?: 'double' | 'one'
}
class GoodsItem extends React.Component<GoodsItemProps, any> {
    [x: string]: any;
    constructor(props: GoodsItemProps) {
        super(props);
    }
    static defaultProps = {
        data: {},
        type: 'double'
    }
    render() {
        const { data, type } = this.props
        return (
            <PressButton style={type == 'double' ? styles.goodsItem : styles.goodsOneItem} onPress={() => push('GoodsDetail', {id: data.id})} >
                <CustomImage source={{uri: data.image}} width={type == 'double' ? goodsWidth : 80}  height={type == 'double' ? goodsWidth : 80} radius={3} />
                <View style={type == 'double' ?{ padding: 6} : styles.goodsInfo}>
                    <Text numberOfLines={2} style={{ color: Theme.color_text_paragraph, lineHeight: 20 }}>{data.name}</Text>
                    <View style={{ marginTop: Theme.v_spacing_md, ...row,}}>
                        <PriceFormate color={Theme.brand_primary} signSize={13} prevSize={17} nextSize={13} price={data.price} />
                        <PriceFormate style={{marginLeft: Theme.h_spacing_sm, textDecorationLine: 'line-through', fontSize: 13}} color={Theme.color_text_muted}  price={data.market_price} />
                    </View>
                </View>
            </PressButton>
        );
    }
}
const styles = StyleSheet.create({
    goodsItem: {
        width: goodsWidth,
        backgroundColor: Theme.fill_base,
        borderRadius: 5,
        overflow: 'hidden'
    },
    goodsOneItem: {
        ...row,
        width: '100%',
        backgroundColor: Theme.fill_base,
        padding: 10,
        borderBottomColor: Theme.border_color_base,
        borderBottomWidth: Theme.border_width_sm
    },
    goodsInfo: {
        flex: 1,
        marginLeft: Theme.h_spacing_md
    }
})
export default GoodsItem