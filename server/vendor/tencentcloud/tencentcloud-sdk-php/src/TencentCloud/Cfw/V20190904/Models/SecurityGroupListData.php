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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全组列表数据
 *
 * @method integer getId() 获取规则ID
 * @method void setId(integer $Id) 设置规则ID
 * @method integer getOrderIndex() 获取执行顺序
 * @method void setOrderIndex(integer $OrderIndex) 设置执行顺序
 * @method string getSourceId() 获取访问源
 * @method void setSourceId(string $SourceId) 设置访问源
 * @method integer getSourceType() 获取访问源类型，默认为0，1: VPC, 2: SUBNET, 3: CVM, 4: CLB, 5: ENI, 6: CDB
 * @method void setSourceType(integer $SourceType) 设置访问源类型，默认为0，1: VPC, 2: SUBNET, 3: CVM, 4: CLB, 5: ENI, 6: CDB
 * @method string getTargetId() 获取访问目的
 * @method void setTargetId(string $TargetId) 设置访问目的
 * @method integer getTargetType() 获取访问目的类型，默认为0，1: VPC, 2: SUBNET, 3: CVM, 4: CLB, 5: ENI, 6: CDB
 * @method void setTargetType(integer $TargetType) 设置访问目的类型，默认为0，1: VPC, 2: SUBNET, 3: CVM, 4: CLB, 5: ENI, 6: CDB
 * @method string getProtocol() 获取协议
 * @method void setProtocol(string $Protocol) 设置协议
 * @method string getPort() 获取目的端口
 * @method void setPort(string $Port) 设置目的端口
 * @method integer getStrategy() 获取策略, 1：阻断，2：放行
 * @method void setStrategy(integer $Strategy) 设置策略, 1：阻断，2：放行
 * @method string getDetail() 获取描述
 * @method void setDetail(string $Detail) 设置描述
 * @method integer getStatus() 获取是否开关开启，0：未开启，1：开启
 * @method void setStatus(integer $Status) 设置是否开关开启，0：未开启，1：开启
 * @method integer getIsNew() 获取是否是正常规则，0：正常，1：异常
 * @method void setIsNew(integer $IsNew) 设置是否是正常规则，0：正常，1：异常
 * @method integer getBothWay() 获取单/双向下发，0:单向下发，1：双向下发
 * @method void setBothWay(integer $BothWay) 设置单/双向下发，0:单向下发，1：双向下发
 * @method string getVpcId() 获取私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublicIp() 获取公网IP，多个以英文逗号分隔
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicIp(string $PublicIp) 设置公网IP，多个以英文逗号分隔
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrivateIp() 获取内网IP，多个以英文逗号分隔
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivateIp(string $PrivateIp) 设置内网IP，多个以英文逗号分隔
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCidr() 获取掩码地址，多个以英文逗号分隔
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCidr(string $Cidr) 设置掩码地址，多个以英文逗号分隔
注意：此字段可能返回 null，表示取不到有效值。
 */
class SecurityGroupListData extends AbstractModel
{
    /**
     * @var integer 规则ID
     */
    public $Id;

    /**
     * @var integer 执行顺序
     */
    public $OrderIndex;

    /**
     * @var string 访问源
     */
    public $SourceId;

    /**
     * @var integer 访问源类型，默认为0，1: VPC, 2: SUBNET, 3: CVM, 4: CLB, 5: ENI, 6: CDB
     */
    public $SourceType;

    /**
     * @var string 访问目的
     */
    public $TargetId;

    /**
     * @var integer 访问目的类型，默认为0，1: VPC, 2: SUBNET, 3: CVM, 4: CLB, 5: ENI, 6: CDB
     */
    public $TargetType;

    /**
     * @var string 协议
     */
    public $Protocol;

    /**
     * @var string 目的端口
     */
    public $Port;

    /**
     * @var integer 策略, 1：阻断，2：放行
     */
    public $Strategy;

    /**
     * @var string 描述
     */
    public $Detail;

    /**
     * @var integer 是否开关开启，0：未开启，1：开启
     */
    public $Status;

    /**
     * @var integer 是否是正常规则，0：正常，1：异常
     */
    public $IsNew;

    /**
     * @var integer 单/双向下发，0:单向下发，1：双向下发
     */
    public $BothWay;

    /**
     * @var string 私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 子网ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var string 实例名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var string 公网IP，多个以英文逗号分隔
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicIp;

    /**
     * @var string 内网IP，多个以英文逗号分隔
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivateIp;

    /**
     * @var string 掩码地址，多个以英文逗号分隔
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cidr;

    /**
     * @param integer $Id 规则ID
     * @param integer $OrderIndex 执行顺序
     * @param string $SourceId 访问源
     * @param integer $SourceType 访问源类型，默认为0，1: VPC, 2: SUBNET, 3: CVM, 4: CLB, 5: ENI, 6: CDB
     * @param string $TargetId 访问目的
     * @param integer $TargetType 访问目的类型，默认为0，1: VPC, 2: SUBNET, 3: CVM, 4: CLB, 5: ENI, 6: CDB
     * @param string $Protocol 协议
     * @param string $Port 目的端口
     * @param integer $Strategy 策略, 1：阻断，2：放行
     * @param string $Detail 描述
     * @param integer $Status 是否开关开启，0：未开启，1：开启
     * @param integer $IsNew 是否是正常规则，0：正常，1：异常
     * @param integer $BothWay 单/双向下发，0:单向下发，1：双向下发
     * @param string $VpcId 私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 子网ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName 实例名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublicIp 公网IP，多个以英文逗号分隔
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PrivateIp 内网IP，多个以英文逗号分隔
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Cidr 掩码地址，多个以英文逗号分隔
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("OrderIndex",$param) and $param["OrderIndex"] !== null) {
            $this->OrderIndex = $param["OrderIndex"];
        }

        if (array_key_exists("SourceId",$param) and $param["SourceId"] !== null) {
            $this->SourceId = $param["SourceId"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("TargetId",$param) and $param["TargetId"] !== null) {
            $this->TargetId = $param["TargetId"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = $param["Strategy"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsNew",$param) and $param["IsNew"] !== null) {
            $this->IsNew = $param["IsNew"];
        }

        if (array_key_exists("BothWay",$param) and $param["BothWay"] !== null) {
            $this->BothWay = $param["BothWay"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("Cidr",$param) and $param["Cidr"] !== null) {
            $this->Cidr = $param["Cidr"];
        }
    }
}
