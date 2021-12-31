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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulInfo返回参数结构体
 *
 * @method integer getVulId() 获取漏洞种类ID。
 * @method void setVulId(integer $VulId) 设置漏洞种类ID。
 * @method string getVulName() 获取漏洞名称。
 * @method void setVulName(string $VulName) 设置漏洞名称。
 * @method string getVulLevel() 获取漏洞等级。
 * @method void setVulLevel(string $VulLevel) 设置漏洞等级。
 * @method string getVulType() 获取漏洞类型。
 * @method void setVulType(string $VulType) 设置漏洞类型。
 * @method string getDescription() 获取漏洞描述。
 * @method void setDescription(string $Description) 设置漏洞描述。
 * @method string getRepairPlan() 获取修复方案。
 * @method void setRepairPlan(string $RepairPlan) 设置修复方案。
 * @method string getCveId() 获取漏洞CVE。
 * @method void setCveId(string $CveId) 设置漏洞CVE。
 * @method string getReference() 获取参考链接。
 * @method void setReference(string $Reference) 设置参考链接。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVulInfoResponse extends AbstractModel
{
    /**
     * @var integer 漏洞种类ID。
     */
    public $VulId;

    /**
     * @var string 漏洞名称。
     */
    public $VulName;

    /**
     * @var string 漏洞等级。
     */
    public $VulLevel;

    /**
     * @var string 漏洞类型。
     */
    public $VulType;

    /**
     * @var string 漏洞描述。
     */
    public $Description;

    /**
     * @var string 修复方案。
     */
    public $RepairPlan;

    /**
     * @var string 漏洞CVE。
     */
    public $CveId;

    /**
     * @var string 参考链接。
     */
    public $Reference;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $VulId 漏洞种类ID。
     * @param string $VulName 漏洞名称。
     * @param string $VulLevel 漏洞等级。
     * @param string $VulType 漏洞类型。
     * @param string $Description 漏洞描述。
     * @param string $RepairPlan 修复方案。
     * @param string $CveId 漏洞CVE。
     * @param string $Reference 参考链接。
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
        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("VulLevel",$param) and $param["VulLevel"] !== null) {
            $this->VulLevel = $param["VulLevel"];
        }

        if (array_key_exists("VulType",$param) and $param["VulType"] !== null) {
            $this->VulType = $param["VulType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RepairPlan",$param) and $param["RepairPlan"] !== null) {
            $this->RepairPlan = $param["RepairPlan"];
        }

        if (array_key_exists("CveId",$param) and $param["CveId"] !== null) {
            $this->CveId = $param["CveId"];
        }

        if (array_key_exists("Reference",$param) and $param["Reference"] !== null) {
            $this->Reference = $param["Reference"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
