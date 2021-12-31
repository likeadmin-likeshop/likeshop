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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetParametersForImport请求参数结构体
 *
 * @method string getKeyId() 获取CMK的唯一标识，获取密钥参数的CMK必须是EXTERNAL类型，即在CreateKey时指定Type=2 类型的CMK。
 * @method void setKeyId(string $KeyId) 设置CMK的唯一标识，获取密钥参数的CMK必须是EXTERNAL类型，即在CreateKey时指定Type=2 类型的CMK。
 * @method string getWrappingAlgorithm() 获取指定加密密钥材料的算法，目前支持RSAES_PKCS1_V1_5、RSAES_OAEP_SHA_1、RSAES_OAEP_SHA_256
 * @method void setWrappingAlgorithm(string $WrappingAlgorithm) 设置指定加密密钥材料的算法，目前支持RSAES_PKCS1_V1_5、RSAES_OAEP_SHA_1、RSAES_OAEP_SHA_256
 * @method string getWrappingKeySpec() 获取指定加密密钥材料的类型，目前只支持RSA_2048
 * @method void setWrappingKeySpec(string $WrappingKeySpec) 设置指定加密密钥材料的类型，目前只支持RSA_2048
 */
class GetParametersForImportRequest extends AbstractModel
{
    /**
     * @var string CMK的唯一标识，获取密钥参数的CMK必须是EXTERNAL类型，即在CreateKey时指定Type=2 类型的CMK。
     */
    public $KeyId;

    /**
     * @var string 指定加密密钥材料的算法，目前支持RSAES_PKCS1_V1_5、RSAES_OAEP_SHA_1、RSAES_OAEP_SHA_256
     */
    public $WrappingAlgorithm;

    /**
     * @var string 指定加密密钥材料的类型，目前只支持RSA_2048
     */
    public $WrappingKeySpec;

    /**
     * @param string $KeyId CMK的唯一标识，获取密钥参数的CMK必须是EXTERNAL类型，即在CreateKey时指定Type=2 类型的CMK。
     * @param string $WrappingAlgorithm 指定加密密钥材料的算法，目前支持RSAES_PKCS1_V1_5、RSAES_OAEP_SHA_1、RSAES_OAEP_SHA_256
     * @param string $WrappingKeySpec 指定加密密钥材料的类型，目前只支持RSA_2048
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
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("WrappingAlgorithm",$param) and $param["WrappingAlgorithm"] !== null) {
            $this->WrappingAlgorithm = $param["WrappingAlgorithm"];
        }

        if (array_key_exists("WrappingKeySpec",$param) and $param["WrappingKeySpec"] !== null) {
            $this->WrappingKeySpec = $param["WrappingKeySpec"];
        }
    }
}
