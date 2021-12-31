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
 * DescribeAgentClientGrade返回参数结构体
 *
 * @method integer getAuditStatus() 获取审核状态：0待审核，1，已审核
 * @method void setAuditStatus(integer $AuditStatus) 设置审核状态：0待审核，1，已审核
 * @method integer getAuthState() 获取实名认证状态：0，未实名认证，1实名认证
 * @method void setAuthState(integer $AuthState) 设置实名认证状态：0，未实名认证，1实名认证
 * @method string getClientGrade() 获取客户级别
 * @method void setClientGrade(string $ClientGrade) 设置客户级别
 * @method integer getClientType() 获取客户类型：1，个人；2，企业；3，其他
 * @method void setClientType(integer $ClientType) 设置客户类型：1，个人；2，企业；3，其他
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAgentClientGradeResponse extends AbstractModel
{
    /**
     * @var integer 审核状态：0待审核，1，已审核
     */
    public $AuditStatus;

    /**
     * @var integer 实名认证状态：0，未实名认证，1实名认证
     */
    public $AuthState;

    /**
     * @var string 客户级别
     */
    public $ClientGrade;

    /**
     * @var integer 客户类型：1，个人；2，企业；3，其他
     */
    public $ClientType;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $AuditStatus 审核状态：0待审核，1，已审核
     * @param integer $AuthState 实名认证状态：0，未实名认证，1实名认证
     * @param string $ClientGrade 客户级别
     * @param integer $ClientType 客户类型：1，个人；2，企业；3，其他
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
        if (array_key_exists("AuditStatus",$param) and $param["AuditStatus"] !== null) {
            $this->AuditStatus = $param["AuditStatus"];
        }

        if (array_key_exists("AuthState",$param) and $param["AuthState"] !== null) {
            $this->AuthState = $param["AuthState"];
        }

        if (array_key_exists("ClientGrade",$param) and $param["ClientGrade"] !== null) {
            $this->ClientGrade = $param["ClientGrade"];
        }

        if (array_key_exists("ClientType",$param) and $param["ClientType"] !== null) {
            $this->ClientType = $param["ClientType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
