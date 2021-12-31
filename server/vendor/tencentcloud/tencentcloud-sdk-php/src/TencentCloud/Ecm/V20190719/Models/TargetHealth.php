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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 后端的健康检查状态
 *
 * @method string getIP() 获取Target的内网IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIP(string $IP) 设置Target的内网IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPort() 获取Target绑定的端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(integer $Port) 设置Target绑定的端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHealthStatus() 获取当前健康状态，true：健康，false：不健康（包括尚未开始探测、探测中、状态异常等几种状态）。只有处于健康状态（且权重大于0），负载均衡才会向其转发流量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthStatus(boolean $HealthStatus) 设置当前健康状态，true：健康，false：不健康（包括尚未开始探测、探测中、状态异常等几种状态）。只有处于健康状态（且权重大于0），负载均衡才会向其转发流量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetId() 获取Target的实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetId(string $TargetId) 设置Target的实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHealthStatusDetail() 获取当前健康状态的详细信息。如：Alive、Dead、Unknown、Close。Alive状态为健康，Dead状态为异常，Unknown状态包括尚未开始探测、探测中、状态未知，Close为未配置健康检查。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthStatusDetail(string $HealthStatusDetail) 设置当前健康状态的详细信息。如：Alive、Dead、Unknown、Close。Alive状态为健康，Dead状态为异常，Unknown状态包括尚未开始探测、探测中、状态未知，Close为未配置健康检查。
注意：此字段可能返回 null，表示取不到有效值。
 */
class TargetHealth extends AbstractModel
{
    /**
     * @var string Target的内网IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IP;

    /**
     * @var integer Target绑定的端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var boolean 当前健康状态，true：健康，false：不健康（包括尚未开始探测、探测中、状态异常等几种状态）。只有处于健康状态（且权重大于0），负载均衡才会向其转发流量。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthStatus;

    /**
     * @var string Target的实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetId;

    /**
     * @var string 当前健康状态的详细信息。如：Alive、Dead、Unknown、Close。Alive状态为健康，Dead状态为异常，Unknown状态包括尚未开始探测、探测中、状态未知，Close为未配置健康检查。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthStatusDetail;

    /**
     * @param string $IP Target的内网IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Port Target绑定的端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HealthStatus 当前健康状态，true：健康，false：不健康（包括尚未开始探测、探测中、状态异常等几种状态）。只有处于健康状态（且权重大于0），负载均衡才会向其转发流量。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetId Target的实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HealthStatusDetail 当前健康状态的详细信息。如：Alive、Dead、Unknown、Close。Alive状态为健康，Dead状态为异常，Unknown状态包括尚未开始探测、探测中、状态未知，Close为未配置健康检查。
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
        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("HealthStatus",$param) and $param["HealthStatus"] !== null) {
            $this->HealthStatus = $param["HealthStatus"];
        }

        if (array_key_exists("TargetId",$param) and $param["TargetId"] !== null) {
            $this->TargetId = $param["TargetId"];
        }

        if (array_key_exists("HealthStatusDetail",$param) and $param["HealthStatusDetail"] !== null) {
            $this->HealthStatusDetail = $param["HealthStatusDetail"];
        }
    }
}
