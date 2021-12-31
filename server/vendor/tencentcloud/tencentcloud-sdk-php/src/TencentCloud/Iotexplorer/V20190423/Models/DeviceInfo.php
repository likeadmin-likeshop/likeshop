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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备详细信息
 *
 * @method string getDeviceName() 获取设备名
 * @method void setDeviceName(string $DeviceName) 设置设备名
 * @method integer getStatus() 获取0: 离线, 1: 在线, 2: 获取失败, 3 未激活
 * @method void setStatus(integer $Status) 设置0: 离线, 1: 在线, 2: 获取失败, 3 未激活
 * @method string getDevicePsk() 获取设备密钥，密钥加密的设备返回
 * @method void setDevicePsk(string $DevicePsk) 设置设备密钥，密钥加密的设备返回
 * @method integer getFirstOnlineTime() 获取首次上线时间
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstOnlineTime(integer $FirstOnlineTime) 设置首次上线时间
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLoginTime() 获取最后一次上线时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoginTime(integer $LoginTime) 设置最后一次上线时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取设备创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置设备创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取设备固件版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置设备固件版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeviceCert() 获取设备证书
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceCert(string $DeviceCert) 设置设备证书
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLogLevel() 获取日志级别
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogLevel(integer $LogLevel) 设置日志级别
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDevAddr() 获取LoRaWAN 设备地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDevAddr(string $DevAddr) 设置LoRaWAN 设备地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppKey() 获取LoRaWAN 应用密钥
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppKey(string $AppKey) 设置LoRaWAN 应用密钥
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDevEUI() 获取LoRaWAN 设备唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDevEUI(string $DevEUI) 设置LoRaWAN 设备唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppSKey() 获取LoRaWAN 应用会话密钥
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppSKey(string $AppSKey) 设置LoRaWAN 应用会话密钥
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNwkSKey() 获取LoRaWAN 网络会话密钥
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNwkSKey(string $NwkSKey) 设置LoRaWAN 网络会话密钥
注意：此字段可能返回 null，表示取不到有效值。
 */
class DeviceInfo extends AbstractModel
{
    /**
     * @var string 设备名
     */
    public $DeviceName;

    /**
     * @var integer 0: 离线, 1: 在线, 2: 获取失败, 3 未激活
     */
    public $Status;

    /**
     * @var string 设备密钥，密钥加密的设备返回
     */
    public $DevicePsk;

    /**
     * @var integer 首次上线时间
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstOnlineTime;

    /**
     * @var integer 最后一次上线时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoginTime;

    /**
     * @var integer 设备创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 设备固件版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var string 设备证书
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceCert;

    /**
     * @var integer 日志级别
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogLevel;

    /**
     * @var string LoRaWAN 设备地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DevAddr;

    /**
     * @var string LoRaWAN 应用密钥
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppKey;

    /**
     * @var string LoRaWAN 设备唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DevEUI;

    /**
     * @var string LoRaWAN 应用会话密钥
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppSKey;

    /**
     * @var string LoRaWAN 网络会话密钥
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NwkSKey;

    /**
     * @param string $DeviceName 设备名
     * @param integer $Status 0: 离线, 1: 在线, 2: 获取失败, 3 未激活
     * @param string $DevicePsk 设备密钥，密钥加密的设备返回
     * @param integer $FirstOnlineTime 首次上线时间
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LoginTime 最后一次上线时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 设备创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version 设备固件版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeviceCert 设备证书
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LogLevel 日志级别
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DevAddr LoRaWAN 设备地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppKey LoRaWAN 应用密钥
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DevEUI LoRaWAN 设备唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppSKey LoRaWAN 应用会话密钥
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NwkSKey LoRaWAN 网络会话密钥
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
        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DevicePsk",$param) and $param["DevicePsk"] !== null) {
            $this->DevicePsk = $param["DevicePsk"];
        }

        if (array_key_exists("FirstOnlineTime",$param) and $param["FirstOnlineTime"] !== null) {
            $this->FirstOnlineTime = $param["FirstOnlineTime"];
        }

        if (array_key_exists("LoginTime",$param) and $param["LoginTime"] !== null) {
            $this->LoginTime = $param["LoginTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("DeviceCert",$param) and $param["DeviceCert"] !== null) {
            $this->DeviceCert = $param["DeviceCert"];
        }

        if (array_key_exists("LogLevel",$param) and $param["LogLevel"] !== null) {
            $this->LogLevel = $param["LogLevel"];
        }

        if (array_key_exists("DevAddr",$param) and $param["DevAddr"] !== null) {
            $this->DevAddr = $param["DevAddr"];
        }

        if (array_key_exists("AppKey",$param) and $param["AppKey"] !== null) {
            $this->AppKey = $param["AppKey"];
        }

        if (array_key_exists("DevEUI",$param) and $param["DevEUI"] !== null) {
            $this->DevEUI = $param["DevEUI"];
        }

        if (array_key_exists("AppSKey",$param) and $param["AppSKey"] !== null) {
            $this->AppSKey = $param["AppSKey"];
        }

        if (array_key_exists("NwkSKey",$param) and $param["NwkSKey"] !== null) {
            $this->NwkSKey = $param["NwkSKey"];
        }
    }
}
