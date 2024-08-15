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

class TeamActivity extends Validate
{
    protected $rule = [
        'team_id'     => 'require|number',
        'item'        => 'require|array',
        'goods_id'    => 'require|number',
        'people_num'  => 'require|number',
        'time_limit'  => 'require',
        'start_time'  => 'require',
        'end_time'    => 'require|endTime',
        'status'      => 'require|in:0,1',
        'share_title' => 'max:100',
        'share_intro' => 'max:255'
    ];

    protected $message = [
        'team_id.require'        => '拼团ID不可为空',
        'team_id.number'         => '拼团ID必须为数字',
        'item.require'           => '请填写拼团规格',
        'item.array'             => '拼团规格格式错误',
        'goods_id.require'       => '未选择开团商品',
        'goods_id.number'        => '选择的开团商品ID异常',
        'people_num.require'     => '请填写开团人数',
        'people_num.number'      => '开团人数必须为数字',
        'time_limit.time_limit'  => '请填写成团有效期',
        'start_time.require'     => '请选择团开始时间',
        'end_time.require'       => '请选择团结束时间',
        'status.require'         => '请选择开团状态',
        'status.in'              => '开团状态选择异常',
    ];

    // 添加场景
    public function sceneAdd()
    {
        $this->remove('team_id');
    }

    public function endTime($value, $rule, $data)
    {
        if (strtotime($value) <= time()) {
            return '结束时间不能少于当前时间';
        }
        if (strtotime($value) <= $data['start_time']) {
            return '结束时间不能少于或等于开始时间';
        }

        return true;
    }
}