import React from "react";
import {View, Image, Text } from "react-native";
import { RootState, ScreenProps } from "../../typing";
import { contain, getImageSize, row } from "../../constraint/Style";
import Theme from "../../constraint/Theme";
import {  navigate, replace, reset } from "../../utils/navigation";
import PressButton from "../../components/main/PressButton";
import { connect } from "react-redux";
import CountDown from "../../components/main/CountDown";
import { StatusBarHeight } from "../../utils/app";

type AdPagesProps = ScreenProps<'AdPages'> &  ReturnType<typeof mapStateToProps>

class AdPages extends React.Component<AdPagesProps, any> {
    constructor(props: AdPagesProps) {
        super(props);
        this.state = {
        };
    }

    render() {
        const {appad }: {appad: any} = this.props
        return (
            appad.image ? <View style={contain}>
                <PressButton style={{position: 'absolute', top: StatusBarHeight + 20, right: 20, zIndex: 10, backgroundColor: 'rgba(0,0,0,.25)', padding: 5, borderRadius: Theme.radius_circel}} onPress={() => reset('Index')}>
                    <CountDown  style={{color: Theme.fill_base, fontSize: 12}} format="ss秒跳过广告" time={4*1000} onFinish={() => reset('Index')}  />
                </PressButton>
                <PressButton activeOpacity={1} style={{width: '100%', height: '100%'}} onPress={() => {
                    if(appad.link_type == 3) {
                        replace('MyWebView', {url: appad.link})
                    }
                }}>
                    <Image style={{width: '100%', height: '100%'}} resizeMode="cover" source={{uri: appad.image}} />
                </PressButton>
            </View> : null
        )
    }
}
let mapStateToProps = (state: RootState) => {
    return {
        appad: state.appStore.appOption.appad
    }
}
export default connect(mapStateToProps)(AdPages);