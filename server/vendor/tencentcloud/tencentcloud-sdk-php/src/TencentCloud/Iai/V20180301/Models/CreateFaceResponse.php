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
namespace TencentCloud\Iai\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateFace返回参数结构体
 *
 * @method integer getSucFaceNum() 获取加入成功的人脸数量
 * @method void setSucFaceNum(integer $SucFaceNum) 设置加入成功的人脸数量
 * @method array getSucFaceIds() 获取加入成功的人脸ID列表
 * @method void setSucFaceIds(array $SucFaceIds) 设置加入成功的人脸ID列表
 * @method array getRetCode() 获取每张人脸图片添加结果，-1101 代表未检测到人脸，-1102 代表图片解码失败， 
-1601代表不符合图片质量控制要求, -1604 代表人脸相似度没有超过FaceMatchThreshold。 
其他非 0 值代表算法服务异常。 
RetCode的顺序和入参中 Images 或 Urls 的顺序一致。
 * @method void setRetCode(array $RetCode) 设置每张人脸图片添加结果，-1101 代表未检测到人脸，-1102 代表图片解码失败， 
-1601代表不符合图片质量控制要求, -1604 代表人脸相似度没有超过FaceMatchThreshold。 
其他非 0 值代表算法服务异常。 
RetCode的顺序和入参中 Images 或 Urls 的顺序一致。
 * @method array getSucIndexes() 获取加入成功的人脸索引。索引顺序和入参中 Images 或 Urls 的顺序一致。 
例， Urls 中 有 3 个 url，第二个 url 失败，则 SucIndexes 值为 [0,2] 。
 * @method void setSucIndexes(array $SucIndexes) 设置加入成功的人脸索引。索引顺序和入参中 Images 或 Urls 的顺序一致。 
例， Urls 中 有 3 个 url，第二个 url 失败，则 SucIndexes 值为 [0,2] 。
 * @method array getSucFaceRects() 获取加入成功的人脸框位置。顺序和入参中 Images 或 Urls 的顺序一致。
 * @method void setSucFaceRects(array $SucFaceRects) 设置加入成功的人脸框位置。顺序和入参中 Images 或 Urls 的顺序一致。
 * @method string getFaceModelVersion() 获取人脸识别所用的算法模型版本。
 * @method void setFaceModelVersion(string $FaceModelVersion) 设置人脸识别所用的算法模型版本。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateFaceResponse extends AbstractModel
{
    /**
     * @var integer 加入成功的人脸数量
     */
    public $SucFaceNum;

    /**
     * @var array 加入成功的人脸ID列表
     */
    public $SucFaceIds;

    /**
     * @var array 每张人脸图片添加结果，-1101 代表未检测到人脸，-1102 代表图片解码失败， 
-1601代表不符合图片质量控制要求, -1604 代表人脸相似度没有超过FaceMatchThreshold。 
其他非 0 值代表算法服务异常。 
RetCode的顺序和入参中 Images 或 Urls 的顺序一致。
     */
    public $RetCode;

    /**
     * @var array 加入成功的人脸索引。索引顺序和入参中 Images 或 Urls 的顺序一致。 
例， Urls 中 有 3 个 url，第二个 url 失败，则 SucIndexes 值为 [0,2] 。
     */
    public $SucIndexes;

    /**
     * @var array 加入成功的人脸框位置。顺序和入参中 Images 或 Urls 的顺序一致。
     */
    public $SucFaceRects;

    /**
     * @var string 人脸识别所用的算法模型版本。
     */
    public $FaceModelVersion;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $SucFaceNum 加入成功的人脸数量
     * @param array $SucFaceIds 加入成功的人脸ID列表
     * @param array $RetCode 每张人脸图片添加结果，-1101 代表未检测到人脸，-1102 代表图片解码失败， 
-1601代表不符合图片质量控制要求, -1604 代表人脸相似度没有超过FaceMatchThreshold。 
其他非 0 值代表算法服务异常。 
RetCode的顺序和入参中 Images 或 Urls 的顺序一致。
     * @param array $SucIndexes 加入成功的人脸索引。索引顺序和入参中 Images 或 Urls 的顺序一致。 
例， Urls 中 有 3 个 url，第二个 url 失败，则 SucIndexes 值为 [0,2] 。
     * @param array $SucFaceRects 加入成功的人脸框位置。顺序和入参中 Images 或 Urls 的顺序一致。
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
        if (array_key_exists("SucFaceNum",$param) and $param["SucFaceNum"] !== null) {
            $this->SucFaceNum = $param["SucFaceNum"];
        }

        if (array_key_exists("SucFaceIds",$param) and $param["SucFaceIds"] !== null) {
            $this->SucFaceIds = $param["SucFaceIds"];
        }

        if (array_key_exists("RetCode",$param) and $param["RetCode"] !== null) {
            $this->RetCode = $param["RetCode"];
        }

        if (array_key_exists("SucIndexes",$param) and $param["SucIndexes"] !== null) {
            $this->SucIndexes = $param["SucIndexes"];
        }

        if (array_key_exists("SucFaceRects",$param) and $param["SucFaceRects"] !== null) {
            $this->SucFaceRects = [];
            foreach ($param["SucFaceRects"] as $key => $value){
                $obj = new FaceRect();
                $obj->deserialize($value);
                array_push($this->SucFaceRects, $obj);
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
