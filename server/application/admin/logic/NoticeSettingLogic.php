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
namespace app\admin\logic;


use app\common\model\NoticeSetting;
use think\Db;

/**
 * 逻辑
 * Class NoticeSettingLogic
 * @package app\admin\logic
 */
class NoticeSettingLogic
{


    /**
     * Notes: 列表
     * @param $type
     * @author 段誉(2021/4/26 16:18)
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function lists($type)
    {
        $count = NoticeSetting::where('type', $type)->count();
        $lists = NoticeSetting::where('type', $type)->select();
        return ['lists' => $lists, 'count' => $count];
    }


    /**
     * Notes: 设置通知消息
     * @param $post
     * @author 段誉(2021/4/26 16:18)
     * @return bool
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public static function set($post)
    {
        switch ($post['type']) {
            case 'system':
                $setting = [
                    'title' => $post['title'],
                    'content' => $post['content'],
                    'is_push' => $post['is_push'],
                    'status' => $post['status'],
                ];
                break;
            case 'sms':
                $setting = [
                    'template_code' => $post['template_code'],
                    'content' => $post['content'],
                    'status' => $post['status'],
                ];
                break;
            case 'oa':
                $setting = [
                    'name'     => $post['name'],
                    'first'    => $post['first'],
                    'template_sn' => $post['template_sn'],
                    'template_id' => $post['template_id'],
                    'remark'   => $post['remark'],
                    'status'   => $post['status'],
                    'tpl'      => self::formatTplData($post)
                ];
                break;
            case 'mnp':
                $setting = [
                    'name'     => $post['name'],
                    'template_sn' => $post['template_sn'],
                    'template_id' => $post['template_id'],
                    'status' => $post['status'],
                    'tpl'   => self::formatTplData($post),
                ];
                break;
            default:
                $setting = [];
        }

        NoticeSetting::where('id', $post['id'])
            ->update([
                $post['type'].'_notice' => json_encode($setting, JSON_UNESCAPED_UNICODE)
            ]);

        return true;
    }


    /**
     * Notes: 详情
     * @param $id
     * @param $type
     * @author 段誉(2021/4/26 17:34)
     * @return NoticeSetting
     */
    public static function info($id, $type)
    {
        return NoticeSetting::where('id', $id)->find();
    }



    /**
     * Notes: 格式化模板数据
     * @param $post
     * @author 段誉(2021/4/26 14:55)
     * @return array
     */
    public static function formatTplData($post)
    {
        foreach ($post as &$value) {
            if (is_array($value)) {
                $value = array_values($value);
            }
        }
        return form_to_linear($post);
    }

    /**
     * 通知记录
     */
    public static function record($get)
    {
        $where = [
            ['send_type', '=', $get['send_type']]
        ];

        if(isset($get['content']) && !empty(trim($get['content']))) {
            $where[] = ['content', 'like', '%' . trim($get['content']) . '%'];
        }
        if(isset($get['create_time']) && !empty(trim($get['create_time']))) {
            $createTimeArr = explode('#', $get['create_time']);
            $start_time = strtotime(trim($createTimeArr[0]));
            $end_time = strtotime(trim($createTimeArr[1]));
            $where[] = ['create_time', '>=', $start_time];
            $where[] = ['create_time', '<=', $end_time];
        }

        $scene = Db::name('dev_notice_setting')->where(['id'=>$get['id']])->value('scene');
        $where[] = ['scene', '=', $scene];

        $lists = Db::name('notice')
                ->where($where)
                ->page($get['page'], $get['limit'])
                ->order('create_time', 'desc')
                ->select();
        $count = Db::name('notice')->where($where)->count();
        foreach($lists as &$item) {
            $item['sceneDesc'] = NoticeSetting::getSceneDesc($item['scene']);
            $item['create_time'] = date('Y-m-d H:i:s', $item['create_time']);
            switch ($item['receive_type']) {
                case 1: // 平台
                    $item['userInfo'] = '平台';
                    break;
                case 2:
                    $user = Db::name('user')->field('sn,nickname')->where('id',$item['user_id'])->find();
                    $item['userInfo'] = $user;
                    break;
                case 3:
                    $item['userInfo'] = '游客';
                    break;
            }
        }
        return [
            'count' => $count,
            'lists' => $lists
        ];
    }
}