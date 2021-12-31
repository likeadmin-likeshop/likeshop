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
 * 物理机机架信息
 *
 * @method string getInstanceId() 获取设备ID
 * @method void setInstanceId(string $InstanceId) 设置设备ID
 * @method string getZone() 获取所在可用区
 * @method void setZone(string $Zone) 设置所在可用区
 * @method string getVpcId() 获取私有网络ID
 * @method void setVpcId(string $VpcId) 设置私有网络ID
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 * @method string getLanIp() 获取业务IP
 * @method void setLanIp(string $LanIp) 设置业务IP
 * @method string getAlias() 获取实例别名
 * @method void setAlias(string $Alias) 设置实例别名
 * @method string getRckName() 获取机架名称
 * @method void setRckName(string $RckName) 设置机架名称
 * @method integer getPosCode() 获取机位
 * @method void setPosCode(integer $PosCode) 设置机位
 * @method string getSwitchName() 获取交换机名称
 * @method void setSwitchName(string $SwitchName) 设置交换机名称
 * @method string getDeliverTime() 获取设备交付时间
 * @method void setDeliverTime(string $DeliverTime) 设置设备交付时间
 * @method string getDeadline() 获取过期时间
 * @method void setDeadline(string $Deadline) 设置过期时间
 */
class DevicePositionInfo extends AbstractModel
{
    /**
     * @var string 设备ID
     */
    public $InstanceId;

    /**
     * @var string 所在可用区
     */
    public $Zone;

    /**
     * @var string 私有网络ID
     */
    public $VpcId;

    /**
     * @var string 子网ID
     */
    public $SubnetId;

    /**
     * @var string 业务IP
     */
    public $LanIp;

    /**
     * @var string 实例别名
     */
    public $Alias;

    /**
     * @var string 机架名称
     */
    public $RckName;

    /**
     * @var integer 机位
     */
    public $PosCode;

    /**
     * @var string 交换机名称
     */
    public $SwitchName;

    /**
     * @var string 设备交付时间
     */
    public $DeliverTime;

    /**
     * @var string 过期时间
     */
    public $Deadline;

    /**
     * @param string $InstanceId 设备ID
     * @param string $Zone 所在可用区
     * @param string $VpcId 私有网络ID
     * @param string $SubnetId 子网ID
     * @param string $LanIp 业务IP
     * @param string $Alias 实例别名
     * @param string $RckName 机架名称
     * @param integer $PosCode 机位
     * @param string $SwitchName 交换机名称
     * @param string $DeliverTime 设备交付时间
     * @param string $Deadline 过期时间
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("LanIp",$param) and $param["LanIp"] !== null) {
            $this->LanIp = $param["LanIp"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("RckName",$param) and $param["RckName"] !== null) {
            $this->RckName = $param["RckName"];
        }

        if (array_key_exists("PosCode",$param) and $param["PosCode"] !== null) {
            $this->PosCode = $param["PosCode"];
        }

        if (array_key_exists("SwitchName",$param) and $param["SwitchName"] !== null) {
            $this->SwitchName = $param["SwitchName"];
        }

        if (array_key_exists("DeliverTime",$param) and $param["DeliverTime"] !== null) {
            $this->DeliverTime = $param["DeliverTime"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }
    }
}
