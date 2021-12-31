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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 项目详情
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getProjectName() 获取项目名称
 * @method void setProjectName(string $ProjectName) 设置项目名称
 * @method string getProjectDesc() 获取项目描述
 * @method void setProjectDesc(string $ProjectDesc) 设置项目描述
 * @method integer getCreateTime() 获取项目创建时间，unix时间戳
 * @method void setCreateTime(integer $CreateTime) 设置项目创建时间，unix时间戳
 * @method integer getUpdateTime() 获取项目更新时间，unix时间戳
 * @method void setUpdateTime(integer $UpdateTime) 设置项目更新时间，unix时间戳
 * @method integer getProductCount() 获取产品数量
 * @method void setProductCount(integer $ProductCount) 设置产品数量
 * @method integer getNativeAppCount() 获取NativeApp数量
 * @method void setNativeAppCount(integer $NativeAppCount) 设置NativeApp数量
 * @method integer getWebAppCount() 获取WebApp数量
 * @method void setWebAppCount(integer $WebAppCount) 设置WebApp数量
 * @method string getInstanceId() 获取实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getApplicationCount() 获取应用数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationCount(integer $ApplicationCount) 设置应用数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDeviceCount() 获取设备注册总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceCount(integer $DeviceCount) 设置设备注册总数
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProjectEntryEx extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 项目名称
     */
    public $ProjectName;

    /**
     * @var string 项目描述
     */
    public $ProjectDesc;

    /**
     * @var integer 项目创建时间，unix时间戳
     */
    public $CreateTime;

    /**
     * @var integer 项目更新时间，unix时间戳
     */
    public $UpdateTime;

    /**
     * @var integer 产品数量
     */
    public $ProductCount;

    /**
     * @var integer NativeApp数量
     */
    public $NativeAppCount;

    /**
     * @var integer WebApp数量
     */
    public $WebAppCount;

    /**
     * @var string 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var integer 应用数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationCount;

    /**
     * @var integer 设备注册总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceCount;

    /**
     * @param string $ProjectId 项目ID
     * @param string $ProjectName 项目名称
     * @param string $ProjectDesc 项目描述
     * @param integer $CreateTime 项目创建时间，unix时间戳
     * @param integer $UpdateTime 项目更新时间，unix时间戳
     * @param integer $ProductCount 产品数量
     * @param integer $NativeAppCount NativeApp数量
     * @param integer $WebAppCount WebApp数量
     * @param string $InstanceId 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ApplicationCount 应用数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DeviceCount 设备注册总数
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("ProjectDesc",$param) and $param["ProjectDesc"] !== null) {
            $this->ProjectDesc = $param["ProjectDesc"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ProductCount",$param) and $param["ProductCount"] !== null) {
            $this->ProductCount = $param["ProductCount"];
        }

        if (array_key_exists("NativeAppCount",$param) and $param["NativeAppCount"] !== null) {
            $this->NativeAppCount = $param["NativeAppCount"];
        }

        if (array_key_exists("WebAppCount",$param) and $param["WebAppCount"] !== null) {
            $this->WebAppCount = $param["WebAppCount"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ApplicationCount",$param) and $param["ApplicationCount"] !== null) {
            $this->ApplicationCount = $param["ApplicationCount"];
        }

        if (array_key_exists("DeviceCount",$param) and $param["DeviceCount"] !== null) {
            $this->DeviceCount = $param["DeviceCount"];
        }
    }
}
