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
namespace TencentCloud\Vm\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 媒体类型
 *
 * @method integer getDuration() 获取流检测时分片时长
注意：此字段可能返回 0，表示取不到有效值。
 * @method void setDuration(integer $Duration) 设置流检测时分片时长
注意：此字段可能返回 0，表示取不到有效值。
 */
class MediaInfo extends AbstractModel
{
    /**
     * @var integer 流检测时分片时长
注意：此字段可能返回 0，表示取不到有效值。
     */
    public $Duration;

    /**
     * @param integer $Duration 流检测时分片时长
注意：此字段可能返回 0，表示取不到有效值。
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
        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }
    }
}
