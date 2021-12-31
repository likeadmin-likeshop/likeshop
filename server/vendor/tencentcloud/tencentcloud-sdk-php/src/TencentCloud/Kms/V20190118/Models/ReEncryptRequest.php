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
 * ReEncrypt请求参数结构体
 *
 * @method string getCiphertextBlob() 获取需要重新加密的密文
 * @method void setCiphertextBlob(string $CiphertextBlob) 设置需要重新加密的密文
 * @method string getDestinationKeyId() 获取重新加密使用的CMK，如果为空，则使用密文原有的CMK重新加密（若密钥没有轮换则密文不会刷新）
 * @method void setDestinationKeyId(string $DestinationKeyId) 设置重新加密使用的CMK，如果为空，则使用密文原有的CMK重新加密（若密钥没有轮换则密文不会刷新）
 * @method string getSourceEncryptionContext() 获取CiphertextBlob 密文加密时使用的key/value对的json字符串。如果加密时未使用，则为空
 * @method void setSourceEncryptionContext(string $SourceEncryptionContext) 设置CiphertextBlob 密文加密时使用的key/value对的json字符串。如果加密时未使用，则为空
 * @method string getDestinationEncryptionContext() 获取重新加密使用的key/value对的json字符串，如果使用该字段，则返回的新密文在解密时需要填入相同的字符串
 * @method void setDestinationEncryptionContext(string $DestinationEncryptionContext) 设置重新加密使用的key/value对的json字符串，如果使用该字段，则返回的新密文在解密时需要填入相同的字符串
 */
class ReEncryptRequest extends AbstractModel
{
    /**
     * @var string 需要重新加密的密文
     */
    public $CiphertextBlob;

    /**
     * @var string 重新加密使用的CMK，如果为空，则使用密文原有的CMK重新加密（若密钥没有轮换则密文不会刷新）
     */
    public $DestinationKeyId;

    /**
     * @var string CiphertextBlob 密文加密时使用的key/value对的json字符串。如果加密时未使用，则为空
     */
    public $SourceEncryptionContext;

    /**
     * @var string 重新加密使用的key/value对的json字符串，如果使用该字段，则返回的新密文在解密时需要填入相同的字符串
     */
    public $DestinationEncryptionContext;

    /**
     * @param string $CiphertextBlob 需要重新加密的密文
     * @param string $DestinationKeyId 重新加密使用的CMK，如果为空，则使用密文原有的CMK重新加密（若密钥没有轮换则密文不会刷新）
     * @param string $SourceEncryptionContext CiphertextBlob 密文加密时使用的key/value对的json字符串。如果加密时未使用，则为空
     * @param string $DestinationEncryptionContext 重新加密使用的key/value对的json字符串，如果使用该字段，则返回的新密文在解密时需要填入相同的字符串
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

        if (array_key_exists("DestinationKeyId",$param) and $param["DestinationKeyId"] !== null) {
            $this->DestinationKeyId = $param["DestinationKeyId"];
        }

        if (array_key_exists("SourceEncryptionContext",$param) and $param["SourceEncryptionContext"] !== null) {
            $this->SourceEncryptionContext = $param["SourceEncryptionContext"];
        }

        if (array_key_exists("DestinationEncryptionContext",$param) and $param["DestinationEncryptionContext"] !== null) {
            $this->DestinationEncryptionContext = $param["DestinationEncryptionContext"];
        }
    }
}
