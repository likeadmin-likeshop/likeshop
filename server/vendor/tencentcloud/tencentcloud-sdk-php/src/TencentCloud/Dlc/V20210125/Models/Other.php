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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据格式其它类型。
 *
 * @method string getFormat() 获取枚举类型，默认值为Json，可选值为[Json, Parquet, ORC, AVRD]之一。
 * @method void setFormat(string $Format) 设置枚举类型，默认值为Json，可选值为[Json, Parquet, ORC, AVRD]之一。
 */
class Other extends AbstractModel
{
    /**
     * @var string 枚举类型，默认值为Json，可选值为[Json, Parquet, ORC, AVRD]之一。
     */
    public $Format;

    /**
     * @param string $Format 枚举类型，默认值为Json，可选值为[Json, Parquet, ORC, AVRD]之一。
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
        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }
    }
}
