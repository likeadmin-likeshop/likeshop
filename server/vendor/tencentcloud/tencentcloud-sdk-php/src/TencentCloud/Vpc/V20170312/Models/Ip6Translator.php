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
 * IPV6转换实例信息
 *
 * @method string getIp6TranslatorId() 获取IPV6转换实例唯一ID，形如ip6-xxxxxxxx
 * @method void setIp6TranslatorId(string $Ip6TranslatorId) 设置IPV6转换实例唯一ID，形如ip6-xxxxxxxx
 * @method string getIp6TranslatorName() 获取IPV6转换实例名称
 * @method void setIp6TranslatorName(string $Ip6TranslatorName) 设置IPV6转换实例名称
 * @method string getVip6() 获取IPV6地址
 * @method void setVip6(string $Vip6) 设置IPV6地址
 * @method string getIspName() 获取IPV6转换地址所属运营商
 * @method void setIspName(string $IspName) 设置IPV6转换地址所属运营商
 * @method string getTranslatorStatus() 获取转换实例状态，限于CREATING,RUNNING,DELETING,MODIFYING
 * @method void setTranslatorStatus(string $TranslatorStatus) 设置转换实例状态，限于CREATING,RUNNING,DELETING,MODIFYING
 * @method string getCreatedTime() 获取IPV6转换实例创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置IPV6转换实例创建时间
 * @method integer getIp6RuleCount() 获取绑定的IPV6转换规则数量
 * @method void setIp6RuleCount(integer $Ip6RuleCount) 设置绑定的IPV6转换规则数量
 * @method array getIP6RuleSet() 获取IPV6转换规则信息
 * @method void setIP6RuleSet(array $IP6RuleSet) 设置IPV6转换规则信息
 */
class Ip6Translator extends AbstractModel
{
    /**
     * @var string IPV6转换实例唯一ID，形如ip6-xxxxxxxx
     */
    public $Ip6TranslatorId;

    /**
     * @var string IPV6转换实例名称
     */
    public $Ip6TranslatorName;

    /**
     * @var string IPV6地址
     */
    public $Vip6;

    /**
     * @var string IPV6转换地址所属运营商
     */
    public $IspName;

    /**
     * @var string 转换实例状态，限于CREATING,RUNNING,DELETING,MODIFYING
     */
    public $TranslatorStatus;

    /**
     * @var string IPV6转换实例创建时间
     */
    public $CreatedTime;

    /**
     * @var integer 绑定的IPV6转换规则数量
     */
    public $Ip6RuleCount;

    /**
     * @var array IPV6转换规则信息
     */
    public $IP6RuleSet;

    /**
     * @param string $Ip6TranslatorId IPV6转换实例唯一ID，形如ip6-xxxxxxxx
     * @param string $Ip6TranslatorName IPV6转换实例名称
     * @param string $Vip6 IPV6地址
     * @param string $IspName IPV6转换地址所属运营商
     * @param string $TranslatorStatus 转换实例状态，限于CREATING,RUNNING,DELETING,MODIFYING
     * @param string $CreatedTime IPV6转换实例创建时间
     * @param integer $Ip6RuleCount 绑定的IPV6转换规则数量
     * @param array $IP6RuleSet IPV6转换规则信息
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
        if (array_key_exists("Ip6TranslatorId",$param) and $param["Ip6TranslatorId"] !== null) {
            $this->Ip6TranslatorId = $param["Ip6TranslatorId"];
        }

        if (array_key_exists("Ip6TranslatorName",$param) and $param["Ip6TranslatorName"] !== null) {
            $this->Ip6TranslatorName = $param["Ip6TranslatorName"];
        }

        if (array_key_exists("Vip6",$param) and $param["Vip6"] !== null) {
            $this->Vip6 = $param["Vip6"];
        }

        if (array_key_exists("IspName",$param) and $param["IspName"] !== null) {
            $this->IspName = $param["IspName"];
        }

        if (array_key_exists("TranslatorStatus",$param) and $param["TranslatorStatus"] !== null) {
            $this->TranslatorStatus = $param["TranslatorStatus"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("Ip6RuleCount",$param) and $param["Ip6RuleCount"] !== null) {
            $this->Ip6RuleCount = $param["Ip6RuleCount"];
        }

        if (array_key_exists("IP6RuleSet",$param) and $param["IP6RuleSet"] !== null) {
            $this->IP6RuleSet = [];
            foreach ($param["IP6RuleSet"] as $key => $value){
                $obj = new Ip6Rule();
                $obj->deserialize($value);
                array_push($this->IP6RuleSet, $obj);
            }
        }
    }
}
