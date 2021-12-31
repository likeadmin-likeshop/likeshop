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
namespace TencentCloud\Drm\V20181115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DRM加密密钥
 *
 * @method string getTrack() 获取加密track类型。Widevine支持SD、HD、UHD1、UHD2、AUDIO。Fairplay只支持HD。
 * @method void setTrack(string $Track) 设置加密track类型。Widevine支持SD、HD、UHD1、UHD2、AUDIO。Fairplay只支持HD。
 * @method string getKeyId() 获取密钥ID。
 * @method void setKeyId(string $KeyId) 设置密钥ID。
 * @method string getKey() 获取原始Key使用AES-128 ECB模式和SessionKey加密的后的二进制数据，Base64编码的字符串。
 * @method void setKey(string $Key) 设置原始Key使用AES-128 ECB模式和SessionKey加密的后的二进制数据，Base64编码的字符串。
 * @method string getIv() 获取原始IV使用AES-128 ECB模式和SessionKey加密的后的二进制数据，Base64编码的字符串。
 * @method void setIv(string $Iv) 设置原始IV使用AES-128 ECB模式和SessionKey加密的后的二进制数据，Base64编码的字符串。
 * @method integer getInsertTimestamp() 获取该key生成时的时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInsertTimestamp(integer $InsertTimestamp) 设置该key生成时的时间戳
注意：此字段可能返回 null，表示取不到有效值。
 */
class Key extends AbstractModel
{
    /**
     * @var string 加密track类型。Widevine支持SD、HD、UHD1、UHD2、AUDIO。Fairplay只支持HD。
     */
    public $Track;

    /**
     * @var string 密钥ID。
     */
    public $KeyId;

    /**
     * @var string 原始Key使用AES-128 ECB模式和SessionKey加密的后的二进制数据，Base64编码的字符串。
     */
    public $Key;

    /**
     * @var string 原始IV使用AES-128 ECB模式和SessionKey加密的后的二进制数据，Base64编码的字符串。
     */
    public $Iv;

    /**
     * @var integer 该key生成时的时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InsertTimestamp;

    /**
     * @param string $Track 加密track类型。Widevine支持SD、HD、UHD1、UHD2、AUDIO。Fairplay只支持HD。
     * @param string $KeyId 密钥ID。
     * @param string $Key 原始Key使用AES-128 ECB模式和SessionKey加密的后的二进制数据，Base64编码的字符串。
     * @param string $Iv 原始IV使用AES-128 ECB模式和SessionKey加密的后的二进制数据，Base64编码的字符串。
     * @param integer $InsertTimestamp 该key生成时的时间戳
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Track",$param) and $param["Track"] !== null) {
            $this->Track = $param["Track"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Iv",$param) and $param["Iv"] !== null) {
            $this->Iv = $param["Iv"];
        }

        if (array_key_exists("InsertTimestamp",$param) and $param["InsertTimestamp"] !== null) {
            $this->InsertTimestamp = $param["InsertTimestamp"];
        }
    }
}
