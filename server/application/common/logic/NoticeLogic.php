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

namespace app\common\logic;


use app\common\model\Notice_;
use app\common\server\ConfigServer;
use app\common\server\UrlServer;
use think\Db;
use think\Exception;

class NoticeLogic
{
    /**
     * 消息记录
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

        $data['system'] = [
            'title' => '系统通知',
            'content' => $server['content'] ?? '暂无系统消息',
            'img' => UrlServer::getFileUrl(ConfigServer::get('website', 'system_notice')),
            'type' => 'system',
        ];

        $data['earning'] = [
            'title' => '收益通知',
            'content' => $earning['content'] ?? '暂无收益消息',
            'img' => UrlServer::getFileUrl(ConfigServer::get('website', 'earning_notice')),
            'type' => 'earning',
        ];
        $res = array_values($data);
        return $res;
    }

    //消息列表
    public static function lists($user_id, $type, $page, $size)
    {
        $where = [];
        $where[] = ['user_id', '=', $user_id];

        if ($type == 'earning') {
            $type = Notice_::NOTICE_EARNINGS;
        }else{
            $type = Notice_::NOTICE_SYSTEM;
        }
        $where[] = ['type', '=', $type];

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
        self::setRead($user_id, $type);
        return $data;
    }


    //更新为已读
    public static function setRead($user_id, $type)
    {
        //进入列表后全部已读
        Db::name('notice')
            ->where(['user_id' => $user_id, 'type' => $type])
            ->where('read','<>', 1)
            ->update(['read' => 1]);
    }

    //是否有未读的消息
    public static function unRead($user_id)
    {
        $un_read = Db::name('notice')->where(['user_id' => $user_id, 'read' => 0])->find();
        if ($un_read){
            return true;
        }
        return false;
    }
}