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
 * 设备列表元素所包含的设备基本信息
 *
 * @method string getTid() 获取设备TID
 * @method void setTid(string $Tid) 设置设备TID
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method integer getActiveTime() 获取激活时间 0代表未激活
 * @method void setActiveTime(integer $ActiveTime) 设置激活时间 0代表未激活
 * @method boolean getDisabled() 获取设备是否被禁用
 * @method void setDisabled(boolean $Disabled) 设置设备是否被禁用
 * @method boolean getStreamStatus() 获取设备推流状态
 * @method void setStreamStatus(boolean $StreamStatus) 设置设备推流状态
 * @method string getOtaVersion() 获取固件版本
 * @method void setOtaVersion(string $OtaVersion) 设置固件版本
 * @method integer getOnline() 获取设备在线状态
 * @method void setOnline(integer $Online) 设置设备在线状态
 * @method integer getLastOnlineTime() 获取设备最后上线时间（mqtt连接成功时间），UNIX时间戳，单位秒
 * @method void setLastOnlineTime(integer $LastOnlineTime) 设置设备最后上线时间（mqtt连接成功时间），UNIX时间戳，单位秒
 * @method string getIotModel() 获取物模型json数据
 * @method void setIotModel(string $IotModel) 设置物模型json数据
 * @method integer getLastUpdateTime() 获取设备固件最新更新时间，UNIX时间戳，单位秒
 * @method void setLastUpdateTime(integer $LastUpdateTime) 设置设备固件最新更新时间，UNIX时间戳，单位秒
 */
class DevicesData extends AbstractModel
{
    /**
     * @var string 设备TID
     */
    public $Tid;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var integer 激活时间 0代表未激活
     */
    public $ActiveTime;

    /**
     * @var boolean 设备是否被禁用
     */
    public $Disabled;

    /**
     * @var boolean 设备推流状态
     */
    public $StreamStatus;

    /**
     * @var string 固件版本
     */
    public $OtaVersion;

    /**
     * @var integer 设备在线状态
     */
    public $Online;

    /**
     * @var integer 设备最后上线时间（mqtt连接成功时间），UNIX时间戳，单位秒
     */
    public $LastOnlineTime;

    /**
     * @var string 物模型json数据
     */
    public $IotModel;

    /**
     * @var integer 设备固件最新更新时间，UNIX时间戳，单位秒
     */
    public $LastUpdateTime;

    /**
     * @param string $Tid 设备TID
     * @param string $DeviceName 设备名称
     * @param integer $ActiveTime 激活时间 0代表未激活
     * @param boolean $Disabled 设备是否被禁用
     * @param boolean $StreamStatus 设备推流状态
     * @param string $OtaVersion 固件版本
     * @param integer $Online 设备在线状态
     * @param integer $LastOnlineTime 设备最后上线时间（mqtt连接成功时间），UNIX时间戳，单位秒
     * @param string $IotModel 物模型json数据
     * @param integer $LastUpdateTime 设备固件最新更新时间，UNIX时间戳，单位秒
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

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("ActiveTime",$param) and $param["ActiveTime"] !== null) {
            $this->ActiveTime = $param["ActiveTime"];
        }

        if (array_key_exists("Disabled",$param) and $param["Disabled"] !== null) {
            $this->Disabled = $param["Disabled"];
        }

        if (array_key_exists("StreamStatus",$param) and $param["StreamStatus"] !== null) {
            $this->StreamStatus = $param["StreamStatus"];
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

        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
        }
    }
}
