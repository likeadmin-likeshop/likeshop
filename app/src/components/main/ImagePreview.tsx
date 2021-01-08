import React from "react";
import { View, Image, Text, StyleSheet, ViewStyle } from "react-native";
import ImageViewer from 'react-native-image-zoom-viewer';
import Theme from "../../constraint/Theme";
import { getImageSize, row } from "../../constraint/Style";
import PressButton from "../main/PressButton";
import Modal from 'react-native-modal';
interface ImagePreviewProps {
    show?: boolean
    imageUrls: {url: string} []
    index?:number
    imgfield?: string
    onClose: () => void
}
class ImagePreview extends React.Component<ImagePreviewProps, any> {
    [x: string]: any;
    constructor(props: ImagePreviewProps) {
        super(props);
        this.state = {
        }
    }
    static defaultProps = {
        imageUrls: [],
        index: 0,
        imgfield: 'uri'
    }
    

    render() {
        let {imageUrls, show, index, onClose, imgfield} = this.props
        imageUrls = imageUrls.map((item: any) => ({url: item[imgfield as string]}))
        return (
           <Modal isVisible={show} animationIn="slideInRight" animationOut="slideOutRight" style={{margin: 0}} onBackButtonPress={ () => onClose()} useNativeDriver={true}  onBackdropPress={ () => onClose()} >
               <ImageViewer saveToLocalByLongPress={false} imageUrls={imageUrls} index={index} useNativeDriver={true} onClick={() => onClose()} />
           </Modal>
        )
    }
}
const styles = StyleSheet.create({

})
export default ImagePreview