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
namespace TencentCloud\Dc\V20180410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 坐标，经维度描述
 *
 * @method float getLat() 获取纬度
 * @method void setLat(float $Lat) 设置纬度
 * @method float getLng() 获取经度
 * @method void setLng(float $Lng) 设置经度
 */
class Coordinate extends AbstractModel
{
    /**
     * @var float 纬度
     */
    public $Lat;

    /**
     * @var float 经度
     */
    public $Lng;

    /**
     * @param float $Lat 纬度
     * @param float $Lng 经度
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
        if (array_key_exists("Lat",$param) and $param["Lat"] !== null) {
            $this->Lat = $param["Lat"];
        }

        if (array_key_exists("Lng",$param) and $param["Lng"] !== null) {
            $this->Lng = $param["Lng"];
        }
    }
}
