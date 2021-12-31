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
 * 设备资源信息。
 *
 * @method string getProductId() 获取产品ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductId(string $ProductId) 设置产品ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductName() 获取产品名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductName(string $ProductName) 设置产品名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeviceName() 获取设备名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceName(string $DeviceName) 设置设备名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceId() 获取设备资源ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceId(string $ResourceId) 设置设备资源ID。
注意：此字段可能返回 null，表示取不到有效值。
 */
class DeviceProperty extends AbstractModel
{
    /**
     * @var string 产品ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductId;

    /**
     * @var string 产品名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductName;

    /**
     * @var string 设备名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceName;

    /**
     * @var string 设备资源ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceId;

    /**
     * @param string $ProductId 产品ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductName 产品名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeviceName 设备名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceId 设备资源ID。
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
