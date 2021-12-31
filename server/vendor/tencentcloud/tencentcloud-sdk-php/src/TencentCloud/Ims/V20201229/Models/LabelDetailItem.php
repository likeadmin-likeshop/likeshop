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
namespace TencentCloud\Ims\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分类模型命中子标签结果
 *
 * @method integer getId() 获取序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取子标签名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置子标签名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScore() 获取子标签分数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScore(integer $Score) 设置子标签分数
注意：此字段可能返回 null，表示取不到有效值。
 */
class LabelDetailItem extends AbstractModel
{
    /**
     * @var integer 序号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 子标签名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 子标签分数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Score;

    /**
     * @param integer $Id 序号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 子标签名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Score 子标签分数
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

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }
    }
}
