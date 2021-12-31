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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于描述实例的统计信息
 *
 * @method string getInstanceType() 获取实例的类型
 * @method void setInstanceType(string $InstanceType) 设置实例的类型
 * @method integer getInstanceCount() 获取实例的个数
 * @method void setInstanceCount(integer $InstanceCount) 设置实例的个数
 */
class InstanceStatistic extends AbstractModel
{
    /**
     * @var string 实例的类型
     */
    public $InstanceType;

    /**
     * @var integer 实例的个数
     */
    public $InstanceCount;

    /**
     * @param string $InstanceType 实例的类型
     * @param integer $InstanceCount 实例的个数
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }
    }
}
