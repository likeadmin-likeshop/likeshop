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
namespace TencentCloud\Iai\V20200303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AnalyzeFace返回参数结构体
 *
 * @method integer getImageWidth() 获取请求的图片宽度。
 * @method void setImageWidth(integer $ImageWidth) 设置请求的图片宽度。
 * @method integer getImageHeight() 获取请求的图片高度。
 * @method void setImageHeight(integer $ImageHeight) 设置请求的图片高度。
 * @method array getFaceShapeSet() 获取五官定位（人脸关键点）具体信息。
 * @method void setFaceShapeSet(array $FaceShapeSet) 设置五官定位（人脸关键点）具体信息。
 * @method string getFaceModelVersion() 获取人脸识别所用的算法模型版本。
 * @method void setFaceModelVersion(string $FaceModelVersion) 设置人脸识别所用的算法模型版本。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class AnalyzeFaceResponse extends AbstractModel
{
    /**
     * @var integer 请求的图片宽度。
     */
    public $ImageWidth;

    /**
     * @var integer 请求的图片高度。
     */
    public $ImageHeight;

    /**
     * @var array 五官定位（人脸关键点）具体信息。
     */
    public $FaceShapeSet;

    /**
     * @var string 人脸识别所用的算法模型版本。
     */
    public $FaceModelVersion;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ImageWidth 请求的图片宽度。
     * @param integer $ImageHeight 请求的图片高度。
     * @param array $FaceShapeSet 五官定位（人脸关键点）具体信息。
     * @param string $FaceModelVersion 人脸识别所用的算法模型版本。
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
        if (array_key_exists("ImageWidth",$param) and $param["ImageWidth"] !== null) {
            $this->ImageWidth = $param["ImageWidth"];
        }

        if (array_key_exists("ImageHeight",$param) and $param["ImageHeight"] !== null) {
            $this->ImageHeight = $param["ImageHeight"];
        }

        if (array_key_exists("FaceShapeSet",$param) and $param["FaceShapeSet"] !== null) {
            $this->FaceShapeSet = [];
            foreach ($param["FaceShapeSet"] as $key => $value){
                $obj = new FaceShape();
                $obj->deserialize($value);
                array_push($this->FaceShapeSet, $obj);
            }
        }

        if (array_key_exists("FaceModelVersion",$param) and $param["FaceModelVersion"] !== null) {
            $this->FaceModelVersion = $param["FaceModelVersion"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
