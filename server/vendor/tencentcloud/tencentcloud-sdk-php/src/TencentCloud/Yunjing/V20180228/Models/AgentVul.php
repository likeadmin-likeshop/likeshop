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
 * 主机漏洞信息
 *
 * @method integer getId() 获取漏洞ID。
 * @method void setId(integer $Id) 设置漏洞ID。
 * @method string getMachineIp() 获取主机IP。
 * @method void setMachineIp(string $MachineIp) 设置主机IP。
 * @method string getVulName() 获取漏洞名称。
 * @method void setVulName(string $VulName) 设置漏洞名称。
 * @method string getVulLevel() 获取漏洞危害等级。
<li>HIGH：高危</li>
<li>MIDDLE：中危</li>
<li>LOW：低危</li>
<li>NOTICE：提示</li>
 * @method void setVulLevel(string $VulLevel) 设置漏洞危害等级。
<li>HIGH：高危</li>
<li>MIDDLE：中危</li>
<li>LOW：低危</li>
<li>NOTICE：提示</li>
 * @method string getLastScanTime() 获取最后扫描时间。
 * @method void setLastScanTime(string $LastScanTime) 设置最后扫描时间。
 * @method string getDescription() 获取漏洞描述。
 * @method void setDescription(string $Description) 设置漏洞描述。
 * @method integer getVulId() 获取漏洞种类ID。
 * @method void setVulId(integer $VulId) 设置漏洞种类ID。
 * @method string getVulStatus() 获取漏洞状态。
<li>UN_OPERATED : 待处理</li>
<li>FIXED : 已修复</li>
 * @method void setVulStatus(string $VulStatus) 设置漏洞状态。
<li>UN_OPERATED : 待处理</li>
<li>FIXED : 已修复</li>
 */
class AgentVul extends AbstractModel
{
    /**
     * @var integer 漏洞ID。
     */
    public $Id;

    /**
     * @var string 主机IP。
     */
    public $MachineIp;

    /**
     * @var string 漏洞名称。
     */
    public $VulName;

    /**
     * @var string 漏洞危害等级。
<li>HIGH：高危</li>
<li>MIDDLE：中危</li>
<li>LOW：低危</li>
<li>NOTICE：提示</li>
     */
    public $VulLevel;

    /**
     * @var string 最后扫描时间。
     */
    public $LastScanTime;

    /**
     * @var string 漏洞描述。
     */
    public $Description;

    /**
     * @var integer 漏洞种类ID。
     */
    public $VulId;

    /**
     * @var string 漏洞状态。
<li>UN_OPERATED : 待处理</li>
<li>FIXED : 已修复</li>
     */
    public $VulStatus;

    /**
     * @param integer $Id 漏洞ID。
     * @param string $MachineIp 主机IP。
     * @param string $VulName 漏洞名称。
     * @param string $VulLevel 漏洞危害等级。
<li>HIGH：高危</li>
<li>MIDDLE：中危</li>
<li>LOW：低危</li>
<li>NOTICE：提示</li>
     * @param string $LastScanTime 最后扫描时间。
     * @param string $Description 漏洞描述。
     * @param integer $VulId 漏洞种类ID。
     * @param string $VulStatus 漏洞状态。
<li>UN_OPERATED : 待处理</li>
<li>FIXED : 已修复</li>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("VulLevel",$param) and $param["VulLevel"] !== null) {
            $this->VulLevel = $param["VulLevel"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("VulStatus",$param) and $param["VulStatus"] !== null) {
            $this->VulStatus = $param["VulStatus"];
        }
    }
}
