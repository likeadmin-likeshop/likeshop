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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 操作系统支持的类型。
 *
 * @method string getOsName() 获取操作系统类型
 * @method void setOsName(string $OsName) 设置操作系统类型
 * @method array getOsVersions() 获取支持的操作系统版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOsVersions(array $OsVersions) 设置支持的操作系统版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getArchitecture() 获取支持的操作系统架构
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setArchitecture(array $Architecture) 设置支持的操作系统架构
注意：此字段可能返回 null，表示取不到有效值。
 */
class OsVersion extends AbstractModel
{
    /**
     * @var string 操作系统类型
     */
    public $OsName;

    /**
     * @var array 支持的操作系统版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OsVersions;

    /**
     * @var array 支持的操作系统架构
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Architecture;

    /**
     * @param string $OsName 操作系统类型
     * @param array $OsVersions 支持的操作系统版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Architecture 支持的操作系统架构
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
        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("OsVersions",$param) and $param["OsVersions"] !== null) {
            $this->OsVersions = $param["OsVersions"];
        }

        if (array_key_exists("Architecture",$param) and $param["Architecture"] !== null) {
            $this->Architecture = $param["Architecture"];
        }
    }
}
