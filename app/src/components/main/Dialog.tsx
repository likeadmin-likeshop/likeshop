import React from "react";
import { View, Image, Text, StyleSheet, ViewStyle } from "react-native";
import Theme from "../../constraint/Theme";
import { getImageSize, row } from "../../constraint/Style";
import PressButton from "../main/PressButton";
import { icon_close } from '../../constraint/Image'
import Popup from "./Popup";
import { ScreenWidth } from "../../utils/app";
interface DialogProps {
    coverScreen?: boolean
    title?: string
    content?: string
    style?: ViewStyle
    isVisible?: boolean
    confirmButtonText?: string
    cancelButtonText?: string
    showConfirmButton?: boolean
    showCancelButton?: boolean
    onCancel?: () => void
    onConfirm?: () => void
}
class Dialog extends React.Component<DialogProps, any> {
    [x: string]: any;
    constructor(props: DialogProps) {
        super(props);
        this.state = {
            visible: true
        }
    }
    static defaultProps: DialogProps = {
        coverScreen: true,
        confirmButtonText: "确认",
        cancelButtonText: "取消",
        showConfirmButton: true,
        showCancelButton: true,
        onCancel: () => { },
        onConfirm: () => { }
    }

    getBottomBtn() {
        const {
            showConfirmButton,
            showCancelButton,
            confirmButtonText,
            cancelButtonText,
            onCancel,
            onConfirm
        } = this.props
        return (
            <View style={{ ...row }}>
                {showCancelButton && <PressButton style={{ ...styles.btnStyle }} onPress={() => onCancel && onCancel()}>{cancelButtonText}</PressButton>}
                {showCancelButton && showConfirmButton && <Text style={{ width: 0.5, height: '100%', backgroundColor: Theme.border_color_base }} />}
                {showConfirmButton && <PressButton style={{ ...styles.btnStyle }} textStyle={{ color: Theme.brand_primary }} onPress={() => onConfirm && onConfirm()}  >{confirmButtonText}</PressButton>}
            </View>
        )
    }

    render() {
        const { title, content, children, style, isVisible, coverScreen } = this.props
        return (
            <Popup isVisible={isVisible} round style={{ width: ScreenWidth - 80, ...style }} coverScreen={coverScreen}>
                <View style={{ paddingVertical: 25}}>
                    {children ? children : <View style={{ paddingHorizontal: 20, alignItems: 'center' }}>
                        <Text style={{ fontSize: Theme.font_size_md, lineHeight: 40 }}>{title}</Text>
                        <Text style={{ color: Theme.color_text_secondary, marginTop: 10 }}>{content}</Text>
                    </View>}
                </View>
                {this.getBottomBtn()}
            </Popup>
        )
    }
}
const styles = StyleSheet.create({
    btnStyle: {
        flex: 1,
        height: 40,
        justifyContent: 'center',
        alignItems: 'center',
        borderColor: Theme.border_color_base,
        borderTopWidth: Theme.border_width_sm
    }
})
export default Dialog