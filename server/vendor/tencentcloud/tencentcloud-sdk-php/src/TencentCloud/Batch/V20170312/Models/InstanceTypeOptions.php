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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例机型配置。
 *
 * @method integer getCPU() 获取CPU核数。
 * @method void setCPU(integer $CPU) 设置CPU核数。
 * @method integer getMemory() 获取内存值，单位GB。
 * @method void setMemory(integer $Memory) 设置内存值，单位GB。
 * @method array getInstanceCategories() 获取实例机型类别，可选参数：“ALL”、“GENERAL”、“GENERAL_2”、“GENERAL_3”、“COMPUTE”、“COMPUTE_2”和“COMPUTE_3”。默认值“ALL”。
 * @method void setInstanceCategories(array $InstanceCategories) 设置实例机型类别，可选参数：“ALL”、“GENERAL”、“GENERAL_2”、“GENERAL_3”、“COMPUTE”、“COMPUTE_2”和“COMPUTE_3”。默认值“ALL”。
 */
class InstanceTypeOptions extends AbstractModel
{
    /**
     * @var integer CPU核数。
     */
    public $CPU;

    /**
     * @var integer 内存值，单位GB。
     */
    public $Memory;

    /**
     * @var array 实例机型类别，可选参数：“ALL”、“GENERAL”、“GENERAL_2”、“GENERAL_3”、“COMPUTE”、“COMPUTE_2”和“COMPUTE_3”。默认值“ALL”。
     */
    public $InstanceCategories;

    /**
     * @param integer $CPU CPU核数。
     * @param integer $Memory 内存值，单位GB。
     * @param array $InstanceCategories 实例机型类别，可选参数：“ALL”、“GENERAL”、“GENERAL_2”、“GENERAL_3”、“COMPUTE”、“COMPUTE_2”和“COMPUTE_3”。默认值“ALL”。
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
        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("InstanceCategories",$param) and $param["InstanceCategories"] !== null) {
            $this->InstanceCategories = $param["InstanceCategories"];
        }
    }
}
