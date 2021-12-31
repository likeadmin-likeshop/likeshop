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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述密钥对信息。
 *
 * @method string getKeyId() 获取密钥对 ID ，是密钥对的唯一标识。
 * @method void setKeyId(string $KeyId) 设置密钥对 ID ，是密钥对的唯一标识。
 * @method string getKeyName() 获取密钥对名称。
 * @method void setKeyName(string $KeyName) 设置密钥对名称。
 * @method string getPublicKey() 获取密钥对的纯文本公钥。
 * @method void setPublicKey(string $PublicKey) 设置密钥对的纯文本公钥。
 * @method array getAssociatedInstanceIds() 获取密钥对关联的实例 ID 列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssociatedInstanceIds(array $AssociatedInstanceIds) 设置密钥对关联的实例 ID 列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrivateKey() 获取密钥对私钥。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivateKey(string $PrivateKey) 设置密钥对私钥。
注意：此字段可能返回 null，表示取不到有效值。
 */
class KeyPair extends AbstractModel
{
    /**
     * @var string 密钥对 ID ，是密钥对的唯一标识。
     */
    public $KeyId;

    /**
     * @var string 密钥对名称。
     */
    public $KeyName;

    /**
     * @var string 密钥对的纯文本公钥。
     */
    public $PublicKey;

    /**
     * @var array 密钥对关联的实例 ID 列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssociatedInstanceIds;

    /**
     * @var string 创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var string 密钥对私钥。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivateKey;

    /**
     * @param string $KeyId 密钥对 ID ，是密钥对的唯一标识。
     * @param string $KeyName 密钥对名称。
     * @param string $PublicKey 密钥对的纯文本公钥。
     * @param array $AssociatedInstanceIds 密钥对关联的实例 ID 列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PrivateKey 密钥对私钥。
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
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("KeyName",$param) and $param["KeyName"] !== null) {
            $this->KeyName = $param["KeyName"];
        }

        if (array_key_exists("PublicKey",$param) and $param["PublicKey"] !== null) {
            $this->PublicKey = $param["PublicKey"];
        }

        if (array_key_exists("AssociatedInstanceIds",$param) and $param["AssociatedInstanceIds"] !== null) {
            $this->AssociatedInstanceIds = $param["AssociatedInstanceIds"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("PrivateKey",$param) and $param["PrivateKey"] !== null) {
            $this->PrivateKey = $param["PrivateKey"];
        }
    }
}
