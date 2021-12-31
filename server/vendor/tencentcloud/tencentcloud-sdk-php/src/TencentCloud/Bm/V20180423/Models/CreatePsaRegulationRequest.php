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
namespace TencentCloud\Bm\V20180423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePsaRegulation请求参数结构体
 *
 * @method string getPsaName() 获取规则别名
 * @method void setPsaName(string $PsaName) 设置规则别名
 * @method array getTaskTypeIds() 获取关联的故障类型ID列表
 * @method void setTaskTypeIds(array $TaskTypeIds) 设置关联的故障类型ID列表
 * @method integer getRepairLimit() 获取维修实例上限，默认为5
 * @method void setRepairLimit(integer $RepairLimit) 设置维修实例上限，默认为5
 * @method string getPsaDescription() 获取规则备注
 * @method void setPsaDescription(string $PsaDescription) 设置规则备注
 */
class CreatePsaRegulationRequest extends AbstractModel
{
    /**
     * @var string 规则别名
     */
    public $PsaName;

    /**
     * @var array 关联的故障类型ID列表
     */
    public $TaskTypeIds;

    /**
     * @var integer 维修实例上限，默认为5
     */
    public $RepairLimit;

    /**
     * @var string 规则备注
     */
    public $PsaDescription;

    /**
     * @param string $PsaName 规则别名
     * @param array $TaskTypeIds 关联的故障类型ID列表
     * @param integer $RepairLimit 维修实例上限，默认为5
     * @param string $PsaDescription 规则备注
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
        if (array_key_exists("PsaName",$param) and $param["PsaName"] !== null) {
            $this->PsaName = $param["PsaName"];
        }

        if (array_key_exists("TaskTypeIds",$param) and $param["TaskTypeIds"] !== null) {
            $this->TaskTypeIds = $param["TaskTypeIds"];
        }

        if (array_key_exists("RepairLimit",$param) and $param["RepairLimit"] !== null) {
            $this->RepairLimit = $param["RepairLimit"];
        }

        if (array_key_exists("PsaDescription",$param) and $param["PsaDescription"] !== null) {
            $this->PsaDescription = $param["PsaDescription"];
        }
    }
}
