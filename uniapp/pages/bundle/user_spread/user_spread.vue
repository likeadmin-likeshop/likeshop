<template>
<!--pages/user_spread/user_spread.wxml-->
<view class="user-spread">
	<view class="explain row muted" v-if="vipState==0 || vipState==1">
	    <image src="/static/images/icon_warning.png"></image>
	    <span class="ml10">成为分销会员，推广下级可获得额外收益，推广越多收益越多</span>
	</view>
    <loading-view v-if="showLoading"></loading-view>
    <view class="header" v-if="!showLoading">
        <view class="user-info row">
            <view class="user-avatar">
                <custom-image width="100%" height="100%" round :src="userInfo.user.avatar" />
                <view class="avatar-tag white" v-if="vipState==2">分销会员</view>
            </view>
            <view class="user-message-container column ml20 white">
                <view class="row mb10">
                    <view class="xxl bold" style="line-height: 50rpx">{{userInfo.user.nickname}}</view>
                    <!-- <view class="xs fans-type">铁粉</view> -->
                </view>
                <view class="xs row" style="line-height: 30rpx;text-align: left;">
                    我的邀请人：{{!inviteStatus ? '无' : userInfo.leader.nickname}} <view v-if="!inviteStatus" class="br60 white write-btn row-center" @tap="showInvitePop">填写</view>
                </view>
            </view>
        </view>
    </view>
    <view class="main" v-if="!showLoading">
        <!-- 填表格 -->
        <view :hidden="!vipState==0" class="user-apply-box">
            <form>
				
                <view class="user-apply-vip column-center">
                    <view class="user-apply-header column-center">
                        <view class="title xxl normal">申请成为分销会员</view>
                       
                    </view>
                    <view class="vip-form">
                        <view class="form-item row">
                            <view class="label md">真实姓名：</view>
                            <input class="md" name="real_name" v-model="realName" placeholder="请输入您的真实姓名"></input>
                        </view>
                        <view @click="showRegion=true">
                            <view class="form-item row ">
                                <view class="label md">现住省份：</view>
                                <input class="md" name="region" :value="region" disabled type="text" placeholder="请选择省、市、区"></input>
                                <image class="icon-sm mr10" src="/static/images/arrow_right.png" />
                            </view>
                        </view>
                        <view class="form-item bg-white row" style="height: 74px;padding: 24rpx 20rpx 24rpx 30rpx">
                            <view class="label md" style="width: 150rpx;align-self: flex-start;">申请原因：</view>
                            <u-input type="textarea" v-model="reason" placeholder="（选填）" :custom-style="{paddingLeft: '10rpx'}" :fixed="true" style="flex: 1" />
                            <!-- <textarea name="reason" style="height: 150rpx;padding-top: 30rpx;" type="textarea" fixed="true" placeholder="（必填）" border="false" title-width="150rpx" @input="textareaChange" /> -->
                        </view>
                    </view>
                </view>
                <button class="apply-btn bg-primary white md mt10 row-center br60" @click="formSubmit">
                    立即申请
                </button>
                <view class="mt20 xxs lighter row-center">提交成功后，我们将会在1-2个工作日内给您回复</view>
            </form>
        </view>
        <!-- 申请状态 -->
        <view :hidden="vipState!=1" class="user-result-box">
            <view class="user-result column-center">
                <view class="user-result-header column-center">
                    <view class="title xxl normal">申请成为分销会员</view>
                <!--    <view class="explain row muted">
                        <image src="/static/images/icon_warning.png"></image>
                        <span class="ml10">成为分销会员，推广下级可获得额外收益，推广越多收益越多</span>
                    </view> -->
                </view>
                <view class="user-result-content column-center">
                    <image class="apply-result-img" :src="applyObject.status == 2 ? '/static/images/icon_payFail.png' : '/static/images/icon_paySuccess.png'" />
                    <view class="mt10 nr" style="line-height: 40rpx">{{applyObject.status_str}}</view>
                    <view class="apply-fail-reason sm" :style="applyObject == 2 ? 'visibility: none' : 'visibility: hidden'">{{applyObject.reason}}</view>
                </view>
                <view class="user-result-info">
                    <view class="info-item row nr">
                        <view class="label">真实姓名：</view>
                        <view class="info-text ml20">{{applyObject.real_name}}</view>
                    </view>
                    <view class="info-item row nr">
                        <view class="label">现住省份：</view>
                        <view class="info-text ml20">{{applyObject.province}} {{applyObject.city}} {{applyObject.district}}</view>
                    </view>
                    <view class="info-item row nr">
                        <view class="label">申请原因：</view>
                        <view class="info-text ml20">{{applyObject.reason ? applyObject.reason : '-'}}</view>
                    </view>
                </view>
            </view>
            <view :class="'white mt20 br60 apply-btn row-center md ' + (applyObject.status == 0 ? 'bg-gray' : 'bg-primary')" @tap="reApply">重新申请</view>
            <view class="mt20 xxs lighter row-center">提交成功后，我们将会在1-2个工作日内给您回复</view>
        </view>
        <!-- 已申请 -->
        <view :hidden="vipState!=2" class="user-vip">
            <view class="user-assets-box">
                <view class="user-assets-header row-between">
                    <view class="row nr bold" style="line-height: 80rpx;color: #8F430E;">
                        可提现佣金：
                        <price-format weight="bold" :showSubscript="true" :firstSize="36" :subscriptSize="26" :secondSize="36" :price="able_withdrawal" color="#FF2C3C" />
                    </view>
                    <navigator hover-class="none" class="primary-btn white row-center" url="/pages/bundle/user_withdraw/user_withdraw">立即提现</navigator>
                </view>
                <view class="user-assets-content row wrap">
                    <view class="user-item column-center">
                        <tool-tip v-if="false" class="mt20" id="today-profit" content="今日预估收益金额" style="position: absolute;right: -66rpx;"></tool-tip>
                        <view class="nr user-assets-name row" style="color: #8F430E">
                            今日预估收益   <!-- <u-icon class="ml10" name="question-circle" size="30rpx" color="#D88D5A" /> -->
                        </view>
                        <view class="assets ml20">
                            <price-format weight="bold" :showSubscript="true" :firstSize="36" :subscriptSize="26" :secondSize="36" :price="today_earnings" color="#FF2C3C" />
                        </view>
                    </view>
                    <view class="user-item column-center">
                        <view class="nr user-assets-name row" style="color: #8F430E">
                            本月预估收益
                            <!-- <u-icon class="ml10" name="question-circle" size="30rpx" color="#D88D5A" /> -->
                        </view>
                        <view class="assets ml20">
                            <price-format weight="bold" :showSubscript="true" :firstSize="36" :subscriptSize="26" :secondSize="36" :price="month_earnings" color="#FF2C3C" />
                        </view>
                    </view>
                    <view class="user-item column-center">
                        <view class="nr user-assets-name row" style="color: #8F430E">
                            累计获得收益<!-- <u-icon class="ml10" name="question-circle" size="30rpx" color="#D88D5A" /> -->
                        </view>
                        <view class="assets">
                            <price-format weight="bold" :showSubscript="true" :firstSize="36" :subscriptSize="26" :secondSize="36" :price="history_earnings" color="#FF2C3C" />
                        </view>
                    </view>
                </view>
            </view>
            <view class="mt20 fans-msg-box row bg-white md">
                <navigator url="/pages/bundle/user_fans/user_fans" hover-class="none" class="my-fans row-center normal">
                    我的粉丝 <span class="primary ml10">{{userFans}}</span>
                    <u-icon class="ml10" name="arrow-right" size="28rpx" color="#666" />
                </navigator>
                <view class="line"></view>
                <navigator url="/pages/bundle/invite_fans/invite_fans" hover-class="none" class="invite-fans row-center normal">
                    邀请粉丝
                    <u-icon class="ml10" name="arrow-right" size="28rpx" color="#666" />
                </navigator>
            </view>
            <view class="my-invite-box mt20 bg-white column-center">
                <view class="my-invite-title sm normal">我的邀请码</view>
                <view class="row bold mt20" style="font-size: 42rpx;line-height: 30rpx">
                    {{userInfo.user.distribution_code}} <view class="invite-copy-btn ml10 xxs" @click="onCopy">点击复制</view>
                </view>
                <!-- <view class="row-center my-promote-banner bg-primary white">我的推广海报</view> -->
            </view>
            <view class="usual-tools-box bg-white mt20">
                <view class="usual-tools-header row lg bold">
                    常用工具
                </view>
                <view class="usual-content row">
                <navigator hover-class="none" url="/pages/bundle/invite_fans/invite_fans" class="usual-item column-center">
                    <image src="/static/images/icon_invite.png" class="usual-item-img"></image>
                    <view class="nr normal mt20" style="line-height: 40rpx">邀请海报</view>
                </navigator>
                <navigator hover-class="none" url="/pages/bundle/user_spread_order/user_spread_order" class="usual-item column-center">
                    <image src="/static/images/icon_fenxiao.png" class="usual-item-img"></image>
                    <view class="nr normal mt20" style="line-height: 40rpx">分销订单</view>
                </navigator>
                <navigator hover-class="none" url="/pages/bundle/user_spread_month_bill/user_spread_month_bill" class="usual-item column-center">
                    <image src="/static/images/icon_zhangdan.png" class="usual-item-img"></image>
                    <view class="nr normal mt20" style="line-height: 40rpx">月度账单</view>
                </navigator>
                </view>
            </view>
        </view>
    </view>
    <u-popup v-model="showPop" @close="onClose" mode="center" border-radius="30">
        <view class="inviteformContain column-center">
            <view class="title xl">填写邀请人</view>
            <view class="input-row row">
                <view style="width: 140rpx;">邀请码：</view>
                <input :value="inviteCode" @input="onInput" placeholder="请输入邀请码" />
            </view>
            <view class="btn bg-primary white row-center" @tap="inputInviteCodeFun">确定</view>
        </view>
    </u-popup>
    <u-select v-model="showRegion" mode="mutil-column-auto" @confirm="regionChange" :list="regionLists" ></u-select>
</view>
</template>

<script>
// +----------------------------------------------------------------------
// | likeshop100%开源免费商用商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | gitee下载：https://gitee.com/likeshop_gitee
// | github下载：https://github.com/likeshop-github
// | 访问官网：https://www.likeshop.cn
// | 访问社区：https://home.likeshop.cn
// | 访问手册：http://doc.likeshop.cn
// | 微信公众号：likeshop技术社区
// | likeshop团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | author: likeshopTeam
// +----------------------------------------------------------------------
import { inputInviteCode, applyVip, applyVipDetail, getInviteInfo, getPromoteHome, veryfiyDistribute } from "@/api/user";
import area from '@/utils/area'
import {copy} from '@/utils/tools'
export default {
  data() {
    return {
      showLoading: true,
      // 弹窗展示
      showPop: false,
      inviteCode: '',
      realName: '',
      reason: '',
      region: '',
      // 省id
      provinceId: -1,
      // 市id
      cityId: -1,
      // 区ID
      districtId: -1,
      // 推销状态 0 ==> 未申请 1 ==> 申请进度 2 ==> 已申请
      vipState: 0,
      userInfo: {
          user: {},
          leader: {}
      },
      // 审核信息对象
      applyObject: {},
      // 邀请人状态
      inviteStatus: false,
      showRegion: false,
      regionLists: area,
      able_withdrawal: 0,
      history_earnings: 0,
      month_earnings: 0,
      today_earnings: 0,
	  userFans: 0
    };
  },

  components: {
  },
  props: {},

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    this.showLoading = true
    this.veryfiyDistributeFun()
  },

 
  methods: {
    onInput(e) {
        this.inviteCode = e.detail.value
    },

    // 申请成功数据
    getPromoteHomeFun() {
      getPromoteHome().then(res => {
        if (res.code == 1) {
          if (res.data.leader.length <= 0) {
            this.inviteStatus = false;
          } else {
            this.inviteStatus = true;
          }
          this.userInfo = res.data;
		  this.userFans = res.data.fans
          this.able_withdrawal = res.data.able_withdrawal
          this.history_earnings = res.data.history_earnings
          this.month_earnings = res.data.month_earnings
          this.today_earnings = res.data.today_earnings
        }
      });
    },

    veryfiyDistributeFun() {
        veryfiyDistribute().then(res => {
            if(res.code == 10001) {
                this.vipState = 2
                // 获取详情
                this.getInviteInfoFun();
                this.getPromoteHomeFun();
                if(this.showLoading == true) {
                    this.showLoading = false
                }
            }
            else if(res.code == 20001) {
              
				 // 填写表单
                this.vipState = 0;
                this.getInviteInfoFun();
                this.applyVipDetailFun()
            }
            else if(res.code == 0) {
                // 返回上一页
                setTimeout(() => {
                    uni.navigateBack()
                }, 500)
            }
        })
    },

    // 最新分销会员申请详情
    applyVipDetailFun() {
      applyVipDetail().then(res => {
        if(res.code == 1) {
            switch(res.data.status) {
                case 0:
                    // 待审核
                case 2:
                    // 审核不通过
                    this.vipState = 1;
                    this.applyObject = res.data
                    break;
                case 1:
                    this.getPromoteHomeFun();
                    break;
            }
            if(this.showLoading == true) {
                this.showLoading = false
            }
        }
      });
    },

    reApply() {
      this.vipState = 0
    },

    regionChange(region) {
      this.region = region[0].label + " " + region[1].label + " " + region[2].label
      this.provinceId = region[0].value;;
      this.cityId = region[1].value;
      this.districtId = region[2].value
    },

    formSubmit(e) {
      let {
        provinceId,
        cityId,
        districtId,
        reason
      } = this;
      console.log('formSubmit')

      if (!this.realName) {
        this.$toast({
          title: "请填写真实姓名"
        });
        return;
      }

      if (!this.region.length) {
        this.$toast({
          title: "请选择省市区"
        });
        return;
      }

      let data = {
        real_name: this.realName,
        province: provinceId,
        city: cityId,
        district: districtId,
        reason: reason
      };
      this.applyVipFun(data);
    },

    // 分销会员申请
    applyVipFun(data) {
      applyVip(data).then(res => {
        if (res.code == 1) {
          this.$toast({
            title: res.msg
          });
          this.applyVipDetailFun();
        }
      });
    },

    // 填写邀请码
    inputInviteCodeFun() {
      inputInviteCode({
        code: this.inviteCode
      }).then(res => {
		  this.$toast({
			  title: res.msg
		  })
        if (res.code == 1) {
          this.showPop = false
          this.getInviteInfoFun();
        }
      });
    },

    showInvitePop() {
      this.showPop = true;
    },

    // 获取邀请人信息
    getInviteInfoFun() {
      getInviteInfo().then(res => {
        if (res.code == 1) {
          if (res.data.leader.length <= 0) {
            this.userInfo = res.data;
            this.inviteStatus = false
          } else {
            this.userInfo = res.data;
            this.inviteStatus = true
          }
        }
      });
    },

    textareaChange(e) {
        this.reason = e.detail.value
    },

    onClose() {
      this.showPop = false;
    },

    onCopy() {
      copy(this.userInfo.user.distribution_code)
    },

    // 显示提示窗口
    showToolTip(e) {
      this.animate("#today-profit");
    }

  }
};
</script>
<style lang="scss">
.user-spread {
	.explain {
		background-color: #FFFADE;
	    padding: 18rpx 20rpx;
		color: #F95F2F;
	    image {
	        width: 24rpx;
	        height: 24rpx;
	        flex: none;
	    }
	    span {
	        font-size: 20rpx;
	        line-height: 30rpx;
	    }
	}
    .header {
        background-image: url(data:image/png;base64,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);
        background-repeat: no-repeat;
        background-size: 100% 100%;
        box-sizing: border-box;
        text-align: center;
        padding-top: 40rpx;
        height: 280rpx;
        .user-info {
            padding-left: 30rpx;
            .user-avatar {
                width: 110rpx;
                height: 110rpx;
                position: relative;
                .avatar-tag {
                    position: absolute;
                    bottom: -16rpx;
                    width: 100%;
                    background-color: #F79C0C;
                    border: 1rpx solid #FFFFFF;
                    border-radius: 100rpx;
                    font-size: 22rpx;
                    line-height: 30rpx;
                }
            }
            .user-message-container {
                .fans-type {
                    margin-left: 12rpx;
                    background-color: #291B06;
                    padding: 4rpx 22rpx;
                    border-radius: 100rpx;
                    line-height: 30rpx;
                }
                .write-btn {
                    height: 42rpx;
                    width: 100rpx;
                    margin-left: 30rpx;
                    background-color: #FF838D;
                }
            }
        }
    }
    .main {
        padding: 0 20rpx;
        margin-top: -60rpx;
        .user-vip {
            .user-assets-box {
                background-color: #fff;
                border-radius: 20rpx;
                padding: 10rpx 20rpx 22rpx;
                background: linear-gradient(90deg, #FBEFDB 0%, #FED09E 100%);
                .user-assets-header {
                    border-bottom: 1rpx dashed #8F430E;
                    padding-bottom: 4rpx;
                    .primary-btn {
                        height: 54rpx;
                        border-radius: 120rpx;
                        width: 144rpx;
                        background: linear-gradient(180deg, #FF3067 0%, #FF2C3C 100%);
                    }
                }
                .user-assets-content {
                    margin-top: 30rpx;
                    .user-item {
                        flex: 1;
                        position: relative;
                        .user-assets-name {
                            text-align: left;
                            align-self: flex-start; 
                        }
                        .assets {
                            margin-top: 14rpx;
                            text-align: left;
                            align-self: flex-start;
                        }
                        // &:last-of-type .assets {
                        //     align-self: center;
                        //     margin-top: 14rpx;
                        //     text-align: left;
                        // }
                    }
                }
            }
            .fans-msg-box {
                border-radius: 10rpx;
                line-height: 42rpx;
                .my-fans {
                    width: 50%;
                    height: 120rpx;
                }
                .line {
                    width: 3rpx;
                    height: 60rpx;
                    background-color: #E5E5E5;
                }
                .invite-fans {
                    width: 50%;
                    height: 120rpx;
                }
            }
            .my-invite-box {
                padding: 26rpx 0 57rpx;
                border-radius: 10rpx;
                .invite-copy-btn {
                    line-height: 30rpx;
                    padding: 10rpx;
                    background: linear-gradient(90deg, #FEE4B4 0%, #FBCB96 100%);
                    color: #8F430E;
                    border-radius: 4rpx;
                }
                .my-promote-banner {
                    margin-top: 30rpx;
                    height: 148rpx;
                    width: 542rpx;
                    border-radius: 10rpx;
                }
            }
            .usual-tools-box {
                border-radius: 10rpx;
                padding: 0 25rpx;
                .usual-tools-header {
                    height: 100rpx;
                    line-height: 44rpx;
                    border-bottom: $-solid-border;
                }
                .usual-content {
                    padding: 40rpx 0;
                    .usual-item {
                        width: 25%;
                        .usual-item-img {
                            width: 56rpx;
                            height: 56rpx;
                            flex: none;
                        }
                        
                    }
                }
            }
        }
        .user-apply-box {
            .user-apply-vip {
                background-color: white;
                padding: 40rpx 0 0rpx;
                border-radius: 20rpx;
                .title {
                    line-height: 30rpx;
                    font-weight: bold;
                }
                .explain {
                    margin-top: 20rpx;
                    image {
                        width: 24rpx;
                        height: 24rpx;
                        flex: none;
                    }
                    span {
                        font-size: 20rpx;
                        line-height: 30rpx;
                    }
                }
                .vip-form {
                    width: 100%;
                    flex: 1;
                    margin-top: 60rpx;
                    .form-item {
                        padding: 24rpx 0 24rpx 30rpx;
                        border: $-solid-border;
                        margin: 0 34rpx 30rpx;
                        .label {
                            width: 150rpx;
                            line-height: 30rpx;
                        }
                        input {
                            flex: 1;
                            font-size: 30rpx;
                            margin-left: 10rpx;
                            line-height: 30rpx;
                            padding-right: 20rpx;
                        }
                    }
                }
            }
            .apply-btn {
                line-height: 30rpx;
                height: 82rpx;
            } 
        }
        .user-result-box {
            .user-result {
                background-color: white;
                padding: 36rpx 14rpx 50rpx;
                border-radius: 20rpx;
                .user-result-header {
                    .title {
                        line-height: 30rpx;
                        font-weight: bold;
                    }
                    
                }
                .user-result-content {
                    padding: 60rpx 0 22rpx;
                    /* margin: 0 8px; */
                    width: 100%;
                    border-bottom: $-solid-border;
                    .apply-result-img {
                        width: 100rpx;
                        height: 100rpx;
                    }
                }
                .user-result-info {
                    margin-top: 42rpx;
                    width: 100%;
                    .info-item {
                        margin-left: 60rpx;
                        margin-bottom: 28rpx;
                        line-height: 30rpx;
                        .label {
                            width: 140rpx;
                        }
                    }
                }
            }
            .apply-btn {
                line-height: 30rpx;
                height: 82rpx;
            }
            .bg-gray {
                background-color: #CCCCCC;
            }
        }
    }
}

.main .van-cell {
    height: 100%;
    padding: 0;
}

.main .van-cell  .van-cell__title {
    font-size: 30rpx;
    line-height: 30rpx;
    width: 150rpx;
    color: #333333;
}

van-field view {
    height: 100%;
}

van-field textarea {
    height: 100% !important;
}

.van-field__body--textarea, .van-field__input {
    margin-left: 15rpx;
}

.main .user-apply-box .apply-btn {
    line-height: 30rpx;
    height: 82rpx;
}

.main .user-result-box .user-result-content  .apply-fail-reason {
    color: $-color-primary;
    line-height: 36rpx;
    margin-top: 10rpx;
}

/* 弹窗 */
.inviteformContain {
    padding-left: 30rpx;
    padding-right: 30rpx;
    padding-bottom: 30rpx;
    width: 580rpx;
    border-radius: 6rpx;
    background-color: $-color-white;
}

.inviteformContain .title { 
    padding: 26rpx 0rpx;
}

.inviteformContain .modify-row {
    padding: 32rpx 0px;
    width: 100%;
    border-bottom: 1rpx solid #E5E5E5;
}

.inviteformContain .btn {
    height: 80rpx;
    padding: 0 180rpx;
    border-radius: 10rpx;
    margin-top: 60rpx;
}

/* .van-popup--center {
    border-radius: 10rpx;
} */
</style>