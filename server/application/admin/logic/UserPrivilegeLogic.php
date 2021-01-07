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
namespace app\admin\logic;
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
        return Db::name('user_privilege')->where(['id'=>$id,'del'=>0])->find();
    }

}