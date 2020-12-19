<template>
    <div class="user-profile-container mt10">
        <div class="user-profile">
            <div class="user-avatar-box row-center">
                <van-uploader :after-read="afterRead">
                    <img class="user-avatar" :src="userInfo.avatar || require('@A/images/default_avatar.png')" />
                </van-uploader>
            </div>
            <div class="row-info row bdb-line" @click="changeName">
                <div class="label md">昵称</div>
                <div class="md row" style="flex: 1">{{userInfo.nickname}}</div>
                <img src="@A/images/arrow_right.png" class="icon-sm" />
            </div>
            <div class="row-info row bdb-line" @click="changeSex()">
                <div class="label md">性别</div>
                <div class="md row" :class="userInfo.sex == 0 ? 'muted' : '' " style="flex: 1">{{userInfo.sex == 0 ? '未设置' : userInfo.sex == 1 ? '男' : '女'}}</div>
                <img src="@A/images/arrow_right.png" class="icon-sm" />
            </div>
            <div class="row-info row bdb-line">
                <div class="label md">手机号</div>
                <div class="md row" style="flex: 1;">{{userInfo.mobile}}</div>
                <div class="bd-btn br60" @click="showModifyMobile">
                    更换手机号
                </div>
            </div>
            <div class="row-info row bdb-line">
                <div class="label md">注册时间</div>
                <div class="md row">2019-10-12</div>
            </div>
            <!-- <picker mode="date" value="userDate" bindchange="bindDateChange" end="{{endTime}}">
            <div class="row-info row">
                <div class="label md">生日</div>
                <div class="{{userDate == ''? 'muted' : ''}} md">{{userDate == '' ? '请选择' : userDate}}</div>
            </div>
            </picker> -->
            <div class="row-info row-between" @click="showPwdPop" v-if="!isWechat">
                <div class="label md">登录密码</div>
                <div class="row">
                    <div class="muted nr">点击设置</div>
                    <img src="@A/images/arrow_right.png" class="icon-sm" />
                </div>
            </div>
           
            <div class="row-info row-between bdb-line mt10" @click="goToExplain(0)">
                <div class="label md">服务协议</div>
                <img src="@A/images/arrow_right.png" class="icon-sm"/>
            </div>
            <div class="row-info row-between bdb-line"  @click="goToExplain(1)">
                <div class="label md">隐私政策</div>
                <img src="@A/images/arrow_right.png" class="icon-sm" />
            </div>
            <div class="row-info row-between">
                <div class="label md">关于我们</div>
                <div>v0.1.0</div>
            </div>
            <div class="bg-primary white save-btn row-center lg" @click="logout">退出登录</div>
        </div>
        <van-popup v-model="showMobile" :closeable="canSendSms" round transition="fade">
            <div class="modify-container column-center" v-show="showMobile">
                <div class="title xl">更换手机号</div>
                <div class="modify-row row">
                    <div style="width: 56px;border-right: 1px solid #E5E5E5">+86</div>
                    <div style="margin-left: 15px">{{userInfo.mobile}}</div>
                </div>
                <div class="modify-row row">
                    <div style="width: 71px;">验证码</div>
                    <input v-model="smsCode" style="padding-left: 5px;width: 130px;" placeholder="请输入验证码" />
                    <div class="send-code-btn nr row-center" @click="$sendSms" v-show="canSendSms">发送验证码</div>
                    <van-count-down
                        ref="countDown"
                        :auto-start="false" 
                        :time="time" 
                        format=" ss 秒" 
                        v-show="!canSendSms" 
                        @finish="countDownFinish">
                            <template #default="timeData">
                                <div class="send-code-btn nr row-center" >{{timeData.seconds}}秒</div>
                            </template>
                        </van-count-down>
                </div>
                <div class="modify-row row">
                    <div style="width: 71px;">新手机号</div>
                    <input v-model="new_mobile" placeholder="请输入新的手机号码" />
                </div>
                <div class="primary mt10">更改手机号码成功后，您的账号将会变更为该设置号码</div>
                <div class="btn bg-primary white row-center" @click="$changeUserMobile">确定</div>
            </div>
        </van-popup>
        <van-popup v-model="showPicker" position="bottom">
            <van-picker show-toolbar :columns="sexList" @confirm="onConfirm" @cancel="showPicker = false" />
        </van-popup>
        <van-popup v-model="showPwd" :closeable="canSendSms" round transition="fade">
            <div class="modify-container column-center" v-show="showPwd">
                <div class="title xl">设置密码</div>
                <div class="modify-row row">
                    <div style="width: 56px;border-right: 1px solid #E5E5E5">+86</div>
                    <div style="margin-left: 15px">{{userInfo.mobile}}</div>
                </div>
                <div class="modify-row row">
                    <div style="width: 71px;">验证码</div>
                    <input v-model="smsCode" style="padding-left: 5px;width: 130px;" placeholder="请输入验证码" />
                    <div class="send-code-btn nr row-center" @click="$sendSms" v-show="canSendSms">发送验证码</div>
                    <van-count-down
                        ref="countDown"
                        :auto-start="false" 
                        :time="time" 
                        format=" ss 秒" 
                        v-show="!canSendSms" 
                        @finish="countDownFinish">
                            <template #default="timeData">
                                <div class="send-code-btn nr row-center" >{{timeData.seconds}}秒</div>
                            </template>
                        </van-count-down>
                </div>
                <div class="modify-row row">
                    <div style="width: 71px;">设置密码</div>
                    <input type="password" v-model="pwd" placeholder="请输入新密码" />
                </div>
                <div class="modify-row row">
                    <div style="width: 71px;">确认密码</div>
                    <input type="password" v-model="comfirmPwd" placeholder="再次输入新密码确认" />
                </div>
                <div class="btn bg-primary white row-center" @click="$forgetPwd">确定</div>
            </div>
        </van-popup>
        <van-popup v-model="showNickName" :closeable="true" round transition="fade">
            <div class="modify-container column-center" v-show="showNickName">
                <div class="title xl">修改用户名</div>
                <div class="modify-row row">
                    <div style="width: 71px;">新昵称</div>
                    <input v-model="newNickname" placeholder="请输入新的昵称" />
                </div>
                <div class="btn bg-primary white row-center" @click="changeNameConfirm">确定</div>
            </div>
        </van-popup>
    </div>
</template>

<script>
import { userLogout, getUserInfo, changeUserMobile, setUserInfo } from "@/api/user";
import {HTTP_URL, ACCESS_TOKEN} from '@/configs';
import {sendSms, forgetPwd, isWeixinClient} from '@API/app'
import {SMSType} from '@U/type'
import axios from "axios";
import {mapState} from 'vuex'
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
            let uploadArr = [];
            if (e.length) {
                e.forEach((item) => {
                    uploadArr.push(this.uploadFile(item.file));
                });
            } else {
                uploadArr.push(this.uploadFile(e.file));
            }
            Promise.all(uploadArr).then((res) => {
                const { fileList = [] } = this;
                fileList.push(...res);
                this.$toast().clear();
                this.fileList = fileList;
                this.fieldType = FieldType.AVATAR
                this.$setUserInfo(this.fileList[0].url)
            });
        },
        uploadFile(file) {
            let params = new FormData();
            params.append("file", file);
            return new Promise((resolve) => {
                axios
                    .post(HTTP_URL + "file/formimage", params, {
                        headers: { 
                        "Content-Type": "multipart/form-data",
                        "token": this.token
                        },
                    })
                    .then(({ data }) => {
                        if (data.code == 1) {
                            resolve(data.data);
                        } else {
                            this.$toast("上传失败，请重新上传");
                        }
                    });
            });
        },
        // end
        logout() {
            //  退出登录
            userLogout({token: this.token}).then(res => {
                if(res.code == 1) {
                    this.$store.commit("LOGOUT");
                    this.$toast({message: '登出成功'})
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
                mobile: this.userInfo.mobile,
                key: this.smsType
            }).then(res => {
                if(res.code == 1) {
                    this.$toast({message: res.msg});
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
                this.$toast({message: '请输入验证码'})
                return;
            }
            if(!this.new_mobile) {
                this.$toast({message: '请输入新的手机号码'})
                return;
            }
            changeUserMobile({
                mobile: this.userInfo.mobile,
                new_mobile: this.new_mobile,
                code: this.smsCode
            }).then(res => {
                if(res.code == 1) {
                    this.showMobile = false;
                    this.$toast({message: res.msg})
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
                    this.$toast({message: res.msg});
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
                this.$toast({message: '请填写短信验证码'});
                return;
            }
            if(!pwd) {
                this.$toast({message: '请输入新密码'});
                return;
            }
            if(!comfirmPwd) {
                this.$toast({message: '再次输入新密码确认'});
                return;
            }
            if(pwd != comfirmPwd) {
                this.$toast({message: '两次密码输入不一致'});
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
                    this.$toast({message: '设置密码成功'});
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

<style lang="scss" scoped>
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
                    border: 1px solid $--color-primary;
                    color: $--color-primary;
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
            .title {
                padding: 13px 0px;
            }
            .modify-row {
                padding: 16px 0px;
                width: 100%;
                border-bottom: 1px solid #E5E5E5;
                .send-code-btn {
                    border: 1px solid #9E9E9E;
                    width: 92px;
                    height: 31px;
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