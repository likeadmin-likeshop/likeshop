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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 地域属性信息
 *
 * @method string getRegionName() 获取地域名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionName(string $RegionName) 设置地域名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRegionId() 获取地域ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionId(integer $RegionId) 设置地域ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取地域状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置地域状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFeatureGates() 获取地域特性开关(按照JSON的形式返回所有属性)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFeatureGates(string $FeatureGates) 设置地域特性开关(按照JSON的形式返回所有属性)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlias() 获取地域简称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlias(string $Alias) 设置地域简称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取地域白名单
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置地域白名单
注意：此字段可能返回 null，表示取不到有效值。
 */
class RegionInstance extends AbstractModel
{
    /**
     * @var string 地域名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionName;

    /**
     * @var integer 地域ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionId;

    /**
     * @var string 地域状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 地域特性开关(按照JSON的形式返回所有属性)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FeatureGates;

    /**
     * @var string 地域简称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Alias;

    /**
     * @var string 地域白名单
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @param string $RegionName 地域名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RegionId 地域ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 地域状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FeatureGates 地域特性开关(按照JSON的形式返回所有属性)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Alias 地域简称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 地域白名单
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
        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FeatureGates",$param) and $param["FeatureGates"] !== null) {
            $this->FeatureGates = $param["FeatureGates"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
