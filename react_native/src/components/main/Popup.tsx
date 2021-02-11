import React from "react";
import { View, Image, Text, StyleSheet, ViewStyle } from "react-native";
import Theme from "../../constraint/Theme";
import { getImageSize, row } from "../../constraint/Style";
import PressButton from "../main/PressButton";
import { icon_close } from '../../constraint/Image'
import Modal from 'react-native-modal';
import { isiPhoneX } from "../../utils/app";
interface PopupProps {
    style?: ViewStyle
    backgroundColor?: string
    isVisible?: boolean
    position?: 'bottom' | 'center'
    round?: boolean
    closeable?: boolean
    onBackdropClose?: boolean
    onClose: () => void
    onModalShow?: () => void
    onModalHide?: () => void
    coverScreen?: boolean
}
class Popup extends React.Component<PopupProps, any> {
    [x: string]: any;
    constructor(props: PopupProps) {
        super(props);
        this.state = {
            visible: true
        }
    }
    static defaultProps: PopupProps = {
        isVisible: false,
        round: false,
        closeable: false,
        onBackdropClose: false,
        position: 'center',
        coverScreen: true,
        onClose: () => { },
        onModalShow: () => { },
        onModalHide: () => { },
    }
    closeButton() {
        const { closeable,onClose, } = this.props
        if(!closeable) return null
        return (
            <PressButton style={{ position: 'absolute', right: 10, top: 10, zIndex: 999 }} onPress={onClose}>
                <Image source={icon_close} style={getImageSize(30)} />
            </PressButton>
        )
    }
    getCenter() {
        const { isVisible, children, round, style, onBackdropClose, onClose, onModalShow, onModalHide, coverScreen } = this.props
        return (
            <Modal
                style={{ alignItems: 'center', padding: 0, margin: 0, }}
                isVisible={isVisible}
                animationIn="fadeIn"
                animationOut="fadeOut"
                avoidKeyboard={true}
                onBackButtonPress={onClose}
                onBackdropPress={onBackdropClose ? onClose : undefined}
                useNativeDriver={true}
                onModalShow={onModalShow}
                onModalHide={onModalHide}
                hideModalContentWhileAnimating={true}
                coverScreen={coverScreen}
            >
                <View style={[{backgroundColor: this.props.backgroundColor ? this.props.backgroundColor : Theme.fill_base,}, style, round ? { borderRadius: 5 } : null]}>
                    {this.closeButton()}
                    {children}
                </View>
            </Modal>
        )
    }
    getBottom() {
        const { isVisible, children, round, onClose, onModalShow, onModalHide, style, coverScreen } = this.props
        return (
            <Modal
                isVisible={isVisible}
                style={{ justifyContent: 'flex-end', padding: 0, margin: 0,}}
                animationIn="fadeInUp"
                animationOut="fadeOutDown"
                avoidKeyboard={true}
                onBackButtonPress={onClose}
                onBackdropPress={onClose}
                useNativeDriver={true}
                coverScreen={coverScreen}
                hideModalContentWhileAnimating={true}
                onModalShow={onModalShow}
                onModalHide={onModalHide}
            >
                <View style={[styles.wrapStyle, style, round ? styles.round : null]}>
                    {this.closeButton()}
                    {children}
                </View>
            </Modal>
        )
    }
    getContent() {
        const { position } = this.props
        switch (position) {
            case 'center': return this.getCenter()
            case 'bottom': return this.getBottom()
        }
    }
    render() {
        return this.getContent()
    }
}
const styles = StyleSheet.create({
    wrapStyle: {
        backgroundColor: Theme.fill_base,
        paddingBottom: isiPhoneX ? Theme.bottom_safe_height : 0
    },
    round: {
        borderTopLeftRadius: 5,
        borderTopRightRadius: 5
    },
})
export default Popup