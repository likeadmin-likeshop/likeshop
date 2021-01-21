<template>
<!-- pages/user_address/user_address.wxml -->
<view class="user-address">
        <view class="no-address column-center" v-if="!hasAddress">
            <image class="img-null mt20" src="/static/images/address_null.png"></image>
            <view class="sm muted">暂无添加地址，请添加~</view>
        </view>
        <view class="address-list" v-else>
            <radio-group class="radio-group" @change="radioChange">
                <view v-for="(item, index) in addressList" :key="index" class="item bg-white mb20" :data-id="item.id" @tap="onSelect">
                    <view class="address">
                        <view class="consignee md bold">
                            {{item.contact}}
                            <text class="phone ml10">{{item.telephone}}</text>
                        </view>
                        <view class="lighter sm mt10">
                            {{item.province}} {{item.city}} {{item.district}} {{item.address}}
                        </view>
                    </view>
                    <view class="operation row-between">
                        <view @tap.stop="true">
                            <radio class="radio row" :value="item.id" :checked="item.is_default=='1' ? true : false">
                                <text>设为默认</text>
                            </radio>
                        </view>
                        <view class="row-center">
                            <view class="row mr20" :data-id="item.id" @tap.stop="editAddress">
                                <image class="icon-md mr10" src="/static/images/icon_edit.png"></image>
                                编辑
                            </view>
                            <view class="row ml20" :data-id="item.id" @tap.stop="showSurePop">
                                <image class="icon-md mr10" src="/static/images/icon_del_1.png"></image>
                                删除
                            </view>
                        </view>
                    </view>
                </view>
            </radio-group>
        </view>
    <uni-popup id="confirmPop" ref="confirmPop" type="dialog">
        <uni-popup-dialog 
        type="msgType" 
        content="确认删除该地址吗？" 
        use-slot id="delete-dialog" 
        :show="deleteSure"  
        confirmButtonText="狠心删除" 
        confirm-button-color="#FF2C3C" 
        @confirm="$delAddress" 
        @cancel="hidePop">
        </uni-popup-dialog>        
    </uni-popup>
    <view class="footer row-between fixed bg-white">
        <view class="btn row-center bg-gray br60" @click="getWxAddress">
            <image class="icon-lg mr10" src="/static/images/icon_wechat.png"></image>
            <text class="white md">微信导入</text>
        </view>
        <view class="btn bg-primary white md row-center br60" @click="addAddress">新增收货地址</view>
    </view>
</view>
</template>

<script>
// +----------------------------------------------------------------------
// | LikeShop100%开源免费商用电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | Gitee下载：https://gitee.com/likemarket/likeshopv2
// | 访问官网：https://www.likemarket.net
// | 访问社区：https://home.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 微信公众号：好象科技
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | Author: LikeShopTeam
// +----------------------------------------------------------------------
import { getAddressLists, delAddress, setDefaultAddress } from '../../api/user';
import { Tips } from '../../utils/util';

export default {
  data() {
    return {
      addressList: [],
      hasAddress: true,
      deleteSure: false,
      currentId: 0
    };
  },
  
  props: {},

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    this.type = options.type;
  },

  /**import
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady: function () {},

  /**
   * 生命周期函数--监听页面显示
   */
  onShow: function () {
    this.getAddressListsFun();
  },

  /**
   * 生命周期函数--监听页面隐藏
   */
  onHide: function () {},

  /**
   * 生命周期函数--监听页面卸载
   */
  onUnload: function () {},

  /**
   * 页面相关事件处理函数--监听用户下拉动作
   */
  onPullDownRefresh: function () {},

  /**
   * 页面上拉触底事件的处理函数
   */
  onReachBottom: function () {},
  methods: {
    onSelect(e) {
      if (this.type) {
        let {
          id
        } = e.currentTarget.dataset;
        this.$emit('SELECT_ADDRESS', {
          id
        });
        uni.navigateBack();
      }
    },

    addAddress() {
      uni.navigateTo({
        url: '/pages/address_edit/address_edit'
      });
    },

    editAddress(e) {
      let {
        id
      } = e.currentTarget.dataset;
      uni.navigateTo({
        url: `/pages/address_edit/address_edit?id=${id}`
      });
    },

    getAddressListsFun() {
      getAddressLists().then(res => {
        if (res.code == 1) {
          if (res.data.length) {
			  this.addressList = res.data;
			  this.hasAddress = true;
          } else {
			  this.hasAddress = false;
          }
        } else {
            this.hasAddress = false
        }
      });
    },

    radioChange(e) {
      let id = e.detail.value;
      console.log(e);
      setDefaultAddress(id).then(res => {
        if (res.code == 1) Tips({
          title: res.msg
        });
        this.getAddressListsFun();
      });
    },

    onLoadFun() {
      this.getAddressListsFun();
    },

    delAddressFun(e) {
      let id = this.currentId;
      delAddress(id).then(res => {
        if (res.code == 1) {
          Tips({
            title: res.msg
          });
		  this.deleteSure = false
          this.getAddressListsFun();
        }
      });
    },

    getWxAddress() {
      uni.authorize({
        scope: 'scope.address',
        success: function (res) {
          uni.chooseAddress({
            success: function (res) {
              uni.setStorageSync('wxAddress', JSON.stringify(res));
              setTimeout(() => {
                uni.navigateTo({
                  url: `/pages/address_edit/address_edit`
                });
              }, 200);
            },
            fail: function (res) {
              if (res.errMsg == 'chooseAddress:cancel') return Tips({
                title: '取消选择'
              });
            }
          });
        },
        fail: function (res) {
          uni.showModal({
            title: '您已拒绝导入微信地址权限',
            content: '是否进入权限管理，调整授权？',

            success(res) {
              if (res.confirm) {
                uni.openSetting({
                  success: function (res) {}
                });
              } else if (res.cancel) {
                return Tips({
                  title: '已取消！'
                });
              }
            }

          });
        }
      });
    },

    showSurePop: function (e) {
      this.deleteSure = true;
      this.currentId = e.currentTarget.dataset.id;
	  this.$refs.confirmPop.open()
    },
    hidePop: function (e) {
      this.$refs.confirmPop.close();
    }
  }
};
</script>
<style lang="scss">
/* pages/user_address/user_address.wxss */
.user-address {
    padding-bottom: calc(140rpx + env(safe-area-inset-bottom));
	.no-address {
		padding-top: 300rpx;
		text-align: center;
	}
	.address-list {
	    padding: 10rpx 0;
		.item {
		    padding: 0 30rpx;
			.address {
			    padding: 20rpx 0;
			    border-bottom: var(--border);
			}
			.operation {
			    height: 80rpx;
			}
		}
	}
	.footer {
	    position: fixed;
	    left: 0;
	    right: 0;
	    bottom: 0;
	    height: 118rpx;
	    padding: 0 30rpx;
		.btn {
		    width: 336rpx;
		    height: 80rpx;
		}
	}
}

.tips-dialog {
    height: 230rpx;
    width: 100%;
}
</style>