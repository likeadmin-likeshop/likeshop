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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单个实例信息
 *
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method integer getAppId() 获取用户id
 * @method void setAppId(integer $AppId) 设置用户id
 * @method integer getProjectId() 获取实例所属项目id
 * @method void setProjectId(integer $ProjectId) 设置实例所属项目id
 * @method string getRegion() 获取实例接入区域
 * @method void setRegion(string $Region) 设置实例接入区域
 * @method string getZone() 获取实例接入zone
 * @method void setZone(string $Zone) 设置实例接入zone
 * @method string getVpcId() 获取实例网络id
 * @method void setVpcId(string $VpcId) 设置实例网络id
 * @method string getSubnetId() 获取子网id
 * @method void setSubnetId(string $SubnetId) 设置子网id
 * @method string getStatus() 获取实例状态信息，0-创建中，1-运行中
 * @method void setStatus(string $Status) 设置实例状态信息，0-创建中，1-运行中
 * @method array getVips() 获取实例网络ip
 * @method void setVips(array $Vips) 设置实例网络ip
 * @method integer getVport() 获取实例网络端口
 * @method void setVport(integer $Vport) 设置实例网络端口
 * @method string getCreatetime() 获取实例创建时间
 * @method void setCreatetime(string $Createtime) 设置实例创建时间
 * @method integer getPayMode() 获取计费类型，0-按量计费，1-包年包月
 * @method void setPayMode(integer $PayMode) 设置计费类型，0-按量计费，1-包年包月
 * @method integer getNetType() 获取网络类型，0-基础网络，1-VPC网络
 * @method void setNetType(integer $NetType) 设置网络类型，0-基础网络，1-VPC网络
 */
class RedisCommonInstanceList extends AbstractModel
{
    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var integer 用户id
     */
    public $AppId;

    /**
     * @var integer 实例所属项目id
     */
    public $ProjectId;

    /**
     * @var string 实例接入区域
     */
    public $Region;

    /**
     * @var string 实例接入zone
     */
    public $Zone;

    /**
     * @var string 实例网络id
     */
    public $VpcId;

    /**
     * @var string 子网id
     */
    public $SubnetId;

    /**
     * @var string 实例状态信息，0-创建中，1-运行中
     */
    public $Status;

    /**
     * @var array 实例网络ip
     */
    public $Vips;

    /**
     * @var integer 实例网络端口
     */
    public $Vport;

    /**
     * @var string 实例创建时间
     */
    public $Createtime;

    /**
     * @var integer 计费类型，0-按量计费，1-包年包月
     */
    public $PayMode;

    /**
     * @var integer 网络类型，0-基础网络，1-VPC网络
     */
    public $NetType;

    /**
     * @param string $InstanceName 实例名称
     * @param string $InstanceId 实例id
     * @param integer $AppId 用户id
     * @param integer $ProjectId 实例所属项目id
     * @param string $Region 实例接入区域
     * @param string $Zone 实例接入zone
     * @param string $VpcId 实例网络id
     * @param string $SubnetId 子网id
     * @param string $Status 实例状态信息，0-创建中，1-运行中
     * @param array $Vips 实例网络ip
     * @param integer $Vport 实例网络端口
     * @param string $Createtime 实例创建时间
     * @param integer $PayMode 计费类型，0-按量计费，1-包年包月
     * @param integer $NetType 网络类型，0-基础网络，1-VPC网络
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Vips",$param) and $param["Vips"] !== null) {
            $this->Vips = $param["Vips"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("Createtime",$param) and $param["Createtime"] !== null) {
            $this->Createtime = $param["Createtime"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }
    }
}
