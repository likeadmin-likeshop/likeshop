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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 策略版本详情
 *
 * @method integer getVersionId() 获取策略版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionId(integer $VersionId) 设置策略版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateDate() 获取策略版本创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateDate(string $CreateDate) 设置策略版本创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsDefaultVersion() 获取是否是正在生效的版本。0表示不是，1表示是
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsDefaultVersion(integer $IsDefaultVersion) 设置是否是正在生效的版本。0表示不是，1表示是
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDocument() 获取策略语法文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDocument(string $Document) 设置策略语法文本
注意：此字段可能返回 null，表示取不到有效值。
 */
class PolicyVersionDetail extends AbstractModel
{
    /**
     * @var integer 策略版本号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionId;

    /**
     * @var string 策略版本创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateDate;

    /**
     * @var integer 是否是正在生效的版本。0表示不是，1表示是
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsDefaultVersion;

    /**
     * @var string 策略语法文本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Document;

    /**
     * @param integer $VersionId 策略版本号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateDate 策略版本创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsDefaultVersion 是否是正在生效的版本。0表示不是，1表示是
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Document 策略语法文本
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
        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("CreateDate",$param) and $param["CreateDate"] !== null) {
            $this->CreateDate = $param["CreateDate"];
        }

        if (array_key_exists("IsDefaultVersion",$param) and $param["IsDefaultVersion"] !== null) {
            $this->IsDefaultVersion = $param["IsDefaultVersion"];
        }

        if (array_key_exists("Document",$param) and $param["Document"] !== null) {
            $this->Document = $param["Document"];
        }
    }
}
