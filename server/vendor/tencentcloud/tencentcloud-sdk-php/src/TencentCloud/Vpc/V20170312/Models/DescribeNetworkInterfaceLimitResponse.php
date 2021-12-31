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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNetworkInterfaceLimit返回参数结构体
 *
 * @method integer getEniQuantity() 获取标准型弹性网卡配额
 * @method void setEniQuantity(integer $EniQuantity) 设置标准型弹性网卡配额
 * @method integer getEniPrivateIpAddressQuantity() 获取每个标准型弹性网卡可以分配的IP配额
 * @method void setEniPrivateIpAddressQuantity(integer $EniPrivateIpAddressQuantity) 设置每个标准型弹性网卡可以分配的IP配额
 * @method integer getExtendEniQuantity() 获取扩展型网卡配额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtendEniQuantity(integer $ExtendEniQuantity) 设置扩展型网卡配额
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExtendEniPrivateIpAddressQuantity() 获取每个扩展型弹性网卡可以分配的IP配额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtendEniPrivateIpAddressQuantity(integer $ExtendEniPrivateIpAddressQuantity) 设置每个扩展型弹性网卡可以分配的IP配额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeNetworkInterfaceLimitResponse extends AbstractModel
{
    /**
     * @var integer 标准型弹性网卡配额
     */
    public $EniQuantity;

    /**
     * @var integer 每个标准型弹性网卡可以分配的IP配额
     */
    public $EniPrivateIpAddressQuantity;

    /**
     * @var integer 扩展型网卡配额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtendEniQuantity;

    /**
     * @var integer 每个扩展型弹性网卡可以分配的IP配额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtendEniPrivateIpAddressQuantity;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $EniQuantity 标准型弹性网卡配额
     * @param integer $EniPrivateIpAddressQuantity 每个标准型弹性网卡可以分配的IP配额
     * @param integer $ExtendEniQuantity 扩展型网卡配额
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExtendEniPrivateIpAddressQuantity 每个扩展型弹性网卡可以分配的IP配额
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
        if (array_key_exists("EniQuantity",$param) and $param["EniQuantity"] !== null) {
            $this->EniQuantity = $param["EniQuantity"];
        }

        if (array_key_exists("EniPrivateIpAddressQuantity",$param) and $param["EniPrivateIpAddressQuantity"] !== null) {
            $this->EniPrivateIpAddressQuantity = $param["EniPrivateIpAddressQuantity"];
        }

        if (array_key_exists("ExtendEniQuantity",$param) and $param["ExtendEniQuantity"] !== null) {
            $this->ExtendEniQuantity = $param["ExtendEniQuantity"];
        }

        if (array_key_exists("ExtendEniPrivateIpAddressQuantity",$param) and $param["ExtendEniPrivateIpAddressQuantity"] !== null) {
            $this->ExtendEniPrivateIpAddressQuantity = $param["ExtendEniPrivateIpAddressQuantity"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
