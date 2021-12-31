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
 * ModifyIp6Translator请求参数结构体
 *
 * @method string getIp6TranslatorId() 获取IPV6转换实例唯一ID，形如ip6-xxxxxxxxx
 * @method void setIp6TranslatorId(string $Ip6TranslatorId) 设置IPV6转换实例唯一ID，形如ip6-xxxxxxxxx
 * @method string getIp6TranslatorName() 获取IPV6转换实例修改名称
 * @method void setIp6TranslatorName(string $Ip6TranslatorName) 设置IPV6转换实例修改名称
 */
class ModifyIp6TranslatorRequest extends AbstractModel
{
    /**
     * @var string IPV6转换实例唯一ID，形如ip6-xxxxxxxxx
     */
    public $Ip6TranslatorId;

    /**
     * @var string IPV6转换实例修改名称
     */
    public $Ip6TranslatorName;

    /**
     * @param string $Ip6TranslatorId IPV6转换实例唯一ID，形如ip6-xxxxxxxxx
     * @param string $Ip6TranslatorName IPV6转换实例修改名称
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
    }
}
