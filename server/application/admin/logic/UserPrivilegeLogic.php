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
use app\common\server\UrlServer;
use think\Db;

class UserPrivilegeLogic{

    public static function lists($get){
        $count = Db::name('user_privilege')
                ->where(['del'=>0])
                ->count();

        $list = Db::name('user_privilege')
                ->where(['del'=>0])
                ->page($get['page'], $get['limit'])
                ->select();

        foreach ($list as &$item) {
            $item['image'] = UrlServer::getFileUrl($item['image']);
        }

        return ['count' => $count, 'list' => $list];

    }

    public static function add($post){
        $post['create_time'] = time();
        $post['del'] = 0;
        return Db::name('user_privilege')->insert($post);
    }

    public static function edit($post){
        $post['update_time'] = time();
        return Db::name('user_privilege')->where(['id'=>$post['id']])->update($post);
    }

    public static function del($id){
        $update_date = [
            'update_time'       => time(),
            'del'               => 1,
        ];
        return Db::name('user_privilege')->where(['id'=>$id,'del'=>0])->update($update_date);
    }

    public static function getPrivilege($id){
        $detail = Db::name('user_privilege')->where(['id'=>$id,'del'=>0])->find();
        $detail['abs_image'] = UrlServer::getFileUrl($detail['image']);
        return $detail;
    }

}