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
namespace TencentCloud\Bmeip\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Eip信息
 *
 * @method string getEipId() 获取EIP实例ID
 * @method void setEipId(string $EipId) 设置EIP实例ID
 * @method string getEipName() 获取EIP名称
 * @method void setEipName(string $EipName) 设置EIP名称
 * @method string getEip() 获取EIP地址
 * @method void setEip(string $Eip) 设置EIP地址
 * @method integer getIspId() 获取运营商ID 0：电信； 1：联通； 2：移动； 3：教育网； 4：盈科； 5：BGP； 6：中国香港
 * @method void setIspId(integer $IspId) 设置运营商ID 0：电信； 1：联通； 2：移动； 3：教育网； 4：盈科； 5：BGP； 6：中国香港
 * @method integer getStatus() 获取状态 0：创建中； 1：绑定中； 2：已绑定； 3：解绑中； 4：未绑定； 6：下线中； 9：创建失败
 * @method void setStatus(integer $Status) 设置状态 0：创建中； 1：绑定中； 2：已绑定； 3：解绑中； 4：未绑定； 6：下线中； 9：创建失败
 * @method integer getArrears() 获取是否欠费隔离 1： 欠费隔离； 0： 正常。处在欠费隔离情况下的EIP不能进行任何管理操作。
 * @method void setArrears(integer $Arrears) 设置是否欠费隔离 1： 欠费隔离； 0： 正常。处在欠费隔离情况下的EIP不能进行任何管理操作。
 * @method string getInstanceId() 获取EIP所绑定的服务器实例ID，未绑定则为空
 * @method void setInstanceId(string $InstanceId) 设置EIP所绑定的服务器实例ID，未绑定则为空
 * @method string getInstanceAlias() 获取服务器别名
 * @method void setInstanceAlias(string $InstanceAlias) 设置服务器别名
 * @method string getFreeAt() 获取EIP解绑时间
 * @method void setFreeAt(string $FreeAt) 设置EIP解绑时间
 * @method string getCreatedAt() 获取EIP创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置EIP创建时间
 * @method string getUpdatedAt() 获取EIP更新时间
 * @method void setUpdatedAt(string $UpdatedAt) 设置EIP更新时间
 * @method integer getFreeSecond() 获取EIP未绑定服务器时长（单位：秒）
 * @method void setFreeSecond(integer $FreeSecond) 设置EIP未绑定服务器时长（单位：秒）
 * @method integer getType() 获取EIP所绑定的资源类型，-1：未绑定资源；0：黑石物理机，字段对应unInstanceId；1：Nat网关，字段对应natUid；2：云服务器字段对应vpcIp; 3: 托管机器，字段对应HInstanceId, HInstanceAlias
 * @method void setType(integer $Type) 设置EIP所绑定的资源类型，-1：未绑定资源；0：黑石物理机，字段对应unInstanceId；1：Nat网关，字段对应natUid；2：云服务器字段对应vpcIp; 3: 托管机器，字段对应HInstanceId, HInstanceAlias
 * @method string getPayMode() 获取EIP计费模式，"flow"：流量计费； "bandwidth"：带宽计费
 * @method void setPayMode(string $PayMode) 设置EIP计费模式，"flow"：流量计费； "bandwidth"：带宽计费
 * @method integer getBandwidth() 获取EIP带宽计费模式下的带宽上限（单位：MB）
 * @method void setBandwidth(integer $Bandwidth) 设置EIP带宽计费模式下的带宽上限（单位：MB）
 * @method string getLatestPayMode() 获取最近一次操作变更的EIP计费模式，"flow"：流量计费； "bandwidth"：带宽计费
 * @method void setLatestPayMode(string $LatestPayMode) 设置最近一次操作变更的EIP计费模式，"flow"：流量计费； "bandwidth"：带宽计费
 * @method integer getLatestBandwidth() 获取最近一次操作变更的EIP计费模式对应的带宽上限值，仅在带宽计费模式下有效（单位：MB）
 * @method void setLatestBandwidth(integer $LatestBandwidth) 设置最近一次操作变更的EIP计费模式对应的带宽上限值，仅在带宽计费模式下有效（单位：MB）
 * @method string getVpcName() 获取私有网络名称
 * @method void setVpcName(string $VpcName) 设置私有网络名称
 * @method integer getNatId() 获取EIP所绑定的NAT网关的数字ID，形如：1001,，未绑定则为空
 * @method void setNatId(integer $NatId) 设置EIP所绑定的NAT网关的数字ID，形如：1001,，未绑定则为空
 * @method string getNatUid() 获取EIP所绑定的NAT网关实例ID，形如："nat-n47xxxxx"，未绑定则为空
 * @method void setNatUid(string $NatUid) 设置EIP所绑定的NAT网关实例ID，形如："nat-n47xxxxx"，未绑定则为空
 * @method string getVpcIp() 获取EIP所绑定的云服务器IP(托管或者云服务器的IP），形如："10.1.1.3"。 注意：IP资源需要通过bmvpc模块注册或者申请后才可以绑定eip，接口使用申请子网IP和注册子网IP：,未绑定则为空
 * @method void setVpcIp(string $VpcIp) 设置EIP所绑定的云服务器IP(托管或者云服务器的IP），形如："10.1.1.3"。 注意：IP资源需要通过bmvpc模块注册或者申请后才可以绑定eip，接口使用申请子网IP和注册子网IP：,未绑定则为空
 * @method string getVpcId() 获取私有网络实例ID
 * @method void setVpcId(string $VpcId) 设置私有网络实例ID
 * @method integer getExclusive() 获取是否为独占类型EIP
 * @method void setExclusive(integer $Exclusive) 设置是否为独占类型EIP
 * @method string getVpcCidr() 获取私有网络的cidr
 * @method void setVpcCidr(string $VpcCidr) 设置私有网络的cidr
 * @method string getAclId() 获取EIP ACL实例ID
 * @method void setAclId(string $AclId) 设置EIP ACL实例ID
 * @method string getAclName() 获取EIP ACL名称
 * @method void setAclName(string $AclName) 设置EIP ACL名称
 * @method string getHInstanceId() 获取托管机器实例ID
 * @method void setHInstanceId(string $HInstanceId) 设置托管机器实例ID
 * @method string getHInstanceAlias() 获取托管机器别名
 * @method void setHInstanceAlias(string $HInstanceAlias) 设置托管机器别名
 */
class EipInfo extends AbstractModel
{
    /**
     * @var string EIP实例ID
     */
    public $EipId;

    /**
     * @var string EIP名称
     */
    public $EipName;

    /**
     * @var string EIP地址
     */
    public $Eip;

    /**
     * @var integer 运营商ID 0：电信； 1：联通； 2：移动； 3：教育网； 4：盈科； 5：BGP； 6：中国香港
     */
    public $IspId;

    /**
     * @var integer 状态 0：创建中； 1：绑定中； 2：已绑定； 3：解绑中； 4：未绑定； 6：下线中； 9：创建失败
     */
    public $Status;

    /**
     * @var integer 是否欠费隔离 1： 欠费隔离； 0： 正常。处在欠费隔离情况下的EIP不能进行任何管理操作。
     */
    public $Arrears;

    /**
     * @var string EIP所绑定的服务器实例ID，未绑定则为空
     */
    public $InstanceId;

    /**
     * @var string 服务器别名
     */
    public $InstanceAlias;

    /**
     * @var string EIP解绑时间
     */
    public $FreeAt;

    /**
     * @var string EIP创建时间
     */
    public $CreatedAt;

    /**
     * @var string EIP更新时间
     */
    public $UpdatedAt;

    /**
     * @var integer EIP未绑定服务器时长（单位：秒）
     */
    public $FreeSecond;

    /**
     * @var integer EIP所绑定的资源类型，-1：未绑定资源；0：黑石物理机，字段对应unInstanceId；1：Nat网关，字段对应natUid；2：云服务器字段对应vpcIp; 3: 托管机器，字段对应HInstanceId, HInstanceAlias
     */
    public $Type;

    /**
     * @var string EIP计费模式，"flow"：流量计费； "bandwidth"：带宽计费
     */
    public $PayMode;

    /**
     * @var integer EIP带宽计费模式下的带宽上限（单位：MB）
     */
    public $Bandwidth;

    /**
     * @var string 最近一次操作变更的EIP计费模式，"flow"：流量计费； "bandwidth"：带宽计费
     */
    public $LatestPayMode;

    /**
     * @var integer 最近一次操作变更的EIP计费模式对应的带宽上限值，仅在带宽计费模式下有效（单位：MB）
     */
    public $LatestBandwidth;

    /**
     * @var string 私有网络名称
     */
    public $VpcName;

    /**
     * @var integer EIP所绑定的NAT网关的数字ID，形如：1001,，未绑定则为空
     */
    public $NatId;

    /**
     * @var string EIP所绑定的NAT网关实例ID，形如："nat-n47xxxxx"，未绑定则为空
     */
    public $NatUid;

    /**
     * @var string EIP所绑定的云服务器IP(托管或者云服务器的IP），形如："10.1.1.3"。 注意：IP资源需要通过bmvpc模块注册或者申请后才可以绑定eip，接口使用申请子网IP和注册子网IP：,未绑定则为空
     */
    public $VpcIp;

    /**
     * @var string 私有网络实例ID
     */
    public $VpcId;

    /**
     * @var integer 是否为独占类型EIP
     */
    public $Exclusive;

    /**
     * @var string 私有网络的cidr
     */
    public $VpcCidr;

    /**
     * @var string EIP ACL实例ID
     */
    public $AclId;

    /**
     * @var string EIP ACL名称
     */
    public $AclName;

    /**
     * @var string 托管机器实例ID
     */
    public $HInstanceId;

    /**
     * @var string 托管机器别名
     */
    public $HInstanceAlias;

    /**
     * @param string $EipId EIP实例ID
     * @param string $EipName EIP名称
     * @param string $Eip EIP地址
     * @param integer $IspId 运营商ID 0：电信； 1：联通； 2：移动； 3：教育网； 4：盈科； 5：BGP； 6：中国香港
     * @param integer $Status 状态 0：创建中； 1：绑定中； 2：已绑定； 3：解绑中； 4：未绑定； 6：下线中； 9：创建失败
     * @param integer $Arrears 是否欠费隔离 1： 欠费隔离； 0： 正常。处在欠费隔离情况下的EIP不能进行任何管理操作。
     * @param string $InstanceId EIP所绑定的服务器实例ID，未绑定则为空
     * @param string $InstanceAlias 服务器别名
     * @param string $FreeAt EIP解绑时间
     * @param string $CreatedAt EIP创建时间
     * @param string $UpdatedAt EIP更新时间
     * @param integer $FreeSecond EIP未绑定服务器时长（单位：秒）
     * @param integer $Type EIP所绑定的资源类型，-1：未绑定资源；0：黑石物理机，字段对应unInstanceId；1：Nat网关，字段对应natUid；2：云服务器字段对应vpcIp; 3: 托管机器，字段对应HInstanceId, HInstanceAlias
     * @param string $PayMode EIP计费模式，"flow"：流量计费； "bandwidth"：带宽计费
     * @param integer $Bandwidth EIP带宽计费模式下的带宽上限（单位：MB）
     * @param string $LatestPayMode 最近一次操作变更的EIP计费模式，"flow"：流量计费； "bandwidth"：带宽计费
     * @param integer $LatestBandwidth 最近一次操作变更的EIP计费模式对应的带宽上限值，仅在带宽计费模式下有效（单位：MB）
     * @param string $VpcName 私有网络名称
     * @param integer $NatId EIP所绑定的NAT网关的数字ID，形如：1001,，未绑定则为空
     * @param string $NatUid EIP所绑定的NAT网关实例ID，形如："nat-n47xxxxx"，未绑定则为空
     * @param string $VpcIp EIP所绑定的云服务器IP(托管或者云服务器的IP），形如："10.1.1.3"。 注意：IP资源需要通过bmvpc模块注册或者申请后才可以绑定eip，接口使用申请子网IP和注册子网IP：,未绑定则为空
     * @param string $VpcId 私有网络实例ID
     * @param integer $Exclusive 是否为独占类型EIP
     * @param string $VpcCidr 私有网络的cidr
     * @param string $AclId EIP ACL实例ID
     * @param string $AclName EIP ACL名称
     * @param string $HInstanceId 托管机器实例ID
     * @param string $HInstanceAlias 托管机器别名
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
        if (array_key_exists("EipId",$param) and $param["EipId"] !== null) {
            $this->EipId = $param["EipId"];
        }

        if (array_key_exists("EipName",$param) and $param["EipName"] !== null) {
            $this->EipName = $param["EipName"];
        }

        if (array_key_exists("Eip",$param) and $param["Eip"] !== null) {
            $this->Eip = $param["Eip"];
        }

        if (array_key_exists("IspId",$param) and $param["IspId"] !== null) {
            $this->IspId = $param["IspId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Arrears",$param) and $param["Arrears"] !== null) {
            $this->Arrears = $param["Arrears"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceAlias",$param) and $param["InstanceAlias"] !== null) {
            $this->InstanceAlias = $param["InstanceAlias"];
        }

        if (array_key_exists("FreeAt",$param) and $param["FreeAt"] !== null) {
            $this->FreeAt = $param["FreeAt"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("FreeSecond",$param) and $param["FreeSecond"] !== null) {
            $this->FreeSecond = $param["FreeSecond"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("LatestPayMode",$param) and $param["LatestPayMode"] !== null) {
            $this->LatestPayMode = $param["LatestPayMode"];
        }

        if (array_key_exists("LatestBandwidth",$param) and $param["LatestBandwidth"] !== null) {
            $this->LatestBandwidth = $param["LatestBandwidth"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("NatId",$param) and $param["NatId"] !== null) {
            $this->NatId = $param["NatId"];
        }

        if (array_key_exists("NatUid",$param) and $param["NatUid"] !== null) {
            $this->NatUid = $param["NatUid"];
        }

        if (array_key_exists("VpcIp",$param) and $param["VpcIp"] !== null) {
            $this->VpcIp = $param["VpcIp"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Exclusive",$param) and $param["Exclusive"] !== null) {
            $this->Exclusive = $param["Exclusive"];
        }

        if (array_key_exists("VpcCidr",$param) and $param["VpcCidr"] !== null) {
            $this->VpcCidr = $param["VpcCidr"];
        }

        if (array_key_exists("AclId",$param) and $param["AclId"] !== null) {
            $this->AclId = $param["AclId"];
        }

        if (array_key_exists("AclName",$param) and $param["AclName"] !== null) {
            $this->AclName = $param["AclName"];
        }

        if (array_key_exists("HInstanceId",$param) and $param["HInstanceId"] !== null) {
            $this->HInstanceId = $param["HInstanceId"];
        }

        if (array_key_exists("HInstanceAlias",$param) and $param["HInstanceAlias"] !== null) {
            $this->HInstanceAlias = $param["HInstanceAlias"];
        }
    }
}
