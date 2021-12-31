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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云转推输出源信息，包含输出源和输出源转推状态。
 *
 * @method StreamConnectOutput getStreamConnectOutput() 获取输出源。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStreamConnectOutput(StreamConnectOutput $StreamConnectOutput) 设置输出源。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPushSwitch() 获取输出流状态：
<li>On ：开；</li>
<li>Off ：关 。</li>
 * @method void setPushSwitch(string $PushSwitch) 设置输出流状态：
<li>On ：开；</li>
<li>Off ：关 。</li>
 */
class StreamConnectOutputInfo extends AbstractModel
{
    /**
     * @var StreamConnectOutput 输出源。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StreamConnectOutput;

    /**
     * @var string 输出流状态：
<li>On ：开；</li>
<li>Off ：关 。</li>
     */
    public $PushSwitch;

    /**
     * @param StreamConnectOutput $StreamConnectOutput 输出源。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PushSwitch 输出流状态：
<li>On ：开；</li>
<li>Off ：关 。</li>
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
        if (array_key_exists("StreamConnectOutput",$param) and $param["StreamConnectOutput"] !== null) {
            $this->StreamConnectOutput = new StreamConnectOutput();
            $this->StreamConnectOutput->deserialize($param["StreamConnectOutput"]);
        }

        if (array_key_exists("PushSwitch",$param) and $param["PushSwitch"] !== null) {
            $this->PushSwitch = $param["PushSwitch"];
        }
    }
}
