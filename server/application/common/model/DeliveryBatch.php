<?php

namespace app\common\model;

use think\Model;
use think\model\concern\SoftDelete;

class DeliveryBatch extends Model
{
    use SoftDelete;
    protected $deleteTime = 'delete_time';
    protected $defaultSoftDelete = 0;
    
    protected $autoWriteTimestamp = true;
    
    function getProgressAttr($value, $data)
    {
        return floor(($data['success'] + $data['fail']) / $data['nums'] * 100);
    }
    
    function items()
    {
        return $this->hasMany(DeliveryBatchInfo::class, 'batch_id', 'id');
    }
    
}