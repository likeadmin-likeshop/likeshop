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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 只读组信息
 *
 * @method string getReadOnlyGroupId() 获取只读组标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReadOnlyGroupId(string $ReadOnlyGroupId) 设置只读组标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReadOnlyGroupName() 获取只读组名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReadOnlyGroupName(string $ReadOnlyGroupName) 设置只读组名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProjectId() 获取项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(integer $ProjectId) 设置项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMasterDBInstanceId() 获取主实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMasterDBInstanceId(string $MasterDBInstanceId) 设置主实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMinDelayEliminateReserve() 获取最小保留实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinDelayEliminateReserve(integer $MinDelayEliminateReserve) 设置最小保留实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxReplayLatency() 获取延迟空间大小阈值
 * @method void setMaxReplayLatency(integer $MaxReplayLatency) 设置延迟空间大小阈值
 * @method integer getReplayLatencyEliminate() 获取延迟大小开关
 * @method void setReplayLatencyEliminate(integer $ReplayLatencyEliminate) 设置延迟大小开关
 * @method float getMaxReplayLag() 获取延迟时间大小阈值
 * @method void setMaxReplayLag(float $MaxReplayLag) 设置延迟时间大小阈值
 * @method integer getReplayLagEliminate() 获取延迟时间开关
 * @method void setReplayLagEliminate(integer $ReplayLagEliminate) 设置延迟时间开关
 * @method string getVpcId() 获取虚拟网络id
 * @method void setVpcId(string $VpcId) 设置虚拟网络id
 * @method string getSubnetId() 获取子网id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置子网id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取地域id
 * @method void setRegion(string $Region) 设置地域id
 * @method string getZone() 获取地区id
 * @method void setZone(string $Zone) 设置地区id
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method array getReadOnlyDBInstanceList() 获取实例详细信息
 * @method void setReadOnlyDBInstanceList(array $ReadOnlyDBInstanceList) 设置实例详细信息
 * @method integer getRebalance() 获取自动负载均衡开关
 * @method void setRebalance(integer $Rebalance) 设置自动负载均衡开关
 * @method array getDBInstanceNetInfo() 获取网络信息
 * @method void setDBInstanceNetInfo(array $DBInstanceNetInfo) 设置网络信息
 */
class ReadOnlyGroup extends AbstractModel
{
    /**
     * @var string 只读组标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReadOnlyGroupId;

    /**
     * @var string 只读组名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReadOnlyGroupName;

    /**
     * @var integer 项目id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 主实例id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MasterDBInstanceId;

    /**
     * @var integer 最小保留实例数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinDelayEliminateReserve;

    /**
     * @var integer 延迟空间大小阈值
     */
    public $MaxReplayLatency;

    /**
     * @var integer 延迟大小开关
     */
    public $ReplayLatencyEliminate;

    /**
     * @var float 延迟时间大小阈值
     */
    public $MaxReplayLag;

    /**
     * @var integer 延迟时间开关
     */
    public $ReplayLagEliminate;

    /**
     * @var string 虚拟网络id
     */
    public $VpcId;

    /**
     * @var string 子网id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var string 地域id
     */
    public $Region;

    /**
     * @var string 地区id
     */
    public $Zone;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @var array 实例详细信息
     */
    public $ReadOnlyDBInstanceList;

    /**
     * @var integer 自动负载均衡开关
     */
    public $Rebalance;

    /**
     * @var array 网络信息
     */
    public $DBInstanceNetInfo;

    /**
     * @param string $ReadOnlyGroupId 只读组标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReadOnlyGroupName 只读组名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProjectId 项目id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MasterDBInstanceId 主实例id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MinDelayEliminateReserve 最小保留实例数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxReplayLatency 延迟空间大小阈值
     * @param integer $ReplayLatencyEliminate 延迟大小开关
     * @param float $MaxReplayLag 延迟时间大小阈值
     * @param integer $ReplayLagEliminate 延迟时间开关
     * @param string $VpcId 虚拟网络id
     * @param string $SubnetId 子网id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 地域id
     * @param string $Zone 地区id
     * @param string $Status 状态
     * @param array $ReadOnlyDBInstanceList 实例详细信息
     * @param integer $Rebalance 自动负载均衡开关
     * @param array $DBInstanceNetInfo 网络信息
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
        if (array_key_exists("ReadOnlyGroupId",$param) and $param["ReadOnlyGroupId"] !== null) {
            $this->ReadOnlyGroupId = $param["ReadOnlyGroupId"];
        }

        if (array_key_exists("ReadOnlyGroupName",$param) and $param["ReadOnlyGroupName"] !== null) {
            $this->ReadOnlyGroupName = $param["ReadOnlyGroupName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("MasterDBInstanceId",$param) and $param["MasterDBInstanceId"] !== null) {
            $this->MasterDBInstanceId = $param["MasterDBInstanceId"];
        }

        if (array_key_exists("MinDelayEliminateReserve",$param) and $param["MinDelayEliminateReserve"] !== null) {
            $this->MinDelayEliminateReserve = $param["MinDelayEliminateReserve"];
        }

        if (array_key_exists("MaxReplayLatency",$param) and $param["MaxReplayLatency"] !== null) {
            $this->MaxReplayLatency = $param["MaxReplayLatency"];
        }

        if (array_key_exists("ReplayLatencyEliminate",$param) and $param["ReplayLatencyEliminate"] !== null) {
            $this->ReplayLatencyEliminate = $param["ReplayLatencyEliminate"];
        }

        if (array_key_exists("MaxReplayLag",$param) and $param["MaxReplayLag"] !== null) {
            $this->MaxReplayLag = $param["MaxReplayLag"];
        }

        if (array_key_exists("ReplayLagEliminate",$param) and $param["ReplayLagEliminate"] !== null) {
            $this->ReplayLagEliminate = $param["ReplayLagEliminate"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ReadOnlyDBInstanceList",$param) and $param["ReadOnlyDBInstanceList"] !== null) {
            $this->ReadOnlyDBInstanceList = [];
            foreach ($param["ReadOnlyDBInstanceList"] as $key => $value){
                $obj = new DBInstance();
                $obj->deserialize($value);
                array_push($this->ReadOnlyDBInstanceList, $obj);
            }
        }

        if (array_key_exists("Rebalance",$param) and $param["Rebalance"] !== null) {
            $this->Rebalance = $param["Rebalance"];
        }

        if (array_key_exists("DBInstanceNetInfo",$param) and $param["DBInstanceNetInfo"] !== null) {
            $this->DBInstanceNetInfo = [];
            foreach ($param["DBInstanceNetInfo"] as $key => $value){
                $obj = new DBInstanceNetInfo();
                $obj->deserialize($value);
                array_push($this->DBInstanceNetInfo, $obj);
            }
        }
    }
}
