<?php

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