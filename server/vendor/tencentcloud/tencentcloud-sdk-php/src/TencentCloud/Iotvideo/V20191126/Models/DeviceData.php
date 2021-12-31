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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备信息
 *
 * @method string getTid() 获取设备TID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTid(string $Tid) 设置设备TID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getActiveTime() 获取激活时间 0代表未激活
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActiveTime(integer $ActiveTime) 设置激活时间 0代表未激活
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDisabled() 获取设备是否被禁用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisabled(boolean $Disabled) 设置设备是否被禁用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOtaVersion() 获取固件版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOtaVersion(string $OtaVersion) 设置固件版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOnline() 获取设备在线状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOnline(integer $Online) 设置设备在线状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLastOnlineTime() 获取设备最后上线时间（mqtt连接成功时间），UNIX时间戳，单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastOnlineTime(integer $LastOnlineTime) 设置设备最后上线时间（mqtt连接成功时间），UNIX时间戳，单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIotModel() 获取物模型json数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIotModel(string $IotModel) 设置物模型json数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeviceName() 获取设备名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceName(string $DeviceName) 设置设备名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductId() 获取产品ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductId(string $ProductId) 设置产品ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCertificate() 获取设备初始证书信息，base64编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertificate(string $Certificate) 设置设备初始证书信息，base64编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWhiteBoxSoUrl() 获取设备私钥下载地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWhiteBoxSoUrl(string $WhiteBoxSoUrl) 设置设备私钥下载地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getStreamStatus() 获取设备推流状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStreamStatus(boolean $StreamStatus) 设置设备推流状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class DeviceData extends AbstractModel
{
    /**
     * @var string 设备TID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tid;

    /**
     * @var integer 激活时间 0代表未激活
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActiveTime;

    /**
     * @var boolean 设备是否被禁用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Disabled;

    /**
     * @var string 固件版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OtaVersion;

    /**
     * @var integer 设备在线状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Online;

    /**
     * @var integer 设备最后上线时间（mqtt连接成功时间），UNIX时间戳，单位秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastOnlineTime;

    /**
     * @var string 物模型json数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IotModel;

    /**
     * @var string 设备名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceName;

    /**
     * @var string 产品ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductId;

    /**
     * @var string 设备初始证书信息，base64编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Certificate;

    /**
     * @var string 设备私钥下载地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WhiteBoxSoUrl;

    /**
     * @var boolean 设备推流状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StreamStatus;

    /**
     * @param string $Tid 设备TID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ActiveTime 激活时间 0代表未激活
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Disabled 设备是否被禁用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OtaVersion 固件版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Online 设备在线状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LastOnlineTime 设备最后上线时间（mqtt连接成功时间），UNIX时间戳，单位秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IotModel 物模型json数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeviceName 设备名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductId 产品ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Certificate 设备初始证书信息，base64编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WhiteBoxSoUrl 设备私钥下载地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $StreamStatus 设备推流状态
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
        if (array_key_exists("Tid",$param) and $param["Tid"] !== null) {
            $this->Tid = $param["Tid"];
        }

        if (array_key_exists("ActiveTime",$param) and $param["ActiveTime"] !== null) {
            $this->ActiveTime = $param["ActiveTime"];
        }

        if (array_key_exists("Disabled",$param) and $param["Disabled"] !== null) {
            $this->Disabled = $param["Disabled"];
        }

        if (array_key_exists("OtaVersion",$param) and $param["OtaVersion"] !== null) {
            $this->OtaVersion = $param["OtaVersion"];
        }

        if (array_key_exists("Online",$param) and $param["Online"] !== null) {
            $this->Online = $param["Online"];
        }

        if (array_key_exists("LastOnlineTime",$param) and $param["LastOnlineTime"] !== null) {
            $this->LastOnlineTime = $param["LastOnlineTime"];
        }

        if (array_key_exists("IotModel",$param) and $param["IotModel"] !== null) {
            $this->IotModel = $param["IotModel"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
            $this->Certificate = $param["Certificate"];
        }

        if (array_key_exists("WhiteBoxSoUrl",$param) and $param["WhiteBoxSoUrl"] !== null) {
            $this->WhiteBoxSoUrl = $param["WhiteBoxSoUrl"];
        }

        if (array_key_exists("StreamStatus",$param) and $param["StreamStatus"] !== null) {
            $this->StreamStatus = $param["StreamStatus"];
        }
    }
}
