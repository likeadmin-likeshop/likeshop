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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDevice返回参数结构体
 *
 * @method string getDeviceCode() 获取设备编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceCode(string $DeviceCode) 设置设备编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeviceId() 获取设备唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceId(string $DeviceId) 设置设备唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVirtualGroupId() 获取设备虚拟组信息，仅在创建NVR/VMS时返回该值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirtualGroupId(string $VirtualGroupId) 设置设备虚拟组信息，仅在创建NVR/VMS时返回该值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateDeviceResponse extends AbstractModel
{
    /**
     * @var string 设备编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceCode;

    /**
     * @var string 设备唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceId;

    /**
     * @var string 设备虚拟组信息，仅在创建NVR/VMS时返回该值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirtualGroupId;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $DeviceCode 设备编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeviceId 设备唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VirtualGroupId 设备虚拟组信息，仅在创建NVR/VMS时返回该值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("DeviceCode",$param) and $param["DeviceCode"] !== null) {
            $this->DeviceCode = $param["DeviceCode"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("VirtualGroupId",$param) and $param["VirtualGroupId"] !== null) {
            $this->VirtualGroupId = $param["VirtualGroupId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
