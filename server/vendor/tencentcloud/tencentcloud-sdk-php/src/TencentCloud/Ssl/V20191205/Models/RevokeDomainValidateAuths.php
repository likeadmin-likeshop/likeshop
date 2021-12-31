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
 * 返回参数键为 RevokeDomainValidateAuths 的内容。
 *
 * @method string getDomainValidateAuthPath() 获取DV 认证值路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomainValidateAuthPath(string $DomainValidateAuthPath) 设置DV 认证值路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDomainValidateAuthKey() 获取DV 认证 KEY。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomainValidateAuthKey(string $DomainValidateAuthKey) 设置DV 认证 KEY。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDomainValidateAuthValue() 获取DV 认证值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomainValidateAuthValue(string $DomainValidateAuthValue) 设置DV 认证值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDomainValidateAuthDomain() 获取DV 认证域名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomainValidateAuthDomain(string $DomainValidateAuthDomain) 设置DV 认证域名。
注意：此字段可能返回 null，表示取不到有效值。
 */
class RevokeDomainValidateAuths extends AbstractModel
{
    /**
     * @var string DV 认证值路径。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DomainValidateAuthPath;

    /**
     * @var string DV 认证 KEY。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DomainValidateAuthKey;

    /**
     * @var string DV 认证值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DomainValidateAuthValue;

    /**
     * @var string DV 认证域名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DomainValidateAuthDomain;

    /**
     * @param string $DomainValidateAuthPath DV 认证值路径。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DomainValidateAuthKey DV 认证 KEY。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DomainValidateAuthValue DV 认证值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DomainValidateAuthDomain DV 认证域名。
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
        if (array_key_exists("DomainValidateAuthPath",$param) and $param["DomainValidateAuthPath"] !== null) {
            $this->DomainValidateAuthPath = $param["DomainValidateAuthPath"];
        }

        if (array_key_exists("DomainValidateAuthKey",$param) and $param["DomainValidateAuthKey"] !== null) {
            $this->DomainValidateAuthKey = $param["DomainValidateAuthKey"];
        }

        if (array_key_exists("DomainValidateAuthValue",$param) and $param["DomainValidateAuthValue"] !== null) {
            $this->DomainValidateAuthValue = $param["DomainValidateAuthValue"];
        }

        if (array_key_exists("DomainValidateAuthDomain",$param) and $param["DomainValidateAuthDomain"] !== null) {
            $this->DomainValidateAuthDomain = $param["DomainValidateAuthDomain"];
        }
    }
}
