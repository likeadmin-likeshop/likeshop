import React from 'react'
import { ScreenProps, RootState } from '../../typing'
import { SafeAreaView, StyleSheet, View, Image, Text, ScrollView } from 'react-native'
import { contain, rowCenter, row, rowBetween, getImageSize, columnCenter } from '../../constraint/Style'
import Theme from '../../constraint/Theme'
import { my_portrait_empty, arrow_right } from '../../constraint/Image'
import PressButton from '../../components/main/PressButton'
import { connect } from 'react-redux'
import { getToken, clearToken } from '../../utils/auth'
import DeviceInfo from "react-native-device-info";
import { changeUserMobile, getUserInfo, setUserInfo, userLogout } from '../../api/user'
import { isSuccess } from '../../utils/request'
import { Toast } from '@ant-design/react-native'
import { goBack, navigate } from '../../utils/navigation'
import Popup from '../../components/main/Popup'
import CheckBox from '../../components/bussiness/CheckBox'
import { TextInput } from 'react-native-gesture-handler'
import CountDown from '../../components/main/CountDown'
import { sendSms } from '../../api/app'
import { postEvent } from '../../utils/event'
import SyanImagePicker from 'react-native-syan-image-picker';
import { imageUpload } from '../../utils/imageUpload'

type UserProfileProps = ScreenProps<'UserProfile'> & ReturnType<typeof mapStateToProps>

const FieldType = {
    NONE: '',
    SEX: 'sex',
    NICKNAME: 'nickname',
    AVATAR: 'avatar'
}
  

class UserProfile extends React.Component<UserProfileProps, any> {
    focus: (() => void) | undefined
    constructor(props: UserProfileProps) {
        super(props)
        this.state = {
            userInfo: {},
            showSexPicker: false,
            showNickname: false,
            showMobile: false,
            showPwd: false,
            sexList: ['男', '女'],
            selected: -1,
            fieldType: FieldType.NONE,
            newNickname: '',
            newMobile: '',
            smsCode: '',
            startCount: false,
            time: 60 * 1000,
            avatar: []
        }
    }

    $getUserInfo() {
        getUserInfo().then((res: any) => {
            if(isSuccess(res)) {
                this.setState({
                    userInfo: res.data,
                    selected: res.data.sex == 0 ? -1 : res.data.sex == 1 ? 0 : 1
                })
            }
        })
    }

    $setUserInfo(value: any) {
        const {fieldType} = this.state
        setUserInfo({
            field: fieldType,
            value: value
        }).then((res: any) => {
            if(isSuccess(res)) {
                Toast.info(res.msg);
                this.$getUserInfo()
            }
        })
    }

    UNSAFE_componentWillMount() {
        // this.$getUserInfo()
    }

    componentDidMount() {
        this.focus = this.props.navigation.addListener("focus", () => {
            this.$getUserInfo()    
        })
    }
    
    componentWillUnmount() {
        if(this.focus) {
            this.props.navigation.removeListener("focus", this.focus)
        }
    }

    render() {
        const {userInfo} = this.state;
        return (
            <SafeAreaView style={contain}>
                <ScrollView style={Style.userProfileContainer}>
                    <View style={Style.userProfile}>
                        <PressButton style={{...Style.userAvatarBox, ...rowCenter}} onPress={() => {
                            SyanImagePicker.asyncShowImagePicker({
                                imageCount: 1,
                                isCrop: true,
                                isCamera: true
                            }).then(res => {
                                imageUpload(res[0]).then((res: any) => {
                                    this.setState({
                                        avatar: [res],
                                        fieldType: FieldType.AVATAR
                                    })
                                    this.$setUserInfo(this.state.avatar[0].base_url)
                                })
                            })
                        }}>
                            <Image style={Style.userAvatar} source={userInfo.avatar ? {uri: userInfo.avatar} : my_portrait_empty} />
                        </PressButton>
                        <PressButton style={{...Style.rowInfo, ...row, ...Style.bdbLine}} onPress={() => {
                            this.setState({
                                showNickname: true,
                                fieldType: FieldType.NICKNAME
                            })
                        }}>
                            <Text style={Style.label}>昵称</Text>
                            <Text style={{fontSize: Theme.font_size_md, flex: 1, color: userInfo.nickname ? Theme.color_text_base : Theme.color_text_secondary}}>{userInfo.nickname ? userInfo.nickname : '未设置'}</Text>
                            <Image source={arrow_right} style={getImageSize(14)} />
                        </PressButton>
                        <PressButton style={{...Style.rowInfo, ...row, ...Style.bdbLine}} onPress={() => {
                            this.setState({
                                showSexPicker: true,
                                fieldType: FieldType.SEX
                            })
                        }}>
                            <Text style={Style.label}>性别</Text>
                            <Text style={{fontSize: Theme.font_size_md, flex: 1, color: userInfo.sex == 0 ? Theme.color_text_muted : Theme.color_text_base}}>{userInfo.sex == 0 ? '未设置' : userInfo.sex == 1 ? '男' : '女'}</Text>
                            <Image source={arrow_right} style={getImageSize(14)} />
                        </PressButton>
                        <View style={[Style.rowInfo, row, Style.bdbLine]}>
                            <Text style={Style.label}>手机号</Text>
                            <Text style={{fontSize: Theme.font_size_md, flex: 1, color: userInfo.mobile ? Theme.color_text_base : Theme.color_text_secondary}}>{userInfo.mobile ? userInfo.mobile : '未绑定'}</Text>
                            <PressButton style={Style.bdBtn} onPress={() => {
                                navigate('ChangePhone', {
                                    // 更换手机为0， 绑定手机为1
                                    type:  userInfo.mobile ? 0 : 1,
                                    mobile: this.state.userInfo.mobile
                                })
                            }}>
                                <Text style={{color: Theme.brand_primary}}>{userInfo.mobile ? '更换手机号' : '绑定手机号'}</Text>
                            </PressButton>
                        </View>
                        {/* <View style={[Style.rowInfo, row, Style.bdbLine]}>
                            <Text style={Style.label}>注册时间</Text>
                            <Text style={{fontSize: Theme.font_size_md, flex: 1}}>2019-10-12</Text>
                        </View> */}
                        <PressButton style={{...Style.rowInfo, ...rowBetween}} onPress={() => {
                            navigate("SetPassWord", {
                                mobile: this.state.userInfo.mobile
                            })
                        }}>
                            <Text style={Style.label}>登录密码</Text>
                            <View style={row}>
                                <Text style={{color: Theme.color_text_muted}}>点击设置</Text>
                                <Image source={arrow_right} style={getImageSize(14)} />
                            </View>
                        </PressButton>
                        
                        <PressButton style={{...Style.rowInfo, ...rowBetween, ...Style.bdbLine, marginTop: 10}} onPress={() => {
                            navigate("ServerExplain", {
                                type: 0
                            })
                        }}>
                            <Text style={Style.label}>服务协议</Text>
                            <Image source={arrow_right} style={getImageSize(14)} />
                        </PressButton>
                        <PressButton style={{...Style.rowInfo, ...rowBetween, ...Style.bdbLine}} onPress={() => {
                            navigate("ServerExplain", {
                                type: 1
                            })
                        }}>
                            <Text style={Style.label}>隐私政策</Text>
                            <Image source={arrow_right} style={getImageSize(14)} />
                        </PressButton>
                        <View style={[Style.rowInfo, rowBetween]}>
                            <Text style={Style.label}>关于我们</Text>
                            {/* <Text>v{DeviceInfo.getVersion()}</Text> */}
                            <Text>v2.0.1.20201226</Text>
                        </View>
                        <PressButton style={Style.primaryBtn} onPress={() => {
                            userLogout({token: getToken()}).then((res: any) => {
                                if(isSuccess(res)) {
                                    clearToken()
                                    postEvent('GET_CART_NUM')
                                    Toast.info('登出成功', 1, () => {
                                        goBack()
                                    })
                                }
                            })
                        }}>
                            <Text style={{fontSize: Theme.font_size_lg, color: 'white'}}>退出登录</Text>
                        </PressButton>
                    </View>
                    </ScrollView>
                {/* 设置密码 */}
                <Popup
                isVisible={this.state.showPwd}
                position="center"
                round
                closeable={!this.state.startCount}
                onClose={() => {
                    this.setState({
                        showPwd: false
                    })
                }}
                >
                    <View style={[Style.modifyContainer, columnCenter]}>
                        <Text style={Style.modifyTitle}>设置密码</Text>
                        <View style={[Style.modifyRow, row]}>
                            <Text style={{
                                width: 56, 
                            }}>+86</Text>
                            <View style={{backgroundColor: Theme.border_color_base, width: 1, height: '100%'}}></View>
                            <Text style={{marginLeft: 15}}>{userInfo.mobile}</Text>
                        </View>
                        <View style={[Style.modifyRow, row, {paddingVertical: 10}]}>
                            <Text style={{width: 71}}>验证码</Text>
                            <TextInput placeholder={'请输入验证码'} style={{flex: 1}} onChangeText={(text) => {
                                this.setState({
                                    smsCode: text
                                })
                            }}  />
                            {!this.state.startCount ? 
                                (
                                    <PressButton style={Style.sendBtn} onPress={() => {
                                        this.setState({
                                            startCount: true
                                        })
                                    }}>
                                        <Text>发送验证码</Text>
                                    </PressButton>
                                )
                             : (
                                 <View style={Style.sendBtn}>
                                    <CountDown 
                                    time={this.state.time}  format="sss" 
                                    onFinish={() => this.setState({startCount: false})} 
                                    />
                                 </View>
                                )}
                        </View>
                        <View style={[Style.modifyRow, row]}>
                            <Text style={{width: 71}}>设置密码</Text>
                            <TextInput style={{padding: 0}} onChangeText={(text) => {
                                this.setState({
                                    newNickname: text
                                })
                            }} placeholder="请输入新密码" />
                        </View>
                        <View style={[Style.modifyRow, row]}>
                            <Text style={{width: 71}}>确认密码</Text>
                            <TextInput style={{padding: 0}} onChangeText={(text) => {
                                this.setState({
                                    newNickname: text
                                })
                            }} placeholder="再次输入新密码确认" />
                        </View>
                        <PressButton style={{...Style.btn, ...rowCenter}}>
                            <Text style={{color: 'white', fontSize: Theme.font_size_md}}>确定</Text>
                        </PressButton>
                    </View>
                </Popup>
                {/* 更换手机号 */}
                <Popup
                isVisible={this.state.showMobile}
                position="center"
                round
                closeable={!this.state.startCount}
                onClose={() => {
                    this.setState({
                        showMobile: false
                    })
                }}
                >
                     <View style={[Style.modifyContainer, columnCenter]}>
                        <Text style={Style.modifyTitle}>更换手机号</Text>
                        <View style={[Style.modifyRow, row]}>
                            <Text style={{
                                width: 56, 
                            }}>+86</Text>
                            <View style={{backgroundColor: Theme.border_color_base, width: 1, height: '100%'}}></View>
                            <Text style={{marginLeft: 15}}>{userInfo.mobile}</Text>
                        </View>
                        <View style={[Style.modifyRow, row, {paddingVertical: 10}]}>
                            <Text style={{width: 71}}>验证码</Text>
                            <TextInput placeholder={'请输入验证码'} style={{flex: 1}} onChangeText={(text) => {
                                this.setState({
                                    smsCode: text
                                })
                            }} />
                            <PressButton disabled={this.state.startCount} style={Style.sendBtn} onPress={() => {
                                this.setState({
                                    startCount: true
                                });
                            }}>
                                {!this.state.startCount ? 
                                    <Text>发送验证码</Text> : 
                                    <CountDown 
                                    time={this.state.time}  format="sss" 
                                    onFinish={() => this.setState({startCount: false})} 
                                    />
                                }
                            </PressButton>          
                        </View>
                        <View style={[Style.modifyRow, row]}>
                            <Text style={{width: 71}}>新手机号</Text>
                            <TextInput style={{padding: 0}} onChangeText={(text) => {
                                this.setState({
                                    newMobile: text
                                })
                            }} placeholder="请输入新的手机号码" />
                        </View>
                        <PressButton style={{...Style.btn, ...rowCenter}} onPress={() => {
                            console.log("切换手机")
                        }}>
                            <Text style={{color: 'white', fontSize: Theme.font_size_md}}>确定</Text>
                        </PressButton>
                     </View>
                </Popup>
                {/* 昵称修改弹窗 */}
                <Popup
                isVisible={this.state.showNickname}
                position="center"
                round
                closeable
                onClose={() => {
                    this.setState({
                        showNickname: false,
                    })
                }}
                >
                    <View style={[Style.modifyContainer, columnCenter]}>
                        <Text style={Style.modifyTitle}>修改昵称</Text>
                        <View style={[Style.modifyRow, row]}>
                            <Text style={{width: 71}}>新昵称</Text>
                            <TextInput style={{padding: 0, flex: 1}} onChangeText={(text) => {
                                this.setState({
                                    newNickname: text
                                })
                            }} placeholder="请输入新的昵称" />
                        </View>
                        <PressButton style={{...Style.btn, ...rowCenter}} onPress={() => {
                            this.setState({
                                fieldType: FieldType.NICKNAME,
                                showNickname: false,
                            })
                            this.$setUserInfo(this.state.newNickname);
                        }}>
                            <Text style={{color: 'white', fontSize: Theme.font_size_md}}>确定</Text>
                        </PressButton>
                    </View>
                </Popup>
                {/* 性别选择弹窗 */}
                <Popup
                isVisible={this.state.showSexPicker}
                position="bottom"
                round
                closeable
                onClose={() => {
                    this.setState({
                        showSexPicker: false
                    })
                }}
                >
                    <View style={{height: 200}}>
                        <View style={[Style.popHeader, rowCenter]}>
                            <Text style={{fontSize: Theme.font_size_md}}>选择性别</Text>
                        </View>
                        <View style={Style.sexContain}>              
                            {
                                this.state.sexList.map((item: any, index: any) => (
                                    <PressButton 
                                    style={Style.item} 
                                    key={index}
                                    disabled={this.state.selected == index}
                                    onPress={() => {
                                        // 选中了
                                        this.setState({
                                            selected: index,
                                            showSexPicker: false
                                        })
                                        this.$setUserInfo(index + 1)
                                    }}
                                    >
                                        <Text style={{lineHeight: 22}}>{item}</Text>
                                        <CheckBox 
                                        checked={this.state.selected == index} 
                                        onClick={() => {
                                            // 选中了
                                            if(this.state.selected == index) {
                                                return;
                                            }
                                            this.setState({
                                                selected: index,
                                                showSexPicker: false
                                            })
                                            this.$setUserInfo(index + 1)
                                        }}/>
                                    </PressButton>
                                ))
                            }
                        </View>
                    </View>
                </Popup>
            </SafeAreaView>
        )
    }
}

const Style = StyleSheet.create({
    userProfileContainer: {
        
    },
    userProfile: {
        borderTopLeftRadius: 14,
        borderTopRightRadius: 14,
        marginTop: 10,
    },
    userAvatarBox: {
        padding: 15,
        backgroundColor: Theme.fill_base,
        borderTopLeftRadius: 14,
        borderTopRightRadius: 14
    },
    userAvatar: {
        width: 60,
        height: 60,
        borderRadius: Theme.radius_circel
    },
    rowInfo: {
        paddingVertical: 15,
        paddingHorizontal: 10,
        backgroundColor: Theme.fill_base,
    },
    bdbLine: {
        borderBottomWidth: Theme.border_width_sm,
        borderBottomColor: Theme.border_color_base
    },
    label: {
        fontSize: Theme.font_size_md,
        width: 90
    },
    bdBtn: {
        borderRadius: Theme.radius_circel,
        paddingVertical: 4,
        paddingHorizontal: 12,
        borderWidth: Theme.border_width_md,
        borderColor: Theme.brand_primary
    },
    primaryBtn: {
        backgroundColor: Theme.brand_primary,
        ...rowCenter,
        marginTop: 20,
        height: 44,
        marginLeft: 27,
        marginRight: 27,
        borderRadius: 5,
        marginBottom: 10
    },
    popHeader: {
        paddingVertical: 10
    },
    sexContain: {
        marginTop: 20
    },
    item: {
        paddingVertical: 12,
        paddingHorizontal: 10,
        ...rowBetween
    },
    modifyContainer: {
        paddingLeft: 15,
        paddingRight: 15,
        paddingBottom: 15,
        width: 290,
    },
    modifyTitle: {
        paddingVertical: 13
    },
    modifyRow: {
        paddingVertical: 15,
        width: '100%',
        borderBottomWidth: 1,
        borderBottomColor: Theme.border_color_base
    },
    btn: {
        backgroundColor: Theme.brand_primary,
        height: 40,
        paddingHorizontal: 90,
        borderRadius: 10,
        marginTop: 30,
    },
    sendBtn: {
        borderWidth: Theme.border_width_sm,
        borderColor: Theme.border_color_base,
        paddingVertical: 11,
        width: 92,
        marginLeft: 5,
        ...rowCenter
    }
})

let mapStateToProps = (state: RootState) => {
    return {
        user: state.userStore.user
    }
}

export default connect(mapStateToProps)(UserProfile)