<?php

namespace app\common\model;


use think\Model;

/**
 * 拼团活动商品-模型
 * Class TeamActivity
 * @package app\common\model
 */
class TeamActivity extends Model
{
//    protected $pk = 'team_id';
    /**
     * Notes: 关联拼团模型
     * @author 张无忌(2021/1/14 15:34)
     */
    public function teamFound()
    {
        return $this->hasMany('TeamFound', 'team_id', 'team_id');
    }
}