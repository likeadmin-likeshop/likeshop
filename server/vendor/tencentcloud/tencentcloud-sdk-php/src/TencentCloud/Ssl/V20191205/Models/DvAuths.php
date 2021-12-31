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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 返回参数键为 DvAuths 的内容。
 *
 * @method string getDvAuthKey() 获取DV 认证密钥。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDvAuthKey(string $DvAuthKey) 设置DV 认证密钥。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDvAuthValue() 获取DV 认证值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDvAuthValue(string $DvAuthValue) 设置DV 认证值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDvAuthDomain() 获取DV 认证值域名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDvAuthDomain(string $DvAuthDomain) 设置DV 认证值域名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDvAuthPath() 获取DV 认证值路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDvAuthPath(string $DvAuthPath) 设置DV 认证值路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDvAuthSubDomain() 获取DV 认证子域名，
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDvAuthSubDomain(string $DvAuthSubDomain) 设置DV 认证子域名，
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDvAuthVerifyType() 获取DV 认证类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDvAuthVerifyType(string $DvAuthVerifyType) 设置DV 认证类型。
注意：此字段可能返回 null，表示取不到有效值。
 */
class DvAuths extends AbstractModel
{
    /**
     * @var string DV 认证密钥。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DvAuthKey;

    /**
     * @var string DV 认证值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DvAuthValue;

    /**
     * @var string DV 认证值域名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DvAuthDomain;

    /**
     * @var string DV 认证值路径。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DvAuthPath;

    /**
     * @var string DV 认证子域名，
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DvAuthSubDomain;

    /**
     * @var string DV 认证类型。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DvAuthVerifyType;

    /**
     * @param string $DvAuthKey DV 认证密钥。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DvAuthValue DV 认证值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DvAuthDomain DV 认证值域名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DvAuthPath DV 认证值路径。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DvAuthSubDomain DV 认证子域名，
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DvAuthVerifyType DV 认证类型。
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
        if (array_key_exists("DvAuthKey",$param) and $param["DvAuthKey"] !== null) {
            $this->DvAuthKey = $param["DvAuthKey"];
        }

        if (array_key_exists("DvAuthValue",$param) and $param["DvAuthValue"] !== null) {
            $this->DvAuthValue = $param["DvAuthValue"];
        }

        if (array_key_exists("DvAuthDomain",$param) and $param["DvAuthDomain"] !== null) {
            $this->DvAuthDomain = $param["DvAuthDomain"];
        }

        if (array_key_exists("DvAuthPath",$param) and $param["DvAuthPath"] !== null) {
            $this->DvAuthPath = $param["DvAuthPath"];
        }

        if (array_key_exists("DvAuthSubDomain",$param) and $param["DvAuthSubDomain"] !== null) {
            $this->DvAuthSubDomain = $param["DvAuthSubDomain"];
        }

        if (array_key_exists("DvAuthVerifyType",$param) and $param["DvAuthVerifyType"] !== null) {
            $this->DvAuthVerifyType = $param["DvAuthVerifyType"];
        }
    }
}
