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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网关坐标
 *
 * @method float getAccuracy() 获取准确度
 * @method void setAccuracy(float $Accuracy) 设置准确度
 * @method float getAltitude() 获取海拔
 * @method void setAltitude(float $Altitude) 设置海拔
 * @method float getLatitude() 获取纬度
 * @method void setLatitude(float $Latitude) 设置纬度
 * @method float getLongitude() 获取精度
 * @method void setLongitude(float $Longitude) 设置精度
 */
class LoRaGatewayLocation extends AbstractModel
{
    /**
     * @var float 准确度
     */
    public $Accuracy;

    /**
     * @var float 海拔
     */
    public $Altitude;

    /**
     * @var float 纬度
     */
    public $Latitude;

    /**
     * @var float 精度
     */
    public $Longitude;

    /**
     * @param float $Accuracy 准确度
     * @param float $Altitude 海拔
     * @param float $Latitude 纬度
     * @param float $Longitude 精度
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
        if (array_key_exists("Accuracy",$param) and $param["Accuracy"] !== null) {
            $this->Accuracy = $param["Accuracy"];
        }

        if (array_key_exists("Altitude",$param) and $param["Altitude"] !== null) {
            $this->Altitude = $param["Altitude"];
        }

        if (array_key_exists("Latitude",$param) and $param["Latitude"] !== null) {
            $this->Latitude = $param["Latitude"];
        }

        if (array_key_exists("Longitude",$param) and $param["Longitude"] !== null) {
            $this->Longitude = $param["Longitude"];
        }
    }
}
