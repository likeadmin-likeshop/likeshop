import React from "react";
import { View, Image, Text, StyleSheet, ViewStyle } from "react-native";
import Theme from "../../constraint/Theme";
import { getImageSize, row } from "../../constraint/Style";
import PressButton from "../main/PressButton";
import { icon_address, arrow_right, pay_line } from "../../constraint/Image";
import { navigate } from "../../utils/navigation";
interface AddressItemProps {
    style?: ViewStyle
    address: any
    link?: boolean
}
class AddressItem extends React.Component<AddressItemProps, any> {
    [x: string]: any;
    constructor(props: AddressItemProps) {
        super(props);
    }
    static defaultProps = {
        link: true,
    }
    render() {
        const { address, style, link } = this.props
        return (
            <View style={{ backgroundColor: Theme.fill_base, ...style,}}>
                <PressButton disabled={!link} style={{ ...row, flex: 1, padding: 12, minHeight: 80}} onPress={() => navigate('UserAddress', {type: 1})}  >
                    <Image source={icon_address} style={getImageSize(22)} />
                    <View style={{ flex: 1, marginHorizontal: 10 }}>
                        {!address.contact ?
                            <Text style={{ fontSize: Theme.font_size_md }}>设置收货地址</Text>
                            : <View>
                                <Text style={{ fontSize: Theme.font_size_md, marginBottom: Theme.v_spacing_sm }}>
                                    <Text>{address.contact} </Text>
                                    <Text>{address.telephone}</Text>
                                </Text>
                                <Text style={{ fontSize: Theme.font_size_sm, color: Theme.color_text_secondary }}>{address.province} {address.city} {address.district} {address.address}</Text>
                            </View>}
                    </View>
                    { link ? <Image source={arrow_right} style={getImageSize(15)} /> : null}
                </PressButton>
            </View>

        );
    }
}
const styles = StyleSheet.create({

})
export default AddressItem