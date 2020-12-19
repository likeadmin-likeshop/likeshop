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
use app\common\model\Menu_;
use think\Validate;

class MenuDecorate extends Validate{

    protected $rule = [
        'id'        => 'require',
        'name'      => 'require|unique:MenuDecorate,name^del^decorate_type^client',
        'image'     => 'require',
        'link_type' => 'checkLinkType',
    ];

    protected $message = [
        'id.require'    => '缺少参数',
        'name.require'  => '请输入菜单名称',
        'name.unique'   => '菜单名称已存在',
        'image.require' => '请上传菜单图标',

    ];
    protected function sceneAdd()
    {
        $this->remove('id');
    }

    protected function sceneEdit()
    {

    }

    public function sceneDel()
    {
        $this->only(['id']);
    }
    protected function checkLinkType($value,$rule,$data){
        if($value == 1){
//            $menu = Menu_::getStoreMenu($data['menu']);
//            if(empty($menu)){
//                return '请选择菜单';
//            }
        }
        if($value == 2){
            if(empty($data['url'])){
                return '请输入链接';
            }
        }

        return true;
    }


}