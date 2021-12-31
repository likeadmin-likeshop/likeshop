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
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 漏洞信息
 *
 * @method string getVulId() 获取漏洞id
 * @method void setVulId(string $VulId) 设置漏洞id
 * @method string getVulName() 获取漏洞名称
 * @method void setVulName(string $VulName) 设置漏洞名称
 * @method string getVulCode() 获取漏洞代码
 * @method void setVulCode(string $VulCode) 设置漏洞代码
 * @method string getVulDesc() 获取漏洞描述
 * @method void setVulDesc(string $VulDesc) 设置漏洞描述
 * @method string getVulSolution() 获取漏洞解决方案
 * @method void setVulSolution(string $VulSolution) 设置漏洞解决方案
 * @method integer getVulSrcType() 获取漏洞来源类别，0默认自身，1第三方插件
 * @method void setVulSrcType(integer $VulSrcType) 设置漏洞来源类别，0默认自身，1第三方插件
 * @method string getVulFilepath() 获取漏洞位置
 * @method void setVulFilepath(string $VulFilepath) 设置漏洞位置
 * @method integer getRiskLevel() 获取风险级别：1 低风险 ；2中等风险；3 高风险
 * @method void setRiskLevel(integer $RiskLevel) 设置风险级别：1 低风险 ；2中等风险；3 高风险
 */
class VulList extends AbstractModel
{
    /**
     * @var string 漏洞id
     */
    public $VulId;

    /**
     * @var string 漏洞名称
     */
    public $VulName;

    /**
     * @var string 漏洞代码
     */
    public $VulCode;

    /**
     * @var string 漏洞描述
     */
    public $VulDesc;

    /**
     * @var string 漏洞解决方案
     */
    public $VulSolution;

    /**
     * @var integer 漏洞来源类别，0默认自身，1第三方插件
     */
    public $VulSrcType;

    /**
     * @var string 漏洞位置
     */
    public $VulFilepath;

    /**
     * @var integer 风险级别：1 低风险 ；2中等风险；3 高风险
     */
    public $RiskLevel;

    /**
     * @param string $VulId 漏洞id
     * @param string $VulName 漏洞名称
     * @param string $VulCode 漏洞代码
     * @param string $VulDesc 漏洞描述
     * @param string $VulSolution 漏洞解决方案
     * @param integer $VulSrcType 漏洞来源类别，0默认自身，1第三方插件
     * @param string $VulFilepath 漏洞位置
     * @param integer $RiskLevel 风险级别：1 低风险 ；2中等风险；3 高风险
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

        if (array_key_exists("VulCode",$param) and $param["VulCode"] !== null) {
            $this->VulCode = $param["VulCode"];
        }

        if (array_key_exists("VulDesc",$param) and $param["VulDesc"] !== null) {
            $this->VulDesc = $param["VulDesc"];
        }

        if (array_key_exists("VulSolution",$param) and $param["VulSolution"] !== null) {
            $this->VulSolution = $param["VulSolution"];
        }

        if (array_key_exists("VulSrcType",$param) and $param["VulSrcType"] !== null) {
            $this->VulSrcType = $param["VulSrcType"];
        }

        if (array_key_exists("VulFilepath",$param) and $param["VulFilepath"] !== null) {
            $this->VulFilepath = $param["VulFilepath"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }
    }
}
