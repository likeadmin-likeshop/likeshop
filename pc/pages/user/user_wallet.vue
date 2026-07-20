<template>
  <div class="user-wallet-container">
    <div class="user-wallet-header lg">
            我的钱包
        </div>
        <div class="user-wallet-content">
            <div class="wallet-info-box row">
                <div class="user-wallet-info">
                    <div class="xs title">我的余额</div>
                    <div class="nr white row" style="font-weight: 500;align-items: baseline;">¥<label style="font-size: 24px;">{{wallet.user_money || 0}}</label></div>
                </div>
                <div class="user-wallet-info" style="margin-left: 144px">
                    <div class="xs title">累计消费</div>
                    <div class="nr white row" style="font-weight: 500;align-items: baseline;">¥<label style="font-size: 24px;">{{wallet.total_order_amount || 0}}</label></div>
                </div>
            </div>
            <el-tabs v-model="activeName" class="mt10" @tab-click="handleClick">
                <el-tab-pane
                v-for="(item, index) in userWallet"
                :label="item.name" 
                :name="item.type"
                :key="index"
                >
                    <user-wallet-table :type="item.type" :list="item.list" />
                </el-tab-pane>
            </el-tabs>
        </div>
    <!-- <null-data
      style="padding: 150px"
      img-style="width: 94px;height:118px"
      :img="require('~/assets/images/img_null.png')"
      text="请前往移动端进行查看"
    ></null-data> -->
  </div>
</template>

<script>
export default {
  head() {
    return {
      title: this.$store.getters.headTitle,
       link: [{ rel: "icon", type: "image/x-icon", href: this.$store.getters.favicon}],
    };
  },
  layout: "user_lauout",
  data() {
    return {
      activeName: "all",
      userWallet: [
        {
          type: 'all',
          list: [],
          name: "全部记录",
          count: 0,
          page: 1,
        },
        {
          type: 'income',
          list: [],
          name: "收入记录",
          count: 0,
          page: 1,
        },
        {
          type: 'output',
          list: [],
          name: "消费记录",
          count: 0,
          page: 1,
        }
      ],
    };
  },
  async asyncData({$get, query}) {
    let wallet = {};
    let recodeList = [];
    let walletRes = await $get("user/myWallet");
    let recodeRes = await $get("user/accountLog", {
      params: {
        page_no: 1,
        page_size: 10,
        source: 1, 
        type: 0
      }
    })
    if(walletRes.code == 1) {
      wallet = walletRes.data;
    }
    if(recodeRes.code == 1) {
      recodeList = recodeRes.data.list
    }
    return {
      wallet,
      recodeList,
    }
  },
  fetch() {
    this.handleClick();
  },
  methods: {
    handleClick() {
      this.getRecodeList()
    },

    changePage(val) {
      this.userWallet.some((item) => {
        if (item.type == this.activeName) {
          item.page = val;
        }
      });
      this.getRecodeList();
    },

    async getRecodeList() {
      const {activeName, userWallet} = this;
      let type = activeName == 'all' ? 0 : activeName == 'income' ? 1 : 2
      const item = userWallet.find((item) => item.type == activeName);
      const {
        data: { list, count },
        code,
      } = await this.$get("user/accountLog", {
        params: {
          page_size: 10,
          page_no: item.page,
          type: type,
          source: 1
        },
      })
      if(code == 1) {
        this.recodeList = {list, count};
      }
    }
  },
  watch: {
    recodeList: {
      immediate: true,
      handler(val) {
        console.log('val:', val)
        this.userWallet.some(item => {
          if (item.type == this.activeName) {
            Object.assign(item, val);
            return true;
          }
        })
      }
    }
  }
};
</script>

<style lang="scss" scoped>
.user-wallet-container {
  padding: 10px 10px 60px 10px;
  .user-wallet-header {
    padding: 10px 5px;
    border-bottom: 1px solid #e5e5e5;
  }
  .user-wallet-content {
    margin-top: 17px;
    .wallet-info-box {
      padding: 24px;
      background: linear-gradient(87deg, $-color-primary 0%, #ff9e2c 100%);
      .user-wallet-info {
        .title {
          color: #ffdcd7;
          margin-bottom: 8px;
        }
      }
    }
  }
}
</style>