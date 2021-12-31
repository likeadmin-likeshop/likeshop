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
namespace TencentCloud\Ecc\V20181213\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 维度单词坐标
 *
 * @method array getCoordinate() 获取维度单词坐标
 * @method void setCoordinate(array $Coordinate) 设置维度单词坐标
 */
class ErrorCoordinate extends AbstractModel
{
    /**
     * @var array 维度单词坐标
     */
    public $Coordinate;

    /**
     * @param array $Coordinate 维度单词坐标
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
        if (array_key_exists("Coordinate",$param) and $param["Coordinate"] !== null) {
            $this->Coordinate = $param["Coordinate"];
        }
    }
}
