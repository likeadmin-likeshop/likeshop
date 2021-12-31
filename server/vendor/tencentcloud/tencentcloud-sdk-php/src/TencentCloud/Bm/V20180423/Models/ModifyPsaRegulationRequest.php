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
 * ModifyPsaRegulation请求参数结构体
 *
 * @method string getPsaId() 获取预授权规则ID
 * @method void setPsaId(string $PsaId) 设置预授权规则ID
 * @method string getPsaName() 获取预授权规则别名
 * @method void setPsaName(string $PsaName) 设置预授权规则别名
 * @method integer getRepairLimit() 获取维修中的实例上限
 * @method void setRepairLimit(integer $RepairLimit) 设置维修中的实例上限
 * @method string getPsaDescription() 获取预授权规则备注
 * @method void setPsaDescription(string $PsaDescription) 设置预授权规则备注
 * @method array getTaskTypeIds() 获取预授权规则关联故障类型ID列表
 * @method void setTaskTypeIds(array $TaskTypeIds) 设置预授权规则关联故障类型ID列表
 */
class ModifyPsaRegulationRequest extends AbstractModel
{
    /**
     * @var string 预授权规则ID
     */
    public $PsaId;

    /**
     * @var string 预授权规则别名
     */
    public $PsaName;

    /**
     * @var integer 维修中的实例上限
     */
    public $RepairLimit;

    /**
     * @var string 预授权规则备注
     */
    public $PsaDescription;

    /**
     * @var array 预授权规则关联故障类型ID列表
     */
    public $TaskTypeIds;

    /**
     * @param string $PsaId 预授权规则ID
     * @param string $PsaName 预授权规则别名
     * @param integer $RepairLimit 维修中的实例上限
     * @param string $PsaDescription 预授权规则备注
     * @param array $TaskTypeIds 预授权规则关联故障类型ID列表
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
        if (array_key_exists("PsaId",$param) and $param["PsaId"] !== null) {
            $this->PsaId = $param["PsaId"];
        }

        if (array_key_exists("PsaName",$param) and $param["PsaName"] !== null) {
            $this->PsaName = $param["PsaName"];
        }

        if (array_key_exists("RepairLimit",$param) and $param["RepairLimit"] !== null) {
            $this->RepairLimit = $param["RepairLimit"];
        }

        if (array_key_exists("PsaDescription",$param) and $param["PsaDescription"] !== null) {
            $this->PsaDescription = $param["PsaDescription"];
        }

        if (array_key_exists("TaskTypeIds",$param) and $param["TaskTypeIds"] !== null) {
            $this->TaskTypeIds = $param["TaskTypeIds"];
        }
    }
}
