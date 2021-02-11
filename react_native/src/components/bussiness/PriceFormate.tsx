import React from "react";
import { View, Image, Text, StyleSheet, TextStyle } from "react-native";
import Theme from "../../constraint/Theme";
import { getImageSize, row } from "../../constraint/Style";
import PressButton from "../main/PressButton";
import CustomImage from "../main/CustomImage";

interface PriceFormateProps {
    price: string
    color?: string
    showSign?: boolean
    signSize?: number
    prevSize?: number
    nextSize?: number
    style?: TextStyle
    showMinus?: boolean
}
class PriceFormate extends React.Component<PriceFormateProps, any> {
    [x: string]: any;
    constructor(props: PriceFormateProps) {
        super(props);
    }
    static defaultProps = {
        showSign: true,
        showMinus: false
    }
    render() {
        const { price, color, signSize, prevSize, nextSize, showSign, style, showMinus } = this.props
        if(price == undefined) return null
        const newPrice = parseFloat(price).toString().split('.')
        const prevPrice = newPrice[0]
        const nextPrice = newPrice[1]
        const textStyle = {
            color,
        }
        return (
          <Text style={style}>
                {showMinus ? <Text style={[textStyle, { fontSize: signSize }]}>-</Text> : null}
                {showSign ? <Text style={[textStyle, { fontSize: signSize }]}>￥</Text> : null}
                <Text style={[textStyle, { fontSize: prevSize }]}>{prevPrice}</Text>
                {nextPrice ? <Text style={[textStyle, { fontSize: nextSize }]}>.{nextPrice}</Text> : null}
            </Text>
        );
    }
}
const styles = StyleSheet.create({

})
export default PriceFormate