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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * POD浮动规格
 *
 * @method float getRequestCpu() 获取需求最小cpu核数
 * @method void setRequestCpu(float $RequestCpu) 设置需求最小cpu核数
 * @method float getLimitCpu() 获取需求最大cpu核数
 * @method void setLimitCpu(float $LimitCpu) 设置需求最大cpu核数
 * @method float getRequestMemory() 获取需求最小memory，单位MB
 * @method void setRequestMemory(float $RequestMemory) 设置需求最小memory，单位MB
 * @method float getLimitMemory() 获取需求最大memory，单位MB
 * @method void setLimitMemory(float $LimitMemory) 设置需求最大memory，单位MB
 */
class DynamicPodSpec extends AbstractModel
{
    /**
     * @var float 需求最小cpu核数
     */
    public $RequestCpu;

    /**
     * @var float 需求最大cpu核数
     */
    public $LimitCpu;

    /**
     * @var float 需求最小memory，单位MB
     */
    public $RequestMemory;

    /**
     * @var float 需求最大memory，单位MB
     */
    public $LimitMemory;

    /**
     * @param float $RequestCpu 需求最小cpu核数
     * @param float $LimitCpu 需求最大cpu核数
     * @param float $RequestMemory 需求最小memory，单位MB
     * @param float $LimitMemory 需求最大memory，单位MB
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
        if (array_key_exists("RequestCpu",$param) and $param["RequestCpu"] !== null) {
            $this->RequestCpu = $param["RequestCpu"];
        }

        if (array_key_exists("LimitCpu",$param) and $param["LimitCpu"] !== null) {
            $this->LimitCpu = $param["LimitCpu"];
        }

        if (array_key_exists("RequestMemory",$param) and $param["RequestMemory"] !== null) {
            $this->RequestMemory = $param["RequestMemory"];
        }

        if (array_key_exists("LimitMemory",$param) and $param["LimitMemory"] !== null) {
            $this->LimitMemory = $param["LimitMemory"];
        }
    }
}
