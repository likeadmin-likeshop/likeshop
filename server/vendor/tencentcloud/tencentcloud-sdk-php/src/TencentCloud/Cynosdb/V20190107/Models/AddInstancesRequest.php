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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddInstances请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method integer getCpu() 获取Cpu核数
 * @method void setCpu(integer $Cpu) 设置Cpu核数
 * @method integer getMemory() 获取内存
 * @method void setMemory(integer $Memory) 设置内存
 * @method integer getReadOnlyCount() 获取新增只读实例数
 * @method void setReadOnlyCount(integer $ReadOnlyCount) 设置新增只读实例数
 * @method string getInstanceGrpId() 获取实例组ID，在已有RO组中新增实例时使用，不传则新增RO组
 * @method void setInstanceGrpId(string $InstanceGrpId) 设置实例组ID，在已有RO组中新增实例时使用，不传则新增RO组
 * @method string getVpcId() 获取所属VPC网络ID
 * @method void setVpcId(string $VpcId) 设置所属VPC网络ID
 * @method string getSubnetId() 获取所属子网ID
 * @method void setSubnetId(string $SubnetId) 设置所属子网ID
 * @method integer getPort() 获取新增RO组时使用的Port
 * @method void setPort(integer $Port) 设置新增RO组时使用的Port
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method integer getAutoVoucher() 获取是否自动选择代金券 1是 0否 默认为0
 * @method void setAutoVoucher(integer $AutoVoucher) 设置是否自动选择代金券 1是 0否 默认为0
 * @method string getDbType() 获取数据库类型，取值范围: 
<li> MYSQL </li>
 * @method void setDbType(string $DbType) 设置数据库类型，取值范围: 
<li> MYSQL </li>
 * @method string getOrderSource() 获取订单来源
 * @method void setOrderSource(string $OrderSource) 设置订单来源
 */
class AddInstancesRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var integer Cpu核数
     */
    public $Cpu;

    /**
     * @var integer 内存
     */
    public $Memory;

    /**
     * @var integer 新增只读实例数
     */
    public $ReadOnlyCount;

    /**
     * @var string 实例组ID，在已有RO组中新增实例时使用，不传则新增RO组
     */
    public $InstanceGrpId;

    /**
     * @var string 所属VPC网络ID
     */
    public $VpcId;

    /**
     * @var string 所属子网ID
     */
    public $SubnetId;

    /**
     * @var integer 新增RO组时使用的Port
     */
    public $Port;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var integer 是否自动选择代金券 1是 0否 默认为0
     */
    public $AutoVoucher;

    /**
     * @var string 数据库类型，取值范围: 
<li> MYSQL </li>
     */
    public $DbType;

    /**
     * @var string 订单来源
     */
    public $OrderSource;

    /**
     * @param string $ClusterId 集群ID
     * @param integer $Cpu Cpu核数
     * @param integer $Memory 内存
     * @param integer $ReadOnlyCount 新增只读实例数
     * @param string $InstanceGrpId 实例组ID，在已有RO组中新增实例时使用，不传则新增RO组
     * @param string $VpcId 所属VPC网络ID
     * @param string $SubnetId 所属子网ID
     * @param integer $Port 新增RO组时使用的Port
     * @param string $InstanceName 实例名称
     * @param integer $AutoVoucher 是否自动选择代金券 1是 0否 默认为0
     * @param string $DbType 数据库类型，取值范围: 
<li> MYSQL </li>
     * @param string $OrderSource 订单来源
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("ReadOnlyCount",$param) and $param["ReadOnlyCount"] !== null) {
            $this->ReadOnlyCount = $param["ReadOnlyCount"];
        }

        if (array_key_exists("InstanceGrpId",$param) and $param["InstanceGrpId"] !== null) {
            $this->InstanceGrpId = $param["InstanceGrpId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("OrderSource",$param) and $param["OrderSource"] !== null) {
            $this->OrderSource = $param["OrderSource"];
        }
    }
}
