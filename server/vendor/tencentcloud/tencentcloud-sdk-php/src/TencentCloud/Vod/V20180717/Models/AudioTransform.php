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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音频操作
 *
 * @method string getType() 获取音频操作类型，取值有：
<li>Volume：音量调节。</li>
 * @method void setType(string $Type) 设置音频操作类型，取值有：
<li>Volume：音量调节。</li>
 * @method AudioVolumeParam getVolumeParam() 获取音量调节参数， 当 Type = Volume 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVolumeParam(AudioVolumeParam $VolumeParam) 设置音量调节参数， 当 Type = Volume 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 */
class AudioTransform extends AbstractModel
{
    /**
     * @var string 音频操作类型，取值有：
<li>Volume：音量调节。</li>
     */
    public $Type;

    /**
     * @var AudioVolumeParam 音量调节参数， 当 Type = Volume 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VolumeParam;

    /**
     * @param string $Type 音频操作类型，取值有：
<li>Volume：音量调节。</li>
     * @param AudioVolumeParam $VolumeParam 音量调节参数， 当 Type = Volume 时有效。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("VolumeParam",$param) and $param["VolumeParam"] !== null) {
            $this->VolumeParam = new AudioVolumeParam();
            $this->VolumeParam->deserialize($param["VolumeParam"]);
        }
    }
}
