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
 * ReEncrypt返回参数结构体
 *
 * @method string getCiphertextBlob() 获取重新加密后的密文
 * @method void setCiphertextBlob(string $CiphertextBlob) 设置重新加密后的密文
 * @method string getKeyId() 获取重新加密使用的CMK
 * @method void setKeyId(string $KeyId) 设置重新加密使用的CMK
 * @method string getSourceKeyId() 获取重新加密前密文使用的CMK
 * @method void setSourceKeyId(string $SourceKeyId) 设置重新加密前密文使用的CMK
 * @method boolean getReEncrypted() 获取true表示密文已经重新加密。同一个CMK进行重加密，在密钥没有发生轮换的情况下不会进行实际重新加密操作，返回原密文
 * @method void setReEncrypted(boolean $ReEncrypted) 设置true表示密文已经重新加密。同一个CMK进行重加密，在密钥没有发生轮换的情况下不会进行实际重新加密操作，返回原密文
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ReEncryptResponse extends AbstractModel
{
    /**
     * @var string 重新加密后的密文
     */
    public $CiphertextBlob;

    /**
     * @var string 重新加密使用的CMK
     */
    public $KeyId;

    /**
     * @var string 重新加密前密文使用的CMK
     */
    public $SourceKeyId;

    /**
     * @var boolean true表示密文已经重新加密。同一个CMK进行重加密，在密钥没有发生轮换的情况下不会进行实际重新加密操作，返回原密文
     */
    public $ReEncrypted;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $CiphertextBlob 重新加密后的密文
     * @param string $KeyId 重新加密使用的CMK
     * @param string $SourceKeyId 重新加密前密文使用的CMK
     * @param boolean $ReEncrypted true表示密文已经重新加密。同一个CMK进行重加密，在密钥没有发生轮换的情况下不会进行实际重新加密操作，返回原密文
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
        if (array_key_exists("CiphertextBlob",$param) and $param["CiphertextBlob"] !== null) {
            $this->CiphertextBlob = $param["CiphertextBlob"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("SourceKeyId",$param) and $param["SourceKeyId"] !== null) {
            $this->SourceKeyId = $param["SourceKeyId"];
        }

        if (array_key_exists("ReEncrypted",$param) and $param["ReEncrypted"] !== null) {
            $this->ReEncrypted = $param["ReEncrypted"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
