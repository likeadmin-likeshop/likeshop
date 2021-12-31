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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CCN路由策略对象
 *
 * @method string getRouteId() 获取路由策略ID
 * @method void setRouteId(string $RouteId) 设置路由策略ID
 * @method string getDestinationCidrBlock() 获取目的端
 * @method void setDestinationCidrBlock(string $DestinationCidrBlock) 设置目的端
 * @method string getInstanceType() 获取下一跳类型（关联实例类型），所有类型：VPC、DIRECTCONNECT
 * @method void setInstanceType(string $InstanceType) 设置下一跳类型（关联实例类型），所有类型：VPC、DIRECTCONNECT
 * @method string getInstanceId() 获取下一跳（关联实例）
 * @method void setInstanceId(string $InstanceId) 设置下一跳（关联实例）
 * @method string getInstanceName() 获取下一跳名称（关联实例名称）
 * @method void setInstanceName(string $InstanceName) 设置下一跳名称（关联实例名称）
 * @method string getInstanceRegion() 获取下一跳所属地域（关联实例所属地域）
 * @method void setInstanceRegion(string $InstanceRegion) 设置下一跳所属地域（关联实例所属地域）
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method boolean getEnabled() 获取路由是否启用
 * @method void setEnabled(boolean $Enabled) 设置路由是否启用
 * @method string getInstanceUin() 获取关联实例所属UIN（根账号）
 * @method void setInstanceUin(string $InstanceUin) 设置关联实例所属UIN（根账号）
 * @method string getExtraState() 获取路由的扩展状态
 * @method void setExtraState(string $ExtraState) 设置路由的扩展状态
 * @method boolean getIsBgp() 获取是否动态路由
 * @method void setIsBgp(boolean $IsBgp) 设置是否动态路由
 * @method integer getRoutePriority() 获取路由优先级
 * @method void setRoutePriority(integer $RoutePriority) 设置路由优先级
 * @method string getInstanceExtraName() 获取下一跳扩展名称（关联实例的扩展名称）
 * @method void setInstanceExtraName(string $InstanceExtraName) 设置下一跳扩展名称（关联实例的扩展名称）
 */
class CcnRoute extends AbstractModel
{
    /**
     * @var string 路由策略ID
     */
    public $RouteId;

    /**
     * @var string 目的端
     */
    public $DestinationCidrBlock;

    /**
     * @var string 下一跳类型（关联实例类型），所有类型：VPC、DIRECTCONNECT
     */
    public $InstanceType;

    /**
     * @var string 下一跳（关联实例）
     */
    public $InstanceId;

    /**
     * @var string 下一跳名称（关联实例名称）
     */
    public $InstanceName;

    /**
     * @var string 下一跳所属地域（关联实例所属地域）
     */
    public $InstanceRegion;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var boolean 路由是否启用
     */
    public $Enabled;

    /**
     * @var string 关联实例所属UIN（根账号）
     */
    public $InstanceUin;

    /**
     * @var string 路由的扩展状态
     */
    public $ExtraState;

    /**
     * @var boolean 是否动态路由
     */
    public $IsBgp;

    /**
     * @var integer 路由优先级
     */
    public $RoutePriority;

    /**
     * @var string 下一跳扩展名称（关联实例的扩展名称）
     */
    public $InstanceExtraName;

    /**
     * @param string $RouteId 路由策略ID
     * @param string $DestinationCidrBlock 目的端
     * @param string $InstanceType 下一跳类型（关联实例类型），所有类型：VPC、DIRECTCONNECT
     * @param string $InstanceId 下一跳（关联实例）
     * @param string $InstanceName 下一跳名称（关联实例名称）
     * @param string $InstanceRegion 下一跳所属地域（关联实例所属地域）
     * @param string $UpdateTime 更新时间
     * @param boolean $Enabled 路由是否启用
     * @param string $InstanceUin 关联实例所属UIN（根账号）
     * @param string $ExtraState 路由的扩展状态
     * @param boolean $IsBgp 是否动态路由
     * @param integer $RoutePriority 路由优先级
     * @param string $InstanceExtraName 下一跳扩展名称（关联实例的扩展名称）
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
        if (array_key_exists("RouteId",$param) and $param["RouteId"] !== null) {
            $this->RouteId = $param["RouteId"];
        }

        if (array_key_exists("DestinationCidrBlock",$param) and $param["DestinationCidrBlock"] !== null) {
            $this->DestinationCidrBlock = $param["DestinationCidrBlock"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceRegion",$param) and $param["InstanceRegion"] !== null) {
            $this->InstanceRegion = $param["InstanceRegion"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("InstanceUin",$param) and $param["InstanceUin"] !== null) {
            $this->InstanceUin = $param["InstanceUin"];
        }

        if (array_key_exists("ExtraState",$param) and $param["ExtraState"] !== null) {
            $this->ExtraState = $param["ExtraState"];
        }

        if (array_key_exists("IsBgp",$param) and $param["IsBgp"] !== null) {
            $this->IsBgp = $param["IsBgp"];
        }

        if (array_key_exists("RoutePriority",$param) and $param["RoutePriority"] !== null) {
            $this->RoutePriority = $param["RoutePriority"];
        }

        if (array_key_exists("InstanceExtraName",$param) and $param["InstanceExtraName"] !== null) {
            $this->InstanceExtraName = $param["InstanceExtraName"];
        }
    }
}
