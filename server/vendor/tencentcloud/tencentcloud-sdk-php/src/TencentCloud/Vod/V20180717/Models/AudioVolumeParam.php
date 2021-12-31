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
 * 音频增益调节参数
 *
 * @method integer getMute() 获取是否静音，取值范围0或1。
<li>0表示不静音。</li>
<li>1表示静音。</li>
默认是0。
 * @method void setMute(integer $Mute) 设置是否静音，取值范围0或1。
<li>0表示不静音。</li>
<li>1表示静音。</li>
默认是0。
 * @method float getGain() 获取音频增益，取值范围0~10。
<li>大于1表示增加音量。</li>
<li>小于1表示降低音量。</li>
<li>0和1：表示不改变。</li>
默认是0。
 * @method void setGain(float $Gain) 设置音频增益，取值范围0~10。
<li>大于1表示增加音量。</li>
<li>小于1表示降低音量。</li>
<li>0和1：表示不改变。</li>
默认是0。
 */
class AudioVolumeParam extends AbstractModel
{
    /**
     * @var integer 是否静音，取值范围0或1。
<li>0表示不静音。</li>
<li>1表示静音。</li>
默认是0。
     */
    public $Mute;

    /**
     * @var float 音频增益，取值范围0~10。
<li>大于1表示增加音量。</li>
<li>小于1表示降低音量。</li>
<li>0和1：表示不改变。</li>
默认是0。
     */
    public $Gain;

    /**
     * @param integer $Mute 是否静音，取值范围0或1。
<li>0表示不静音。</li>
<li>1表示静音。</li>
默认是0。
     * @param float $Gain 音频增益，取值范围0~10。
<li>大于1表示增加音量。</li>
<li>小于1表示降低音量。</li>
<li>0和1：表示不改变。</li>
默认是0。
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
        if (array_key_exists("Mute",$param) and $param["Mute"] !== null) {
            $this->Mute = $param["Mute"];
        }

        if (array_key_exists("Gain",$param) and $param["Gain"] !== null) {
            $this->Gain = $param["Gain"];
        }
    }
}
