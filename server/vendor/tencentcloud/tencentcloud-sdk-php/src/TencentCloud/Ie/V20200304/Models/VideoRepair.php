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
 * 综合画质修复，包括：去噪，去毛刺，细节增强，主观画质提升。
 *
 * @method string getType() 获取画质修复类型，可选值：weak，normal，strong;
默认值: weak
 * @method void setType(string $Type) 设置画质修复类型，可选值：weak，normal，strong;
默认值: weak
 */
class VideoRepair extends AbstractModel
{
    /**
     * @var string 画质修复类型，可选值：weak，normal，strong;
默认值: weak
     */
    public $Type;

    /**
     * @param string $Type 画质修复类型，可选值：weak，normal，strong;
默认值: weak
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
