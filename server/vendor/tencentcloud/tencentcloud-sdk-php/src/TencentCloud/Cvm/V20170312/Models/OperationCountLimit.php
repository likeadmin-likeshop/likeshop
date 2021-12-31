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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述了单台实例操作次数限制
 *
 * @method string getOperation() 获取实例操作。取值范围：<br><li>`INSTANCE_DEGRADE`：降配操作<br><li>`INTERNET_CHARGE_TYPE_CHANGE`：修改网络带宽计费模式
 * @method void setOperation(string $Operation) 设置实例操作。取值范围：<br><li>`INSTANCE_DEGRADE`：降配操作<br><li>`INTERNET_CHARGE_TYPE_CHANGE`：修改网络带宽计费模式
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method integer getCurrentCount() 获取当前已使用次数，如果返回值为-1表示该操作无次数限制。
 * @method void setCurrentCount(integer $CurrentCount) 设置当前已使用次数，如果返回值为-1表示该操作无次数限制。
 * @method integer getLimitCount() 获取操作次数最高额度，如果返回值为-1表示该操作无次数限制，如果返回值为0表示不支持调整配置。
 * @method void setLimitCount(integer $LimitCount) 设置操作次数最高额度，如果返回值为-1表示该操作无次数限制，如果返回值为0表示不支持调整配置。
 */
class OperationCountLimit extends AbstractModel
{
    /**
     * @var string 实例操作。取值范围：<br><li>`INSTANCE_DEGRADE`：降配操作<br><li>`INTERNET_CHARGE_TYPE_CHANGE`：修改网络带宽计费模式
     */
    public $Operation;

    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var integer 当前已使用次数，如果返回值为-1表示该操作无次数限制。
     */
    public $CurrentCount;

    /**
     * @var integer 操作次数最高额度，如果返回值为-1表示该操作无次数限制，如果返回值为0表示不支持调整配置。
     */
    public $LimitCount;

    /**
     * @param string $Operation 实例操作。取值范围：<br><li>`INSTANCE_DEGRADE`：降配操作<br><li>`INTERNET_CHARGE_TYPE_CHANGE`：修改网络带宽计费模式
     * @param string $InstanceId 实例ID。
     * @param integer $CurrentCount 当前已使用次数，如果返回值为-1表示该操作无次数限制。
     * @param integer $LimitCount 操作次数最高额度，如果返回值为-1表示该操作无次数限制，如果返回值为0表示不支持调整配置。
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
        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("CurrentCount",$param) and $param["CurrentCount"] !== null) {
            $this->CurrentCount = $param["CurrentCount"];
        }

        if (array_key_exists("LimitCount",$param) and $param["LimitCount"] !== null) {
            $this->LimitCount = $param["LimitCount"];
        }
    }
}
