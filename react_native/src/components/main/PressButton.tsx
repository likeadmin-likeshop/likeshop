import React from "react";
import { TouchableOpacity, Text, TextStyle, StyleSheet, ViewStyle, View } from "react-native";
import Theme from "../../constraint/Theme";

export interface PressButtonProps {
    type?: 'primary'
    size?: 'sm' | 'base' | 'md' | 'lg'
    activeOpacity?: number
    style?: ViewStyle
    round?: Boolean | Number
    textStyle?: TextStyle
    onPress?: (_?: any) => void
    disabled?: boolean
}
class PressButton extends React.Component<PressButtonProps, any> {
    [x: string]: any;
    constructor(props: PressButtonProps) {
        super(props);
    }

    static defaultProps = {
        onPress: (_?: any) => { },
        disabled: false,
        activeOpacity: 0.7
    };

    render() {
        const { type, children, size, style, round, textStyle, onPress, disabled, activeOpacity } = this.props
        let textS: TextStyle = { ...styles.textStyle }
        let wrapperStyle: ViewStyle = {}
        if (type == 'primary') {
            wrapperStyle.backgroundColor = Theme.brand_primary
            textS.color = Theme.color_text_base_inverse
        }
        if (typeof round == 'boolean') {
            wrapperStyle.borderRadius = Theme.radius_circel
        } else if (typeof round == 'number') {
            wrapperStyle.borderRadius = round
        }
        if (size) {
            wrapperStyle.justifyContent = 'center'
            wrapperStyle.alignItems = 'center'
        }
        switch (size) {
            case 'sm':
                textS.fontSize = Theme.font_size_sm
                wrapperStyle.height = 26
                break;
            case 'base':
                textS.fontSize = Theme.font_size_base
                wrapperStyle.height = 29
                break;
            case 'md':
                textS.fontSize = Theme.font_size_md
                wrapperStyle.height = 36
                break;
            case 'lg':
                textS.fontSize = Theme.font_size_lg
                wrapperStyle.height = 42
                break;
        }
        wrapperStyle = { ...wrapperStyle, ...style }
        textS = { ...textS, ...textStyle }
        return (
            <TouchableOpacity
                style={[wrapperStyle]}
                activeOpacity={activeOpacity}
                onPress={(e?: any) => onPress && onPress(e)}
                disabled={disabled}
            >
                {typeof children == 'string' ? <Text style={[textS]}>{children}</Text> : children}
            </TouchableOpacity>
        );
    }
}


const styles = StyleSheet.create({
    textStyle: {
        fontSize: Theme.font_size_base,
    }
})

export default PressButton;

