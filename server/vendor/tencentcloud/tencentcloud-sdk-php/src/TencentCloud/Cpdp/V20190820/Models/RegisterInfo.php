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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 签约信息
 *
 * @method string getLegalPersonIdCode() 获取法人证件号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLegalPersonIdCode(string $LegalPersonIdCode) 设置法人证件号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLegalPersonIdType() 获取法人证件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLegalPersonIdType(string $LegalPersonIdType) 设置法人证件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLegalPersonName() 获取法人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLegalPersonName(string $LegalPersonName) 设置法人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrganizationCode() 获取公司证件号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrganizationCode(string $OrganizationCode) 设置公司证件号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrganizationName() 获取公司名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrganizationName(string $OrganizationName) 设置公司名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrganizationType() 获取公司证件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrganizationType(string $OrganizationType) 设置公司证件类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class RegisterInfo extends AbstractModel
{
    /**
     * @var string 法人证件号码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LegalPersonIdCode;

    /**
     * @var string 法人证件类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LegalPersonIdType;

    /**
     * @var string 法人名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LegalPersonName;

    /**
     * @var string 公司证件号码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrganizationCode;

    /**
     * @var string 公司名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrganizationName;

    /**
     * @var string 公司证件类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrganizationType;

    /**
     * @param string $LegalPersonIdCode 法人证件号码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LegalPersonIdType 法人证件类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LegalPersonName 法人名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrganizationCode 公司证件号码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrganizationName 公司名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrganizationType 公司证件类型
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
        if (array_key_exists("LegalPersonIdCode",$param) and $param["LegalPersonIdCode"] !== null) {
            $this->LegalPersonIdCode = $param["LegalPersonIdCode"];
        }

        if (array_key_exists("LegalPersonIdType",$param) and $param["LegalPersonIdType"] !== null) {
            $this->LegalPersonIdType = $param["LegalPersonIdType"];
        }

        if (array_key_exists("LegalPersonName",$param) and $param["LegalPersonName"] !== null) {
            $this->LegalPersonName = $param["LegalPersonName"];
        }

        if (array_key_exists("OrganizationCode",$param) and $param["OrganizationCode"] !== null) {
            $this->OrganizationCode = $param["OrganizationCode"];
        }

        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }

        if (array_key_exists("OrganizationType",$param) and $param["OrganizationType"] !== null) {
            $this->OrganizationType = $param["OrganizationType"];
        }
    }
}
