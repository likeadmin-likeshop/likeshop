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

class AdjustUserLevel extends Validate{
    protected $rule = [
        'id'       => 'require',
        'level'    => 'require|checkLevel',
        'remark'   => 'max:100'
    ];

    protected $message = [
        'id'            => '请选择用户',
        'level'         => '请选择会员等级',
        'remark'        => '备注不能超过100个字符',
    ];

    protected function checkLevel($value,$rule,$data){

        $level = Db::name('user_level')->where(['del'=>0,'id'=>$value])->find();
        // 无等级或已存在的等级
        if($level || $level == 0) {
            return true;
        }
        
        return '该会员等级已不存在，请重新选择';
    }
}