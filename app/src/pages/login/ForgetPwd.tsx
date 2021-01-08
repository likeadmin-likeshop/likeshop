import React from 'react'
import { ScreenProps } from '../../typing';
import Theme from '../../constraint/Theme';
import { View, Text, StyleSheet, Image, SafeAreaView, TextInput, Keyboard } from 'react-native';
import { getImageSize, row, columnCenter, rowBetween, rowCenter, contain } from "../../constraint/Style"
import PressButton from '../../components/main/PressButton';
import CountDown from '../../components/main/CountDown';
import { Toast } from '@ant-design/react-native';
import { sendSms, forgetPwd } from '../../api/app';
import { isSuccess } from '../../utils/request';
import { navigate } from '../../utils/navigation';

type ForgetPwdProps = ScreenProps<'ForgetPwd'>

export default class ForgetPwd extends React.Component<ForgetPwdProps, any> {
    constructor(props : ForgetPwdProps) {
        super(props)
        this.state = {
            startCount: false,
            mobile: '',
            password: '',
            code: '',
            pwdAgain: ''
        }
    }
    _forgetPwd() {
        const {mobile, password,code,pwdAgain} = this.state
        if (!mobile) return Toast.info('请输入手机号')
        if (!code) return Toast.info('请输入验证吗')
        if (!password) return Toast.info('请输入密码')
        if (!pwdAgain) return Toast.info('请再次输入验证吗')
        if (password != pwdAgain) return Toast.info('两次输入的密码不一致')
        Keyboard.dismiss()
        forgetPwd({
            mobile,
            password,
            code,
            repassword: pwdAgain
        }).then((res:any) => {
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
            key: 'ZHMM'
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
        const {startCount, mobile, password, code, pwdAgain} = this.state
        return (
            <SafeAreaView style={contain}>
                <View style={forgetPwdStyle.formContainer}>
                    <View style={forgetPwdStyle.formItemContainer}>
                        <View style={[forgetPwdStyle.formItem, row]}>
                            <Text style={{width: 90, fontSize: Theme.font_size_md, color: Theme.color_text_paragraph}}>手机号</Text>
                            <View style={{flex: 1, height: 21}}>
                                <TextInput value={mobile} placeholder={"请输入手机号码"} style={{height: '100%', padding: 0}} onChangeText={(mobile) => this.setState({mobile})}></TextInput>
                            </View>
                        </View>
                        <View style={[forgetPwdStyle.formItem, row, {paddingRight: 0}]}>
                            <Text style={{width: 90, fontSize: Theme.font_size_md, color: Theme.color_text_paragraph}}>短信验证码</Text>
                            <View style={{flex: 1, height: 21}}>
                                <TextInput value={code} placeholder={"请输入验证码"} style={{height: '100%', padding: 0}} onChangeText={(code) => this.setState({code})}></TextInput>
                            </View>
                            <PressButton style={{...forgetPwdStyle.getCodeBtn, ...rowCenter}} onPress={() => this._getCode()}>
                                {!startCount ? <Text style={{ color: Theme.brand_primary, fontSize: Theme.font_size_sm }}>获取验证码</Text> :
                                    <CountDown style={{ color: Theme.brand_primary, fontSize: Theme.font_size_lg }} time={59 * 1000} format="sss" onFinish={() => this.setState({ startCount: false })} />}
                            </PressButton>
                        </View>
                        <View style={[forgetPwdStyle.formItem, row]}>
                            <Text style={{width: 90, fontSize: Theme.font_size_md, color: Theme.color_text_paragraph}}>重置密码</Text>
                            <View style={{flex: 1, height: 21}}>
                                <TextInput value={password} placeholder={"6-20位数字+字母或符号组合"} style={{height: '100%', padding: 0}} onChangeText={(password) => this.setState({password})}></TextInput>
                            </View>
                        </View>
                        <View style={[forgetPwdStyle.formItem, row]}>
                            <Text style={{width: 90, fontSize: Theme.font_size_md, color: Theme.color_text_paragraph}}>确认密码</Text>
                            <View style={{flex: 1, height: 21}}>
                                <TextInput value={pwdAgain} placeholder={"再次输入新密码确认"} style={{height: '100%', padding: 0}} onChangeText={(pwdAgain) => this.setState({pwdAgain})}></TextInput>
                            </View>
                        </View>
                    </View>
                    <PressButton style={{ borderRadius: Theme.radius_circel, marginTop: 40 }} type="primary" size="lg" onPress={() => this._forgetPwd()}>确认</PressButton>
                </View>
            </SafeAreaView>
        )
    }
}

const forgetPwdStyle = StyleSheet.create({
    formContainer: {
        backgroundColor: Theme.fill_base,
        flex: 1,
        paddingHorizontal: 20
    },
    formItemContainer: {
        marginTop: 40,
    },
    formItem: {
        padding: 10,
        borderBottomWidth: Theme.border_width_sm,
        borderBottomColor: Theme.border_color_base,
        marginBottom: 15
    },
    getCodeBtn: {
        width: 80,
        height: 26,
        borderWidth: 1, 
        borderColor: Theme.brand_primary, 
        borderRadius: Theme.radius_circel
    },
    submitBtn: {
        backgroundColor: Theme.brand_primary,
        paddingVertical: 10,
        paddingHorizontal: 149,
        borderRadius: Theme.radius_circel,
        marginHorizontal: 10,
        marginTop: 30
    }
})