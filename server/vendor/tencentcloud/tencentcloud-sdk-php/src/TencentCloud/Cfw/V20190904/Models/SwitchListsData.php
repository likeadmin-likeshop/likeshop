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
 * 防火墙开关列表对象
 *
 * @method string getPublicIp() 获取公网IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicIp(string $PublicIp) 设置公网IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIntranetIp() 获取内网IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntranetIp(string $IntranetIp) 设置内网IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取实例名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置实例名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetType() 获取资产类型
 * @method void setAssetType(string $AssetType) 设置资产类型
 * @method string getArea() 获取地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setArea(string $Area) 设置地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSwitch() 获取防火墙开关
 * @method void setSwitch(integer $Switch) 设置防火墙开关
 * @method integer getId() 获取id值
 * @method void setId(integer $Id) 设置id值
 * @method integer getPublicIpType() 获取公网 IP 类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicIpType(integer $PublicIpType) 设置公网 IP 类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPortTimes() 获取风险端口数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPortTimes(integer $PortTimes) 设置风险端口数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastTime() 获取最近扫描时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastTime(string $LastTime) 设置最近扫描时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScanMode() 获取扫描深度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanMode(string $ScanMode) 设置扫描深度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScanStatus() 获取扫描状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanStatus(integer $ScanStatus) 设置扫描状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class SwitchListsData extends AbstractModel
{
    /**
     * @var string 公网IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicIp;

    /**
     * @var string 内网IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntranetIp;

    /**
     * @var string 实例名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var string 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 资产类型
     */
    public $AssetType;

    /**
     * @var string 地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Area;

    /**
     * @var integer 防火墙开关
     */
    public $Switch;

    /**
     * @var integer id值
     */
    public $Id;

    /**
     * @var integer 公网 IP 类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicIpType;

    /**
     * @var integer 风险端口数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PortTimes;

    /**
     * @var string 最近扫描时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastTime;

    /**
     * @var string 扫描深度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanMode;

    /**
     * @var integer 扫描状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanStatus;

    /**
     * @param string $PublicIp 公网IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IntranetIp 内网IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName 实例名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetType 资产类型
     * @param string $Area 地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Switch 防火墙开关
     * @param integer $Id id值
     * @param integer $PublicIpType 公网 IP 类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PortTimes 风险端口数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastTime 最近扫描时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScanMode 扫描深度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScanStatus 扫描状态
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
        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("IntranetIp",$param) and $param["IntranetIp"] !== null) {
            $this->IntranetIp = $param["IntranetIp"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("PublicIpType",$param) and $param["PublicIpType"] !== null) {
            $this->PublicIpType = $param["PublicIpType"];
        }

        if (array_key_exists("PortTimes",$param) and $param["PortTimes"] !== null) {
            $this->PortTimes = $param["PortTimes"];
        }

        if (array_key_exists("LastTime",$param) and $param["LastTime"] !== null) {
            $this->LastTime = $param["LastTime"];
        }

        if (array_key_exists("ScanMode",$param) and $param["ScanMode"] !== null) {
            $this->ScanMode = $param["ScanMode"];
        }

        if (array_key_exists("ScanStatus",$param) and $param["ScanStatus"] !== null) {
            $this->ScanStatus = $param["ScanStatus"];
        }
    }
}
