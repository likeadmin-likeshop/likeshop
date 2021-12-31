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
 * UpgradeDevice请求参数结构体
 *
 * @method string getTid() 获取设备TID
 * @method void setTid(string $Tid) 设置设备TID
 * @method string getOtaVersion() 获取固件版本号
 * @method void setOtaVersion(string $OtaVersion) 设置固件版本号
 * @method boolean getUpgradeNow() 获取是否立即升级
 * @method void setUpgradeNow(boolean $UpgradeNow) 设置是否立即升级
 */
class UpgradeDeviceRequest extends AbstractModel
{
    /**
     * @var string 设备TID
     */
    public $Tid;

    /**
     * @var string 固件版本号
     */
    public $OtaVersion;

    /**
     * @var boolean 是否立即升级
     */
    public $UpgradeNow;

    /**
     * @param string $Tid 设备TID
     * @param string $OtaVersion 固件版本号
     * @param boolean $UpgradeNow 是否立即升级
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

        if (array_key_exists("OtaVersion",$param) and $param["OtaVersion"] !== null) {
            $this->OtaVersion = $param["OtaVersion"];
        }

        if (array_key_exists("UpgradeNow",$param) and $param["UpgradeNow"] !== null) {
            $this->UpgradeNow = $param["UpgradeNow"];
        }
    }
}
