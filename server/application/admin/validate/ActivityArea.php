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