<template>
<!--pages/user_spread/user_spread.wxml-->
<view class="user-spread">
	<view class="explain row muted" v-if="vipState==0 || vipState==1">
	    <image src="/static/images/icon_warning.png"></image>
	    <span class="ml10">成为分销会员，推广下级可获得额外收益，推广越多收益越多</span>
	</view>
    <loading-view v-if="showLoading"></loading-view>
    <view class="header" v-if="!showLoading" :style="{ backgroundImage: 'url(' + staticAsset('bundle/spread_header.png') + ')' }">
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
                    上级分销商：{{!inviteStatus ? '无' : userInfo.leader.nickname}} <view v-if="!inviteStatus" class="br60 white write-btn row-center" @tap="showInvitePop">填写</view>
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
                        <view @click="openRegion">
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
                    <image class="apply-result-img" :src="applyObject.status == 2 ? staticAsset('bundle/icon_payFail.png') : '/static/images/icon_paySuccess.png'" />
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
                    <navigator hover-class="none" class="primary-btn white row-center" url="/bundle/pages/user_withdraw/user_withdraw">立即提现</navigator>
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
            <view class="mt20 fans-msg-box row-center bg-white md">
                <navigator url="/bundle/pages/user_fans/user_fans" hover-class="none" class="my-fans row-center normal">
                    我的粉丝 <span class="primary ml10">{{userFans}}</span>
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
                <navigator hover-class="none" url="/bundle/pages/user_spread_order/user_spread_order" class="usual-item column-center">
                    <image :src="staticAsset('bundle/icon_fenxiao.png')" class="usual-item-img"></image>
                    <view class="nr normal mt20" style="line-height: 40rpx">分销订单</view>
                </navigator>
                <navigator hover-class="none" url="/bundle/pages/user_spread_month_bill/user_spread_month_bill" class="usual-item column-center">
                    <image :src="staticAsset('bundle/icon_zhangdan.png')" class="usual-item-img"></image>
                    <view class="nr normal mt20" style="line-height: 40rpx">月度账单</view>
                </navigator>
                </view>
            </view>
        </view>
    </view>
    <u-popup v-model="showPop" @close="onClose" closeable mode="center" border-radius="30">
        <view class="inviteformContain column-center">
            <view class="title xl">填写上级分销商</view>
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
// | likeshop开源商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | gitee下载：https://gitee.com/likeshop_gitee
// | github下载：https://github.com/likeshop-github
// | 访问官网：https://www.likeshop.cn
// | 访问社区：https://home.likeshop.cn
// | 访问手册：http://doc.likeshop.cn
// | 微信公众号：likeshop技术社区
// | likeshop系列产品在gitee、github等公开渠道开源版本可免费商用，未经许可不能去除前后端官方版权标识
// |  likeshop系列产品收费版本务必购买商业授权，购买去版权授权后，方可去除前后端官方版权标识
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | likeshop团队版权所有并拥有最终解释权
// +----------------------------------------------------------------------
// | author: likeshop.cn.team
// +----------------------------------------------------------------------
import { inputInviteCode, applyVip, applyVipDetail, getInviteInfo, getPromoteHome, veryfiyDistribute } from "@/api/user";
import { loadRegionTree } from '@/utils/region'
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
      regionLists: [],
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
    async openRegion() {
      if (this.regionLists.length) {
        this.showRegion = true
        return
      }
      try {
        this.regionLists = await loadRegionTree()
        this.showRegion = true
      } catch (error) {
        this.$toast({ title: error.message || '地区数据加载失败' })
      }
    },

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
        background-image: none;
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
                    border-bottom: $ls-solid-border;
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
                        border: $ls-solid-border;
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
                    border-bottom: $ls-solid-border;
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
    color: $ls-color-primary;
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
    background-color: $ls-color-white;
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
