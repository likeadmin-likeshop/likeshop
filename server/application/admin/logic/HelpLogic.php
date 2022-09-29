<?php
// +----------------------------------------------------------------------
// | likeshop开源商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | gitee下载：https://gitee.com/likeshop_gitee
// | github下载：https://github.com/likeshop-github
// | 访问官网：https://www.likeshop.cn
// | 访问社区：https://home.likeshop.cn
// | 访问手册：http://doc.likeshop.cn
// | 微信公众号：likeshop技术社区
// | likeshop系列产品在gitee、github等公开渠道开源版本可免费商用，未经许可不能去除前后端官方版权标识
// |  likeshop系列产品收费版本务必购买商业授权，购买去版权授权后，方可去除前后端官方版权标识
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | likeshop团队版权所有并拥有最终解释权
// +----------------------------------------------------------------------
// | author: likeshop.cn.team
// +----------------------------------------------------------------------

namespace app\admin\logic;

use app\admin\model\Help;
use app\common\server\UrlServer;
use think\Db;

class HelpLogic
{

    public static function lists($get, $category)
    {
        $where = [];
        $where[] = ['del', '=', '0'];
        if (isset($get['is_show']) && $get['is_show'] != '') {
            $where[] = ['is_show', '=', $get['is_show']];
        }

        if (isset($get['title']) && $get['title']) {
            $where[] = ['title', 'like', '%' . $get['title'] . '%'];
        }

        if (isset($get['cid']) && $get['cid']) {
            $where[] = ['cid', '=', $get['cid']];
        }

        $help_count = Db::name('help')->where($where)->count();
        $help_list = Db::name('help')->where($where)->page($get['page'], $get['limit'])->order('id desc')->select();

        foreach ($help_list as &$item) {
            $item['image'] = UrlServer::getFileUrl($item['image']);
            $item['create_time'] = date('Y-m-d H:i:s', $item['create_time']);
            if (isset($category[$item['cid']])) {
                $item['cat_name'] = $category[$item['cid']]['name'];
            }
            if ($item['is_show'] == 1) {
                $item['is_show_text'] = '显示';
            } else {
                $item['is_show_text'] = '隐藏';
            }
        }
        return ['count' => $help_count, 'lists' => $help_list];
    }


    public static function addHelp($post)
    {
        $help = new Help();
        $data = [
            'title' => $post['title'],
            'cid' => $post['cid'],
            'image' => $post['image'],
            'content' => $post['content'],
            'is_show' => $post['is_show'],
            'create_time' => time(),
            'sort' => $post['sort'],
            'synopsis' => $post['synopsis'],
            'del' => 0
        ];
        return $help->save($data);
    }

    public static function editHelp($post)
    {
        $help = new Help();
        $data = [
            'title' => $post['title'],
            'cid' => $post['cid'],
            'image' => $post['image'],
            'content' => $post['content'],
            'is_show' => $post['is_show'],
            'update_time' => time(),
            'sort' => $post['sort'],
            'synopsis' => $post['synopsis']
        ];
        return $help->save($data, ['id' => $post['id'], 'del' => 0]);
    }

    public static function getHelp($id)
    {
        $help = new Help();
        $detail =  $help::get(['id' => $id, 'del' => 0]);
        $detail['abs_image'] = UrlServer::getFileUrl($detail['image']);
        return $detail;
    }

    public static function delHelp($id)
    {
        $help = new Help();

        $data = [
            'del' => time(),
            'update_time' => 1
        ];
        return $help->save($data, ['id' => $id, 'del' => 0]);
    }

    public static function switchStatus($post)
    {
        $data = [
            'is_show' => $post['is_show'],
            'update_time' => time(),
        ];
        return Db::name('help')->where(['del' => 0, 'id' => $post['id']])->update($data);
    }

}