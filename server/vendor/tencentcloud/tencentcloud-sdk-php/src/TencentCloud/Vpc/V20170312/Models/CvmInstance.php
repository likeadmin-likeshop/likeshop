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
 * 云主机实例信息。
 *
 * @method string getVpcId() 获取VPC实例ID。
 * @method void setVpcId(string $VpcId) 设置VPC实例ID。
 * @method string getSubnetId() 获取子网实例ID。
 * @method void setSubnetId(string $SubnetId) 设置子网实例ID。
 * @method string getInstanceId() 获取云主机实例ID
 * @method void setInstanceId(string $InstanceId) 设置云主机实例ID
 * @method string getInstanceName() 获取云主机名称。
 * @method void setInstanceName(string $InstanceName) 设置云主机名称。
 * @method string getInstanceState() 获取云主机状态。
 * @method void setInstanceState(string $InstanceState) 设置云主机状态。
 * @method integer getCPU() 获取实例的CPU核数，单位：核。
 * @method void setCPU(integer $CPU) 设置实例的CPU核数，单位：核。
 * @method integer getMemory() 获取实例内存容量，单位：GB。
 * @method void setMemory(integer $Memory) 设置实例内存容量，单位：GB。
 * @method string getCreatedTime() 获取创建时间。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。
 * @method string getInstanceType() 获取实例机型。
 * @method void setInstanceType(string $InstanceType) 设置实例机型。
 * @method integer getEniLimit() 获取实例弹性网卡配额（包含主网卡）。
 * @method void setEniLimit(integer $EniLimit) 设置实例弹性网卡配额（包含主网卡）。
 * @method integer getEniIpLimit() 获取实例弹性网卡内网IP配额（包含主网卡）。
 * @method void setEniIpLimit(integer $EniIpLimit) 设置实例弹性网卡内网IP配额（包含主网卡）。
 * @method integer getInstanceEniCount() 获取实例已绑定弹性网卡的个数（包含主网卡）。
 * @method void setInstanceEniCount(integer $InstanceEniCount) 设置实例已绑定弹性网卡的个数（包含主网卡）。
 */
class CvmInstance extends AbstractModel
{
    /**
     * @var string VPC实例ID。
     */
    public $VpcId;

    /**
     * @var string 子网实例ID。
     */
    public $SubnetId;

    /**
     * @var string 云主机实例ID
     */
    public $InstanceId;

    /**
     * @var string 云主机名称。
     */
    public $InstanceName;

    /**
     * @var string 云主机状态。
     */
    public $InstanceState;

    /**
     * @var integer 实例的CPU核数，单位：核。
     */
    public $CPU;

    /**
     * @var integer 实例内存容量，单位：GB。
     */
    public $Memory;

    /**
     * @var string 创建时间。
     */
    public $CreatedTime;

    /**
     * @var string 实例机型。
     */
    public $InstanceType;

    /**
     * @var integer 实例弹性网卡配额（包含主网卡）。
     */
    public $EniLimit;

    /**
     * @var integer 实例弹性网卡内网IP配额（包含主网卡）。
     */
    public $EniIpLimit;

    /**
     * @var integer 实例已绑定弹性网卡的个数（包含主网卡）。
     */
    public $InstanceEniCount;

    /**
     * @param string $VpcId VPC实例ID。
     * @param string $SubnetId 子网实例ID。
     * @param string $InstanceId 云主机实例ID
     * @param string $InstanceName 云主机名称。
     * @param string $InstanceState 云主机状态。
     * @param integer $CPU 实例的CPU核数，单位：核。
     * @param integer $Memory 实例内存容量，单位：GB。
     * @param string $CreatedTime 创建时间。
     * @param string $InstanceType 实例机型。
     * @param integer $EniLimit 实例弹性网卡配额（包含主网卡）。
     * @param integer $EniIpLimit 实例弹性网卡内网IP配额（包含主网卡）。
     * @param integer $InstanceEniCount 实例已绑定弹性网卡的个数（包含主网卡）。
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("EniLimit",$param) and $param["EniLimit"] !== null) {
            $this->EniLimit = $param["EniLimit"];
        }

        if (array_key_exists("EniIpLimit",$param) and $param["EniIpLimit"] !== null) {
            $this->EniIpLimit = $param["EniIpLimit"];
        }

        if (array_key_exists("InstanceEniCount",$param) and $param["InstanceEniCount"] !== null) {
            $this->InstanceEniCount = $param["InstanceEniCount"];
        }
    }
}
