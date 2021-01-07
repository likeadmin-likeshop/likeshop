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

use think\Db;

/**
 * 通知消息
 * Class Notice_
 * @package app\common\model
 */
class Notice_
{
    //消息类型
    const NOTICE_SYSTEM = 0;//系统通知
    const NOTICE_EARNINGS = 1;//收益通知


    //系统通知
    const SYSTEM_REGISTER_SUCCESS = 100;//注册成功
    const SYSTEM_INVITE_SUCCESS = 101;//邀请成功

    //收益通知
    const EARNINGS_GET_BENEFIT = 200;//获得收益

    //类型描述
    public static function getTypeDesc($type)
    {
        $data = [
            self::NOTICE_SYSTEM => '系统通知',
            self::NOTICE_EARNINGS => '收益通知',
        ];

        if ($type === true) {
            return $data;
        }
        return $data[$type] ?? '';
    }

    /**
     * 获取通知标题和内容
     * @param $scene 场景
     * @param array $extra 额外参数
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function getNoticeContent($params)
    {
        $scene = $params['scene'] ?? '';
        switch ($scene) {
            case self::SYSTEM_REGISTER_SUCCESS:
                $data = [
                    'type' => self::NOTICE_SYSTEM,
                    'title' => '注册成功',
                    'content' => '欢迎注册B2C单商户开源商城APP，购买和分享都可以获得收益，邀请好友越多收益越多。快来开启您的赚钱生涯吧！',
                ];
                break;
            case self::SYSTEM_INVITE_SUCCESS:
                $lower = Db::name('user')->where(['id' => $params['lower_id']])->find();//下级
                $data = [
                    'type' => self::NOTICE_SYSTEM,
                    'title' => '邀请成功',
                    'content' => '恭喜您成功邀请到【'.$lower['nickname'].'】加入，快带小伙伴来开启赚钱之旅吧！',
                ];
                break;
            case self::EARNINGS_GET_BENEFIT:
                $data = [
                    'type' => self::NOTICE_EARNINGS,
                    'title' => '获得收益',
                    'content' => '恭喜您获得'.$params['earnings'].'收益',
                ];
                break;
            default:
                $data = [];
        }
        return $data;
    }
}