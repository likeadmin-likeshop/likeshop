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
import {AfterSaleType, loadingType} from "../../utils/type"
import {getAfterSaleList, cancelApply, afterSaleDetail, applyAgain} from "../../api/user"
import event from '../../utils/events'
import { Tips } from "../../utils/util"
Component({
  properties: {
    type: {
      type: String,
      value: AfterSaleType.NORMAL
    }
  },

  data: {
    lists: [],
    page: 1,
    loadingStatus: loadingType.LOADING,
    confirmDialog: false,
  },

  methods: {
    $cancelApply() {
      cancelApply({id: this.id}).then(res => {
        if(res.code == 1) {
          Tips({title: res.msg});
          event.emit('RESET_LIST');
        }
      })
    },
    $getAfterSaleList() {
      let {lists, loadingStatus, page} = this.data;
      if(loadingStatus == loadingType.FINISHED) return;
      getAfterSaleList({type: this.properties.type, page_no: page}).then(res => {
        if(res.code == 1) {
          let {list, more} = res.data;
          lists.push(...list);
          this.setData({
            lists: lists,
            page: ++ page
          })
          if(!more) {
            this.setData({
              loadingStatus: loadingType.FINISHED
            })
          }
          if(lists.length <= 0) {
            this.setData({
              loadingStatus: loadingType.EMPTY
            })
          }
          return;
        } else {
          this.setData({
            loadingStatus: loadingType.ERROR
          })
        }
      })
    },
    goPage(e) {
      let {url, order_id, item_id} = e.currentTarget.dataset;
      url = url + '?order_id=' + order_id + '&item_id=' + item_id 
      wx.navigateTo({
        url: url,
      })
    },
    reflesh() {
      this.data.page = 1;
      this.data.lists = [];
      this.data.loadingStatus = loadingType.LOADING;
      this.$getAfterSaleList();
    },

    showDialog(e) {
      let {id} = e.currentTarget.dataset
      this.id = id
      this.setData({
        confirmDialog: true
      })
    },
  
    hideDialog() {
      this.setData({
        confirmDialog: false,
      })
    },
  },
  lifetimes: {
    created() {
      event.on('RESET_LIST', this.reflesh, this)
    },
    attached() {
      this.$getAfterSaleList()
    },
  }
})