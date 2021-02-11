import React from 'react'
import { ScreenProps } from '../../typing'
import { View, SafeAreaView, StyleSheet, Text, Image, ScrollView, Clipboard, Linking } from 'react-native'
import { contain, rowBetween, getImageSize, columnCenter, row, rowCenter } from '../../constraint/Style'
import Theme from '../../constraint/Theme'
import { bg_contact, customer_code, icon_wechat1 } from '../../constraint/Image'
import LinearGradient from 'react-native-linear-gradient'
import { ScreenWidth } from '../../utils/app'
import PressButton from '../../components/main/PressButton'
import { Toast } from '@ant-design/react-native'
import { getService } from '../../api/app'
import { isSuccess } from '../../utils/request'

type ContactServiceProps = ScreenProps<'ContactService'>

export default class ContactService extends React.Component<ContactServiceProps, any> {
    constructor(props: ContactServiceProps) {
        super(props)
        this.state = {
            server: {}
        }
    }
    UNSAFE_componentWillMount() {
        this._getService()
    }
    _getService() {
        getService().then((res: any) => {
            if(isSuccess(res)) {
                this.setState({
                    server: res.data
                })
            }
        })
    }
    render() {
        const {server: {image, phone, time, wechat}} = this.state
        return (
            <SafeAreaView style={contain}>
                <LinearGradient style={{ flex: 1, }} colors={["#FF2C3C", "#F20407"]} start={{ x: 0, y: 0 }} end={{ x: 0, y: 1 }}>
                    <ScrollView showsVerticalScrollIndicator={false}>
                        <View style={{ alignItems: 'center' }}>
                            <Image source={bg_contact} style={{ height: 383 / 373 * ScreenWidth, width: ScreenWidth, position: 'absolute', top: 0 }} />
                            <View style={{ borderColor: '#FA7949', borderWidth: 5, borderRadius: 10, backgroundColor: Theme.fill_base, width: 310, paddingTop: 40, paddingBottom: 20, alignItems: 'center', marginTop: 35 }}>
                                <Image source={{uri: image}} style={{ width: 192, height: 192 }} />
                                <Text style={{ fontSize: Theme.font_size_lg, color: Theme.brand_primary, marginTop: Theme.v_spacing_md }}>客服微信</Text>
                                <PressButton style={{ marginTop: 30 }} onPress={() => {
                                    Clipboard.setString(wechat)
                                    Toast.success('复制成功')
                                }}>
                                    <LinearGradient colors={["#FFA200", "#FF5E44"]} style={{ ...rowCenter, width: 230, height: 50, borderRadius: 50 }}>
                                        <Image source={icon_wechat1} style={{ width: 32, height: 24, marginRight: 6 }} />
                                        <Text style={{ color: Theme.fill_base, fontSize: Theme.font_size_lg }}>微信扫码添加</Text>
                                    </LinearGradient>
                                </PressButton>
                                <Text style={{ marginTop: 20, fontSize: Theme.font_size_xs }}>{time}</Text>
                                <Text style={{ fontSize: Theme.font_size_md, marginTop: 28 }} onPress={() => Toast.info("该功能暂未开放")}>在线客服</Text>
                            </View>
                            <Text style={{ color: Theme.fill_base, fontSize: Theme.font_size_xs, marginTop: 40 }}>无法添加或疑难问题请联系工作人员</Text>
                            <View style={{ ...row, marginTop: 15 }}>
                                <Text style={{ color: Theme.fill_base, fontSize: Theme.font_size_xs, }}>{phone}</Text>
                                <PressButton style={{ marginLeft: 10 }}
                                      onPress={() => {
                                        Linking.openURL('tel:'+phone);
                                    }}
                                >
                                    <LinearGradient colors={["#FFA200", "#FF5E44"]} style={{ width: 60, height: 24, borderRadius: 30, justifyContent: 'center', alignItems: 'center' }}>
                                        <Text style={{ color: Theme.fill_base, fontSize: Theme.font_size_xs }}>拨打</Text>
                                    </LinearGradient>
                                </PressButton>
                                <PressButton style={{ width: 60, height: 24, borderRadius: 30, justifyContent: 'center', alignItems: 'center', backgroundColor: 'rgba(256, 256, 256, 0.5)', marginLeft: 5 }} 
                                onPress={() => {
                                    Clipboard.setString(phone+ '');
                                    Toast.success('复制成功')
                                }}>
                                    <Text style={{ color: Theme.fill_base, fontSize: Theme.font_size_xs }}>复制</Text>
                                </PressButton>
                            </View>
                        </View>
                    </ScrollView>
                </LinearGradient>
            </SafeAreaView>
        )
    }
}

const styles = StyleSheet.create({

})