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
namespace TencentCloud\Cds\V20180420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDbauditInstancesRenewFlag请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method integer getAutoRenewFlag() 获取0，表示默认状态(用户未设置，即初始状态)；1，表示自动续费；2，表示明确不自动续费
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置0，表示默认状态(用户未设置，即初始状态)；1，表示自动续费；2，表示明确不自动续费
 */
class ModifyDbauditInstancesRenewFlagRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var integer 0，表示默认状态(用户未设置，即初始状态)；1，表示自动续费；2，表示明确不自动续费
     */
    public $AutoRenewFlag;

    /**
     * @param string $InstanceId 实例ID
     * @param integer $AutoRenewFlag 0，表示默认状态(用户未设置，即初始状态)；1，表示自动续费；2，表示明确不自动续费
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }
    }
}
