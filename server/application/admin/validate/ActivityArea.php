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
use think\Validate;

class ActivityArea extends Validate{
    protected $rule = [
        'id'        => 'require',
        'name'      => 'require|unique:ActivityArea,name^del',
        'title'     => 'require|unique:ActivityArea,title^del',
        'image'     => 'require'
    ];
    protected $message = [
        'id.require'        => '请选择编辑的活动专区',
        'name.require'      => '请输入活动名称',
        'name.unique'       => '活动名称重复',
        'title.require'     => '请输入标题',
        'title.unique'      => '活动标题重复',
        'image.require'     => '请上传图片',
    ];
    public function sceneAdd()
    {
        $this->remove('id', ['require']);

    }

}