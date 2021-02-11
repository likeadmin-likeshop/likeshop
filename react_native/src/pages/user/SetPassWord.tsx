import { Toast } from "@ant-design/react-native"
import React from "react"
import { SafeAreaView, StyleSheet, Text, TextInput, View, ScrollView } from "react-native"
import { forgetPwd, sendSms } from "../../api/app"
import CountDown from "../../components/main/CountDown"
import PressButton from "../../components/main/PressButton"
import { contain, row, rowCenter } from "../../constraint/Style"
import Theme from "../../constraint/Theme"
import { ScreenProps } from "../../typing"
import { goBack } from "../../utils/navigation"
import { isSuccess } from "../../utils/request"

type SetPassWordProps = ScreenProps<'SetPassWord'>

export default class SetPassWord extends React.Component<SetPassWordProps, any> {
    mobile: string
    constructor(props: SetPassWordProps) {
        super(props)
        this.mobile = props.route.params.mobile
        this.state = {
            startCount: false,
            smsCode: '',
            newPwd: '',
            rePwd: '',
            time: 59 * 1000
        }
    }

     // 发送验证码
     $sendSms() {
        sendSms({
            mobile: this.mobile,
            key: "ZHMM"
        }).then((res: any) => {
            if(isSuccess(res)) {
                Toast.info(res.msg)
                this.setState({
                    startCount: true
                });
            }
        })
    }

    // 忘记密码
    $setPwd() {
        const {newPwd, rePwd, smsCode} = this.state;
        if(!newPwd) {
            Toast.info("请输入新密码");
            return;
        }
        if(newPwd != rePwd || !rePwd) {
            Toast.info("二次输入密码不一致")
            return;
        }
        if(!smsCode) {
            Toast.info("请输入验证码");
            return;
        }
        
        forgetPwd({
            mobile: this.mobile,
            code: smsCode,
            password: newPwd,
            repassword: rePwd
        }).then((res: any) => {
            Toast.info(res.msg, 1, () => {
                goBack();
            })
        })
    }

    render() {
        return (
            <SafeAreaView style={contain}>
                <ScrollView style={{flex: 1}}>
                    <View style={Style.form}>
                        <View style={[Style.modifyRow, row, Style.bbLine]}>
                            <Text style={{
                                width: 56, 
                            }}>+86</Text>
                            <View style={{backgroundColor: Theme.border_color_base, width: 1, height: '100%'}}></View>
                            <Text style={{marginLeft: 15}}>{this.mobile}</Text>
                        </View>
                        <View style={[Style.modifyRow, row, Style.bbLine]}>
                                <Text style={{width: 71}}>设置密码</Text>
                                <TextInput secureTextEntry style={{padding: 0, flex: 1}} onChangeText={(text) => {
                                    this.setState({
                                        newPwd: text
                                    })
                                }} placeholder="请输入新密码" />
                            </View>
                            <View style={[Style.modifyRow, row, Style.bbLine]}>
                                <Text style={{width: 71}}>确认密码</Text>
                                <TextInput secureTextEntry style={{padding: 0, flex: 1}} onChangeText={(text) => {
                                    this.setState({
                                        rePwd: text
                                    })
                                }} placeholder="再次输入新密码确认" />
                            </View>
                        <View style={[Style.modifyRow, row, {paddingVertical: 10}]}>
                                <Text style={{width: 71}}>验证码</Text>
                                <TextInput placeholder={'请输入验证码'} style={{flex: 1}} onChangeText={(text) => {
                                    this.setState({
                                        smsCode: text
                                    })
                                }} />
                                <PressButton disabled={this.state.startCount} style={Style.sendBtn} onPress={() => {
                                    this.$sendSms()
                                }}>
                                    {!this.state.startCount ? 
                                        <Text style={{color: Theme.brand_primary}}>发送验证码</Text> : 
                                        <CountDown 
                                        time={this.state.time}  format="sss" 
                                        onFinish={() => this.setState({startCount: false})} 
                                        />
                                    }
                                </PressButton>   
                        </View>
                    </View>
                    <PressButton style={{...Style.btn, ...rowCenter}} onPress={() => {
                        this.$setPwd();
                    }}>
                        <Text style={{color: 'white', fontSize: Theme.font_size_md}}>确定</Text>
                    </PressButton>
                </ScrollView>
            </SafeAreaView>
        )
    }
}

const Style = StyleSheet.create({
    form: {
        backgroundColor: Theme.fill_base,
        marginTop: 10,
        paddingHorizontal: 20
    },
    modifyRow: {
        paddingVertical: 15,
    },
    bbLine: {
        borderBottomWidth: 1,
        borderBottomColor: Theme.border_color_base
    },
    btn: {
        backgroundColor: Theme.brand_primary,
        height: 40,
        marginHorizontal: 45,
        borderRadius: 10,
        marginTop: 30,
    },
    sendBtn: {
        borderWidth: Theme.border_width_sm,
        borderColor: Theme.brand_primary,
        paddingVertical: 11,
        width: 92,
        marginLeft: 5,
        ...rowCenter
    }
})