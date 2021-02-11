import React from "react";
import { BackHandler, Platform, StyleSheet, View, Image } from "react-native";
import WebView from "react-native-webview";
import { ScreenProps } from "../../typing";
import { contain, getImageSize, row } from "../../constraint/Style";
import Theme from "../../constraint/Theme";
import { setParams, goBack } from "../../utils/navigation";
import { icon_back, icon_close } from "../../constraint/Image";
import PressButton from "../../components/main/PressButton";

type MyWebViewProps = ScreenProps<'MyWebView'>

class MyWebView extends React.Component<MyWebViewProps, any> {
    url: string;
    webView!: WebView | null;
    listener: any;
    constructor(props: MyWebViewProps) {
        super(props);
        this.url = props.route.params.url
        props.navigation.setOptions({
            headerLeft: () => (
                <View style={row}>
                    <PressButton onPress={() => this.onBack()}>
                        <Image source={icon_back} style={getImageSize(30)} />
                    </PressButton>
                    <PressButton onPress={() => goBack()}>
                        <Image source={icon_close} style={getImageSize(30)} />
                    </PressButton>
                </View>
            ),
            headerLeftContainerStyle: {
                width: 120
            }
        });
        this.state = {
            progress: 0,
            canGoBack: false
        };
    }
    UNSAFE_componentWillMount() {
        this.listener = BackHandler.addEventListener('hardwareBackPress', this.onBack.bind(this));
    }
    componentWillUnmount() {
        this.listener.remove()
    }
    onBack() {
        //如果网页还有上级页面（可返回）
        if (this.state.canGoBack) {
            this.webView?.goBack();
            return true
        } else {
            goBack()
            return true
        }
    }
    onNavigationStateChange(e: any) {
        this.setState({
            title: e.title,
            //设置是否要以返回上级页面
            canGoBack: e.canGoBack
        });
    }
    render() {
        const { progress } = this.state
        return (
            <View style={contain}>
                <WebView
                    ref={webview => this.webView = webview}
                    source={{ uri: this.url }}
                    geolocationEnabled={false}
                    onNavigationStateChange={(e) => this.onNavigationStateChange(e)}
                    onLoadProgress={({ nativeEvent }: any) => {
                        const { progress, title, canGoBack } = nativeEvent
                        this.setState({
                            progress: progress,
                            canGoBack: canGoBack
                        })

                        if (progress == 1) {
                            setParams({ name: title })
                        }
                    }}
                    javaScriptEnabled={true}
                    domStorageEnabled={true}
                    decelerationRate="normal"
                />
            </View>
        )
    }
}

export default MyWebView