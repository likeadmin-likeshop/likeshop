<?php
namespace app\common\model;

use think\Model;
use think\model\concern\SoftDelete;

class DistributionGoods extends Model
{
    use SoftDelete;
    protected $deleteTime = 'delete_time';
}