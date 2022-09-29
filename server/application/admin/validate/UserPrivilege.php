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
namespace app\admin\validate;
use think\Db;
use think\Validate;

class UserPrivilege extends Validate {
    protected $rule = [
        'id'            => 'require|checkPrivilege',
        'name'          => 'require|unique:user_privilege,name^del',
        'image'         => 'require',

    ];
    protected $message = [
        'id.require'            => '请选择权益',
        'name.require'          => '请输入权益名称',
        'name.unique'           => '权益名称重复',
        'image.require'         => '请上传权益图标',
    ];
    protected function sceneAdd(){
        $this->remove(['id']);
    }
    protected function sceneEdit(){
        $this->remove(['id'],'checkPrivilege');
    }
    protected function sceneDel(){
        $this->remove(['name','image']);
    }
    protected function checkPrivilege($value,$rule,$data){
        $privilege = Db::name('user_level')
                    ->where("find_in_set($value,privilege) and del = 0")
                    ->column('name,privilege');
        if($privilege){
            $level_list = implode(',',array_keys($privilege));
            return '会员权益已关联'.$level_list.'会员等级，请解除关联后再删除';
        }
        return true;


    }
}