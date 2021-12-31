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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 检验指标项
 *
 * @method string getCode() 获取英文缩写
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCode(string $Code) 设置英文缩写
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScode() 获取标准缩写
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScode(string $Scode) 设置标准缩写
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSname() 获取标准名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSname(string $Sname) 设置标准名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResult() 获取结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResult(string $Result) 设置结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUnit() 获取单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnit(string $Unit) 设置单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRange() 获取参考范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRange(string $Range) 设置参考范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getArrow() 获取上下箭头
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setArrow(string $Arrow) 设置上下箭头
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getNormal() 获取是否正常
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNormal(boolean $Normal) 设置是否正常
注意：此字段可能返回 null，表示取不到有效值。
 */
class IndicatorItem extends AbstractModel
{
    /**
     * @var string 英文缩写
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Code;

    /**
     * @var string 标准缩写
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Scode;

    /**
     * @var string 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 标准名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sname;

    /**
     * @var string 结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Result;

    /**
     * @var string 单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Unit;

    /**
     * @var string 参考范围
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Range;

    /**
     * @var string 上下箭头
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Arrow;

    /**
     * @var boolean 是否正常
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Normal;

    /**
     * @param string $Code 英文缩写
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Scode 标准缩写
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Sname 标准名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Result 结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Unit 单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Range 参考范围
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Arrow 上下箭头
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Normal 是否正常
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Scode",$param) and $param["Scode"] !== null) {
            $this->Scode = $param["Scode"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Sname",$param) and $param["Sname"] !== null) {
            $this->Sname = $param["Sname"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("Range",$param) and $param["Range"] !== null) {
            $this->Range = $param["Range"];
        }

        if (array_key_exists("Arrow",$param) and $param["Arrow"] !== null) {
            $this->Arrow = $param["Arrow"];
        }

        if (array_key_exists("Normal",$param) and $param["Normal"] !== null) {
            $this->Normal = $param["Normal"];
        }
    }
}
