<?php

namespace app\common\model;

use think\Model;
use think\model\concern\SoftDelete;

class Delivery extends Model
{
    use SoftDelete;
    protected $deleteTime = 'del';
    protected $defaultSoftDelete = 0;
}