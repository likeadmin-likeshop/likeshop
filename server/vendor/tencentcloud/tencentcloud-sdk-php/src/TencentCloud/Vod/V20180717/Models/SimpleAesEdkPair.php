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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 简单加密加解密秘钥对。
 *
 * @method string getEdk() 获取加密后的数据密钥。
 * @method void setEdk(string $Edk) 设置加密后的数据密钥。
 * @method string getDk() 获取数据密钥。返回的数据密钥 DK 为 Base64 编码字符串。
 * @method void setDk(string $Dk) 设置数据密钥。返回的数据密钥 DK 为 Base64 编码字符串。
 */
class SimpleAesEdkPair extends AbstractModel
{
    /**
     * @var string 加密后的数据密钥。
     */
    public $Edk;

    /**
     * @var string 数据密钥。返回的数据密钥 DK 为 Base64 编码字符串。
     */
    public $Dk;

    /**
     * @param string $Edk 加密后的数据密钥。
     * @param string $Dk 数据密钥。返回的数据密钥 DK 为 Base64 编码字符串。
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
        if (array_key_exists("Edk",$param) and $param["Edk"] !== null) {
            $this->Edk = $param["Edk"];
        }

        if (array_key_exists("Dk",$param) and $param["Dk"] !== null) {
            $this->Dk = $param["Dk"];
        }
    }
}
