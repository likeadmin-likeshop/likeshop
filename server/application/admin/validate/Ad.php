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

namespace app\admin\validate;

use think\Validate;

class Ad extends Validate
{

    protected $rule = [
        'id'        => 'require',
        'name'      => 'require|unique:ad,name^del^client|max:60',
        'client'    => 'require',
        'pid'       => 'require',
        'image'     => 'require',
        'link_type' => 'checkLink',

    ];

    protected $message = [
        'id.require'        => 'id不可为空',
        'name.require'      => '请输入广告标题',
        'name.unique'       => '广告标题已存在',
        'name.max'          => '广告标题过长',
        'client.require'    => '请选择广告终端',
        'pid.require'       => '请选择广告位置',
        'image.require'     => '请上传广告图片',



    ];
    protected function sceneAdd()
    {
        $this->remove(['id']);
    }



    public function sceneDel()
    {
        $this->only(['id']);
    }


    public function checkLink($value,$rule,$data){
        if($value){
            switch ($value){
                case '1':
                    if($data['page'] === ''){
                        return '请选择跳转商城页面';
                    }
                    break;
                case '2':
                    if(empty($data['goods_id'])){
                        return '请选择跳转的商品';
                    }
                    break;
                case '3':
                    if(empty($data['url'])){
                        return '请输入链接';
                    }
                    break;
            }
        }
        return true;
    }

}