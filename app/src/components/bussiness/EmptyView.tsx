import React from "react";
import { View, Image, Text, StyleSheet, ImageSourcePropType, ViewStyle } from "react-native";
import Theme from "../../constraint/Theme";
import { getImageSize, row, columnCenter,  } from "../../constraint/Style";
interface EmptyViewProps {
    style?: ViewStyle
    source: ImageSourcePropType
    text?: string
}
class EmptyView extends React.Component<EmptyViewProps, any> {
    [x: string]: any;
    constructor(props: EmptyViewProps) {
        super(props);
    }
    static defaultProps = {
        text: '暂无数据~'
    }
    render() {
        const {source, text, style} = this.props
        return (
            <View style={[styles.dataNull, columnCenter, style]}>
                <Image source={source} style={getImageSize(150)} />
                <Text style={{ fontSize: Theme.font_size_sm, color: Theme.color_text_muted, lineHeight: 18 }}>{text}</Text>
            </View>
        );
    }
}
const styles = StyleSheet.create({
    dataNull: {
        flex: 1,
        paddingTop: 150
    }
})
export default EmptyView