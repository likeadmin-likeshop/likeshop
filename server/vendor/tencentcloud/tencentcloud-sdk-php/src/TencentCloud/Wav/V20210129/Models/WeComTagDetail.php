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
namespace TencentCloud\Wav\V20210129\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 企微个人标签信息,渠道活码使用
 *
 * @method string getGroupName() 获取标签分组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupName(string $GroupName) 设置标签分组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBizGroupId() 获取标签分组业务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBizGroupId(string $BizGroupId) 设置标签分组业务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTagName() 获取标签名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagName(string $TagName) 设置标签名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTagId() 获取标签ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagId(string $TagId) 设置标签ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBizTagId() 获取标签业务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBizTagId(string $BizTagId) 设置标签业务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getType() 获取标签分类，1：企业设置、2：用户自定义
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(integer $Type) 设置标签分类，1：企业设置、2：用户自定义
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBizTagIdStr() 获取标签业务ID字符串格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBizTagIdStr(string $BizTagIdStr) 设置标签业务ID字符串格式
注意：此字段可能返回 null，表示取不到有效值。
 */
class WeComTagDetail extends AbstractModel
{
    /**
     * @var string 标签分组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupName;

    /**
     * @var string 标签分组业务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BizGroupId;

    /**
     * @var string 标签名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagName;

    /**
     * @var string 标签ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagId;

    /**
     * @var string 标签业务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BizTagId;

    /**
     * @var integer 标签分类，1：企业设置、2：用户自定义
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 标签业务ID字符串格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BizTagIdStr;

    /**
     * @param string $GroupName 标签分组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BizGroupId 标签分组业务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TagName 标签名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TagId 标签ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BizTagId 标签业务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Type 标签分类，1：企业设置、2：用户自定义
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BizTagIdStr 标签业务ID字符串格式
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
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("BizGroupId",$param) and $param["BizGroupId"] !== null) {
            $this->BizGroupId = $param["BizGroupId"];
        }

        if (array_key_exists("TagName",$param) and $param["TagName"] !== null) {
            $this->TagName = $param["TagName"];
        }

        if (array_key_exists("TagId",$param) and $param["TagId"] !== null) {
            $this->TagId = $param["TagId"];
        }

        if (array_key_exists("BizTagId",$param) and $param["BizTagId"] !== null) {
            $this->BizTagId = $param["BizTagId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("BizTagIdStr",$param) and $param["BizTagIdStr"] !== null) {
            $this->BizTagIdStr = $param["BizTagIdStr"];
        }
    }
}
