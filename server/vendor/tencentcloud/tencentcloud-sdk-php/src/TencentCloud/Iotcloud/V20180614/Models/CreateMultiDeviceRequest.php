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
namespace TencentCloud\Iotcloud\V20180614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateMultiDevice请求参数结构体
 *
 * @method string getProductId() 获取产品 ID。创建产品时腾讯云为用户分配全局唯一的 ID
 * @method void setProductId(string $ProductId) 设置产品 ID。创建产品时腾讯云为用户分配全局唯一的 ID
 * @method array getDeviceNames() 获取批量创建的设备名数组，单次最多创建 100 个设备。命名规则：[a-zA-Z0-9:_-]{1,48}
 * @method void setDeviceNames(array $DeviceNames) 设置批量创建的设备名数组，单次最多创建 100 个设备。命名规则：[a-zA-Z0-9:_-]{1,48}
 */
class CreateMultiDeviceRequest extends AbstractModel
{
    /**
     * @var string 产品 ID。创建产品时腾讯云为用户分配全局唯一的 ID
     */
    public $ProductId;

    /**
     * @var array 批量创建的设备名数组，单次最多创建 100 个设备。命名规则：[a-zA-Z0-9:_-]{1,48}
     */
    public $DeviceNames;

    /**
     * @param string $ProductId 产品 ID。创建产品时腾讯云为用户分配全局唯一的 ID
     * @param array $DeviceNames 批量创建的设备名数组，单次最多创建 100 个设备。命名规则：[a-zA-Z0-9:_-]{1,48}
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceNames",$param) and $param["DeviceNames"] !== null) {
            $this->DeviceNames = $param["DeviceNames"];
        }
    }
}
