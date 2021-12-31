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
 * 资源信息
 *
 * @method string getResourceId() 获取资源Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceId(string $ResourceId) 设置资源Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceName() 获取资源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceName(string $ResourceName) 设置资源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取资源状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置资源状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVip() 获取资源IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVip(string $Vip) 设置资源IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取资源所属Vpc
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置资源所属Vpc
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取资源所属子网
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置资源所属子网
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModel() 获取资源所属HSM规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModel(string $Model) 设置资源所属HSM规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVsmType() 获取资源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVsmType(integer $VsmType) 设置资源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRegionId() 获取地域Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionId(integer $RegionId) 设置地域Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getZoneId() 获取区域Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneId(integer $ZoneId) 设置区域Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExpireTime() 获取过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(integer $ExpireTime) 设置过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegionName() 获取地域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionName(string $RegionName) 设置地域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZoneName() 获取区域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneName(string $ZoneName) 设置区域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSgList() 获取实例的安全组列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSgList(array $SgList) 设置实例的安全组列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetName() 获取子网名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetName(string $SubnetName) 设置子网名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getExpired() 获取当前实例是否已经过期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpired(boolean $Expired) 设置当前实例是否已经过期
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRemainSeconds() 获取为正数表示实例距离过期时间还剩余多少秒，为负数表示已经过期多少秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemainSeconds(integer $RemainSeconds) 设置为正数表示实例距离过期时间还剩余多少秒，为负数表示已经过期多少秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcName() 获取Vpc名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcName(string $VpcName) 设置Vpc名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateUin() 获取创建者Uin账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateUin(string $CreateUin) 设置创建者Uin账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRenewFlag() 获取自动续费状态标识， 0-手动续费，1-自动续费，2-到期不续
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRenewFlag(integer $RenewFlag) 设置自动续费状态标识， 0-手动续费，1-自动续费，2-到期不续
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getManufacturer() 获取厂商
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setManufacturer(string $Manufacturer) 设置厂商
注意：此字段可能返回 null，表示取不到有效值。
 */
class ResourceInfo extends AbstractModel
{
    /**
     * @var string 资源Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceId;

    /**
     * @var string 资源名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceName;

    /**
     * @var integer 资源状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 资源IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vip;

    /**
     * @var string 资源所属Vpc
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 资源所属子网
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var string 资源所属HSM规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Model;

    /**
     * @var integer 资源类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VsmType;

    /**
     * @var integer 地域Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionId;

    /**
     * @var integer 区域Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneId;

    /**
     * @var integer 过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

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
     * @var array 实例的安全组列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SgList;

    /**
     * @var string 子网名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetName;

    /**
     * @var boolean 当前实例是否已经过期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Expired;

    /**
     * @var integer 为正数表示实例距离过期时间还剩余多少秒，为负数表示已经过期多少秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RemainSeconds;

    /**
     * @var string Vpc名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcName;

    /**
     * @var string 创建者Uin账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateUin;

    /**
     * @var integer 自动续费状态标识， 0-手动续费，1-自动续费，2-到期不续
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RenewFlag;

    /**
     * @var array 标签列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 厂商
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Manufacturer;

    /**
     * @param string $ResourceId 资源Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceName 资源名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 资源状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Vip 资源IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId 资源所属Vpc
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 资源所属子网
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Model 资源所属HSM规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VsmType 资源类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RegionId 地域Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ZoneId 区域Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExpireTime 过期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegionName 地域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ZoneName 区域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SgList 实例的安全组列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetName 子网名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Expired 当前实例是否已经过期
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RemainSeconds 为正数表示实例距离过期时间还剩余多少秒，为负数表示已经过期多少秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcName Vpc名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateUin 创建者Uin账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RenewFlag 自动续费状态标识， 0-手动续费，1-自动续费，2-到期不续
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 标签列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Manufacturer 厂商
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

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("SgList",$param) and $param["SgList"] !== null) {
            $this->SgList = [];
            foreach ($param["SgList"] as $key => $value){
                $obj = new SgUnit();
                $obj->deserialize($value);
                array_push($this->SgList, $obj);
            }
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
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

        if (array_key_exists("CreateUin",$param) and $param["CreateUin"] !== null) {
            $this->CreateUin = $param["CreateUin"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Manufacturer",$param) and $param["Manufacturer"] !== null) {
            $this->Manufacturer = $param["Manufacturer"];
        }
    }
}
