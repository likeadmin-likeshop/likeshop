import React from 'react'
import { ScreenProps } from '../../typing';
import { View, StyleSheet, Text, TextInput, Keyboard, SafeAreaView } from 'react-native';
import Theme from '../../constraint/Theme'
import { row, columnCenter, rowCenter, contain } from "../../constraint/Style"
import PressButton from '../../components/main/PressButton';
import { register, sendSms } from '../../api/app';
import { Toast } from '@ant-design/react-native';
import { isSuccess } from '../../utils/request';
import { navigate } from '../../utils/navigation';
import CountDown from '../../components/main/CountDown';
type RegAccountProps = ScreenProps<'RegAccount'>

export default class RegAccount extends React.Component<RegAccountProps, any> {
    constructor(props: RegAccountProps) {
        super(props);
        this.state = {
            startCount: false,
            mobile: '',
            code: '',
            password: '',
            pwdAgain: ''
        }
    }
    _register() {
        const { mobile, code, password, pwdAgain } = this.state
        if (!mobile) return Toast.info('请输入手机号')
        if (!code) return Toast.info('请输入验证吗')
        if (!password) return Toast.info('请输入密码')
        if (!pwdAgain) return Toast.info('请再次输入验证吗')
        if (password != pwdAgain) return Toast.info('两次输入的密码不一致')
        Keyboard.dismiss()
        register({
            mobile,
            code,
            password
        }, true).then((res: any) => {
            if (isSuccess(res)) {
                Toast.info(res.msg, 2, () => navigate('Login'))
            }
        })
    }
    _getCode() {
        const { mobile } = this.state
        if (!mobile) return Toast.info('请输入手机号')
        sendSms({
            mobile: mobile,
            key: 'ZCYZ'
        }).then((res: any) => {
            if (isSuccess(res)) {
                Toast.info(res.msg)
                this.setState({
                    startCount: true
                })
            }
        })
    }
    render() {
        const { mobile, code, password, pwdAgain, startCount } = this.state
        return (
            <SafeAreaView style={contain}>
                <View style={regAccountStyle.formContainer}>
                    <View style={[regAccountStyle.formItemContain, columnCenter]}>
                        <View style={[regAccountStyle.formItem, row]}>
                            <Text style={regAccountStyle.labelStyle}>手机号</Text>
                            <View style={{ height: 40, flex: 1 }}>
                                <TextInput keyboardType="numeric" value={mobile} placeholder={"请输入手机号码"} style={{ height: '100%', padding: 0 }} onChangeText={(mobile) => this.setState({ mobile })} />
                            </View>
                        </View>
                        <View style={[regAccountStyle.formItem, row, { paddingRight: 0 }]}>
                            <Text style={regAccountStyle.labelStyle}>短信验证码</Text>
                            <View style={{ height: 40, flex: 1 }}>
                                <TextInput keyboardType="numeric" value={code} placeholder={"请输入短信验证码"} style={{ height: '100%', padding: 0 }} onChangeText={(code) => this.setState({ code })} />
                            </View>
                            <PressButton style={{...regAccountStyle.getCodeBtn, ...rowCenter}} onPress={() => this._getCode()}>
                                {!startCount ? <Text style={{ color: Theme.brand_primary, fontSize: Theme.font_size_sm }}>获取验证码</Text> :
                                    <CountDown style={{ color: Theme.brand_primary, fontSize: Theme.font_size_lg }} time={59 * 1000} format="sss" onFinish={() => this.setState({ startCount: false })} />}
                            </PressButton>
                        </View>
                        <View style={[regAccountStyle.formItem, row]}>
                            <Text style={regAccountStyle.labelStyle}>设置密码</Text>
                            <View style={{ height: 40, flex: 1 }}>
                                <TextInput value={password} secureTextEntry={true} placeholder={"6-20位数字+字母或符号组合"} style={{ height: '100%', padding: 0 }} onChangeText={(password) => this.setState({ password })} />
                            </View>
                        </View>
                        <View style={[regAccountStyle.formItem, row]}>
                            <Text style={regAccountStyle.labelStyle}>确认密码</Text>
                            <View style={{ height: 40, flex: 1 }}>
                                <TextInput value={pwdAgain} secureTextEntry={true} placeholder={"请再次输入密码"} style={{ height: '100%', padding: 0 }} onChangeText={(pwdAgain) => this.setState({ pwdAgain })} />
                            </View>
                        </View>
                    </View>
                    {/* <View style={row}>
                        <Text style={{color: Theme.color_text_secondary, fontSize: Theme.font_size_xs}}>已阅读并同意《隐私协议》《会员章程》</Text>
                    </View> */}
                    <PressButton style={{ borderRadius: Theme.radius_circel, marginTop: 40, marginBottom: 20 }} type="primary" size="lg" onPress={() => this._register()}>立即注册</PressButton>
                    <View style={[rowCenter]}>
                            <Text style={{color: Theme.color_text_secondary, fontSize: Theme.font_size_sm}}>已阅读并同意LikeShop</Text>
                            <PressButton onPress={() => {
                                navigate("ServerExplain", {
                                    type: 0
                                });
                            }}><Text style={{ color: Theme.brand_primary, fontSize: Theme.font_size_sm }}>《服务协议》</Text></PressButton>
                            <Text style={{color: Theme.color_text_secondary, fontSize: Theme.font_size_sm}}>和</Text>
                            <PressButton onPress={() => {
                                navigate("ServerExplain", {
                                    type: 1
                                })
                            }}><Text style={{ color: Theme.brand_primary, fontSize: Theme.font_size_sm}}>《隐私协议》</Text></PressButton>
                        </View>
                </View>
            </SafeAreaView>
        )
    }
}

const regAccountStyle = StyleSheet.create({
    formContainer: {
        flex: 1,
        backgroundColor: "#fff",
        padding: 20
    },
    formItemContain: {
        marginTop: 30
    },
    labelStyle: {
        width: 90,
        fontSize: Theme.font_size_md,
        color: Theme.color_text_paragraph
    },
    formItem: {
        paddingHorizontal: 10,
        borderBottomColor: Theme.border_color_base,
        borderBottomWidth: Theme.border_width_sm,
        marginBottom: 15
    },
    getCodeBtn: {
        width: 80,
        height: 26,
        borderWidth: Theme.border_width_sm,
        borderColor: Theme.brand_primary,
        borderRadius: Theme.radius_circel
    },
})