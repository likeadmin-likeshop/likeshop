<template>
<!--pages/input_express_info/input_express_info.wxml-->
<view class="input-express-info">
  <form @submit="formSubmit">
    <view class="input-contain mt20">
      <view class="input-item row">
        <view class="nr label">物流公司</view>
        <input class="input" placeholder="请输入物流公司名称" :value="formInfo.express" name="express"></input>
      </view>
      <view class="input-item row">
        <view class="nr label">快递单号</view>
        <input class="input" placeholder="请输入快递单号" :value="formInfo.number" name="number"></input>
      </view>
      <view class="input-item row">
        <view class="nr label">备注说明</view>
        <input class="input" placeholder="选填" :value="formInfo.remark" name="remark"></input>
      </view>
    </view>
    <view class="upload-contain mt20">
      <view class="header row">
        <view class="nr normal">上传凭证</view>
        <view class="sm muted ml20">(请上传快递单号凭证）</view>
      </view>
      <view class="upload">
        <Uploader :deletable="true" @delete="handleImage" preview-size="160rpx" max-count="1" :file-list="fileList" @after-read="afterRead" />
      </view>
    </view>
    <view class="submit-btn">
      <button size="lg" class=" br60 bg-primary white lg" form-type="submit">提交</button>
    </view>
  </form>
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
import { inputExpressInfo } from '../../api/user';
import { baseURL } from '../../config/app.js';
import { Tips } from '../../utils/tools.js';



export default {
  data() {
    return {
      fileList: [],
      formInfo: {
        express: '',
        number: '',
        remark: ''
      }
    };
  },

  components: {

  },
  props: {},

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    let {
      id
    } = options; // 售后id

    this.afterSalesId = id;
  },

  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady: function () {},

  /**
   * 生命周期函数--监听页面显示
   */
  onShow: function () {},

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

  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: function () {},
  methods: {
    afterRead(e) {
      const file = e
      uni.showLoading({
        title: '正在上传中...',
        mask: true
      });
      file.forEach(item => {
          this.uploadFile(item.path).then(res => {
            uni.hideLoading();
            this.fileList.push(res);
            console.log(this.fileList);
          });
      })
    },

    formSubmit(e) {
      let {
        value
      } = e.detail;
      let {
        fileList
      } = this;
      console.log(value);
      if (!value.express) return Tips({
        title: '请填写物流公司名称'
      });
      if (!value.number) return Tips({
        title: '请填写快递单号'
      });
      let data = {
        id: this.afterSalesId,
        express_name: value.express,
        invoice_no: value.number,
        express_remark: value.remark,
        express_image: fileList.length <= 0 ? '' : fileList[0].url
      };
      this.inputExpressInfoFun(data);
    },

    uploadFile(path) {
      return new Promise(resolve => {
        uni.uploadFile({
          url: baseURL + 'file/formimage',
          filePath: path,
          name: 'file',
          fileType: 'image',
          cloudPath: '',
          success: res => {
              console.log('uploadFile res ==> ', res)
            const {
              fileList
            } = this;
            let data = JSON.parse(res.data);

            if (data.code == 1) {
              resolve(data.data);
            }
          },
          fail: (err) => {
               console.log(err)
          }
        });
      });
    },

    inputExpressInfoFun(data) {
      inputExpressInfo(data).then(res => {
        if (res.code == 1) {
          Tips({
            title: '提交成功'
          }, () => {
            uni.navigateBack();
          });
          this.$emit('RESET_LIST');
        }
      });
    },
    
    handleImage(index) {
        this.fileList.splice(index)
    }

  }
};
</script>
<style>
/* pages/input_express_info/input_express_info.wxss */
.input-express-info {

}

.input-contain {
  background-color: white;
}

.input-contain .input-item {
  padding: 24rpx;
}

.input-item .label{
  width: 152rpx;
}

.input-item .input {
  flex: 1;
}

.upload-contain {
  background-color: white;
  padding: 24rpx 20rpx 44rpx;
}

.upload-contain .header {
  margin-bottom: 30rpx;
}

.submit-btn {
  margin-top: 50rpx;
  margin-left: 26rpx;
  margin-right: 26rpx;
}
</style>