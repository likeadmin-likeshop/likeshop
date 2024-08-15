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

class CommentHelper extends Validate
{
    protected $rule = [
        'goods_id' => 'require',
        'avatar' => 'require',
        'nickname' => 'require',
        'level' => 'require',
        'comment_time' => 'require|checkTime',
        'score' => 'require',
        'comment' => 'require',
    ];

    protected $message = [
        'goods_id.require' => '商品参数缺失',
        'avatar.require' => '请选择会员头像',
        'nickname.require' => '请填写昵称',
        'level.require' => '请选择会员等级',
        'comment_time.require' => '请选择评价时间',
        'score.require' => '请选择评价等级',
        'comment.require' => '请填写评价内容',
    ];


    protected function checkTime($value, $rule, $data)
    {
       if (strtotime($value) > time()) {
           return '不可大于当前时间';
       }
       return true;
    }

}