<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群关联的伸缩组最大实例数最小值实例数
 *
 * @method integer getMinSize() 获取伸缩组最小实例数
 * @method void setMinSize(integer $MinSize) 设置伸缩组最小实例数
 * @method integer getMaxSize() 获取伸缩组最大实例数
 * @method void setMaxSize(integer $MaxSize) 设置伸缩组最大实例数
 */
class AutoScalingGroupRange extends AbstractModel
{
    /**
     * @var integer 伸缩组最小实例数
     */
    public $MinSize;

    /**
     * @var integer 伸缩组最大实例数
     */
    public $MaxSize;

    /**
     * @param integer $MinSize 伸缩组最小实例数
     * @param integer $MaxSize 伸缩组最大实例数
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("MinSize",$param) and $param["MinSize"] !== null) {
            $this->MinSize = $param["MinSize"];
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }
    }
}
