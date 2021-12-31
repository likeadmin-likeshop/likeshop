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
 * 物体识别任务控制参数
 *
 * @method string getSwitch() 获取物体识别任务开关，可选值：
<li>ON：开启智能物体识别任务；</li>
<li>OFF：关闭智能物体识别任务。</li>
 * @method void setSwitch(string $Switch) 设置物体识别任务开关，可选值：
<li>ON：开启智能物体识别任务；</li>
<li>OFF：关闭智能物体识别任务。</li>
 * @method string getObjectLibrary() 获取物体库选择，可选值：
<li>Default：使用默认物体库；</li>
<li>UserDefine：使用用户自定义物体库。</li>
<li>All：同时使用默认物体库和用户自定义物体库。</li>
默认值： All，同时使用默认物体库和用户自定义物体库。
 * @method void setObjectLibrary(string $ObjectLibrary) 设置物体库选择，可选值：
<li>Default：使用默认物体库；</li>
<li>UserDefine：使用用户自定义物体库。</li>
<li>All：同时使用默认物体库和用户自定义物体库。</li>
默认值： All，同时使用默认物体库和用户自定义物体库。
 */
class ObjectConfigureInfo extends AbstractModel
{
    /**
     * @var string 物体识别任务开关，可选值：
<li>ON：开启智能物体识别任务；</li>
<li>OFF：关闭智能物体识别任务。</li>
     */
    public $Switch;

    /**
     * @var string 物体库选择，可选值：
<li>Default：使用默认物体库；</li>
<li>UserDefine：使用用户自定义物体库。</li>
<li>All：同时使用默认物体库和用户自定义物体库。</li>
默认值： All，同时使用默认物体库和用户自定义物体库。
     */
    public $ObjectLibrary;

    /**
     * @param string $Switch 物体识别任务开关，可选值：
<li>ON：开启智能物体识别任务；</li>
<li>OFF：关闭智能物体识别任务。</li>
     * @param string $ObjectLibrary 物体库选择，可选值：
<li>Default：使用默认物体库；</li>
<li>UserDefine：使用用户自定义物体库。</li>
<li>All：同时使用默认物体库和用户自定义物体库。</li>
默认值： All，同时使用默认物体库和用户自定义物体库。
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("ObjectLibrary",$param) and $param["ObjectLibrary"] !== null) {
            $this->ObjectLibrary = $param["ObjectLibrary"];
        }
    }
}
