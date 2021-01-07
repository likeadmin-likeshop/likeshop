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

<template>
  <div class="apply-after-sales">
    <div class="goods-info row bg-white mt10">
      <div class="goods-img">
        <van-image width="100%" height="100%" lazy-load radius="3px" :src="goods.image" />
      </div>
      <div class="goods-desc">
        <div class="nr">{{goods.goods_name}}</div>
        <div class="muted xs mt5">{{goods.spec_value}}</div>
      </div>
    </div>
    <div class="opt-box mt10" v-show="!hiddenOpt">
      <div class="opt-item row-between border-line" @click="onlyRefund">
        <div>
          <div class="lg">仅退款</div>
          <div class="muted xs mt5">未收到货，与卖家协商同意无需退货只需退款</div>
        </div>
        <img class="arrow" src="/images/arrow_right.png" />
      </div>
      <div class="opt-item row-between" @click="allRefunds">
        <div>
          <div class="lg">退货退款</div>
          <div class="muted xs mt5">已收到货，需退还收到的实物</div>
        </div>
        <img class="arrow" src="/images/arrow_right.png" />
      </div>
    </div>
      <div class="after-sales-form-container bg-white mt10" v-show="hiddenOpt">
        <div class="after-sales-item row-between">
          <div class="nr">数量</div>
          <div class="mr10 nr">{{goods.goods_num}}</div>
        </div>
        <div class="after-sales-item row-between">
          <div class="nr">退款金额</div>
          <!-- <div class="mr10 nr primary">￥69</div> -->
          <div class="mr10">
            <price-slice :showSubscript="true" subScriptClass="nr" :color="primaryColor" :price="goods.goods_price" firstClass="nr" secondClass="sm"></price-slice>
          </div>
        </div>
        <div class="after-sales-item row-between" @click="showPopup = true">
          <div class="nr">退款原因</div>
          <div class="mr10 nr row">
            <div
              class="mr5"
              :class="{'muted': reasonIndex == -1}"
            >{{reasonIndex == -1 ? '请选择' : reason[reasonIndex]}}</div>
            <div class="arrow">
              <img src="@A/images/arrow_right.png" />
            </div>
          </div>
        </div>
        <div class="after-sales-item">
          <!-- <div class="nr">退款说明</div> -->
          <div class="mr10 nr row">
            <van-field
              v-model="remark"
              rows="3"
              name="reason"
              autosize
              label="退款说明"
              type="textarea"
              placeholder="请描述申请售后的具体原因，100字以内"
              :border="false"
            />
          </div>
        </div>
        <div class="after-sales-item">
          <div class="header nr row-between">
            <div>上传凭证</div>
            <div style="color:#BBBBBB">（选填，最多可上传1张）</div>
          </div>
          <div class="upload-container">
            <van-uploader
              preview-size="80px"
              style="margin-top: 15px"
              :file-list="fileList"
              max-count="1"
              :after-read="afterRead"
              @delete="onDelete"
            />
          </div>
        </div>
      </div>
      <button class="bg-primary white br60 btn" v-show="hiddenOpt" @click="onSubmit">申请退款</button>
    <van-popup v-model="showPopup" position="bottom" style="height: 70%" round closeable>
      <div class="pop-container">
        <div class="pop-header row-center md normal">退款原因</div>
        <div class="reason-box mt10">
          <van-radio-group @change="radioChange" v-model="reasonIndex">
            <label
              class="reason-item row-between"
              v-for="(item, index) in reason"
              :key="index"
              @click="hidePop(index)"
            >
              <div class="reason-desc nr">{{item}}</div>
              <van-radio :value="index" :name="index" :checked-color="primaryColor"></van-radio>
            </label>
          </van-radio-group>
        </div>
      </div>
    </van-popup>
  </div>
</template>

<script>
import { refundOPtType } from "../../utils/type";
import { getGoodsInfo, applyAfterSale, applyAgain } from "../../api/user";
import axios from "axios";
import { HTTP_URL, ACCESS_TOKEN } from "@/configs";
import {mapState} from 'vuex'
export default {
  name: "applyAfterSales",
  data() {
    return {
      hiddenOpt: false,
      optTyle: refundOPtType.ONLY_REFUND,
      goods: {},
      reason: [],
      showPopup: false,
      reasonIndex: -1,
      fileList: [],
      remark: "",
    };
  },
  methods: {
    async afterRead(e) {
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
        });
    },
    uploadFile(file) {
        let params = new FormData();
        params.append("file", file);
        console.log(file, '###', params);
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
    onDelete(current) {
        this.fileList = this.fileList.filter(item => item.name != current.name);
    },
    $getGoodsInfo() {    
      getGoodsInfo({ order_id: this.orderId, item_id: this.itemId }).then((res) => {
        if (res.code == 1) {
          this.reason = res.data.reason;
          this.goods = res.data.goods;
        }
      });
    },
    $applyAfterSale() {
        let {itemId, orderId, reason, reasonIndex, optTyle, remark, fileList} = this;
        console.log(fileList)
        const data = {
            item_id: this.itemId,
            order_id: this.orderId,
            reason: this.reason[this.reasonIndex],
            refund_type: optTyle,
            remark: remark,
            img: fileList.length > 0 ? fileList[0].base_url : ''
        }
        applyAfterSale(data).then(res => {
            if(res.code == 1) {
                this.$toast({message: res.msg});
                setTimeout(() => {
                    this.$router.replace({name: 'afterSalesDetail', query: {
                        after_sale_id: res.data.after_sale_id,
                        order_id: this.orderId
                    }})
                }, 1000);
            }
        })
    },
    $applyAgain() {
      let {reason, reasonIndex, optTyle, remark, fileList} = this;
      const data = {
        id: this.afterSaleId,
        reason: reason[reasonIndex],
        refund_type: optTyle,
        remark: remark,
        img: fileList
      }
      applyAgain(data).then(res => {
        if(res.code == 1) {
          this.$toast({message: res.msg});
          setTimeout(() => {
            this.$router.replace({name: 'afterSalesDetail', query: {
              after_sale_id: res.data.after_sale_id,
            }})
          }, 1000)
        }
      })
    },
    onlyRefund() {
      this.optTyle = refundOPtType.ONLY_REFUND;
      this.hiddenOpt = true;
    },
    allRefunds() {
      this.optTyle = refundOPtType.REFUNDS;
      this.hiddenOpt = true;
    },
    onSubmit() {
      if(this.reasonIndex == -1) {
          this.$toast({message: '请选择退款原因'});
          return;
      }
      if (this.afterSaleId) {
        this.$applyAgain();
      } else {
        this.$applyAfterSale();
      }
    },
    radioChange(e) {
        console.log(e)
    },
    hidePop(index) {
        this.showPopup = false;
        this.reasonIndex = index;
    },
  },
  created() {},
  mounted() {
    let { item_id, order_id, after_sale_id } = this.$route.query;
    this.itemId = item_id;
    this.orderId = order_id;
    this.afterSaleId = after_sale_id;
    this.$getGoodsInfo();
  },
  computed: {
       ...mapState(['token'])
  }
};
</script>

<style lang="scss" scoped>
img {
  width: 100%;
  height: 100%;
}
.apply-after-sales {
  .goods-info {
    padding: 10px 12px;
    .goods-img {
      width: 80px;
      height: 80px;
      flex: none;
    }
    .goods-desc {
      margin-left: 12px;
      line-height: 20px;
    }
  }
  .after-sales-form-container {
    padding-left: 10px;
    .after-sales-item:not(:last-of-type) {
      padding: 12px 0px;
      line-height: 18px;
      border-bottom: 1px solid #f2f2f2;
      .arrow {
        width: 14px;
        height: 14px;
      }
    }
    .after-sales-item {
      padding: 12px 0px;
      line-height: 18px;
      .arrow {
        width: 14px;
        height: 14px;
      }
    }
  }
  .btn {
    padding: 10px 142.5px;
    margin: 15px 13px 0;
  }
  .opt-box {
    .opt-item {
      padding: 10px 10px 10px 15px;
      background-color: white;
      .arrow {
        width: 14px;
        height: 14px;
      }
    }
    .border-line {
      border: 1px solid #f2f2f2;
    }
  }
}
.pop-header {
  line-height: 21px;
  padding: 15px;
}
.reason-box {
  .reason-item {
    padding: 12px 10px;
    .reason-desc {
      line-height: 23px;
    }
  }
}

.van-cell/deep/ {
  padding: 0;
  .van-field__label {
    width: auto;
    padding: 10px 0;
    span {
      color: #333333;
    }
  }
  .van-field__value {
    .van-field__body {
      background-color: #f9f6f9;
      border-radius: 10px;
      font-size: 14px;
      textarea {
        padding: 10px;
      }
    }
  }
}
</style>