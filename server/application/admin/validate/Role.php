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

namespace app\admin\validate;

use think\Db;
use think\Validate;

class Role extends Validate
{

    protected $rule = [
        'id' => 'adminExistRole',
        'name' => 'require',
        'auth_ids' => 'array'
    ];

    protected $message = [
        'name.require' => '角色名不能为空',
        'auth_ids.auth' => '权限错误',
        'id.adminExistRole' => '管理员列表存在该角色，无法删除',
    ];

    protected function sceneAdd()
    {
        $this->remove('id', ['adminExistRole']);
    }

    protected function sceneEdit()
    {
        $this->remove('id', ['adminExistRole']);
    }

    public function sceneDel()
    {
        $this->remove('name', ['require'])
            ->remove('auth_ids', ['auth']);
    }




    /**
     * 判断管理列表是否存在该角色
     * @param $id
     * @return bool
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    protected function adminExistRole($id)
    {
        $result = Db::name('admin')->where(['role_id' => $id, 'del' => 0])->find();
        if ($result) {
            return false;
        }
        return true;
    }
}