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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 环境变量
 *
 * @method string getName() 获取环境变量名称
 * @method void setName(string $Name) 设置环境变量名称
 * @method string getValue() 获取环境变量值
 * @method void setValue(string $Value) 设置环境变量值
 * @method ValueFrom getValueFrom() 获取k8s ValueFrom
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValueFrom(ValueFrom $ValueFrom) 设置k8s ValueFrom
注意：此字段可能返回 null，表示取不到有效值。
 */
class Env extends AbstractModel
{
    /**
     * @var string 环境变量名称
     */
    public $Name;

    /**
     * @var string 环境变量值
     */
    public $Value;

    /**
     * @var ValueFrom k8s ValueFrom
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValueFrom;

    /**
     * @param string $Name 环境变量名称
     * @param string $Value 环境变量值
     * @param ValueFrom $ValueFrom k8s ValueFrom
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("ValueFrom",$param) and $param["ValueFrom"] !== null) {
            $this->ValueFrom = new ValueFrom();
            $this->ValueFrom->deserialize($param["ValueFrom"]);
        }
    }
}
