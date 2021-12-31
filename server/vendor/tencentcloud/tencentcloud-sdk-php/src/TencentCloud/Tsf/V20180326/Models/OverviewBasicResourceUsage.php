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
 * TSF基本资源信息概览
 *
 * @method integer getApplicationCount() 获取应用总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationCount(integer $ApplicationCount) 设置应用总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNamespaceCount() 获取命名空间总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespaceCount(integer $NamespaceCount) 设置命名空间总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGroupCount() 获取部署组个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupCount(integer $GroupCount) 设置部署组个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPackageSpaceUsed() 获取程序包存储空间用量，单位字节
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageSpaceUsed(integer $PackageSpaceUsed) 设置程序包存储空间用量，单位字节
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getConsulInstanceCount() 获取已注册实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsulInstanceCount(integer $ConsulInstanceCount) 设置已注册实例数
注意：此字段可能返回 null，表示取不到有效值。
 */
class OverviewBasicResourceUsage extends AbstractModel
{
    /**
     * @var integer 应用总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationCount;

    /**
     * @var integer 命名空间总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NamespaceCount;

    /**
     * @var integer 部署组个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupCount;

    /**
     * @var integer 程序包存储空间用量，单位字节
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageSpaceUsed;

    /**
     * @var integer 已注册实例数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsulInstanceCount;

    /**
     * @param integer $ApplicationCount 应用总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NamespaceCount 命名空间总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GroupCount 部署组个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PackageSpaceUsed 程序包存储空间用量，单位字节
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ConsulInstanceCount 已注册实例数
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
        if (array_key_exists("ApplicationCount",$param) and $param["ApplicationCount"] !== null) {
            $this->ApplicationCount = $param["ApplicationCount"];
        }

        if (array_key_exists("NamespaceCount",$param) and $param["NamespaceCount"] !== null) {
            $this->NamespaceCount = $param["NamespaceCount"];
        }

        if (array_key_exists("GroupCount",$param) and $param["GroupCount"] !== null) {
            $this->GroupCount = $param["GroupCount"];
        }

        if (array_key_exists("PackageSpaceUsed",$param) and $param["PackageSpaceUsed"] !== null) {
            $this->PackageSpaceUsed = $param["PackageSpaceUsed"];
        }

        if (array_key_exists("ConsulInstanceCount",$param) and $param["ConsulInstanceCount"] !== null) {
            $this->ConsulInstanceCount = $param["ConsulInstanceCount"];
        }
    }
}
