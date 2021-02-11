import React from "react";
import { TouchableOpacity, Text, TextStyle, StyleSheet, ViewStyle, View } from "react-native";
import Theme from "../../constraint/Theme";

export interface TagProps {
    style?: ViewStyle;
    radius?: number;
    borderColor?: string;
    text: string;
    textStyle?: TextStyle
}
class Tag extends React.Component<TagProps, any> {
    [x: string]: any;
    constructor(props: TagProps) {
        super(props);
    }

    static defaultProps = {
        radius: 2,
        borderColor: Theme.brand_primary
    };

    render() {
        const { style, radius, borderColor, text, textStyle } = this.props
        return (
            <View style={{paddingVertical: 2, paddingHorizontal: 5, ...style, borderWidth: Theme.border_width_sm, borderRadius: radius, borderColor }}>
                <Text style={{ fontSize: Theme.font_size_xxs, color: Theme.brand_primary, ...textStyle}}>{text}</Text>
            </View>
        );
    }
}


const styles = StyleSheet.create({
 
})

export default Tag;