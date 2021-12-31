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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTmpInstances请求参数结构体
 *
 * @method array getInstanceIds() 获取回档实例的ID列表，形如：tdsql-ow728lmc。
 * @method void setInstanceIds(array $InstanceIds) 设置回档实例的ID列表，形如：tdsql-ow728lmc。
 * @method string getRollbackTime() 获取回档时间点
 * @method void setRollbackTime(string $RollbackTime) 设置回档时间点
 */
class CreateTmpInstancesRequest extends AbstractModel
{
    /**
     * @var array 回档实例的ID列表，形如：tdsql-ow728lmc。
     */
    public $InstanceIds;

    /**
     * @var string 回档时间点
     */
    public $RollbackTime;

    /**
     * @param array $InstanceIds 回档实例的ID列表，形如：tdsql-ow728lmc。
     * @param string $RollbackTime 回档时间点
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("RollbackTime",$param) and $param["RollbackTime"] !== null) {
            $this->RollbackTime = $param["RollbackTime"];
        }
    }
}
