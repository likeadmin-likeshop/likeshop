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
namespace TencentCloud\Facefusion\V20181201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 人脸信息
 *
 * @method string getFaceId() 获取人脸序号
 * @method void setFaceId(string $FaceId) 设置人脸序号
 * @method FaceInfo getFaceInfo() 获取人脸框信息
 * @method void setFaceInfo(FaceInfo $FaceInfo) 设置人脸框信息
 */
class MaterialFaceList extends AbstractModel
{
    /**
     * @var string 人脸序号
     */
    public $FaceId;

    /**
     * @var FaceInfo 人脸框信息
     */
    public $FaceInfo;

    /**
     * @param string $FaceId 人脸序号
     * @param FaceInfo $FaceInfo 人脸框信息
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
        if (array_key_exists("FaceId",$param) and $param["FaceId"] !== null) {
            $this->FaceId = $param["FaceId"];
        }

        if (array_key_exists("FaceInfo",$param) and $param["FaceInfo"] !== null) {
            $this->FaceInfo = new FaceInfo();
            $this->FaceInfo->deserialize($param["FaceInfo"]);
        }
    }
}
