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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 源站头部缓存配置，默认为开启状态，缓存所有头部信息
 *
 * @method string getSwitch() 获取源站头部缓存开关
on：开启
off：关闭
 * @method void setSwitch(string $Switch) 设置源站头部缓存开关
on：开启
off：关闭
 */
class ResponseHeaderCache extends AbstractModel
{
    /**
     * @var string 源站头部缓存开关
on：开启
off：关闭
     */
    public $Switch;

    /**
     * @param string $Switch 源站头部缓存开关
on：开启
off：关闭
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
    }
}
