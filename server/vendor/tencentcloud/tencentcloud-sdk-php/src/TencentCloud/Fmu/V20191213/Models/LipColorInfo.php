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
namespace TencentCloud\Fmu\V20191213\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 唇色信息
 *
 * @method RGBAInfo getRGBA() 获取使用RGBA模型试唇色。
 * @method void setRGBA(RGBAInfo $RGBA) 设置使用RGBA模型试唇色。
 * @method string getModelId() 获取使用已注册的 LUT 文件试唇色。  
ModelId 和 RGBA 两个参数只需提供一个，若都提供只使用 ModelId。
 * @method void setModelId(string $ModelId) 设置使用已注册的 LUT 文件试唇色。  
ModelId 和 RGBA 两个参数只需提供一个，若都提供只使用 ModelId。
 * @method FaceRect getFaceRect() 获取人脸框位置。若不输入则选择 Image 或 Url 中面积最大的人脸。  
您可以通过 [人脸检测与分析](https://cloud.tencent.com/document/api/867/32800)  接口获取人脸框位置信息。
 * @method void setFaceRect(FaceRect $FaceRect) 设置人脸框位置。若不输入则选择 Image 或 Url 中面积最大的人脸。  
您可以通过 [人脸检测与分析](https://cloud.tencent.com/document/api/867/32800)  接口获取人脸框位置信息。
 * @method integer getModelAlpha() 获取涂妆浓淡[0,100]。建议取值50。本参数仅控制ModelId对应的涂妆浓淡。
 * @method void setModelAlpha(integer $ModelAlpha) 设置涂妆浓淡[0,100]。建议取值50。本参数仅控制ModelId对应的涂妆浓淡。
 */
class LipColorInfo extends AbstractModel
{
    /**
     * @var RGBAInfo 使用RGBA模型试唇色。
     */
    public $RGBA;

    /**
     * @var string 使用已注册的 LUT 文件试唇色。  
ModelId 和 RGBA 两个参数只需提供一个，若都提供只使用 ModelId。
     */
    public $ModelId;

    /**
     * @var FaceRect 人脸框位置。若不输入则选择 Image 或 Url 中面积最大的人脸。  
您可以通过 [人脸检测与分析](https://cloud.tencent.com/document/api/867/32800)  接口获取人脸框位置信息。
     */
    public $FaceRect;

    /**
     * @var integer 涂妆浓淡[0,100]。建议取值50。本参数仅控制ModelId对应的涂妆浓淡。
     */
    public $ModelAlpha;

    /**
     * @param RGBAInfo $RGBA 使用RGBA模型试唇色。
     * @param string $ModelId 使用已注册的 LUT 文件试唇色。  
ModelId 和 RGBA 两个参数只需提供一个，若都提供只使用 ModelId。
     * @param FaceRect $FaceRect 人脸框位置。若不输入则选择 Image 或 Url 中面积最大的人脸。  
您可以通过 [人脸检测与分析](https://cloud.tencent.com/document/api/867/32800)  接口获取人脸框位置信息。
     * @param integer $ModelAlpha 涂妆浓淡[0,100]。建议取值50。本参数仅控制ModelId对应的涂妆浓淡。
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
        if (array_key_exists("RGBA",$param) and $param["RGBA"] !== null) {
            $this->RGBA = new RGBAInfo();
            $this->RGBA->deserialize($param["RGBA"]);
        }

        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("FaceRect",$param) and $param["FaceRect"] !== null) {
            $this->FaceRect = new FaceRect();
            $this->FaceRect->deserialize($param["FaceRect"]);
        }

        if (array_key_exists("ModelAlpha",$param) and $param["ModelAlpha"] !== null) {
            $this->ModelAlpha = $param["ModelAlpha"];
        }
    }
}
