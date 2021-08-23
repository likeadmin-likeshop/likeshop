<?php

namespace app\common\model;


use think\Model;

/**
 * 拼团
 * Class Team
 * @package app\common\model
 */
class Team extends Model
{
    const STATUS_WAIT_SUCCESS = 0;
    const STATUS_SUCCESS = 1;
    const STATUS_ERROR = 2;

    //拼团状态
    public static function getStatusDesc($type)
    {
        $desc = [
            self::STATUS_WAIT_SUCCESS => '拼团中',
            self::STATUS_SUCCESS => '拼团成功',
            self::STATUS_ERROR => '拼团失败',
        ];

        if ($type === true){
            return $desc;
        }
        return $desc[$type] ?? '';
    }
}