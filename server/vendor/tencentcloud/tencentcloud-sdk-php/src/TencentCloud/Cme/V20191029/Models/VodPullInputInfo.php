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
 * 点播拉流信息，包括输入拉流地址和播放次数。
 *
 * @method array getInputUrls() 获取点播输入拉流 URL 。
 * @method void setInputUrls(array $InputUrls) 设置点播输入拉流 URL 。
 * @method integer getLoopTimes() 获取播放次数，取值有：
<li>-1 : 循环播放，直到转推结束；</li>
<li>0 : 不循环；</li>
<li>大于0 : 具体循环次数，次数和时间以先结束的为准。</li>
默认不循环。
 * @method void setLoopTimes(integer $LoopTimes) 设置播放次数，取值有：
<li>-1 : 循环播放，直到转推结束；</li>
<li>0 : 不循环；</li>
<li>大于0 : 具体循环次数，次数和时间以先结束的为准。</li>
默认不循环。
 */
class VodPullInputInfo extends AbstractModel
{
    /**
     * @var array 点播输入拉流 URL 。
     */
    public $InputUrls;

    /**
     * @var integer 播放次数，取值有：
<li>-1 : 循环播放，直到转推结束；</li>
<li>0 : 不循环；</li>
<li>大于0 : 具体循环次数，次数和时间以先结束的为准。</li>
默认不循环。
     */
    public $LoopTimes;

    /**
     * @param array $InputUrls 点播输入拉流 URL 。
     * @param integer $LoopTimes 播放次数，取值有：
<li>-1 : 循环播放，直到转推结束；</li>
<li>0 : 不循环；</li>
<li>大于0 : 具体循环次数，次数和时间以先结束的为准。</li>
默认不循环。
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
        if (array_key_exists("InputUrls",$param) and $param["InputUrls"] !== null) {
            $this->InputUrls = $param["InputUrls"];
        }

        if (array_key_exists("LoopTimes",$param) and $param["LoopTimes"] !== null) {
            $this->LoopTimes = $param["LoopTimes"];
        }
    }
}
