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
 * 音频降噪
 *
 * @method string getType() 获取音频降噪强度，可选项：
1. weak
2.normal，
3.strong
默认为weak
 * @method void setType(string $Type) 设置音频降噪强度，可选项：
1. weak
2.normal，
3.strong
默认为weak
 */
class Denoise extends AbstractModel
{
    /**
     * @var string 音频降噪强度，可选项：
1. weak
2.normal，
3.strong
默认为weak
     */
    public $Type;

    /**
     * @param string $Type 音频降噪强度，可选项：
1. weak
2.normal，
3.strong
默认为weak
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
    }
}
