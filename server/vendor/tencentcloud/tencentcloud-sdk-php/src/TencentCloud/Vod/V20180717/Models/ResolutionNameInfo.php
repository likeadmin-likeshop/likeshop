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
 * 播放器子流名字信息
 *
 * @method integer getMinEdgeLength() 获取视频短边长度，单位：像素。
 * @method void setMinEdgeLength(integer $MinEdgeLength) 设置视频短边长度，单位：像素。
 * @method string getName() 获取展示名字。
 * @method void setName(string $Name) 设置展示名字。
 */
class ResolutionNameInfo extends AbstractModel
{
    /**
     * @var integer 视频短边长度，单位：像素。
     */
    public $MinEdgeLength;

    /**
     * @var string 展示名字。
     */
    public $Name;

    /**
     * @param integer $MinEdgeLength 视频短边长度，单位：像素。
     * @param string $Name 展示名字。
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
        if (array_key_exists("MinEdgeLength",$param) and $param["MinEdgeLength"] !== null) {
            $this->MinEdgeLength = $param["MinEdgeLength"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
