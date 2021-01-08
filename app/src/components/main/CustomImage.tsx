import React from "react";
import { View, ImageSourcePropType, Image, ViewStyle, ImageURISource, StyleSheet } from "react-native";
import Theme from "../../constraint/Theme";
import { loading_error, loading_img } from "../../constraint/Image";
import { rowCenter } from '../../constraint/Style'
interface CustomImageProps {
    width?: number
    height?: number
    radius?: number
    resizeMode?: 'cover' | 'contain' | 'stretch' | 'center'
    source: ImageSourcePropType
    autoSize?: 'width' | 'height' | 'none'
    showLoading?: boolean
}

class CustomImage extends React.Component<CustomImageProps, any> {
    [x: string]: any;
    constructor(props: CustomImageProps) {
        super(props);
        this.state = {
            loading: true,
            error: false,
            style: { width: props.width, height: props.height }
        }
    }
    static defaultProps = {
        autoSize: 'none',
        showLoading: true
    }

    UNSAFE_componentWillReceiveProps(props: CustomImageProps) {
        const { source, width, height } = this.props
        if (props.source !== source) {
           
            this.getImageSize(props)
        }
        if (props.width !== width || props.height !== height) {
            this.setState({
                style: {
                    width: props.width,
                    height: props.height
                }
            })
        }
     
    }
    UNSAFE_componentWillMount() {
        this.getImageSize()
    }
    getImageSize(props?: CustomImageProps) {
        let { source, autoSize, } = props || this.props
        let { style: { width, height } } = this.state
        if (autoSize == 'none') {
            return
        }

        let uri = (source as ImageURISource).uri
        if (uri) {
            Image.getSizeWithHeaders(uri, {}, (w, h) => {
                if(!w || !h) return
                if (autoSize == "height") {
                    height = width * h / w
                } else if (autoSize == "width") {
                    width = height * w / h
                }
                this.setState({
                    style: {
                        width,
                        height,
                    }
                })
            }, () => { })
        }
    }

    onLoad() {
        this.setState({
            loading: false,
            error: false
        })
    }
    onError() {
        this.setState({
            error: true,
            loading: false
        })
    }
    render() {
        const { radius, resizeMode, source, showLoading } = this.props
        const { loading, error, style } = this.state
        let uri = (source as ImageURISource).uri
        return (
            <View style={[style, { borderRadius: radius, overflow: 'hidden', }]} ref={(ref) => this.imgWrap = ref} >
                {showLoading && loading &&
                    <View style={styles.imgWrap}>
                        <Image
                            style={styles.imgload}
                            source={loading_img}
                        />
                    </View>
                }
                {!error && uri ? <Image
                    source={source}
                    style={{ width: '100%', height: '100%', }}
                    resizeMode={resizeMode}
                    onLoad={this.onLoad.bind(this)}
                    onError={this.onError.bind(this)}
                /> :
                    <View style={styles.imgWrap}>
                        <Image
                            style={{ ...styles.imgload, width: 37.9 }}
                            source={loading_error}
                        />
                    </View>}
            </View>
        );
    }
}
const styles = StyleSheet.create({
    imgWrap: {
        width: '100%',
        height: '100%',
        backgroundColor: '#F8F8F8',
        ...rowCenter
    },
    imgload: {
        width: 35,
        height: 29,
        position: 'absolute',
        zIndex: 10
    }
});

export default CustomImage
