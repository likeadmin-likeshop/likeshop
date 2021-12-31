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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBInstanceInfo返回参数结构体
 *
 * @method string getInstanceId() 获取实例 ID 。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID 。
 * @method string getInstanceName() 获取实例名称。
 * @method void setInstanceName(string $InstanceName) 设置实例名称。
 * @method string getEncryption() 获取是否开通加密，YES 已开通，NO 未开通。
 * @method void setEncryption(string $Encryption) 设置是否开通加密，YES 已开通，NO 未开通。
 * @method string getKeyId() 获取加密使用的密钥 ID 。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyId(string $KeyId) 设置加密使用的密钥 ID 。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKeyRegion() 获取密钥所在地域。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyRegion(string $KeyRegion) 设置密钥所在地域。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDefaultKmsRegion() 获取当前 CDB 后端服务使用的 KMS 服务的默认地域。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultKmsRegion(string $DefaultKmsRegion) 设置当前 CDB 后端服务使用的 KMS 服务的默认地域。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDBInstanceInfoResponse extends AbstractModel
{
    /**
     * @var string 实例 ID 。
     */
    public $InstanceId;

    /**
     * @var string 实例名称。
     */
    public $InstanceName;

    /**
     * @var string 是否开通加密，YES 已开通，NO 未开通。
     */
    public $Encryption;

    /**
     * @var string 加密使用的密钥 ID 。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeyId;

    /**
     * @var string 密钥所在地域。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeyRegion;

    /**
     * @var string 当前 CDB 后端服务使用的 KMS 服务的默认地域。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultKmsRegion;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $InstanceId 实例 ID 。
     * @param string $InstanceName 实例名称。
     * @param string $Encryption 是否开通加密，YES 已开通，NO 未开通。
     * @param string $KeyId 加密使用的密钥 ID 。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KeyRegion 密钥所在地域。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DefaultKmsRegion 当前 CDB 后端服务使用的 KMS 服务的默认地域。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = $param["Encryption"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("KeyRegion",$param) and $param["KeyRegion"] !== null) {
            $this->KeyRegion = $param["KeyRegion"];
        }

        if (array_key_exists("DefaultKmsRegion",$param) and $param["DefaultKmsRegion"] !== null) {
            $this->DefaultKmsRegion = $param["DefaultKmsRegion"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
