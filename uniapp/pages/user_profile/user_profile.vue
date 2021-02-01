<template>
    <view class="user-profile-container mt10">
        <view class="user-profile">
            <view class="user-avatar-box row-center">
                <Uploader :after-read="afterRead" useSlot>
                    <image class="user-avatar" :src="userInfo.avatar || require('../../static/images/default_avatar.png')" />
                </Uploader>
            </view>
            <view class="row-info row bdb-line" @click="changeName">
                <view class="label md">昵称</view>
                <view class="md row" style="flex: 1">{{userInfo.nickname}}</view>
                <uni-icons type="arrowright" size="15" />
            </view>
            <view class="row-info row bdb-line" @click="changeSex()">
                <view class="label md">性别</view>
                <view class="md row" :class="userInfo.sex == 0 ? 'muted' : '' " style="flex: 1">{{userInfo.sex == 0 ? '未设置' : userInfo.sex == 1 ? '男' : '女'}}</view>
                <uni-icons type="arrowright" size="15" />
            </view>
            <view class="row-info row bdb-line">
                <view class="label md">手机号</view>
                <view class="md row" :class="{'muted': userInfo.mobile}" style="flex: 1;">{{userInfo.mobile ? userInfo.mobile : "未绑定"}}</view>
                <view class="bd-btn br60" @click="showModifyMobile">
                    {{userInfo.mobile ? '更换手机号' : '绑定手机号'}}
                </view>
            </view>
            <view class="row-info row-between" @click="showPwdPop" v-if="!isWechat">
                <view class="label md">登录密码</view>
                <view class="row">
                    <view class="muted nr">点击设置</view>
                    <uni-icons type="arrowright" size="15" />
                </view>
            </view>
           
            <view class="row-info row-between bdb-line mt10" @click="goToExplain(0)">
                <view class="label md">服务协议</view>
                <uni-icons type="arrowright" size="15" />
            </view>
            <view class="row-info row-between bdb-line"  @click="goToExplain(1)">
                <view class="label md">隐私政策</view>
                <uni-icons type="arrowright" size="15" />
            </view>
            <view class="row-info row-between">
                <view class="label md">关于我们</view>
                <view>v2.0.1.20210106</view>
            </view>
            <view class="bg-primary white save-btn row-center lg" @click="logout" v-show="!isWechat">退出登录</view>
        </view>
        <uni-popup type="center" :show="showMobile" :animation="true" @close="showMobile = false">
            <view class="modify-container column-center bg-white" v-show="showMobile">
                <view class="title xl">{{userInfo.mobile ? '更换手机号' : '绑定手机号'}}</view>
                <view class="modify-row row" v-if="userInfo.mobile">
                    <view style="width: 56px;border-right: 1px solid #E5E5E5">+86</view>
                    <view style="margin-left: 15px">{{userInfo.mobile}}</view>
                </view>
                <view class="modify-row row" v-else >
                    <view style="width: 71px;">手机号</view>
                    <input v-model="new_mobile" placeholder="请输入绑定手机号" />
                </view>
                <view class="modify-row row">
                    <view style="width: 71px;">验证码</view>
                    <input v-model="smsCode" style="padding-left: 5px;width: 130px;" placeholder="请输入验证码" />
                    <view class="send-code-btn nr row-center" @click="$sendSms" v-show="canSendSms">发送验证码</view>
                    <uni-countdown
                        ref="countDown"
                        :showDay="false"
                        :timestamp="time"
                        :showColon="false"
                        splitorColor="#FF2C3C"
                        color="#FF2C3C"
                        :showHour="false"
                        :showMinute="false"
                        v-show="!canSendSms" 
                        @timeup="countDownFinish">
                    </uni-countdown>
                </view>
                <view class="modify-row row" v-if="userInfo.mobile">
                    <view style="width: 71px;">新手机号</view>
                    <input v-model="new_mobile" placeholder="请输入新的手机号码" />
                </view>
                <view class="primary mt10">{{userInfo.mobile ? '更改' : '绑定'}}手机号码成功后，您的账号将会变更为该设置号码</view>
                <view class="btn bg-primary white row-center" @click="$changeUserMobile">确定</view>
            </view>
        </uni-popup>
    </view>
</template>

<script>
import { userLogout, getUserInfo, changeUserMobile, setUserInfo } from "@/api/user.js";
import {HTTP_URL, ACCESS_TOKEN} from '@/config/app.js';
import {sendSms, forgetPwd, isWeixinClient} from '@/api/app.js'
import {SMSType} from '@/utils/type.js'
import {mapState} from 'vuex'
import {uploadFile} from '@/utils/tools.js'
const FieldType = {
    NONE: '',
    SEX: 'sex',
    NICKNAME: 'nickname',
    AVATAR: 'avatar'
}
export default {
    name: 'userProfile',
    data() {
        return {
            fileList: [],
            userInfo: {},
            new_mobile: '',
            smsCode: '',
            newNickname: '',
            sexList: ['男', '女'],
            fieldType: FieldType.NONE,
            showPicker: false,
            showMobile: false,
            showPwd: false,
            showNickName: false,
            time: 60 * 1000,
            canSendSms: true,
            isWechat: false,
            pwd: '',
            comfirmPwd: '',
            smsType: SMSType.FINDPWD
        }
    },
    methods: {
        // 文件上传读取
        afterRead(e) {
            const file = e
            uni.showLoading({
              title: '正在上传中...',
              mask: true
            });
            file.forEach(item => {
                uploadFile(item.path).then(res => {
                  uni.hideLoading();
                  this.fileList.push(res);
                });
            })
        },
        // end
        logout() {
            //  退出登录
            userLogout({token: this.token}).then(res => {
                if(res.code == 1) {
                    this.$store.commit("LOGOUT");
                    this.$toast({title: '登出成功'})
                    setTimeout(() => {
                        this.$router.back(-1);
                    }, 1000)
                }
            })
        },
        goToExplain(value) {
            this.$router.push({name: 'serverExplain', query: {
                type: value
            }})
        },
        // 发送短信
        $sendSms() {
            sendSms({
                mobile: this.userInfo.mobile || this.new_mobile,
                key: this.smsType
            }).then(res => {
                if(res.code == 1) {
                    this.$toast({title: res.msg});
                    this.$refs.countDown.start();
                    this.canSendSms = false
                }
            })
        },
        $getUserInfo() {
            getUserInfo().then(res => {
                if(res.code == 1) {
                    this.userInfo = res.data;
                }
            })
        },
        // 更换手机号
        showModifyMobile() {
            this.smsCode = '';
            this.new_mobile = '';
            this.showMobile = true
            this.smsType = SMSType.CHANGE_MOBILE
        },
        $changeUserMobile() {
            if(!this.smsCode) {
                this.$toast({title: '请输入验证码'})
                return;
            }
            if(!this.new_mobile) {
                this.$toast({title: '请输入新的手机号码'})
                return;
            }
            changeUserMobile({
                mobile: this.userInfo.mobile,
                new_mobile: this.new_mobile,
                code: this.smsCode
            }).then(res => {
                if(res.code == 1) {
                    this.showMobile = false;
                    this.$toast({title: res.msg})
                    this.$getUserInfo();
                }
            })
        },
        // end
        // 修改用户信息
        $setUserInfo(value) {
            setUserInfo({
                field: this.fieldType,
                value: value
            }).then(res => {
                if(res.code == 1) {
                    this.$toast({title: res.msg});
                    this.$getUserInfo()
                    
                }
            })
        },
        // end
        onConfirm(value, index) {
            this.$setUserInfo(index + 1);
            this.showPicker = false;
        },
        changeSex() {
            this.showPicker = true;
            this.fieldType = FieldType.SEX;
        },
        
        // 定时器完成
        countDownFinish() {
            this.$refs.countDown.reset();
            this.canSendSms = true;
        },
        // 修改密码
        showPwdPop() {
            this.smsCode = '';
            this.smsType = SMSType.FINDPWD
            this.showPwd = true
        },
        $forgetPwd() {
            let {smsCode, pwd, comfirmPwd} = this;
            if(!smsCode) {
                this.$toast({title: '请填写短信验证码'});
                return;
            }
            if(!pwd) {
                this.$toast({title: '请输入新密码'});
                return;
            }
            if(!comfirmPwd) {
                this.$toast({title: '再次输入新密码确认'});
                return;
            }
            if(pwd != comfirmPwd) {
                this.$toast({title: '两次密码输入不一致'});
                return;
            }
            let data = {
                mobile: this.userInfo.mobile,
                code: smsCode,
                password: pwd,
                repassword: comfirmPwd,
                client: 2
            };
            forgetPwd(data).then(res => {
                if(res.code == 1) {
                    this.showPwd = false;
                    this.$toast({title: '设置密码成功'});
                    this.$getUserInfo();
                }
            })
        },
        // end
        // 修改昵称
        changeName() {
            this.fieldType = FieldType.NICKNAME;
            this.newNickname = '';
            this.showNickName = true;
        },
        changeNameConfirm() {
            this.$setUserInfo(this.newNickname);
            this.showNickName = false;
        }
        // end
    },
    mounted() {
        this.$getUserInfo()
        this.isWechat = isWeixinClient()
    },
    computed: {
       ...mapState(['token'])
  }
}
</script>

<style lang="scss">
    .user-profile-container {
        .user-profile {
            border-top-left-radius: 14px;
            border-top-right-radius: 14px;
            .user-avatar-box {
                padding: 15px;
                background-color: white;
                border-top-left-radius: 14px;
                border-top-right-radius: 14px;
                .user-avatar {
                    width: 60px;
                    height: 60px;
                    border-radius: 50%;
                }
            }
            .row-info {
                padding: 15px 10px;
                background-color: white;
                .label {
                    width: 90px;
                }
                .bd-btn {
                    padding: 4px 12px;
                    border: 1px solid $-color-primary;
                    color: $-color-primary;
                }
            }
            .bdb-line {
                border-bottom: 1px solid #E5E5E5;
            }
            .save-btn {
                margin-top: 20px;
                height: 44px;
                margin-left: 27px;
                margin-right: 27px;
                border-radius: 5px;
                box-sizing: border-box;
            }
        }
        .modify-container {
            padding-left: 15px;
            padding-right: 15px;
            padding-bottom: 15px;
            width: 290px;
            border-radius: 30rpx;
            .title {
                padding: 13px 0px;
            }
            .modify-row {
                padding: 16px 0px;
                width: 100%;
                border-bottom: 1px solid #E5E5E5;
                .send-code-btn {
                    border: 1px solid $-color-primary;
                    width: 92px;
                    height: 31px;
                    color: $-color-primary;
                }
            }
            .btn {
                height: 40px;
                padding: 0 90px;
                border-radius: 10px;
                margin-top: 30px;
            }
        }
    }
</style>