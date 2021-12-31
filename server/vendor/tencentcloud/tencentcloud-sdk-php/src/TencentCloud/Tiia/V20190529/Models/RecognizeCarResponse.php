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
namespace TencentCloud\Tiia\V20190529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RecognizeCar返回参数结构体
 *
 * @method array getCarCoords() 获取汽车的四个矩形顶点坐标，如果图片中存在多辆车，则输出最大车辆的坐标。
 * @method void setCarCoords(array $CarCoords) 设置汽车的四个矩形顶点坐标，如果图片中存在多辆车，则输出最大车辆的坐标。
 * @method array getCarTags() 获取车辆属性识别的结果数组，如果识别到多辆车，则会输出每辆车的top1结果。
 * @method void setCarTags(array $CarTags) 设置车辆属性识别的结果数组，如果识别到多辆车，则会输出每辆车的top1结果。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class RecognizeCarResponse extends AbstractModel
{
    /**
     * @var array 汽车的四个矩形顶点坐标，如果图片中存在多辆车，则输出最大车辆的坐标。
     */
    public $CarCoords;

    /**
     * @var array 车辆属性识别的结果数组，如果识别到多辆车，则会输出每辆车的top1结果。
     */
    public $CarTags;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $CarCoords 汽车的四个矩形顶点坐标，如果图片中存在多辆车，则输出最大车辆的坐标。
     * @param array $CarTags 车辆属性识别的结果数组，如果识别到多辆车，则会输出每辆车的top1结果。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("CarCoords",$param) and $param["CarCoords"] !== null) {
            $this->CarCoords = [];
            foreach ($param["CarCoords"] as $key => $value){
                $obj = new Coord();
                $obj->deserialize($value);
                array_push($this->CarCoords, $obj);
            }
        }

        if (array_key_exists("CarTags",$param) and $param["CarTags"] !== null) {
            $this->CarTags = [];
            foreach ($param["CarTags"] as $key => $value){
                $obj = new CarTagItem();
                $obj->deserialize($value);
                array_push($this->CarTags, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
