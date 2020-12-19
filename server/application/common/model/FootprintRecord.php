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
// | Author: LikeShopTeam-张无忌
// +----------------------------------------------------------------------

namespace app\common\model;


use think\Model;

class FootprintRecord extends Model
{
    /**
     * Notes: 获取一个小时内的一条足迹
     * @param int $type
     * @author 张无忌(2020/12/16 18:17)
     * @return FootprintRecord
     */
    public static function getFootPrintOneHourInner($type=0)
    {
        // 一小时前时间戳
        $an_hour_ago = strtotime("-1 hour");
        // 当前时间戳
        $current_time = time();

        $where = [
            ['create_time', '>', $an_hour_ago],
            ['create_time', '<', $current_time]
        ];
        if ($type) {
            $where[] = ['type', '=', $type];
        }

        $model = new self;
        return $model->field(true)->where($where)->find();
    }

    /**
     * Notes: 添加足迹记录
     * @param $data
     * @author 张无忌(2020/12/16 18:18)
     * @return FootprintRecord
     */
    public static function add($data)
    {
        return self::create([
            'type'        => $data['type'],
            'user_id'     => $data['user_id'],
            'goods_id'    => empty($data['goods_id']) ? 0 : $data['goods_id'],
            'create_time' => time(),
        ]);
    }
}