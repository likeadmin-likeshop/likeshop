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
 * GetPublicKey返回参数结构体
 *
 * @method string getKeyId() 获取CMK的唯一标识。
 * @method void setKeyId(string $KeyId) 设置CMK的唯一标识。
 * @method string getPublicKey() 获取经过base64编码的公钥内容。
 * @method void setPublicKey(string $PublicKey) 设置经过base64编码的公钥内容。
 * @method string getPublicKeyPem() 获取PEM格式的公钥内容。
 * @method void setPublicKeyPem(string $PublicKeyPem) 设置PEM格式的公钥内容。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetPublicKeyResponse extends AbstractModel
{
    /**
     * @var string CMK的唯一标识。
     */
    public $KeyId;

    /**
     * @var string 经过base64编码的公钥内容。
     */
    public $PublicKey;

    /**
     * @var string PEM格式的公钥内容。
     */
    public $PublicKeyPem;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $KeyId CMK的唯一标识。
     * @param string $PublicKey 经过base64编码的公钥内容。
     * @param string $PublicKeyPem PEM格式的公钥内容。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("PublicKey",$param) and $param["PublicKey"] !== null) {
            $this->PublicKey = $param["PublicKey"];
        }

        if (array_key_exists("PublicKeyPem",$param) and $param["PublicKeyPem"] !== null) {
            $this->PublicKeyPem = $param["PublicKeyPem"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
