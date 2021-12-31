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
 * DetectLiveFaceAccurate返回参数结构体
 *
 * @method float getScore() 获取活体打分，取值范围 [0,100]，根据活体分数对应的阈值区间来判断是否为翻拍。目前阈值可分为[5,10,40,70,90]，其中推荐阈值为40。
 * @method void setScore(float $Score) 设置活体打分，取值范围 [0,100]，根据活体分数对应的阈值区间来判断是否为翻拍。目前阈值可分为[5,10,40,70,90]，其中推荐阈值为40。
 * @method string getFaceModelVersion() 获取人脸识别所用的算法模型版本。
 * @method void setFaceModelVersion(string $FaceModelVersion) 设置人脸识别所用的算法模型版本。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DetectLiveFaceAccurateResponse extends AbstractModel
{
    /**
     * @var float 活体打分，取值范围 [0,100]，根据活体分数对应的阈值区间来判断是否为翻拍。目前阈值可分为[5,10,40,70,90]，其中推荐阈值为40。
     */
    public $Score;

    /**
     * @var string 人脸识别所用的算法模型版本。
     */
    public $FaceModelVersion;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param float $Score 活体打分，取值范围 [0,100]，根据活体分数对应的阈值区间来判断是否为翻拍。目前阈值可分为[5,10,40,70,90]，其中推荐阈值为40。
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
        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("FaceModelVersion",$param) and $param["FaceModelVersion"] !== null) {
            $this->FaceModelVersion = $param["FaceModelVersion"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
