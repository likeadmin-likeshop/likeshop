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

namespace app\common\logic;


use app\common\model\Notice_;
use think\Db;
use think\Exception;

class NoticeLogic
{
    /**
     * 消息记录 todo 目前仅添加记录,后续增加通知
     * @param $params
     * @return bool|string
     */
    public static function addNotice($params)
    {
        try {
            if (empty($params['scene'])) {
                throw new Exception('参数缺失');
            }

            $notice_info = Notice_::getNoticeContent($params);
            if (empty($notice_info)) {
                throw new Exception('信息错误');
            }

            $data = [
                'user_id' => $params['user_id'],
                'title' => $notice_info['title'],
                'content' => $notice_info['content'],
                'type' => $notice_info['type'],
                'create_time' => time(),
            ];
            Db::name('notice')->insertGetId($data);

            return true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    //消息主页
    public static function index($user_id)
    {
        //最新系统消息
        $server = Db::name('notice')
            ->where(['user_id' => $user_id, 'type' => 0])
            ->order('id desc')
            ->find();

        //最新收益通知
        $earning = Db::name('notice')
            ->where(['user_id' => $user_id, 'type' => 1])
            ->order('id desc')
            ->find();

        $data['system'] = $server['content'] ?? '暂无系统消息';
        $data['earning'] = $earning['content'] ?? '暂无收益消息';
        return $data;
    }

    //消息列表
    public static function lists($user_id, $type, $page, $size)
    {
        $where = [];
        $where[] = ['user_id', '=', $user_id];
        $where[] = ['type', '=', Notice_::NOTICE_SYSTEM];//系统通知
        if ($type == 'earnings') {
            $where[] = ['type', '=', Notice_::NOTICE_EARNINGS];//收益通知
        }

        $count = Db::name('notice')->where($where)->count();

        $lists = Db::name('notice')
            ->where($where)
            ->order('id desc')
            ->page($page, $size)
            ->select();

        foreach ($lists as $k => $item) {
            $lists[$k]['create_time'] = date('Y-m-d H:i:s', $item['create_time']);
            $lists[$k]['type'] = Notice_::getTypeDesc($item['type']);
        }

        $data = [
            'list' => $lists,
            'page' => $page,
            'size' => $size,
            'count' => $count,
            'more' =>  is_more($count, $page, $size)
        ];
        return $data;
    }
}