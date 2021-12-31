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
 * RemoveIp6Rules请求参数结构体
 *
 * @method string getIp6TranslatorId() 获取IPV6转换规则所属的转换实例唯一ID，形如ip6-xxxxxxxx
 * @method void setIp6TranslatorId(string $Ip6TranslatorId) 设置IPV6转换规则所属的转换实例唯一ID，形如ip6-xxxxxxxx
 * @method array getIp6RuleIds() 获取待删除IPV6转换规则，形如rule6-xxxxxxxx
 * @method void setIp6RuleIds(array $Ip6RuleIds) 设置待删除IPV6转换规则，形如rule6-xxxxxxxx
 */
class RemoveIp6RulesRequest extends AbstractModel
{
    /**
     * @var string IPV6转换规则所属的转换实例唯一ID，形如ip6-xxxxxxxx
     */
    public $Ip6TranslatorId;

    /**
     * @var array 待删除IPV6转换规则，形如rule6-xxxxxxxx
     */
    public $Ip6RuleIds;

    /**
     * @param string $Ip6TranslatorId IPV6转换规则所属的转换实例唯一ID，形如ip6-xxxxxxxx
     * @param array $Ip6RuleIds 待删除IPV6转换规则，形如rule6-xxxxxxxx
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

        if (array_key_exists("Ip6RuleIds",$param) and $param["Ip6RuleIds"] !== null) {
            $this->Ip6RuleIds = $param["Ip6RuleIds"];
        }
    }
}
