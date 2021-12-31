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
 * FairPlay 私钥摘要信息。
 *
 * @method integer getFairPlayPemId() 获取fairplay 私钥pem id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFairPlayPemId(integer $FairPlayPemId) 设置fairplay 私钥pem id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPriority() 获取私钥的优先级。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPriority(integer $Priority) 设置私钥的优先级。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMd5Pem() 获取私钥的md5 信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMd5Pem(string $Md5Pem) 设置私钥的md5 信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMd5Ask() 获取ASK的md5信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMd5Ask(string $Md5Ask) 设置ASK的md5信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMd5PemDecryptKey() 获取私钥解密密钥的md5值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMd5PemDecryptKey(string $Md5PemDecryptKey) 设置私钥解密密钥的md5值。
注意：此字段可能返回 null，表示取不到有效值。
 */
class FairPlayPemDigestInfo extends AbstractModel
{
    /**
     * @var integer fairplay 私钥pem id。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FairPlayPemId;

    /**
     * @var integer 私钥的优先级。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Priority;

    /**
     * @var string 私钥的md5 信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Md5Pem;

    /**
     * @var string ASK的md5信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Md5Ask;

    /**
     * @var string 私钥解密密钥的md5值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Md5PemDecryptKey;

    /**
     * @param integer $FairPlayPemId fairplay 私钥pem id。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Priority 私钥的优先级。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Md5Pem 私钥的md5 信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Md5Ask ASK的md5信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Md5PemDecryptKey 私钥解密密钥的md5值。
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
        if (array_key_exists("FairPlayPemId",$param) and $param["FairPlayPemId"] !== null) {
            $this->FairPlayPemId = $param["FairPlayPemId"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Md5Pem",$param) and $param["Md5Pem"] !== null) {
            $this->Md5Pem = $param["Md5Pem"];
        }

        if (array_key_exists("Md5Ask",$param) and $param["Md5Ask"] !== null) {
            $this->Md5Ask = $param["Md5Ask"];
        }

        if (array_key_exists("Md5PemDecryptKey",$param) and $param["Md5PemDecryptKey"] !== null) {
            $this->Md5PemDecryptKey = $param["Md5PemDecryptKey"];
        }
    }
}
