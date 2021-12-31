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
 * DeleteIp6Translators请求参数结构体
 *
 * @method array getIp6TranslatorIds() 获取待释放的IPV6转换实例的唯一ID，形如‘ip6-xxxxxxxx’
 * @method void setIp6TranslatorIds(array $Ip6TranslatorIds) 设置待释放的IPV6转换实例的唯一ID，形如‘ip6-xxxxxxxx’
 */
class DeleteIp6TranslatorsRequest extends AbstractModel
{
    /**
     * @var array 待释放的IPV6转换实例的唯一ID，形如‘ip6-xxxxxxxx’
     */
    public $Ip6TranslatorIds;

    /**
     * @param array $Ip6TranslatorIds 待释放的IPV6转换实例的唯一ID，形如‘ip6-xxxxxxxx’
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
        if (array_key_exists("Ip6TranslatorIds",$param) and $param["Ip6TranslatorIds"] !== null) {
            $this->Ip6TranslatorIds = $param["Ip6TranslatorIds"];
        }
    }
}
