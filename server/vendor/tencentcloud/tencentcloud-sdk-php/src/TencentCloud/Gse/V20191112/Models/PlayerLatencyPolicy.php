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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 延迟策略
 *
 * @method integer getMaximumIndividualPlayerLatencyMilliseconds() 获取任意player允许的最大延迟，单位：毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaximumIndividualPlayerLatencyMilliseconds(integer $MaximumIndividualPlayerLatencyMilliseconds) 设置任意player允许的最大延迟，单位：毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPolicyDurationSeconds() 获取放置新GameServerSession时强制实施策略的时间长度，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyDurationSeconds(integer $PolicyDurationSeconds) 设置放置新GameServerSession时强制实施策略的时间长度，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 */
class PlayerLatencyPolicy extends AbstractModel
{
    /**
     * @var integer 任意player允许的最大延迟，单位：毫秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaximumIndividualPlayerLatencyMilliseconds;

    /**
     * @var integer 放置新GameServerSession时强制实施策略的时间长度，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyDurationSeconds;

    /**
     * @param integer $MaximumIndividualPlayerLatencyMilliseconds 任意player允许的最大延迟，单位：毫秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PolicyDurationSeconds 放置新GameServerSession时强制实施策略的时间长度，单位：秒
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
        if (array_key_exists("MaximumIndividualPlayerLatencyMilliseconds",$param) and $param["MaximumIndividualPlayerLatencyMilliseconds"] !== null) {
            $this->MaximumIndividualPlayerLatencyMilliseconds = $param["MaximumIndividualPlayerLatencyMilliseconds"];
        }

        if (array_key_exists("PolicyDurationSeconds",$param) and $param["PolicyDurationSeconds"] !== null) {
            $this->PolicyDurationSeconds = $param["PolicyDurationSeconds"];
        }
    }
}
