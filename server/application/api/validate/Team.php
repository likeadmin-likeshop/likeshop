<?php
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

namespace app\api\validate;


use think\Db;
use think\Validate;

class Team extends Validate
{
    protected $rule = [
        'item_id' => 'require|integer|checkTeamGoods',
        'goods_num' => 'require|integer',
        'action' => 'require',
        'pay_way' =>'require|in:1,2,3',
        'found_id' => 'checkTeamFound',
        'order_id' => 'require',
        'team_id' => 'require|checkTeam',
    ];

    protected $message = [
        'item_id.require' => '请选择商品规格',
        'goods_num.require' => '请选择商品数量',
        'goods_num.integer' => '商品数量错误',
        'action.require' => '订单错误',
        'pay_way.require' => '支付方式错误',
        'found_id.require' => '参数缺失',
        'order_id.require' => '参数缺失',
        'team_id.require' => '参数缺失',
    ];

    protected function sceneAdd()
    {
        $this->only(['action', 'pay_way', 'goods_num', 'item_id', 'found_id', 'team_id']);
    }


    protected function sceneCheck()
    {
        $this->only(['team_id', 'found_id']);
    }


    //验证是否为拼团商品
    protected function checkTeamGoods($value, $rule, $data = [])
    {
        $team_goods = Db::name('team_activity')->alias('a')
            ->join('team_goods_item ti', 'ti.team_id = a.team_id')
            ->join('goods_item gi', 'gi.id = ti.item_id')
            ->where(['a.status' => 1, 'a.del' => 0])
            ->whereBetweenTimeField('a.start_time','a.end_time')
            ->where(['ti.item_id' => $value])
            ->find();

        if (!$team_goods){
            return '不在活动时间内或活动已结束';
        }

        //商品库存是否足够
        if ($data['goods_num'] > $team_goods['stock']){
            return '库存不足';
        }

        return true;
    }


    //参团时验证团
    protected function checkTeamFound($value, $rule, $data = [])
    {
        if (empty($value)){
            return true;
        }

        $team_found = Db::name('team_found')
            ->where(['id' => $value, 'status' => 0])
            ->find();

        if (!$team_found){
            return '该团已结束';
        }

//        if ($team_found['join'] >= $team_found['need']){
//            return ['code' => 20001, 'msg' => '该团已满员'];
//        }
//
        //当前用户是否已参与团
        $follow = Db::name('team_follow')
            ->where(['found_id' => $value, 'follow_user_id' => $data['user_id']])
            ->find();

        if ($follow){
            return '你已参加该团，无法再次参加了！';
        }

        return true;
    }


    protected function checkTeam($value, $rule, $data = [])
    {
        $team = Db::name('team_activity')->where(['team_id' => $value])->find();

        if ($team['end_time'] < time()){
            return '已过拼团活动截止时间';
        }
        return true;
    }
}