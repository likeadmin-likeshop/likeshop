<?php

namespace app\common\model;


use think\Model;

/**
 * 抽奖记录模型
 * Class LuckDrawRecord
 * @package app\common\model
 */
class LuckdrawRecord extends Model
{
    // 关联用户模型
    public function user()
    {
        return $this->hasOne('user', 'id', 'user_id')
            ->field('id,sn,nickname,avatar,level,mobile,sex,create_time');
    }

    public function getCreateTimeAttr($value)
    {
        return date('Y-m-d H:i:s', $value);
    }
}