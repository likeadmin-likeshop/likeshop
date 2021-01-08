import { Toast } from '@ant-design/react-native'
import React from 'react'
import { Image, SafeAreaView, ScrollView, StyleSheet, Text, TextInput, View } from 'react-native'
import { color } from 'react-native-reanimated'
import { sendSms } from '../../api/app'
import { changeUserMobile } from '../../api/user'
import CountDown from '../../components/main/CountDown'
import Dialog from '../../components/main/Dialog'
import PressButton from '../../components/main/PressButton'
import { icon_warning } from '../../constraint/Image'
import { columnCenter, contain, getImageSize, row, rowCenter } from '../../constraint/Style'
import Theme from '../../constraint/Theme'
import { ScreenProps } from '../../typing'
import { goBack } from '../../utils/navigation'
import { isSuccess } from '../../utils/request'

type ChangePhoneProps = ScreenProps<'ChangePhone'>

export default class ChangePhone extends React.Component<ChangePhoneProps, any> {
    mobile: string
    type: number
    constructor(props: ChangePhoneProps) {
        super(props);
        this.mobile = props.route.params.mobile
        this.type = props.route.params.type
        this.state = {
            time: 59 * 1000,
            startCount: false,
            newMobile: '',
            smsCode: '',
            showDialog: false
        }
    }

    // 发送验证码
    $sendSms() {
        sendSms({
            mobile: this.mobile,
            key: "BGSJHM"
        }).then((res: any) => {
            if(isSuccess(res)) {
                Toast.info(res.msg)
                this.setState({
                    startCount: true
                });
            }
        })
    }

    // 更换手机接口
    $changeUserMobile() {
        if(!this.state.newMobile) {
            Toast.info(this.type == 0 ? "请输入新的手机号码" : "请输入绑定手机号")
            return;
        }
        if(!this.state.smsCode) {
            Toast.info( '请输入验证码')
            return;
        }
        changeUserMobile({
            mobile: this.mobile,
            new_mobile: this.state.newMobile,
            code: this.state.smsCode
        }).then((res: any) => {
            this.setState({
                showMobile: false
            })
            Toast.info(res.msg, 1, () => {
                goBack();
            })
        })
    }

    render() {
        return (
            <SafeAreaView style={contain}>
                <ScrollView style={{flex: 1}}>
                    <View style={Style.Form}>
                        {
                        this.type == 0 && <View style={[Style.modifyRow, row, Style.bbLine]}>
                                <Text style={{
                                    width: 56, 
                                }}>+86</Text>
                                <View style={{backgroundColor: Theme.border_color_base, width: 1, height: '100%'}}></View>
                                <Text style={{marginLeft: 15}}>{this.mobile}</Text>
                            </View>
                        }
                        <View style={[Style.modifyRow, row, Style.bbLine]}>
                            <Text style={{width: 71}}>{this.type == 0 ? '新手机号' : '手机号'}</Text>
                            <TextInput style={{padding: 0}} onChangeText={(text) => {
                                this.setState({
                                    newMobile: text
                                })
                            }} placeholder={this.type == 0 ? "请输入新的手机号码" : "请输入绑定手机号"} />
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
                        if(!this.state.newMobile) {
                            Toast.info('请输入新的手机号码')
                            return;
                        }
                        if(!this.state.smsCode) {
                            Toast.info( '请输入验证码')
                            return;
                        }
                        this.setState({
                            showDialog: true
                        })
                    }}>
                        <Text style={{color: 'white', fontSize: Theme.font_size_md}}>确定</Text>
                    </PressButton>
                </ScrollView>
                <Dialog
                    isVisible={this.state.showDialog}
                    confirmButtonText={"确认"}
                    onConfirm={() => {
                        this.$changeUserMobile();
                    }}
                    onCancel={() => this.setState({ showDialog: false })}
                >
                    <View style={columnCenter}>
                        <Image source={icon_warning} style={getImageSize(28)} />
                        <Text style={{marginTop: 15, color: Theme.brand_primary, fontSize: Theme.font_size_md}}>您的账号将会变为更改后的手机号</Text>
                        <Text style={{marginTop: 5, fontSize: Theme.font_size_md }} >确定更换手机号吗？</Text>
                    </View>
                </Dialog>
            </SafeAreaView>
        )
    }
}

const Style = StyleSheet.create({
    Form: {
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