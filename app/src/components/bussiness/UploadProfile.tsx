import React from 'react'
import { View, StyleSheet, Image, Text, ViewStyle } from 'react-native'
import { camera, icon_imgdel } from '../../constraint/Image'
import Theme from '../../constraint/Theme'
import PressButton from '../main/PressButton'
import { columnCenter, row, getImageSize } from '../../constraint/Style'
import { Toast } from '@ant-design/react-native'
import SyanImagePicker from 'react-native-syan-image-picker';
interface UploadProfileProps {
    fileList: Array<any>,
    width?: number,
    height?: number,
    afterRead: (file: any []) => void,
    style?: ViewStyle
    // 多个文件上传
    multiple?: Boolean,
    // type?: string
    maxCount?: number,
    deleteImage: (index: number) => void
}

// const FileType = {
//     JPEG: 'image/jpeg',
//     PNG: 'image/png',
//     GIF: 'image/gif'
// }

export default class UploadProfile extends React.Component<UploadProfileProps, any> {
    constructor(props: UploadProfileProps) {
        super(props)
        this.state = {
            file: []
        }
    }

    static defaultProps = {
        width: 80,
        height: 80,
        multiple: false,
        maxCount: 1
    }
    selectImage(index?: number) {
        if (this.props.maxCount == 1 && typeof index == "number") {
            SyanImagePicker.removePhotoAtIndex(index);
        }
        SyanImagePicker.asyncShowImagePicker({
            isCrop: false,
            isCamera: true,
            imageCount: this.props.maxCount,
            isRecordSelected: true,
        }).then(res => {

            
            // 选择成功，渲染图片
            this.setState({
                file: res
            }, () => {
            })
            this.props.afterRead(res)
        })
    }

    componentWillUnmount() {
        SyanImagePicker.removeAllPhoto()
    }
    render() {
        const { fileList, maxCount, style } = this.props
        return (
            <View style={[Style.uploadProfileContain, style]}>
                {this.props.fileList.map((item: any, index: number) => (
                    <PressButton key={index} style={{ ...row, marginRight: 10, marginVertical: 5, position: 'relative' }} onPress={() => this.selectImage(index)}>
                        <PressButton style={Style.closeIcon} onPress={(e) => {
                            SyanImagePicker.removePhotoAtIndex(index);
                            this.props.deleteImage(index)
                        }}>
                            <Image source={icon_imgdel} style={getImageSize(17)}></Image>
                        </PressButton>
                        <Image source={{ uri: item.uri || item.url }} style={{
                            width: this.props.width,
                            height: this.props.height,
                            borderRadius: Theme.radius_md
                        }} />
                    </PressButton>
                ))
                }
                {
                    (fileList.length < maxCount) &&
                    (<PressButton style={{
                        ...Style.uploadProfileItem,
                        width: this.props.width,
                        height: this.props.height,
                        marginVertical: 5
                    }} onPress={() => this.selectImage()}>
                        <View style={columnCenter}>
                            <Image source={camera} style={{ width: 30, height: 25 }} />
                            <Text style={{
                                fontSize: Theme.font_size_sm,
                                color: Theme.color_text_disabled,
                                marginTop: 5
                            }} >上传图片</Text>
                        </View>
                    </PressButton>)
                }
            </View>
        )
    }
}

const Style = StyleSheet.create({
    uploadProfileContain: {
        ...row,
        flexWrap: 'wrap',
    },
    uploadProfileItem: {
        ...columnCenter,
        borderColor: Theme.border_color_base,
        borderWidth: Theme.border_width_md
    },
    upLoadImage: {

    },
    closeIcon: {
        position: "absolute",
        right: -10,
        top: -10,
        padding: 5,
        zIndex: 1000
    },
})