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

class UserLevel extends Validate{
    protected $rule = [
        'id'                    => 'require',
        'name'                  => 'require|unique:user_level,name^del',
        'growth_value'          => 'require',
//        'remark'                => 'require',
        'image'                 => 'require',
        'background_image'      => 'require',
        'privilege'             => 'checkPrivilege',
    ];
    protected $message = [
        'name.require'                  => '请输入等级名称',
        'name.unique'                   => '等级名称已存在',
        'growth_value.require'          => '请输入成长值',
        'remark.require'                => '请输入等级说明',
        'image.require'                 => '请上传等级图标',
        'background_image.require'      => '请上传等级背景图',
    ];
    protected function sceneAdd(){
        $this->remove(['id']);
    }
    protected function sceneDel(){
        $this->only(['id'])->append('id','checkUser');
    }

    public function checkUser($value,$rule,$data){
        if(\app\admin\model\User::get(['level'=>$value,'del'=>0])){
            return '该等级被使用，不允许删除';
        }
        return true;
    }
    public function checkPrivilege($value,$rule,$data){
        $privileges = explode(',',$value);
        $privilege_list = Db::name('user_privilege')->where(['del'=>0])->column('id');

        $privilege_diff = array_diff($privileges,$privilege_list);
        if($privilege_diff){
            return '会员权益信息错误';
        }

        return true;
    }
}