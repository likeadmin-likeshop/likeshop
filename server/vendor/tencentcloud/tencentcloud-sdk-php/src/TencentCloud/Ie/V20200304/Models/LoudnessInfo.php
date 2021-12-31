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
namespace TencentCloud\Ie\V20200304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音频响度信息
 *
 * @method float getLoudness() 获取音频整体响度
 * @method void setLoudness(float $Loudness) 设置音频整体响度
 * @method float getLoudnessRange() 获取音频响度范围
 * @method void setLoudnessRange(float $LoudnessRange) 设置音频响度范围
 */
class LoudnessInfo extends AbstractModel
{
    /**
     * @var float 音频整体响度
     */
    public $Loudness;

    /**
     * @var float 音频响度范围
     */
    public $LoudnessRange;

    /**
     * @param float $Loudness 音频整体响度
     * @param float $LoudnessRange 音频响度范围
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
        if (array_key_exists("Loudness",$param) and $param["Loudness"] !== null) {
            $this->Loudness = $param["Loudness"];
        }

        if (array_key_exists("LoudnessRange",$param) and $param["LoudnessRange"] !== null) {
            $this->LoudnessRange = $param["LoudnessRange"];
        }
    }
}
