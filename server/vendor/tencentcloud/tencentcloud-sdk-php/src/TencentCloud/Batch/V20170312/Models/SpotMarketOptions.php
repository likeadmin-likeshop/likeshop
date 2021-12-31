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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 竞价相关选项
 *
 * @method string getMaxPrice() 获取竞价出价
 * @method void setMaxPrice(string $MaxPrice) 设置竞价出价
 * @method string getSpotInstanceType() 获取竞价请求类型，当前仅支持类型：one-time
 * @method void setSpotInstanceType(string $SpotInstanceType) 设置竞价请求类型，当前仅支持类型：one-time
 */
class SpotMarketOptions extends AbstractModel
{
    /**
     * @var string 竞价出价
     */
    public $MaxPrice;

    /**
     * @var string 竞价请求类型，当前仅支持类型：one-time
     */
    public $SpotInstanceType;

    /**
     * @param string $MaxPrice 竞价出价
     * @param string $SpotInstanceType 竞价请求类型，当前仅支持类型：one-time
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
        if (array_key_exists("MaxPrice",$param) and $param["MaxPrice"] !== null) {
            $this->MaxPrice = $param["MaxPrice"];
        }

        if (array_key_exists("SpotInstanceType",$param) and $param["SpotInstanceType"] !== null) {
            $this->SpotInstanceType = $param["SpotInstanceType"];
        }
    }
}
