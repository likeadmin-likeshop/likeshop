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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OverwriteWhiteBoxDeviceFingerprints请求参数结构体
 *
 * @method string getKeyId() 获取白盒密钥ID
 * @method void setKeyId(string $KeyId) 设置白盒密钥ID
 * @method array getDeviceFingerprints() 获取设备指纹列表，如果列表为空，则表示删除该密钥对应的所有指纹信息。列表最大长度不超过200。
 * @method void setDeviceFingerprints(array $DeviceFingerprints) 设置设备指纹列表，如果列表为空，则表示删除该密钥对应的所有指纹信息。列表最大长度不超过200。
 */
class OverwriteWhiteBoxDeviceFingerprintsRequest extends AbstractModel
{
    /**
     * @var string 白盒密钥ID
     */
    public $KeyId;

    /**
     * @var array 设备指纹列表，如果列表为空，则表示删除该密钥对应的所有指纹信息。列表最大长度不超过200。
     */
    public $DeviceFingerprints;

    /**
     * @param string $KeyId 白盒密钥ID
     * @param array $DeviceFingerprints 设备指纹列表，如果列表为空，则表示删除该密钥对应的所有指纹信息。列表最大长度不超过200。
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
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("DeviceFingerprints",$param) and $param["DeviceFingerprints"] !== null) {
            $this->DeviceFingerprints = [];
            foreach ($param["DeviceFingerprints"] as $key => $value){
                $obj = new DeviceFingerprint();
                $obj->deserialize($value);
                array_push($this->DeviceFingerprints, $obj);
            }
        }
    }
}
