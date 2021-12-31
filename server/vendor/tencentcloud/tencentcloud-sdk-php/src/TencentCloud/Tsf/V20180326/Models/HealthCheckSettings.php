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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 健康检查参数
 *
 * @method HealthCheckSetting getLivenessProbe() 获取存活健康检查
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLivenessProbe(HealthCheckSetting $LivenessProbe) 设置存活健康检查
注意：此字段可能返回 null，表示取不到有效值。
 * @method HealthCheckSetting getReadinessProbe() 获取就绪健康检查
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReadinessProbe(HealthCheckSetting $ReadinessProbe) 设置就绪健康检查
注意：此字段可能返回 null，表示取不到有效值。
 */
class HealthCheckSettings extends AbstractModel
{
    /**
     * @var HealthCheckSetting 存活健康检查
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LivenessProbe;

    /**
     * @var HealthCheckSetting 就绪健康检查
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReadinessProbe;

    /**
     * @param HealthCheckSetting $LivenessProbe 存活健康检查
注意：此字段可能返回 null，表示取不到有效值。
     * @param HealthCheckSetting $ReadinessProbe 就绪健康检查
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
        if (array_key_exists("LivenessProbe",$param) and $param["LivenessProbe"] !== null) {
            $this->LivenessProbe = new HealthCheckSetting();
            $this->LivenessProbe->deserialize($param["LivenessProbe"]);
        }

        if (array_key_exists("ReadinessProbe",$param) and $param["ReadinessProbe"] !== null) {
            $this->ReadinessProbe = new HealthCheckSetting();
            $this->ReadinessProbe->deserialize($param["ReadinessProbe"]);
        }
    }
}
