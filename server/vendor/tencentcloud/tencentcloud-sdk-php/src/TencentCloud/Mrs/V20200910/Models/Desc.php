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
 * 描述
 *
 * @method string getText() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(string $Text) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOrgan() 获取器官
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrgan(array $Organ) 设置器官
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTuber() 获取结节
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTuber(array $Tuber) 设置结节
注意：此字段可能返回 null，表示取不到有效值。
 */
class Desc extends AbstractModel
{
    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var array 器官
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Organ;

    /**
     * @var array 结节
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tuber;

    /**
     * @param string $Text 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Organ 器官
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tuber 结节
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Organ",$param) and $param["Organ"] !== null) {
            $this->Organ = [];
            foreach ($param["Organ"] as $key => $value){
                $obj = new Organ();
                $obj->deserialize($value);
                array_push($this->Organ, $obj);
            }
        }

        if (array_key_exists("Tuber",$param) and $param["Tuber"] !== null) {
            $this->Tuber = [];
            foreach ($param["Tuber"] as $key => $value){
                $obj = new TuberInfo();
                $obj->deserialize($value);
                array_push($this->Tuber, $obj);
            }
        }
    }
}
