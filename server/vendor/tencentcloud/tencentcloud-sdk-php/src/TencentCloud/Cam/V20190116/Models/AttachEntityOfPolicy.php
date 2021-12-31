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
 * 策略关联的实体信息
 *
 * @method string getId() 获取实体ID
 * @method void setId(string $Id) 设置实体ID
 * @method string getName() 获取实体名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置实体名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUin() 获取实体Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(integer $Uin) 设置实体Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRelatedType() 获取关联类型。1 用户关联 ； 2 用户组关联
 * @method void setRelatedType(integer $RelatedType) 设置关联类型。1 用户关联 ； 2 用户组关联
 * @method string getAttachmentTime() 获取策略关联时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttachmentTime(string $AttachmentTime) 设置策略关联时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class AttachEntityOfPolicy extends AbstractModel
{
    /**
     * @var string 实体ID
     */
    public $Id;

    /**
     * @var string 实体名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 实体Uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var integer 关联类型。1 用户关联 ； 2 用户组关联
     */
    public $RelatedType;

    /**
     * @var string 策略关联时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttachmentTime;

    /**
     * @param string $Id 实体ID
     * @param string $Name 实体名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Uin 实体Uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RelatedType 关联类型。1 用户关联 ； 2 用户组关联
     * @param string $AttachmentTime 策略关联时间
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("RelatedType",$param) and $param["RelatedType"] !== null) {
            $this->RelatedType = $param["RelatedType"];
        }

        if (array_key_exists("AttachmentTime",$param) and $param["AttachmentTime"] !== null) {
            $this->AttachmentTime = $param["AttachmentTime"];
        }
    }
}
