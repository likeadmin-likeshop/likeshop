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
namespace TencentCloud\Iot\V20180123\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AppGetDeviceStatuses请求参数结构体
 *
 * @method string getAccessToken() 获取访问Token
 * @method void setAccessToken(string $AccessToken) 设置访问Token
 * @method array getDeviceIds() 获取设备Id列表（单次限制1000个设备）
 * @method void setDeviceIds(array $DeviceIds) 设置设备Id列表（单次限制1000个设备）
 */
class AppGetDeviceStatusesRequest extends AbstractModel
{
    /**
     * @var string 访问Token
     */
    public $AccessToken;

    /**
     * @var array 设备Id列表（单次限制1000个设备）
     */
    public $DeviceIds;

    /**
     * @param string $AccessToken 访问Token
     * @param array $DeviceIds 设备Id列表（单次限制1000个设备）
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
        if (array_key_exists("AccessToken",$param) and $param["AccessToken"] !== null) {
            $this->AccessToken = $param["AccessToken"];
        }

        if (array_key_exists("DeviceIds",$param) and $param["DeviceIds"] !== null) {
            $this->DeviceIds = $param["DeviceIds"];
        }
    }
}
