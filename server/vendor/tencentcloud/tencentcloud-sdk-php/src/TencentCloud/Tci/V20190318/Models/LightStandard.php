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
namespace TencentCloud\Tci\V20190318\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 光照标准，结构的相关示例为：
{
    "Name":"dark"，
    "Range":[0,30]
}
当光照的区间落入在0到30的范围时，就会命中dark的光照标准
 *
 * @method string getName() 获取光照名称
 * @method void setName(string $Name) 设置光照名称
 * @method array getRange() 获取范围
 * @method void setRange(array $Range) 设置范围
 */
class LightStandard extends AbstractModel
{
    /**
     * @var string 光照名称
     */
    public $Name;

    /**
     * @var array 范围
     */
    public $Range;

    /**
     * @param string $Name 光照名称
     * @param array $Range 范围
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Range",$param) and $param["Range"] !== null) {
            $this->Range = $param["Range"];
        }
    }
}
