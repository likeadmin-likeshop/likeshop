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
 * AuditCrossBorderCompliance请求参数结构体
 *
 * @method string getServiceProvider() 获取服务商, 可选值：`UNICOM`。
 * @method void setServiceProvider(string $ServiceProvider) 设置服务商, 可选值：`UNICOM`。
 * @method integer getComplianceId() 获取表单唯一`ID`。
 * @method void setComplianceId(integer $ComplianceId) 设置表单唯一`ID`。
 * @method string getAuditBehavior() 获取通过：`APPROVED `，拒绝：`DENY`。
 * @method void setAuditBehavior(string $AuditBehavior) 设置通过：`APPROVED `，拒绝：`DENY`。
 */
class AuditCrossBorderComplianceRequest extends AbstractModel
{
    /**
     * @var string 服务商, 可选值：`UNICOM`。
     */
    public $ServiceProvider;

    /**
     * @var integer 表单唯一`ID`。
     */
    public $ComplianceId;

    /**
     * @var string 通过：`APPROVED `，拒绝：`DENY`。
     */
    public $AuditBehavior;

    /**
     * @param string $ServiceProvider 服务商, 可选值：`UNICOM`。
     * @param integer $ComplianceId 表单唯一`ID`。
     * @param string $AuditBehavior 通过：`APPROVED `，拒绝：`DENY`。
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
        if (array_key_exists("ServiceProvider",$param) and $param["ServiceProvider"] !== null) {
            $this->ServiceProvider = $param["ServiceProvider"];
        }

        if (array_key_exists("ComplianceId",$param) and $param["ComplianceId"] !== null) {
            $this->ComplianceId = $param["ComplianceId"];
        }

        if (array_key_exists("AuditBehavior",$param) and $param["AuditBehavior"] !== null) {
            $this->AuditBehavior = $param["AuditBehavior"];
        }
    }
}
