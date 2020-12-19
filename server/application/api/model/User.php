<?php
// +----------------------------------------------------------------------
// | LikeShop有特色的全开源社交分销电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 商业用途务必购买系统授权，以免引起不必要的法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | 微信公众号：好象科技
// | 访问官网：http://www.likemarket.net
// | 访问社区：http://bbs.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | Author: LikeShopTeam
// +----------------------------------------------------------------------
namespace app\api\model;
use app\common\model\DistributionOrder;
use app\common\server\UrlServer;
use think\Db;
use think\Model;

class User extends Model{

    public function getAvatarAttr($value,$data){
        if($value){
            return UrlServer::getFileUrl($value);
        }
        return $value;
    }

    public function getLevelAttr($value,$data){
        $level_name = '普通买家';
        if($value){
            $level_name = Db::name('user_level')->where(['del'=>0,'id'=>$value])->value('name');
        }
        return $level_name;

    }

    public function getFansDistributionAttr($value,$data)
    {
        $distribution_order = Db::name('distribution_order_goods')
            ->field('count(id) as order_num, sum(money) as money')
            ->where(['user_id' => $data['id'], 'status' => DistributionOrder::STATUS_SUCCESS])
            ->find();

        $where1 = [
            ['first_leader', '=', $data['id']],
        ];
        $where2 = [
            ['second_leader', '=', $data['id']],
        ];
        $fans = Db::name('user')
            ->whereOr([$where1,$where2])
            ->count();

        return [
            'fans' => $fans,
            'order_num' => $distribution_order['order_num'] ?? 0,
            'money' => $distribution_order['money'] ?? 0,
        ];
    }
}