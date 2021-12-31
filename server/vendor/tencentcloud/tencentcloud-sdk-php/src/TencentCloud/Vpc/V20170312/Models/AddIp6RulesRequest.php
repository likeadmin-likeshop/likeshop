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
 * AddIp6Rules请求参数结构体
 *
 * @method string getIp6TranslatorId() 获取IPV6转换实例唯一ID，形如ip6-xxxxxxxx
 * @method void setIp6TranslatorId(string $Ip6TranslatorId) 设置IPV6转换实例唯一ID，形如ip6-xxxxxxxx
 * @method array getIp6RuleInfos() 获取IPV6转换规则信息
 * @method void setIp6RuleInfos(array $Ip6RuleInfos) 设置IPV6转换规则信息
 * @method string getIp6RuleName() 获取IPV6转换规则名称
 * @method void setIp6RuleName(string $Ip6RuleName) 设置IPV6转换规则名称
 */
class AddIp6RulesRequest extends AbstractModel
{
    /**
     * @var string IPV6转换实例唯一ID，形如ip6-xxxxxxxx
     */
    public $Ip6TranslatorId;

    /**
     * @var array IPV6转换规则信息
     */
    public $Ip6RuleInfos;

    /**
     * @var string IPV6转换规则名称
     */
    public $Ip6RuleName;

    /**
     * @param string $Ip6TranslatorId IPV6转换实例唯一ID，形如ip6-xxxxxxxx
     * @param array $Ip6RuleInfos IPV6转换规则信息
     * @param string $Ip6RuleName IPV6转换规则名称
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

        if (array_key_exists("Ip6RuleInfos",$param) and $param["Ip6RuleInfos"] !== null) {
            $this->Ip6RuleInfos = [];
            foreach ($param["Ip6RuleInfos"] as $key => $value){
                $obj = new Ip6RuleInfo();
                $obj->deserialize($value);
                array_push($this->Ip6RuleInfos, $obj);
            }
        }

        if (array_key_exists("Ip6RuleName",$param) and $param["Ip6RuleName"] !== null) {
            $this->Ip6RuleName = $param["Ip6RuleName"];
        }
    }
}
