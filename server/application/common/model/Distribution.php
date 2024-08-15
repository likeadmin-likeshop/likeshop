<?php
namespace app\common\model;

use think\Model;
use think\model\concern\SoftDelete;

class Distribution extends Model
{
    use SoftDelete;
    protected $deleteTime = 'delete_time';

    public function getDistributionTimeAttr($value)
    {
        return empty($value) ? '' : date('Y-m-d H:i:s', $value);
    }
}