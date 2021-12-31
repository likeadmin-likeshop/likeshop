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
 * NAT详情
 *
 * @method string getNatId() 获取NAT网关ID
 * @method void setNatId(string $NatId) 设置NAT网关ID
 * @method string getNatName() 获取网关名称
 * @method void setNatName(string $NatName) 设置网关名称
 * @method string getVpcId() 获取私有网络ID
 * @method void setVpcId(string $VpcId) 设置私有网络ID
 * @method string getVpcName() 获取私有网络名称
 * @method void setVpcName(string $VpcName) 设置私有网络名称
 * @method integer getProductionStatus() 获取网关创建状态，其中0表示创建中，1表示运行中，2表示创建失败
 * @method void setProductionStatus(integer $ProductionStatus) 设置网关创建状态，其中0表示创建中，1表示运行中，2表示创建失败
 * @method array getEips() 获取EIP列表
 * @method void setEips(array $Eips) 设置EIP列表
 * @method integer getMaxConcurrent() 获取并发连接数规格，取值为1000000, 3000000, 10000000
 * @method void setMaxConcurrent(integer $MaxConcurrent) 设置并发连接数规格，取值为1000000, 3000000, 10000000
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method integer getExclusive() 获取独占标识，其中0表示共享，1表示独占，默认值为0
 * @method void setExclusive(integer $Exclusive) 设置独占标识，其中0表示共享，1表示独占，默认值为0
 * @method integer getForwardMode() 获取转发模式，其中0表示IP方式，1表示网段方式
 * @method void setForwardMode(integer $ForwardMode) 设置转发模式，其中0表示IP方式，1表示网段方式
 * @method string getVpcCidrBlock() 获取私有网络网段
 * @method void setVpcCidrBlock(string $VpcCidrBlock) 设置私有网络网段
 * @method string getType() 获取网关类型，取值为 small，middle，big，分别对应小型、中型、大型
 * @method void setType(string $Type) 设置网关类型，取值为 small，middle，big，分别对应小型、中型、大型
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getState() 获取网关启用状态，1为禁用，0为启用。
 * @method void setState(integer $State) 设置网关启用状态，1为禁用，0为启用。
 * @method integer getIntVpcId() 获取私有网络整型ID
 * @method void setIntVpcId(integer $IntVpcId) 设置私有网络整型ID
 * @method integer getNatResourceId() 获取NAT资源ID
 * @method void setNatResourceId(integer $NatResourceId) 设置NAT资源ID
 */
class NatGatewayInfo extends AbstractModel
{
    /**
     * @var string NAT网关ID
     */
    public $NatId;

    /**
     * @var string 网关名称
     */
    public $NatName;

    /**
     * @var string 私有网络ID
     */
    public $VpcId;

    /**
     * @var string 私有网络名称
     */
    public $VpcName;

    /**
     * @var integer 网关创建状态，其中0表示创建中，1表示运行中，2表示创建失败
     */
    public $ProductionStatus;

    /**
     * @var array EIP列表
     */
    public $Eips;

    /**
     * @var integer 并发连接数规格，取值为1000000, 3000000, 10000000
     */
    public $MaxConcurrent;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var integer 独占标识，其中0表示共享，1表示独占，默认值为0
     */
    public $Exclusive;

    /**
     * @var integer 转发模式，其中0表示IP方式，1表示网段方式
     */
    public $ForwardMode;

    /**
     * @var string 私有网络网段
     */
    public $VpcCidrBlock;

    /**
     * @var string 网关类型，取值为 small，middle，big，分别对应小型、中型、大型
     */
    public $Type;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 网关启用状态，1为禁用，0为启用。
     */
    public $State;

    /**
     * @var integer 私有网络整型ID
     */
    public $IntVpcId;

    /**
     * @var integer NAT资源ID
     */
    public $NatResourceId;

    /**
     * @param string $NatId NAT网关ID
     * @param string $NatName 网关名称
     * @param string $VpcId 私有网络ID
     * @param string $VpcName 私有网络名称
     * @param integer $ProductionStatus 网关创建状态，其中0表示创建中，1表示运行中，2表示创建失败
     * @param array $Eips EIP列表
     * @param integer $MaxConcurrent 并发连接数规格，取值为1000000, 3000000, 10000000
     * @param string $Zone 可用区
     * @param integer $Exclusive 独占标识，其中0表示共享，1表示独占，默认值为0
     * @param integer $ForwardMode 转发模式，其中0表示IP方式，1表示网段方式
     * @param string $VpcCidrBlock 私有网络网段
     * @param string $Type 网关类型，取值为 small，middle，big，分别对应小型、中型、大型
     * @param string $CreateTime 创建时间
     * @param integer $State 网关启用状态，1为禁用，0为启用。
     * @param integer $IntVpcId 私有网络整型ID
     * @param integer $NatResourceId NAT资源ID
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
        if (array_key_exists("NatId",$param) and $param["NatId"] !== null) {
            $this->NatId = $param["NatId"];
        }

        if (array_key_exists("NatName",$param) and $param["NatName"] !== null) {
            $this->NatName = $param["NatName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("ProductionStatus",$param) and $param["ProductionStatus"] !== null) {
            $this->ProductionStatus = $param["ProductionStatus"];
        }

        if (array_key_exists("Eips",$param) and $param["Eips"] !== null) {
            $this->Eips = $param["Eips"];
        }

        if (array_key_exists("MaxConcurrent",$param) and $param["MaxConcurrent"] !== null) {
            $this->MaxConcurrent = $param["MaxConcurrent"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Exclusive",$param) and $param["Exclusive"] !== null) {
            $this->Exclusive = $param["Exclusive"];
        }

        if (array_key_exists("ForwardMode",$param) and $param["ForwardMode"] !== null) {
            $this->ForwardMode = $param["ForwardMode"];
        }

        if (array_key_exists("VpcCidrBlock",$param) and $param["VpcCidrBlock"] !== null) {
            $this->VpcCidrBlock = $param["VpcCidrBlock"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("IntVpcId",$param) and $param["IntVpcId"] !== null) {
            $this->IntVpcId = $param["IntVpcId"];
        }

        if (array_key_exists("NatResourceId",$param) and $param["NatResourceId"] !== null) {
            $this->NatResourceId = $param["NatResourceId"];
        }
    }
}
