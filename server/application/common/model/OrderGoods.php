<?php
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

namespace app\common\model;

use app\common\server\UrlServer;
use think\Model;

class OrderGoods extends Model
{

    //订单商品退款状态
    const REFUND_STATUS_NO = 0;//未申请退款
    const REFUND_STATUS_APPLY = 1;//申请退款
    const REFUND_STATUS_WAIT = 2;//等待退款
    const REFUND_STATUS_SUCCESS = 3;//退款成功

    public function getImageAttr($value, $data)
    {
        if ($value) {
            return UrlServer::getFileUrl($value);
        }
        return $value;
    }

    public function getBaseImageAttr($value, $data)
    {
        return $data['image'];
    }

}