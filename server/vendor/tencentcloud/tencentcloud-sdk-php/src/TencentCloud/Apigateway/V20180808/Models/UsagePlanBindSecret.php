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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 使用计划绑定密钥
 *
 * @method string getAccessKeyId() 获取密钥ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessKeyId(string $AccessKeyId) 设置密钥ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSecretName() 获取密钥名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecretName(string $SecretName) 设置密钥名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取密钥状态，0表示已禁用，1表示启用中。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置密钥状态，0表示已禁用，1表示启用中。
注意：此字段可能返回 null，表示取不到有效值。
 */
class UsagePlanBindSecret extends AbstractModel
{
    /**
     * @var string 密钥ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessKeyId;

    /**
     * @var string 密钥名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecretName;

    /**
     * @var integer 密钥状态，0表示已禁用，1表示启用中。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @param string $AccessKeyId 密钥ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SecretName 密钥名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 密钥状态，0表示已禁用，1表示启用中。
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
        if (array_key_exists("AccessKeyId",$param) and $param["AccessKeyId"] !== null) {
            $this->AccessKeyId = $param["AccessKeyId"];
        }

        if (array_key_exists("SecretName",$param) and $param["SecretName"] !== null) {
            $this->SecretName = $param["SecretName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
