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
 * 检查报告单
 *
 * @method Desc getDesc() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDesc(Desc $Desc) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method Summary getSummary() 获取结论
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSummary(Summary $Summary) 设置结论
注意：此字段可能返回 null，表示取不到有效值。
 */
class Check extends AbstractModel
{
    /**
     * @var Desc 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Desc;

    /**
     * @var Summary 结论
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Summary;

    /**
     * @param Desc $Desc 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param Summary $Summary 结论
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
        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = new Desc();
            $this->Desc->deserialize($param["Desc"]);
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = new Summary();
            $this->Summary->deserialize($param["Summary"]);
        }
    }
}
