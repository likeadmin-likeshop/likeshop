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
namespace TencentCloud\Bm\V20180423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 维护平台维修任务信息
 *
 * @method string getTaskId() 获取任务id
 * @method void setTaskId(string $TaskId) 设置任务id
 * @method string getInstanceId() 获取主机id
 * @method void setInstanceId(string $InstanceId) 设置主机id
 * @method string getAlias() 获取主机别名
 * @method void setAlias(string $Alias) 设置主机别名
 * @method integer getTaskTypeId() 获取故障类型id
 * @method void setTaskTypeId(integer $TaskTypeId) 设置故障类型id
 * @method integer getTaskStatus() 获取任务状态id
 * @method void setTaskStatus(integer $TaskStatus) 设置任务状态id
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getAuthTime() 获取授权时间
 * @method void setAuthTime(string $AuthTime) 设置授权时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method string getTaskDetail() 获取任务详情
 * @method void setTaskDetail(string $TaskDetail) 设置任务详情
 * @method integer getDeviceStatus() 获取设备状态
 * @method void setDeviceStatus(integer $DeviceStatus) 设置设备状态
 * @method integer getOperateStatus() 获取设备操作状态
 * @method void setOperateStatus(integer $OperateStatus) 设置设备操作状态
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getVpcId() 获取所属网络
 * @method void setVpcId(string $VpcId) 设置所属网络
 * @method string getSubnetId() 获取所在子网
 * @method void setSubnetId(string $SubnetId) 设置所在子网
 * @method string getSubnetName() 获取子网名
 * @method void setSubnetName(string $SubnetName) 设置子网名
 * @method string getVpcName() 获取VPC名
 * @method void setVpcName(string $VpcName) 设置VPC名
 * @method string getVpcCidrBlock() 获取VpcCidrBlock
 * @method void setVpcCidrBlock(string $VpcCidrBlock) 设置VpcCidrBlock
 * @method string getSubnetCidrBlock() 获取SubnetCidrBlock
 * @method void setSubnetCidrBlock(string $SubnetCidrBlock) 设置SubnetCidrBlock
 * @method string getWanIp() 获取公网ip
 * @method void setWanIp(string $WanIp) 设置公网ip
 * @method string getLanIp() 获取内网IP
 * @method void setLanIp(string $LanIp) 设置内网IP
 * @method string getMgtIp() 获取管理IP
 * @method void setMgtIp(string $MgtIp) 设置管理IP
 * @method string getTaskTypeName() 获取故障类中文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTypeName(string $TaskTypeName) 设置故障类中文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskSubType() 获取故障类型，取值：unconfirmed (不明确故障)；redundancy (有冗余故障)；nonredundancy (无冗余故障)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskSubType(string $TaskSubType) 设置故障类型，取值：unconfirmed (不明确故障)；redundancy (有冗余故障)；nonredundancy (无冗余故障)
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskInfo extends AbstractModel
{
    /**
     * @var string 任务id
     */
    public $TaskId;

    /**
     * @var string 主机id
     */
    public $InstanceId;

    /**
     * @var string 主机别名
     */
    public $Alias;

    /**
     * @var integer 故障类型id
     */
    public $TaskTypeId;

    /**
     * @var integer 任务状态id
     */
    public $TaskStatus;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 授权时间
     */
    public $AuthTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var string 任务详情
     */
    public $TaskDetail;

    /**
     * @var integer 设备状态
     */
    public $DeviceStatus;

    /**
     * @var integer 设备操作状态
     */
    public $OperateStatus;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 所属网络
     */
    public $VpcId;

    /**
     * @var string 所在子网
     */
    public $SubnetId;

    /**
     * @var string 子网名
     */
    public $SubnetName;

    /**
     * @var string VPC名
     */
    public $VpcName;

    /**
     * @var string VpcCidrBlock
     */
    public $VpcCidrBlock;

    /**
     * @var string SubnetCidrBlock
     */
    public $SubnetCidrBlock;

    /**
     * @var string 公网ip
     */
    public $WanIp;

    /**
     * @var string 内网IP
     */
    public $LanIp;

    /**
     * @var string 管理IP
     */
    public $MgtIp;

    /**
     * @var string 故障类中文名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTypeName;

    /**
     * @var string 故障类型，取值：unconfirmed (不明确故障)；redundancy (有冗余故障)；nonredundancy (无冗余故障)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskSubType;

    /**
     * @param string $TaskId 任务id
     * @param string $InstanceId 主机id
     * @param string $Alias 主机别名
     * @param integer $TaskTypeId 故障类型id
     * @param integer $TaskStatus 任务状态id
     * @param string $CreateTime 创建时间
     * @param string $AuthTime 授权时间
     * @param string $EndTime 结束时间
     * @param string $TaskDetail 任务详情
     * @param integer $DeviceStatus 设备状态
     * @param integer $OperateStatus 设备操作状态
     * @param string $Zone 可用区
     * @param string $Region 地域
     * @param string $VpcId 所属网络
     * @param string $SubnetId 所在子网
     * @param string $SubnetName 子网名
     * @param string $VpcName VPC名
     * @param string $VpcCidrBlock VpcCidrBlock
     * @param string $SubnetCidrBlock SubnetCidrBlock
     * @param string $WanIp 公网ip
     * @param string $LanIp 内网IP
     * @param string $MgtIp 管理IP
     * @param string $TaskTypeName 故障类中文名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskSubType 故障类型，取值：unconfirmed (不明确故障)；redundancy (有冗余故障)；nonredundancy (无冗余故障)
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("AuthTime",$param) and $param["AuthTime"] !== null) {
            $this->AuthTime = $param["AuthTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TaskDetail",$param) and $param["TaskDetail"] !== null) {
            $this->TaskDetail = $param["TaskDetail"];
        }

        if (array_key_exists("DeviceStatus",$param) and $param["DeviceStatus"] !== null) {
            $this->DeviceStatus = $param["DeviceStatus"];
        }

        if (array_key_exists("OperateStatus",$param) and $param["OperateStatus"] !== null) {
            $this->OperateStatus = $param["OperateStatus"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("VpcCidrBlock",$param) and $param["VpcCidrBlock"] !== null) {
            $this->VpcCidrBlock = $param["VpcCidrBlock"];
        }

        if (array_key_exists("SubnetCidrBlock",$param) and $param["SubnetCidrBlock"] !== null) {
            $this->SubnetCidrBlock = $param["SubnetCidrBlock"];
        }

        if (array_key_exists("WanIp",$param) and $param["WanIp"] !== null) {
            $this->WanIp = $param["WanIp"];
        }

        if (array_key_exists("LanIp",$param) and $param["LanIp"] !== null) {
            $this->LanIp = $param["LanIp"];
        }

        if (array_key_exists("MgtIp",$param) and $param["MgtIp"] !== null) {
            $this->MgtIp = $param["MgtIp"];
        }

        if (array_key_exists("TaskTypeName",$param) and $param["TaskTypeName"] !== null) {
            $this->TaskTypeName = $param["TaskTypeName"];
        }

        if (array_key_exists("TaskSubType",$param) and $param["TaskSubType"] !== null) {
            $this->TaskSubType = $param["TaskSubType"];
        }
    }
}
