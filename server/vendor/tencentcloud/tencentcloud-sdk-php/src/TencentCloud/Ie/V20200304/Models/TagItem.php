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
namespace TencentCloud\Ie\V20200304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 标签项
 *
 * @method string getId() 获取标签内容
 * @method void setId(string $Id) 设置标签内容
 * @method integer getConfidence() 获取结果的置信度（百分制）
 * @method void setConfidence(integer $Confidence) 设置结果的置信度（百分制）
 * @method array getCategorys() 获取分级数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCategorys(array $Categorys) 设置分级数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExt() 获取标签备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExt(string $Ext) 设置标签备注
注意：此字段可能返回 null，表示取不到有效值。
 */
class TagItem extends AbstractModel
{
    /**
     * @var string 标签内容
     */
    public $Id;

    /**
     * @var integer 结果的置信度（百分制）
     */
    public $Confidence;

    /**
     * @var array 分级数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Categorys;

    /**
     * @var string 标签备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ext;

    /**
     * @param string $Id 标签内容
     * @param integer $Confidence 结果的置信度（百分制）
     * @param array $Categorys 分级数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Ext 标签备注
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

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Categorys",$param) and $param["Categorys"] !== null) {
            $this->Categorys = $param["Categorys"];
        }

        if (array_key_exists("Ext",$param) and $param["Ext"] !== null) {
            $this->Ext = $param["Ext"];
        }
    }
}
