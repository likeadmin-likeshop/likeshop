<?php

namespace app\admin\validate;


use think\Validate;

class LuckDraw extends Validate
{
    protected $rule = [
        'id'          => 'require|number',
        'prize_type'  => 'require|number',
        'number'      => 'require|number',
        'sort'        => 'require|number',
        'probability' => 'require',
        'status'      => 'require|in:0,1'
    ];

    protected $message = [
        'id.require'          => 'id不可为空',
        'prize_type.require'  => '请选择抽奖类型',
        'number.require'      => '请填写奖品数量',
        'sort.require'        => '请填写排序号',
        'sort.number'         => '排序号需为数字',
        'probability.require' => '请填写抽奖概率',
        'status.require'  => '请选择状态',
        'status.in'       => '状态选择不在范围内',
    ];

    /**
     * Notes: 添加场景
     * @author 张无忌(2020/12/24 16:48)
     */
    public function sceneAdd()
    {
        $this->remove('id');
    }
}