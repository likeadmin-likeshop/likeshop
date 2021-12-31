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
namespace TencentCloud\Partners\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AuditApplyClient返回参数结构体
 *
 * @method string getUin() 获取代理商账号ID
 * @method void setUin(string $Uin) 设置代理商账号ID
 * @method string getClientUin() 获取客户账号ID
 * @method void setClientUin(string $ClientUin) 设置客户账号ID
 * @method string getAuditResult() 获取审核结果，包括accept/reject/qcloudaudit（腾讯云审核）
 * @method void setAuditResult(string $AuditResult) 设置审核结果，包括accept/reject/qcloudaudit（腾讯云审核）
 * @method integer getAgentTime() 获取关联时间对应的时间戳
 * @method void setAgentTime(integer $AgentTime) 设置关联时间对应的时间戳
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class AuditApplyClientResponse extends AbstractModel
{
    /**
     * @var string 代理商账号ID
     */
    public $Uin;

    /**
     * @var string 客户账号ID
     */
    public $ClientUin;

    /**
     * @var string 审核结果，包括accept/reject/qcloudaudit（腾讯云审核）
     */
    public $AuditResult;

    /**
     * @var integer 关联时间对应的时间戳
     */
    public $AgentTime;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Uin 代理商账号ID
     * @param string $ClientUin 客户账号ID
     * @param string $AuditResult 审核结果，包括accept/reject/qcloudaudit（腾讯云审核）
     * @param integer $AgentTime 关联时间对应的时间戳
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("ClientUin",$param) and $param["ClientUin"] !== null) {
            $this->ClientUin = $param["ClientUin"];
        }

        if (array_key_exists("AuditResult",$param) and $param["AuditResult"] !== null) {
            $this->AuditResult = $param["AuditResult"];
        }

        if (array_key_exists("AgentTime",$param) and $param["AgentTime"] !== null) {
            $this->AgentTime = $param["AgentTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
