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
 * 漏洞列表数据
 *
 * @method integer getVulId() 获取漏洞种类ID
 * @method void setVulId(integer $VulId) 设置漏洞种类ID
 * @method string getVulName() 获取漏洞名称
 * @method void setVulName(string $VulName) 设置漏洞名称
 * @method string getVulLevel() 获取漏洞危害等级:
HIGH：高危
MIDDLE：中危
LOW：低危
NOTICE：提示
 * @method void setVulLevel(string $VulLevel) 设置漏洞危害等级:
HIGH：高危
MIDDLE：中危
LOW：低危
NOTICE：提示
 * @method string getLastScanTime() 获取最后扫描时间
 * @method void setLastScanTime(string $LastScanTime) 设置最后扫描时间
 * @method integer getImpactedHostNum() 获取受影响机器数量
 * @method void setImpactedHostNum(integer $ImpactedHostNum) 设置受影响机器数量
 * @method string getVulStatus() 获取漏洞状态
* UN_OPERATED : 待处理
* FIXED : 已修复
 * @method void setVulStatus(string $VulStatus) 设置漏洞状态
* UN_OPERATED : 待处理
* FIXED : 已修复
 */
class Vul extends AbstractModel
{
    /**
     * @var integer 漏洞种类ID
     */
    public $VulId;

    /**
     * @var string 漏洞名称
     */
    public $VulName;

    /**
     * @var string 漏洞危害等级:
HIGH：高危
MIDDLE：中危
LOW：低危
NOTICE：提示
     */
    public $VulLevel;

    /**
     * @var string 最后扫描时间
     */
    public $LastScanTime;

    /**
     * @var integer 受影响机器数量
     */
    public $ImpactedHostNum;

    /**
     * @var string 漏洞状态
* UN_OPERATED : 待处理
* FIXED : 已修复
     */
    public $VulStatus;

    /**
     * @param integer $VulId 漏洞种类ID
     * @param string $VulName 漏洞名称
     * @param string $VulLevel 漏洞危害等级:
HIGH：高危
MIDDLE：中危
LOW：低危
NOTICE：提示
     * @param string $LastScanTime 最后扫描时间
     * @param integer $ImpactedHostNum 受影响机器数量
     * @param string $VulStatus 漏洞状态
* UN_OPERATED : 待处理
* FIXED : 已修复
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

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("ImpactedHostNum",$param) and $param["ImpactedHostNum"] !== null) {
            $this->ImpactedHostNum = $param["ImpactedHostNum"];
        }

        if (array_key_exists("VulStatus",$param) and $param["VulStatus"] !== null) {
            $this->VulStatus = $param["VulStatus"];
        }
    }
}
