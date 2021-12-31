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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBResourceUsageDetails返回参数结构体
 *
 * @method ResourceUsageMonitorSet getMaster() 获取主节点资源使用情况监控数据
 * @method void setMaster(ResourceUsageMonitorSet $Master) 设置主节点资源使用情况监控数据
 * @method ResourceUsageMonitorSet getSlave1() 获取备机1资源使用情况监控数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSlave1(ResourceUsageMonitorSet $Slave1) 设置备机1资源使用情况监控数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method ResourceUsageMonitorSet getSlave2() 获取备机2资源使用情况监控数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSlave2(ResourceUsageMonitorSet $Slave2) 设置备机2资源使用情况监控数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDBResourceUsageDetailsResponse extends AbstractModel
{
    /**
     * @var ResourceUsageMonitorSet 主节点资源使用情况监控数据
     */
    public $Master;

    /**
     * @var ResourceUsageMonitorSet 备机1资源使用情况监控数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Slave1;

    /**
     * @var ResourceUsageMonitorSet 备机2资源使用情况监控数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Slave2;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param ResourceUsageMonitorSet $Master 主节点资源使用情况监控数据
     * @param ResourceUsageMonitorSet $Slave1 备机1资源使用情况监控数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param ResourceUsageMonitorSet $Slave2 备机2资源使用情况监控数据
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
        if (array_key_exists("Master",$param) and $param["Master"] !== null) {
            $this->Master = new ResourceUsageMonitorSet();
            $this->Master->deserialize($param["Master"]);
        }

        if (array_key_exists("Slave1",$param) and $param["Slave1"] !== null) {
            $this->Slave1 = new ResourceUsageMonitorSet();
            $this->Slave1->deserialize($param["Slave1"]);
        }

        if (array_key_exists("Slave2",$param) and $param["Slave2"] !== null) {
            $this->Slave2 = new ResourceUsageMonitorSet();
            $this->Slave2->deserialize($param["Slave2"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
