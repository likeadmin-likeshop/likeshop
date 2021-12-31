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
 * 玩家延迟信息
 *
 * @method string getPlayerId() 获取玩家Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlayerId(string $PlayerId) 设置玩家Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegionIdentifier() 获取延迟对应的区域名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionIdentifier(string $RegionIdentifier) 设置延迟对应的区域名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLatencyInMilliseconds() 获取毫秒级延迟
 * @method void setLatencyInMilliseconds(integer $LatencyInMilliseconds) 设置毫秒级延迟
 */
class PlayerLatency extends AbstractModel
{
    /**
     * @var string 玩家Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PlayerId;

    /**
     * @var string 延迟对应的区域名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionIdentifier;

    /**
     * @var integer 毫秒级延迟
     */
    public $LatencyInMilliseconds;

    /**
     * @param string $PlayerId 玩家Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegionIdentifier 延迟对应的区域名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LatencyInMilliseconds 毫秒级延迟
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
        if (array_key_exists("PlayerId",$param) and $param["PlayerId"] !== null) {
            $this->PlayerId = $param["PlayerId"];
        }

        if (array_key_exists("RegionIdentifier",$param) and $param["RegionIdentifier"] !== null) {
            $this->RegionIdentifier = $param["RegionIdentifier"];
        }

        if (array_key_exists("LatencyInMilliseconds",$param) and $param["LatencyInMilliseconds"] !== null) {
            $this->LatencyInMilliseconds = $param["LatencyInMilliseconds"];
        }
    }
}
