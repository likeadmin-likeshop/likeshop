import React from 'react'
import { View, Text, StyleSheet, Image, SafeAreaView, TextInput, Keyboard, Alert, Clipboard, KeyboardAvoidingView } from 'react-native';
import { connect } from 'react-redux';
import { Dispatch } from 'redux';
import SInfo from "react-native-sensitive-info";
import { RootState, ScreenProps } from '../../typing';
import {  mall_logo, icon_wechat, icon_del } from '../../constraint/Image';
import Theme from '../../constraint/Theme'
import { getImageSize, row, columnCenter, rowBetween, rowCenter } from "../../constraint/Style"
import PressButton from '../../components/main/PressButton';
import { navigate, goBack } from '../../utils/navigation';
import { Toast } from '@ant-design/react-native';
import { accountLogin, codeLogin, sendSms, wxpLogin } from '../../api/app';
import { isSuccess } from '../../utils/request';
import { setLogin } from '../../store/reducers/userReducer';
import { setToken } from '../../utils/auth';
import CountDown from '../../components/main/CountDown';
import WeChat, { isWXAppInstalled } from '../../utils/wechat';
import { postEvent } from '../../utils/event';
import { ScrollView } from 'react-native-gesture-handler';
import { isiPhoneX, ScreenHeight, ScreenWidth, StatusBarHeight } from '../../utils/app';


type LoginProps = ScreenProps<'Login'> & ReturnType<typeof mapDispatchToProps> & ReturnType<typeof mapStateToProps>

class Login extends React.Component<LoginProps, any> {
    constructor(props: LoginProps) {
        super(props);
        this.state = {
            startCount: false,
            isAccountLogin: true,
            mobile: '',
            password: '',
            code: '',
            showDoc: true
        }
    }

    accountLogin() {
        const { mobile, password } = this.state
        return (
            <View style={[columnCenter, { marginTop: 20 }]}>
                <View style={loginStyle.textInputItem}>
                    <TextInput value={mobile} keyboardType="numeric" placeholder={"请输入手机号"} style={{ height: '100%' }} onChangeText={(mobile) => this.setState({ mobile })} />
                </View>
                <View style={[rowBetween, loginStyle.textInputItem]}>
                    <View style={{ flex: 1 }}>
                        <TextInput value={password} secureTextEntry={true} placeholder={"请输入密码"} style={{ height: '100%' }} onChangeText={(password) => this.setState({ password })} />
                    </View>
                    <View style={row}>
                        <Text style={{ backgroundColor: Theme.border_color_base, width: 1, height: '50%', marginRight: 10 }} />
                        <Text style={{ color: Theme.color_text_paragraph }} onPress={() => navigate("ForgetPwd")}>忘记密码</Text>
                    </View>
                </View>
            </View>
        )
    }
    _getCode() {
        const { mobile } = this.state
        if (!mobile) return Toast.info('请输入手机号')
        sendSms({
            mobile: mobile,
            key: 'YZMDL'
        }).then((res: any) => {
            if (isSuccess(res)) {
                Toast.info(res.msg)
                this.setState({
                    startCount: true
                })
            }
        })
    }
    smsLogin() {
        const { mobile, code, startCount } = this.state
        return (
            <View style={[columnCenter, { marginTop: 20 }]}>
                <View style={loginStyle.textInputItem}>
                    <TextInput value={mobile} keyboardType="numeric" placeholder={"请输入手机号"} style={{ height: '100%' }} onChangeText={(mobile) => this.setState({ mobile })} />
                </View>
                <View style={[rowBetween, loginStyle.textInputItem, { paddingRight: 0 }]}>
                    <View style={{ flex: 1 }}>
                        <TextInput value={code} placeholder={"请输入验证码"} style={{ height: '100%' }} onChangeText={(code) => this.setState({ code })} />
                    </View>
                    <PressButton style={{ ...loginStyle.smsCodeBtn, ...rowCenter }} onPress={() => this._getCode()}>
                        {!startCount ? <Text style={{ color: Theme.brand_primary, fontSize: Theme.font_size_sm }}>获取验证码</Text> :
                            <CountDown style={{ color: Theme.brand_primary, fontSize: Theme.font_size_lg }} time={59 * 1000} format="sss" onFinish={() => this.setState({ startCount: false })} />}
                    </PressButton>
                </View>
            </View>
        )
    }

    setAccountStatus() {
        this.setState({ isAccountLogin: !this.state.isAccountLogin })
    }

    _login() {
        const { isAccountLogin, code, mobile, password } = this.state

        if (!mobile) return Toast.info('请输入手机号')
        if (isAccountLogin) {
            if (!password) return Toast.info('请输入密码')
            Keyboard.dismiss()
            accountLogin({
                account: mobile,
                password
            }).then((res: any) => {
                if (isSuccess(res)) {
                    this._loginHandel(res)
                }
            })
        } else {
            if (!code) return Toast.info('请输入验证吗')
            Keyboard.dismiss()
            codeLogin({
                account: code,
                code
            }).then((res: any) => {
                if (isSuccess(res)) {
                    this._loginHandel(res)
                }
            })
        }
    }
    _loginHandel(res: any) {
        const { setLogin } = this.props
        SInfo.setItem('token', res.data.token, {})
        setToken(res.data.token)
        setLogin(true)
        postEvent('GET_CART_NUM')
        Toast.info(res.msg, 1, () => {
            goBack()
        })
    }
    getAccessToken(code: string) {
        // console.log(code)
        wxpLogin({ code }).then((res: any) => {
            if (isSuccess(res)) {
                this._loginHandel(res)
            }
        }).catch(() => {
            Toast.info('登录失败，请稍候再试')
        })

    }
    async _wechatLogin() {
        let iswx = await isWXAppInstalled()

        if (iswx) {
            let result = await WeChat.sendAuthRequest('snsapi_userinfo', 'wechat_sdk_demo');

            switch (result.errCode) {
                case 0: this.getAccessToken(result.code as string)
                    break;
            }
        }
    }
    render() {
        const { isAccountLogin, showDoc } = this.state
        const { wechatLogin } = this.props
        return (
            <SafeAreaView style={loginStyle.loginContainer}>
                <ScrollView keyboardShouldPersistTaps="handled" showsVerticalScrollIndicator={false}>
                    <View style={{minHeight: ScreenHeight - StatusBarHeight - (isiPhoneX ? 94 : 50)}}>
                        <View style={{ paddingHorizontal: 20, flex: 1 }}>
                            <View style={[columnCenter]}>
                                <Image source={mall_logo} style={{ width: 140, height: 40, marginVertical: 20 }} />
                            </View>
                            {isAccountLogin ? this.accountLogin() : this.smsLogin()}
                            <PressButton style={{ borderRadius: Theme.radius_circel, marginTop: 25 }} type="primary" size="lg" onPress={() => this._login()}>登录</PressButton>
                            <View style={[rowBetween, { marginTop: 25 }]}>
                                <Text style={{ color: Theme.color_text_secondary, fontSize: Theme.font_size_base }} onPress={this.setAccountStatus.bind(this)}>{isAccountLogin ? '短信验证码登录' : '账号密码登录'}</Text>
                                <Text style={{ color: Theme.color_text_secondary, fontSize: Theme.font_size_base }} onPress={() => navigate('RegAccount')}>注册账号</Text>
                            </View>
                            {wechatLogin == 1 ? <View>
                                <View style={[rowCenter, { marginTop: 50, paddingHorizontal: 20 }]}>
                                    <Text style={loginStyle.lineStyle} />
                                    <Text style={{ color: Theme.color_text_muted, marginHorizontal: Theme.h_spacing_md }}>其他登录方式</Text>
                                    <Text style={loginStyle.lineStyle} />
                                </View>
                                <PressButton style={{ ...columnCenter, marginTop: 20 }} onPress={() => this._wechatLogin()}>
                                    <Image source={icon_wechat} style={getImageSize(40)} />
                                    <View style={{ marginTop: Theme.h_spacing_sm }}>
                                        <Text style={{ color: Theme.color_text_paragraph }}>微信登录</Text>
                                    </View>
                                </PressButton>
                            </View> : null}
                        </View>
                        <View style={[rowCenter]}>
                            <Text style={{color: Theme.color_text_secondary, fontSize: Theme.font_size_sm}}>登录即代表您已同意LikeShop</Text>
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
                </ScrollView>
            </SafeAreaView>
        )
    }
}

const loginStyle = StyleSheet.create({
    loginContainer: {
        backgroundColor: Theme.fill_base,
        flex: 1,
    },
    textInputItem: {
        width: ScreenWidth - 40,
        height: 44,
        borderBottomWidth: Theme.border_width_sm,
        borderBottomColor: Theme.border_color_base,
        paddingHorizontal: 10,
        marginBottom: 15
    },
    loginBtn: {
        width: ScreenWidth - 40,
        height: 42,
        backgroundColor: Theme.brand_primary,
        borderRadius: Theme.radius_circel
    },
    smsCodeBtn: {
        height: 26,
        width: 80,
        borderWidth: Theme.border_width_md,
        borderColor: Theme.brand_primary,
        borderRadius: Theme.radius_circel
    },
    lineStyle: {
        width: 100,
        height: 0.5,
        backgroundColor: Theme.border_color_base
    }
})
let mapStateToProps = (state: RootState) => {
    return {
        wechatLogin: state.appStore.appOption.wechat_login
    }
}

let mapDispatchToProps = (dispatch: Dispatch) => ({
    setLogin: (isLogin: boolean) => dispatch(setLogin(isLogin)),
})

export default connect(mapStateToProps, mapDispatchToProps)(Login)