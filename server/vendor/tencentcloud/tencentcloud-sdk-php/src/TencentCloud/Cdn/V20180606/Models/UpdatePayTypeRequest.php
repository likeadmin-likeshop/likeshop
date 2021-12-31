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
 * UpdatePayType请求参数结构体
 *
 * @method string getArea() 获取计费区域，mainland或overseas。
 * @method void setArea(string $Area) 设置计费区域，mainland或overseas。
 * @method string getPayType() 获取计费类型，flux或bandwidth。
 * @method void setPayType(string $PayType) 设置计费类型，flux或bandwidth。
 */
class UpdatePayTypeRequest extends AbstractModel
{
    /**
     * @var string 计费区域，mainland或overseas。
     */
    public $Area;

    /**
     * @var string 计费类型，flux或bandwidth。
     */
    public $PayType;

    /**
     * @param string $Area 计费区域，mainland或overseas。
     * @param string $PayType 计费类型，flux或bandwidth。
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
        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }
    }
}
