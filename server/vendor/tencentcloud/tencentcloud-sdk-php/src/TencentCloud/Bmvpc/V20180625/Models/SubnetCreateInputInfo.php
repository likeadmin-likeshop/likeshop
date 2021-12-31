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
namespace TencentCloud\Bmvpc\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建子网时的子网类型
 *
 * @method string getSubnetName() 获取子网名称，可任意命名，但不得超过60个字符
 * @method void setSubnetName(string $SubnetName) 设置子网名称，可任意命名，但不得超过60个字符
 * @method string getCidrBlock() 获取子网网段，子网网段必须在VPC网段内，相同VPC内子网网段不能重叠
 * @method void setCidrBlock(string $CidrBlock) 设置子网网段，子网网段必须在VPC网段内，相同VPC内子网网段不能重叠
 * @method integer getDistributedFlag() 获取是否开启子网分布式网关，默认传1，传0为关闭子网分布式网关。关闭分布式网关子网用于云服务器化子网，此子网中只能有一台物理机，同时此物理机及其上子机只能在此子网中
 * @method void setDistributedFlag(integer $DistributedFlag) 设置是否开启子网分布式网关，默认传1，传0为关闭子网分布式网关。关闭分布式网关子网用于云服务器化子网，此子网中只能有一台物理机，同时此物理机及其上子机只能在此子网中
 * @method integer getDhcpEnable() 获取是否开启dhcp relay ，关闭为0，开启为1。默认为0
 * @method void setDhcpEnable(integer $DhcpEnable) 设置是否开启dhcp relay ，关闭为0，开启为1。默认为0
 * @method array getDhcpServerIp() 获取DHCP SERVER 的IP地址数组。IP地址为相同VPC的子网内分配的IP
 * @method void setDhcpServerIp(array $DhcpServerIp) 设置DHCP SERVER 的IP地址数组。IP地址为相同VPC的子网内分配的IP
 * @method integer getIpReserve() 获取预留的IP个数。从该子网的最大可分配IP倒序分配N个IP 用于DHCP 动态分配使用的地址段
 * @method void setIpReserve(integer $IpReserve) 设置预留的IP个数。从该子网的最大可分配IP倒序分配N个IP 用于DHCP 动态分配使用的地址段
 * @method integer getVlanId() 获取子网绑定的vlanId。VlanId取值范围为2000-2999。创建物理机子网，VlanId默认为5; 创建docker子网或者虚拟子网，VlanId默认会分配2000--2999未使用的数值。
 * @method void setVlanId(integer $VlanId) 设置子网绑定的vlanId。VlanId取值范围为2000-2999。创建物理机子网，VlanId默认为5; 创建docker子网或者虚拟子网，VlanId默认会分配2000--2999未使用的数值。
 * @method string getZone() 获取黑石子网的可用区
 * @method void setZone(string $Zone) 设置黑石子网的可用区
 * @method integer getIsSmartNic() 获取是否25G子网，1为是，0为否。
 * @method void setIsSmartNic(integer $IsSmartNic) 设置是否25G子网，1为是，0为否。
 */
class SubnetCreateInputInfo extends AbstractModel
{
    /**
     * @var string 子网名称，可任意命名，但不得超过60个字符
     */
    public $SubnetName;

    /**
     * @var string 子网网段，子网网段必须在VPC网段内，相同VPC内子网网段不能重叠
     */
    public $CidrBlock;

    /**
     * @var integer 是否开启子网分布式网关，默认传1，传0为关闭子网分布式网关。关闭分布式网关子网用于云服务器化子网，此子网中只能有一台物理机，同时此物理机及其上子机只能在此子网中
     */
    public $DistributedFlag;

    /**
     * @var integer 是否开启dhcp relay ，关闭为0，开启为1。默认为0
     */
    public $DhcpEnable;

    /**
     * @var array DHCP SERVER 的IP地址数组。IP地址为相同VPC的子网内分配的IP
     */
    public $DhcpServerIp;

    /**
     * @var integer 预留的IP个数。从该子网的最大可分配IP倒序分配N个IP 用于DHCP 动态分配使用的地址段
     */
    public $IpReserve;

    /**
     * @var integer 子网绑定的vlanId。VlanId取值范围为2000-2999。创建物理机子网，VlanId默认为5; 创建docker子网或者虚拟子网，VlanId默认会分配2000--2999未使用的数值。
     */
    public $VlanId;

    /**
     * @var string 黑石子网的可用区
     */
    public $Zone;

    /**
     * @var integer 是否25G子网，1为是，0为否。
     */
    public $IsSmartNic;

    /**
     * @param string $SubnetName 子网名称，可任意命名，但不得超过60个字符
     * @param string $CidrBlock 子网网段，子网网段必须在VPC网段内，相同VPC内子网网段不能重叠
     * @param integer $DistributedFlag 是否开启子网分布式网关，默认传1，传0为关闭子网分布式网关。关闭分布式网关子网用于云服务器化子网，此子网中只能有一台物理机，同时此物理机及其上子机只能在此子网中
     * @param integer $DhcpEnable 是否开启dhcp relay ，关闭为0，开启为1。默认为0
     * @param array $DhcpServerIp DHCP SERVER 的IP地址数组。IP地址为相同VPC的子网内分配的IP
     * @param integer $IpReserve 预留的IP个数。从该子网的最大可分配IP倒序分配N个IP 用于DHCP 动态分配使用的地址段
     * @param integer $VlanId 子网绑定的vlanId。VlanId取值范围为2000-2999。创建物理机子网，VlanId默认为5; 创建docker子网或者虚拟子网，VlanId默认会分配2000--2999未使用的数值。
     * @param string $Zone 黑石子网的可用区
     * @param integer $IsSmartNic 是否25G子网，1为是，0为否。
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
        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("DistributedFlag",$param) and $param["DistributedFlag"] !== null) {
            $this->DistributedFlag = $param["DistributedFlag"];
        }

        if (array_key_exists("DhcpEnable",$param) and $param["DhcpEnable"] !== null) {
            $this->DhcpEnable = $param["DhcpEnable"];
        }

        if (array_key_exists("DhcpServerIp",$param) and $param["DhcpServerIp"] !== null) {
            $this->DhcpServerIp = $param["DhcpServerIp"];
        }

        if (array_key_exists("IpReserve",$param) and $param["IpReserve"] !== null) {
            $this->IpReserve = $param["IpReserve"];
        }

        if (array_key_exists("VlanId",$param) and $param["VlanId"] !== null) {
            $this->VlanId = $param["VlanId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("IsSmartNic",$param) and $param["IsSmartNic"] !== null) {
            $this->IsSmartNic = $param["IsSmartNic"];
        }
    }
}
