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

namespace app\common\logic;


use app\common\model\NoticeSetting;
use app\common\server\ConfigServer;
use app\common\server\UrlServer;
use think\Db;

class NoticeLogic
{

    //添加通知记录
    public static function addNoticeLog($params, $scene_info, $send_type, $content, $extra = '')
    {
        return Db::name('notice')->insertGetId([
            'user_id' => $params['user_id'] ?? 0,
            'title'   => self::getTitleByScene($send_type, $scene_info),
            'content' => $content,
            'scene'   => $params['scene'],
            'receive_type' => self::getReceiveTypeByScene($params['scene']),
            'send_type'    => $send_type,
            'extra'        => $extra,
            'create_time'  => time()
        ]);
    }


    //更新通知记录
    public static function updateNotice($notice_id, $extra)
    {
        return Db::name('notice')
            ->where('id', $notice_id)
            ->update(['extra' => $extra]);
    }


    //格式化消息内容(替换文本)
    public static function contentFormat($content, $params)
    {
        foreach ($params as $k => $v) {
             $search_replace = '{'.$k.'}';
             $content = str_replace($search_replace, $v, $content);
        }
        return $content;
    }


    //根据不同发送类型获取标题
    public static function getTitleByScene($send_type, $scene_info)
    {
        $title = '';
        switch ($send_type) {
            case NoticeSetting::SYSTEM_NOTICE:
                $title = $scene_info['system_notice']['title'] ?? '';
                break;
            case NoticeSetting::SMS_NOTICE:
                $title = '';
                break;
            case NoticeSetting::OA_NOTICE:
                $title = $scene_info['oa_notice']['name'] ?? '';
                break;
            case NoticeSetting::MNP_NOTICE:
                $title = $scene_info['mnp_notice']['name'] ?? '';
                break;
        }
        return $title;
    }


    //根据场景返回当前接收对象
    public static function getReceiveTypeByScene($scene)
    {
        if (in_array($scene, NoticeSetting::NOTICE_PLATFORM_SCENE)) {
            return NoticeSetting::NOTICE_PLATFORM;
        }

        if (in_array($scene, NoticeSetting::NOTICE_USER_SCENE)) {
            return NoticeSetting::NOTICE_USER;
        }

        if (in_array($scene, NoticeSetting::NOTICE_OTHER_SCENE)) {
            return NoticeSetting::NOTICE_OTHER;
        }
    }


    //================================================================================================


    //消息主页
    public static function index($user_id)
    {
        //最新系统消息
        $server = Db::name('notice')
            ->where('scene', '<>', NoticeSetting::GET_EARNINGS_NOTICE)
            ->where(['user_id' => $user_id, 'send_type' => NoticeSetting::SYSTEM_NOTICE])
            ->order('id desc')
            ->find();

        //最新收益通知
        $earning = Db::name('notice')
            ->where('scene', NoticeSetting::GET_EARNINGS_NOTICE)
            ->where(['user_id' => $user_id, 'send_type' => NoticeSetting::SYSTEM_NOTICE])
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
        $where[] = ['send_type', '=', NoticeSetting::SYSTEM_NOTICE];

        if ($type == 'earning') {
            $where[] = ['scene', '=', NoticeSetting::GET_EARNINGS_NOTICE];
        }else{
            $where[] = ['scene', '<>', NoticeSetting::GET_EARNINGS_NOTICE];
        }

        $count = Db::name('notice')->where($where)->count();

        $lists = Db::name('notice')
            ->where($where)
            ->order('id desc')
            ->page($page, $size)
            ->select();

        foreach ($lists as $k => $item) {
            $lists[$k]['create_time'] = date('Y-m-d H:i:s', $item['create_time']);
            $lists[$k]['type'] = NoticeSetting::getSceneDesc(($item['scene']));
        }

        $data = [
            'list' => $lists,
            'page' => $page,
            'size' => $size,
            'count' => $count,
            'more' =>  is_more($count, $page, $size)
        ];
        self::setRead($where);
        return $data;
    }


    //更新为已读
    public static function setRead($where)
    {
        //进入列表后全部已读
        Db::name('notice')
            ->where($where)
            ->where('read','<>', 1)
            ->update(['read' => 1]);
    }

    //是否有未读的消息
    public static function unRead($user_id)
    {
        $un_read = Db::name('notice')
            ->where(['user_id' => $user_id, 'read' => 0])
            ->where(['send_type' => NoticeSetting::SYSTEM_NOTICE])
            ->find();
        if ($un_read){
            return true;
        }
        return false;
    }
}