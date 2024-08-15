<?php

namespace app\common\model;

use think\Model;
use think\model\concern\SoftDelete;

class GoodsBrand extends Model
{
    use SoftDelete;
    protected $defaultSoftDelete = 0;
    protected $deleteTime = 'del';
}