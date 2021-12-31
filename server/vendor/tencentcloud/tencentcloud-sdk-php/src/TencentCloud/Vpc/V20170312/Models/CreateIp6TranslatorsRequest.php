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
 * CreateIp6Translators请求参数结构体
 *
 * @method string getIp6TranslatorName() 获取转换实例名称
 * @method void setIp6TranslatorName(string $Ip6TranslatorName) 设置转换实例名称
 * @method integer getIp6TranslatorCount() 获取创建转换实例数量，默认是1个
 * @method void setIp6TranslatorCount(integer $Ip6TranslatorCount) 设置创建转换实例数量，默认是1个
 * @method string getIp6InternetServiceProvider() 获取转换实例运营商属性，可取"CMCC","CTCC","CUCC","BGP"
 * @method void setIp6InternetServiceProvider(string $Ip6InternetServiceProvider) 设置转换实例运营商属性，可取"CMCC","CTCC","CUCC","BGP"
 */
class CreateIp6TranslatorsRequest extends AbstractModel
{
    /**
     * @var string 转换实例名称
     */
    public $Ip6TranslatorName;

    /**
     * @var integer 创建转换实例数量，默认是1个
     */
    public $Ip6TranslatorCount;

    /**
     * @var string 转换实例运营商属性，可取"CMCC","CTCC","CUCC","BGP"
     */
    public $Ip6InternetServiceProvider;

    /**
     * @param string $Ip6TranslatorName 转换实例名称
     * @param integer $Ip6TranslatorCount 创建转换实例数量，默认是1个
     * @param string $Ip6InternetServiceProvider 转换实例运营商属性，可取"CMCC","CTCC","CUCC","BGP"
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
        if (array_key_exists("Ip6TranslatorName",$param) and $param["Ip6TranslatorName"] !== null) {
            $this->Ip6TranslatorName = $param["Ip6TranslatorName"];
        }

        if (array_key_exists("Ip6TranslatorCount",$param) and $param["Ip6TranslatorCount"] !== null) {
            $this->Ip6TranslatorCount = $param["Ip6TranslatorCount"];
        }

        if (array_key_exists("Ip6InternetServiceProvider",$param) and $param["Ip6InternetServiceProvider"] !== null) {
            $this->Ip6InternetServiceProvider = $param["Ip6InternetServiceProvider"];
        }
    }
}
