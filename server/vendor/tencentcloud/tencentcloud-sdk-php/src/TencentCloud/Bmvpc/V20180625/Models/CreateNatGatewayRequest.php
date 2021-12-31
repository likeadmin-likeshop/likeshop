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
 * CreateNatGateway请求参数结构体
 *
 * @method string getForwardMode() 获取转发模式，其中0表示IP方式，1表示网段方式；通过cidr方式可支持更多的IP接入到NAT网关
 * @method void setForwardMode(string $ForwardMode) 设置转发模式，其中0表示IP方式，1表示网段方式；通过cidr方式可支持更多的IP接入到NAT网关
 * @method string getVpcId() 获取私有网络ID，例如：vpc-kd7d06of
 * @method void setVpcId(string $VpcId) 设置私有网络ID，例如：vpc-kd7d06of
 * @method string getNatName() 获取NAT名称
 * @method void setNatName(string $NatName) 设置NAT名称
 * @method integer getMaxConcurrent() 获取并发连接数规格；取值为1000000、3000000、10000000，分别对应小型、中型、大型NAT网关
 * @method void setMaxConcurrent(integer $MaxConcurrent) 设置并发连接数规格；取值为1000000、3000000、10000000，分别对应小型、中型、大型NAT网关
 * @method array getSubnetIds() 获取子网ID列表，子网下全部IP将加入NAT，不区分网关转发方式
 * @method void setSubnetIds(array $SubnetIds) 设置子网ID列表，子网下全部IP将加入NAT，不区分网关转发方式
 * @method array getIpInfoSet() 获取部分IP信息，子网下只有该部分IP将加入NAT，仅当网关转发模式为IP方式有效；IpInfoSet和SubnetIds中的子网ID不能同时存在
 * @method void setIpInfoSet(array $IpInfoSet) 设置部分IP信息，子网下只有该部分IP将加入NAT，仅当网关转发模式为IP方式有效；IpInfoSet和SubnetIds中的子网ID不能同时存在
 * @method array getAssignedEips() 获取已分配的EIP列表, AssignedEips和AutoAllocEipNum至少输入一个
 * @method void setAssignedEips(array $AssignedEips) 设置已分配的EIP列表, AssignedEips和AutoAllocEipNum至少输入一个
 * @method integer getAutoAllocEipNum() 获取新建EIP数目，系统将会按您的要求生产该数目个数EIP, AssignedEips和AutoAllocEipNum至少输入一个
 * @method void setAutoAllocEipNum(integer $AutoAllocEipNum) 设置新建EIP数目，系统将会按您的要求生产该数目个数EIP, AssignedEips和AutoAllocEipNum至少输入一个
 * @method integer getExclusive() 获取独占标识，取值为0和1，默认值为0；0和1分别表示创建共享型NAT网关和独占NAT型网关；由于同一个VPC网络内，指向NAT集群的默认路由只有一条，因此VPC内只能创建一种类型NAT网关；创建独占型NAT网关时，需联系对应架构师进行独占NAT集群搭建，否则无法创建独占型NAT网关。
 * @method void setExclusive(integer $Exclusive) 设置独占标识，取值为0和1，默认值为0；0和1分别表示创建共享型NAT网关和独占NAT型网关；由于同一个VPC网络内，指向NAT集群的默认路由只有一条，因此VPC内只能创建一种类型NAT网关；创建独占型NAT网关时，需联系对应架构师进行独占NAT集群搭建，否则无法创建独占型NAT网关。
 */
class CreateNatGatewayRequest extends AbstractModel
{
    /**
     * @var string 转发模式，其中0表示IP方式，1表示网段方式；通过cidr方式可支持更多的IP接入到NAT网关
     */
    public $ForwardMode;

    /**
     * @var string 私有网络ID，例如：vpc-kd7d06of
     */
    public $VpcId;

    /**
     * @var string NAT名称
     */
    public $NatName;

    /**
     * @var integer 并发连接数规格；取值为1000000、3000000、10000000，分别对应小型、中型、大型NAT网关
     */
    public $MaxConcurrent;

    /**
     * @var array 子网ID列表，子网下全部IP将加入NAT，不区分网关转发方式
     */
    public $SubnetIds;

    /**
     * @var array 部分IP信息，子网下只有该部分IP将加入NAT，仅当网关转发模式为IP方式有效；IpInfoSet和SubnetIds中的子网ID不能同时存在
     */
    public $IpInfoSet;

    /**
     * @var array 已分配的EIP列表, AssignedEips和AutoAllocEipNum至少输入一个
     */
    public $AssignedEips;

    /**
     * @var integer 新建EIP数目，系统将会按您的要求生产该数目个数EIP, AssignedEips和AutoAllocEipNum至少输入一个
     */
    public $AutoAllocEipNum;

    /**
     * @var integer 独占标识，取值为0和1，默认值为0；0和1分别表示创建共享型NAT网关和独占NAT型网关；由于同一个VPC网络内，指向NAT集群的默认路由只有一条，因此VPC内只能创建一种类型NAT网关；创建独占型NAT网关时，需联系对应架构师进行独占NAT集群搭建，否则无法创建独占型NAT网关。
     */
    public $Exclusive;

    /**
     * @param string $ForwardMode 转发模式，其中0表示IP方式，1表示网段方式；通过cidr方式可支持更多的IP接入到NAT网关
     * @param string $VpcId 私有网络ID，例如：vpc-kd7d06of
     * @param string $NatName NAT名称
     * @param integer $MaxConcurrent 并发连接数规格；取值为1000000、3000000、10000000，分别对应小型、中型、大型NAT网关
     * @param array $SubnetIds 子网ID列表，子网下全部IP将加入NAT，不区分网关转发方式
     * @param array $IpInfoSet 部分IP信息，子网下只有该部分IP将加入NAT，仅当网关转发模式为IP方式有效；IpInfoSet和SubnetIds中的子网ID不能同时存在
     * @param array $AssignedEips 已分配的EIP列表, AssignedEips和AutoAllocEipNum至少输入一个
     * @param integer $AutoAllocEipNum 新建EIP数目，系统将会按您的要求生产该数目个数EIP, AssignedEips和AutoAllocEipNum至少输入一个
     * @param integer $Exclusive 独占标识，取值为0和1，默认值为0；0和1分别表示创建共享型NAT网关和独占NAT型网关；由于同一个VPC网络内，指向NAT集群的默认路由只有一条，因此VPC内只能创建一种类型NAT网关；创建独占型NAT网关时，需联系对应架构师进行独占NAT集群搭建，否则无法创建独占型NAT网关。
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
        if (array_key_exists("ForwardMode",$param) and $param["ForwardMode"] !== null) {
            $this->ForwardMode = $param["ForwardMode"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("NatName",$param) and $param["NatName"] !== null) {
            $this->NatName = $param["NatName"];
        }

        if (array_key_exists("MaxConcurrent",$param) and $param["MaxConcurrent"] !== null) {
            $this->MaxConcurrent = $param["MaxConcurrent"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("IpInfoSet",$param) and $param["IpInfoSet"] !== null) {
            $this->IpInfoSet = [];
            foreach ($param["IpInfoSet"] as $key => $value){
                $obj = new IpInfo();
                $obj->deserialize($value);
                array_push($this->IpInfoSet, $obj);
            }
        }

        if (array_key_exists("AssignedEips",$param) and $param["AssignedEips"] !== null) {
            $this->AssignedEips = $param["AssignedEips"];
        }

        if (array_key_exists("AutoAllocEipNum",$param) and $param["AutoAllocEipNum"] !== null) {
            $this->AutoAllocEipNum = $param["AutoAllocEipNum"];
        }

        if (array_key_exists("Exclusive",$param) and $param["Exclusive"] !== null) {
            $this->Exclusive = $param["Exclusive"];
        }
    }
}
