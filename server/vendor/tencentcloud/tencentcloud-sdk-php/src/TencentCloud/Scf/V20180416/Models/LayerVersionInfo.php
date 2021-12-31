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
 * 层版本信息
 *
 * @method array getCompatibleRuntimes() 获取版本适用的运行时
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompatibleRuntimes(array $CompatibleRuntimes) 设置版本适用的运行时
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddTime() 获取创建时间
 * @method void setAddTime(string $AddTime) 设置创建时间
 * @method string getDescription() 获取版本描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置版本描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLicenseInfo() 获取许可证信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLicenseInfo(string $LicenseInfo) 设置许可证信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLayerVersion() 获取版本号
 * @method void setLayerVersion(integer $LayerVersion) 设置版本号
 * @method string getLayerName() 获取层名称
 * @method void setLayerName(string $LayerName) 设置层名称
 * @method string getStatus() 获取层的具体版本当前状态，状态值[参考此处](https://cloud.tencent.com/document/product/583/47175#.E5.B1.82.EF.BC.88layer.EF.BC.89.E7.8A.B6.E6.80.81)
 * @method void setStatus(string $Status) 设置层的具体版本当前状态，状态值[参考此处](https://cloud.tencent.com/document/product/583/47175#.E5.B1.82.EF.BC.88layer.EF.BC.89.E7.8A.B6.E6.80.81)
 */
class LayerVersionInfo extends AbstractModel
{
    /**
     * @var array 版本适用的运行时
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompatibleRuntimes;

    /**
     * @var string 创建时间
     */
    public $AddTime;

    /**
     * @var string 版本描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 许可证信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LicenseInfo;

    /**
     * @var integer 版本号
     */
    public $LayerVersion;

    /**
     * @var string 层名称
     */
    public $LayerName;

    /**
     * @var string 层的具体版本当前状态，状态值[参考此处](https://cloud.tencent.com/document/product/583/47175#.E5.B1.82.EF.BC.88layer.EF.BC.89.E7.8A.B6.E6.80.81)
     */
    public $Status;

    /**
     * @param array $CompatibleRuntimes 版本适用的运行时
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AddTime 创建时间
     * @param string $Description 版本描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LicenseInfo 许可证信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LayerVersion 版本号
     * @param string $LayerName 层名称
     * @param string $Status 层的具体版本当前状态，状态值[参考此处](https://cloud.tencent.com/document/product/583/47175#.E5.B1.82.EF.BC.88layer.EF.BC.89.E7.8A.B6.E6.80.81)
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
        if (array_key_exists("CompatibleRuntimes",$param) and $param["CompatibleRuntimes"] !== null) {
            $this->CompatibleRuntimes = $param["CompatibleRuntimes"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("LicenseInfo",$param) and $param["LicenseInfo"] !== null) {
            $this->LicenseInfo = $param["LicenseInfo"];
        }

        if (array_key_exists("LayerVersion",$param) and $param["LayerVersion"] !== null) {
            $this->LayerVersion = $param["LayerVersion"];
        }

        if (array_key_exists("LayerName",$param) and $param["LayerName"] !== null) {
            $this->LayerName = $param["LayerName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
