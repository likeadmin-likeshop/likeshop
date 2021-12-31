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
namespace TencentCloud\Dc\V20180410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 互联网地址详细信息
 *
 * @method string getInstanceId() 获取互联网地址ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置互联网地址ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnet() 获取互联网网络地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnet(string $Subnet) 设置互联网网络地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaskLen() 获取网络地址掩码长度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaskLen(integer $MaskLen) 设置网络地址掩码长度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAddrType() 获取0:BGP
1:电信
2:移动
3:联通
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddrType(integer $AddrType) 设置0:BGP
1:电信
2:移动
3:联通
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取0:使用中
1:已停用
2:已退还
 * @method void setStatus(integer $Status) 设置0:使用中
1:已停用
2:已退还
 * @method string getApplyTime() 获取申请时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplyTime(string $ApplyTime) 设置申请时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStopTime() 获取停用时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStopTime(string $StopTime) 设置停用时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReleaseTime() 获取退还时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReleaseTime(string $ReleaseTime) 设置退还时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取地域信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置地域信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppId() 获取用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAddrProto() 获取0:IPv4 1:IPv6
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddrProto(integer $AddrProto) 设置0:IPv4 1:IPv6
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReserveTime() 获取释放状态的IP地址保留的天数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReserveTime(integer $ReserveTime) 设置释放状态的IP地址保留的天数
注意：此字段可能返回 null，表示取不到有效值。
 */
class InternetAddressDetail extends AbstractModel
{
    /**
     * @var string 互联网地址ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 互联网网络地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Subnet;

    /**
     * @var integer 网络地址掩码长度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaskLen;

    /**
     * @var integer 0:BGP
1:电信
2:移动
3:联通
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AddrType;

    /**
     * @var integer 0:使用中
1:已停用
2:已退还
     */
    public $Status;

    /**
     * @var string 申请时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplyTime;

    /**
     * @var string 停用时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StopTime;

    /**
     * @var string 退还时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReleaseTime;

    /**
     * @var string 地域信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var integer 用户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var integer 0:IPv4 1:IPv6
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AddrProto;

    /**
     * @var integer 释放状态的IP地址保留的天数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReserveTime;

    /**
     * @param string $InstanceId 互联网地址ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Subnet 互联网网络地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaskLen 网络地址掩码长度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AddrType 0:BGP
1:电信
2:移动
3:联通
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 0:使用中
1:已停用
2:已退还
     * @param string $ApplyTime 申请时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StopTime 停用时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReleaseTime 退还时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 地域信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId 用户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AddrProto 0:IPv4 1:IPv6
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReserveTime 释放状态的IP地址保留的天数
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Subnet",$param) and $param["Subnet"] !== null) {
            $this->Subnet = $param["Subnet"];
        }

        if (array_key_exists("MaskLen",$param) and $param["MaskLen"] !== null) {
            $this->MaskLen = $param["MaskLen"];
        }

        if (array_key_exists("AddrType",$param) and $param["AddrType"] !== null) {
            $this->AddrType = $param["AddrType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ApplyTime",$param) and $param["ApplyTime"] !== null) {
            $this->ApplyTime = $param["ApplyTime"];
        }

        if (array_key_exists("StopTime",$param) and $param["StopTime"] !== null) {
            $this->StopTime = $param["StopTime"];
        }

        if (array_key_exists("ReleaseTime",$param) and $param["ReleaseTime"] !== null) {
            $this->ReleaseTime = $param["ReleaseTime"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AddrProto",$param) and $param["AddrProto"] !== null) {
            $this->AddrProto = $param["AddrProto"];
        }

        if (array_key_exists("ReserveTime",$param) and $param["ReserveTime"] !== null) {
            $this->ReserveTime = $param["ReserveTime"];
        }
    }
}
