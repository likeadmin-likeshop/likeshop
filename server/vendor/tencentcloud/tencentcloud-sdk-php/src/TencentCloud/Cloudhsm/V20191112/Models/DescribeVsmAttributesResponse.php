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
namespace TencentCloud\Cloudhsm\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVsmAttributes返回参数结构体
 *
 * @method string getResourceId() 获取资源Id
 * @method void setResourceId(string $ResourceId) 设置资源Id
 * @method string getResourceName() 获取资源名称
 * @method void setResourceName(string $ResourceName) 设置资源名称
 * @method integer getStatus() 获取资源状态，1表示资源为正常，2表示资源处于隔离状态
 * @method void setStatus(integer $Status) 设置资源状态，1表示资源为正常，2表示资源处于隔离状态
 * @method string getVip() 获取资源IP
 * @method void setVip(string $Vip) 设置资源IP
 * @method string getVpcId() 获取资源所属Vpc
 * @method void setVpcId(string $VpcId) 设置资源所属Vpc
 * @method string getSubnetId() 获取资源所属子网
 * @method void setSubnetId(string $SubnetId) 设置资源所属子网
 * @method string getModel() 获取资源所属HSM的规格
 * @method void setModel(string $Model) 设置资源所属HSM的规格
 * @method integer getVsmType() 获取资源类型，17表示EVSM，33表示GVSM，49表示SVSM
 * @method void setVsmType(integer $VsmType) 设置资源类型，17表示EVSM，33表示GVSM，49表示SVSM
 * @method integer getRegionId() 获取地域Id，返回腾讯云地域代码，如广州为1，北京为8
 * @method void setRegionId(integer $RegionId) 设置地域Id，返回腾讯云地域代码，如广州为1，北京为8
 * @method integer getZoneId() 获取区域Id，返回腾讯云每个地域的可用区代码
 * @method void setZoneId(integer $ZoneId) 设置区域Id，返回腾讯云每个地域的可用区代码
 * @method integer getExpireTime() 获取过期时间
 * @method void setExpireTime(integer $ExpireTime) 设置过期时间
 * @method array getSgList() 获取安全组详情信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSgList(array $SgList) 设置安全组详情信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetName() 获取子网名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetName(string $SubnetName) 设置子网名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegionName() 获取地域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionName(string $RegionName) 设置地域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZoneName() 获取区域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneName(string $ZoneName) 设置区域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getExpired() 获取实例是否已经过期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpired(boolean $Expired) 设置实例是否已经过期
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRemainSeconds() 获取为正数表示实例距离过期时间剩余秒数，为负数表示实例已经过期多少秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemainSeconds(integer $RemainSeconds) 设置为正数表示实例距离过期时间剩余秒数，为负数表示实例已经过期多少秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcName() 获取私有虚拟网络名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcName(string $VpcName) 设置私有虚拟网络名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcCidrBlock() 获取VPC的IPv4 CIDR
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcCidrBlock(string $VpcCidrBlock) 设置VPC的IPv4 CIDR
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetCidrBlock() 获取子网的CIDR
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetCidrBlock(string $SubnetCidrBlock) 设置子网的CIDR
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取资源所关联的Tag
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置资源所关联的Tag
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRenewFlag() 获取资源续费标识，0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费(用户设置)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRenewFlag(integer $RenewFlag) 设置资源续费标识，0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费(用户设置)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getManufacturer() 获取厂商
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setManufacturer(string $Manufacturer) 设置厂商
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVsmAttributesResponse extends AbstractModel
{
    /**
     * @var string 资源Id
     */
    public $ResourceId;

    /**
     * @var string 资源名称
     */
    public $ResourceName;

    /**
     * @var integer 资源状态，1表示资源为正常，2表示资源处于隔离状态
     */
    public $Status;

    /**
     * @var string 资源IP
     */
    public $Vip;

    /**
     * @var string 资源所属Vpc
     */
    public $VpcId;

    /**
     * @var string 资源所属子网
     */
    public $SubnetId;

    /**
     * @var string 资源所属HSM的规格
     */
    public $Model;

    /**
     * @var integer 资源类型，17表示EVSM，33表示GVSM，49表示SVSM
     */
    public $VsmType;

    /**
     * @var integer 地域Id，返回腾讯云地域代码，如广州为1，北京为8
     */
    public $RegionId;

    /**
     * @var integer 区域Id，返回腾讯云每个地域的可用区代码
     */
    public $ZoneId;

    /**
     * @var integer 过期时间
     */
    public $ExpireTime;

    /**
     * @var array 安全组详情信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SgList;

    /**
     * @var string 子网名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetName;

    /**
     * @var string 地域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionName;

    /**
     * @var string 区域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneName;

    /**
     * @var boolean 实例是否已经过期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Expired;

    /**
     * @var integer 为正数表示实例距离过期时间剩余秒数，为负数表示实例已经过期多少秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RemainSeconds;

    /**
     * @var string 私有虚拟网络名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcName;

    /**
     * @var string VPC的IPv4 CIDR
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcCidrBlock;

    /**
     * @var string 子网的CIDR
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetCidrBlock;

    /**
     * @var array 资源所关联的Tag
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var integer 资源续费标识，0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费(用户设置)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RenewFlag;

    /**
     * @var string 厂商
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Manufacturer;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ResourceId 资源Id
     * @param string $ResourceName 资源名称
     * @param integer $Status 资源状态，1表示资源为正常，2表示资源处于隔离状态
     * @param string $Vip 资源IP
     * @param string $VpcId 资源所属Vpc
     * @param string $SubnetId 资源所属子网
     * @param string $Model 资源所属HSM的规格
     * @param integer $VsmType 资源类型，17表示EVSM，33表示GVSM，49表示SVSM
     * @param integer $RegionId 地域Id，返回腾讯云地域代码，如广州为1，北京为8
     * @param integer $ZoneId 区域Id，返回腾讯云每个地域的可用区代码
     * @param integer $ExpireTime 过期时间
     * @param array $SgList 安全组详情信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetName 子网名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegionName 地域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ZoneName 区域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Expired 实例是否已经过期
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RemainSeconds 为正数表示实例距离过期时间剩余秒数，为负数表示实例已经过期多少秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcName 私有虚拟网络名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcCidrBlock VPC的IPv4 CIDR
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetCidrBlock 子网的CIDR
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 资源所关联的Tag
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RenewFlag 资源续费标识，0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费(用户设置)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Manufacturer 厂商
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("VsmType",$param) and $param["VsmType"] !== null) {
            $this->VsmType = $param["VsmType"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("SgList",$param) and $param["SgList"] !== null) {
            $this->SgList = [];
            foreach ($param["SgList"] as $key => $value){
                $obj = new UsgRuleDetail();
                $obj->deserialize($value);
                array_push($this->SgList, $obj);
            }
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("Expired",$param) and $param["Expired"] !== null) {
            $this->Expired = $param["Expired"];
        }

        if (array_key_exists("RemainSeconds",$param) and $param["RemainSeconds"] !== null) {
            $this->RemainSeconds = $param["RemainSeconds"];
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("Manufacturer",$param) and $param["Manufacturer"] !== null) {
            $this->Manufacturer = $param["Manufacturer"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
