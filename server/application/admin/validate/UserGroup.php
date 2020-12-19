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

class UserGroup extends Validate
{


    protected $rule = [
        'id'   => 'require|checkUser',
        'name' => 'require|unique:user_group,name^del',

    ];

    protected $message = [
        'id.require'    => '请选择分组',
        'name.require'  => '分组名称不能为空',
        'name.unique'   => '分组名称已存在',
    ];

    public function sceneAdd()
    {
        $this->only(['name']);
    }
    public function sceneDel()
    {
        $this->only(['id']);
    }
    public function sceneEdit()
    {
        $this->remove('id','checkUser');
    }

    protected function checkUser($value,$rule,$data){
       $user = Db::name('user')->where(['del'=>0,'group_id'=>$value])->find();
       if($user){
           return '已有会员属于该分组,不能删除';
       }
       return true;
    }


}