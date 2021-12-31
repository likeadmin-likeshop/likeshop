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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 极速高清参数配置。
 *
 * @method string getType() 获取极速高清类型，可选值：
<li>TEHD-100：极速高清-100。</li>
不填代表不启用极速高清。
 * @method void setType(string $Type) 设置极速高清类型，可选值：
<li>TEHD-100：极速高清-100。</li>
不填代表不启用极速高清。
 * @method integer getMaxVideoBitrate() 获取视频码率上限，当 Type 指定了极速高清类型时有效。
不填或填0表示不设视频码率上限。
 * @method void setMaxVideoBitrate(integer $MaxVideoBitrate) 设置视频码率上限，当 Type 指定了极速高清类型时有效。
不填或填0表示不设视频码率上限。
 */
class TEHDConfig extends AbstractModel
{
    /**
     * @var string 极速高清类型，可选值：
<li>TEHD-100：极速高清-100。</li>
不填代表不启用极速高清。
     */
    public $Type;

    /**
     * @var integer 视频码率上限，当 Type 指定了极速高清类型时有效。
不填或填0表示不设视频码率上限。
     */
    public $MaxVideoBitrate;

    /**
     * @param string $Type 极速高清类型，可选值：
<li>TEHD-100：极速高清-100。</li>
不填代表不启用极速高清。
     * @param integer $MaxVideoBitrate 视频码率上限，当 Type 指定了极速高清类型时有效。
不填或填0表示不设视频码率上限。
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

        if (array_key_exists("MaxVideoBitrate",$param) and $param["MaxVideoBitrate"] !== null) {
            $this->MaxVideoBitrate = $param["MaxVideoBitrate"];
        }
    }
}
