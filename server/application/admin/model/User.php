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

namespace app\admin\model;
use app\common\server\UrlServer;
use think\Db;
use think\Model;

class User extends Model
{
    //头像
    public function getAvatarAttr($value,$data){
//        if($value){
//            return UrlServer::getFileUrl($value);
//        }
        return $value;
    }
    //加入时间
    public function getCreateTimeAttr($value,$data)
    {
        return date('Y-m-d H:i:s',$value);
    }


    //性别转换
    public function getSexAttr($value,$data){
        switch ($value){
            case 1:
                return '男';
            case 2:
                return '女';
            default:
                return '未知';
        }
    }

    public function getBirthdayAttr($value,$data){
        if($value){
            return date('Y-m-d',$value);
        }
        return $value;
    }

    public function getUserMoneyAttr($value,$data){
        return '￥'.$value;
    }

    public function getTotalOrderAmountAttr($value,$data){
        return '￥'.$value;
    }
    //最后登录时间
    public function getLoginTimeAttr($value,$data){
        return date('Y-m-d H:i:s',$value);
    }

    public function getLevelNameAttr($value,$data){
        $leve_name = '-';
        if($data['level']){
            $leve_name = Db::name('user_level')->where(['id'=>$data['level']])->value('name');
        }
        return $leve_name;
    }
    public function getGroupNameAttr($value,$data){
        $user_group = '-';
        if($data['group_id']){
            $user_group = Db::name('user_group')->where(['del'=>0,'id'=>$data['group_id']])->value('name');
        }
        return $user_group;

    }

    //获取粉丝
    public function getFansAttr($value, $data)
    {
        $fans = Db::name('user')->where('find_in_set(' . $data['id'] . ', ancestor_relation)')->count();
        return $fans;
    }

    //分销订单
    public function getDistributionOrderAttr($value, $data)
    {
        $info = Db::name('distribution_order_goods d')
            ->join('order_goods g', 'g.id = d.order_goods_id')
            ->join('order o', 'o.id = g.order_id')
            ->field('sum(d.id) as num, sum(money) as money, sum(order_amount) as amount')
            ->where(['d.user_id' => $data['id'], 'd.status' => 2])
            ->find();
        return $info;
    }

}
