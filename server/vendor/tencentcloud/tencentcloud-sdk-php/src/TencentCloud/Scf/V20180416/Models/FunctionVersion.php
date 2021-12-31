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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 函数版本信息
 *
 * @method string getVersion() 获取函数版本名称
 * @method void setVersion(string $Version) 设置函数版本名称
 * @method string getDescription() 获取版本描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置版本描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddTime(string $AddTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModTime(string $ModTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class FunctionVersion extends AbstractModel
{
    /**
     * @var string 函数版本名称
     */
    public $Version;

    /**
     * @var string 版本描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AddTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModTime;

    /**
     * @param string $Version 函数版本名称
     * @param string $Description 版本描述信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AddTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModTime 更新时间
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("ModTime",$param) and $param["ModTime"] !== null) {
            $this->ModTime = $param["ModTime"];
        }
    }
}
