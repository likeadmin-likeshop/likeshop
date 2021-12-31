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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云开发项目来源
 *
 * @method string getType() 获取类型, 可能的枚举: "coding","package","package_url","github","gitlab","gitee","rawcode"
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置类型, 可能的枚举: "coding","package","package_url","github","gitlab","gitee","rawcode"
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrl() 获取下载链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置下载链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkDir() 获取工作目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkDir(string $WorkDir) 设置工作目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCodingPackageName() 获取code包名, type为coding的时候需要填写
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodingPackageName(string $CodingPackageName) 设置code包名, type为coding的时候需要填写
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCodingPackageVersion() 获取coding版本名, type为coding的时候需要填写
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodingPackageVersion(string $CodingPackageVersion) 设置coding版本名, type为coding的时候需要填写
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRawCode() 获取源码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRawCode(string $RawCode) 设置源码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBranch() 获取代码分支
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBranch(string $Branch) 设置代码分支
注意：此字段可能返回 null，表示取不到有效值。
 */
class CodeSource extends AbstractModel
{
    /**
     * @var string 类型, 可能的枚举: "coding","package","package_url","github","gitlab","gitee","rawcode"
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 下载链接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @var string 名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 工作目录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkDir;

    /**
     * @var string code包名, type为coding的时候需要填写
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodingPackageName;

    /**
     * @var string coding版本名, type为coding的时候需要填写
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodingPackageVersion;

    /**
     * @var string 源码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RawCode;

    /**
     * @var string 代码分支
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Branch;

    /**
     * @param string $Type 类型, 可能的枚举: "coding","package","package_url","github","gitlab","gitee","rawcode"
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Url 下载链接
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkDir 工作目录
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CodingPackageName code包名, type为coding的时候需要填写
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CodingPackageVersion coding版本名, type为coding的时候需要填写
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RawCode 源码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Branch 代码分支
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("WorkDir",$param) and $param["WorkDir"] !== null) {
            $this->WorkDir = $param["WorkDir"];
        }

        if (array_key_exists("CodingPackageName",$param) and $param["CodingPackageName"] !== null) {
            $this->CodingPackageName = $param["CodingPackageName"];
        }

        if (array_key_exists("CodingPackageVersion",$param) and $param["CodingPackageVersion"] !== null) {
            $this->CodingPackageVersion = $param["CodingPackageVersion"];
        }

        if (array_key_exists("RawCode",$param) and $param["RawCode"] !== null) {
            $this->RawCode = $param["RawCode"];
        }

        if (array_key_exists("Branch",$param) and $param["Branch"] !== null) {
            $this->Branch = $param["Branch"];
        }
    }
}
