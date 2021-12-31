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