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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScanVul请求参数结构体
 *
 * @method string getVulCategories() 获取漏洞类型：1: web应用漏洞 2:系统组件漏洞 (多选英文;分隔)
 * @method void setVulCategories(string $VulCategories) 设置漏洞类型：1: web应用漏洞 2:系统组件漏洞 (多选英文;分隔)
 * @method string getVulLevels() 获取危害等级：1-低危；2-中危；3-高危；4-严重 (多选英文;分隔)
 * @method void setVulLevels(string $VulLevels) 设置危害等级：1-低危；2-中危；3-高危；4-严重 (多选英文;分隔)
 * @method integer getHostType() 获取服务器分类：1:专业版服务器；2:自选服务器
 * @method void setHostType(integer $HostType) 设置服务器分类：1:专业版服务器；2:自选服务器
 * @method array getQuuidList() 获取自选服务器时生效，主机quuid的string数组
 * @method void setQuuidList(array $QuuidList) 设置自选服务器时生效，主机quuid的string数组
 * @method integer getVulEmergency() 获取是否是应急漏洞 0 否 1 是
 * @method void setVulEmergency(integer $VulEmergency) 设置是否是应急漏洞 0 否 1 是
 */
class ScanVulRequest extends AbstractModel
{
    /**
     * @var string 漏洞类型：1: web应用漏洞 2:系统组件漏洞 (多选英文;分隔)
     */
    public $VulCategories;

    /**
     * @var string 危害等级：1-低危；2-中危；3-高危；4-严重 (多选英文;分隔)
     */
    public $VulLevels;

    /**
     * @var integer 服务器分类：1:专业版服务器；2:自选服务器
     */
    public $HostType;

    /**
     * @var array 自选服务器时生效，主机quuid的string数组
     */
    public $QuuidList;

    /**
     * @var integer 是否是应急漏洞 0 否 1 是
     */
    public $VulEmergency;

    /**
     * @param string $VulCategories 漏洞类型：1: web应用漏洞 2:系统组件漏洞 (多选英文;分隔)
     * @param string $VulLevels 危害等级：1-低危；2-中危；3-高危；4-严重 (多选英文;分隔)
     * @param integer $HostType 服务器分类：1:专业版服务器；2:自选服务器
     * @param array $QuuidList 自选服务器时生效，主机quuid的string数组
     * @param integer $VulEmergency 是否是应急漏洞 0 否 1 是
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
        if (array_key_exists("VulCategories",$param) and $param["VulCategories"] !== null) {
            $this->VulCategories = $param["VulCategories"];
        }

        if (array_key_exists("VulLevels",$param) and $param["VulLevels"] !== null) {
            $this->VulLevels = $param["VulLevels"];
        }

        if (array_key_exists("HostType",$param) and $param["HostType"] !== null) {
            $this->HostType = $param["HostType"];
        }

        if (array_key_exists("QuuidList",$param) and $param["QuuidList"] !== null) {
            $this->QuuidList = $param["QuuidList"];
        }

        if (array_key_exists("VulEmergency",$param) and $param["VulEmergency"] !== null) {
            $this->VulEmergency = $param["VulEmergency"];
        }
    }
}
