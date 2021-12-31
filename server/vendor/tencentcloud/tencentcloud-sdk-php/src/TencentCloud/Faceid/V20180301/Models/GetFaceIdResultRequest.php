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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetFaceIdResult请求参数结构体
 *
 * @method string getFaceIdToken() 获取SDK人脸核身流程的标识，调用GetFaceIdToken接口时生成。
 * @method void setFaceIdToken(string $FaceIdToken) 设置SDK人脸核身流程的标识，调用GetFaceIdToken接口时生成。
 * @method boolean getIsNeedVideo() 获取是否需要拉取视频，默认false不需要
 * @method void setIsNeedVideo(boolean $IsNeedVideo) 设置是否需要拉取视频，默认false不需要
 * @method boolean getIsNeedBestFrame() 获取是否需要拉取截帧，默认false不需要
 * @method void setIsNeedBestFrame(boolean $IsNeedBestFrame) 设置是否需要拉取截帧，默认false不需要
 */
class GetFaceIdResultRequest extends AbstractModel
{
    /**
     * @var string SDK人脸核身流程的标识，调用GetFaceIdToken接口时生成。
     */
    public $FaceIdToken;

    /**
     * @var boolean 是否需要拉取视频，默认false不需要
     */
    public $IsNeedVideo;

    /**
     * @var boolean 是否需要拉取截帧，默认false不需要
     */
    public $IsNeedBestFrame;

    /**
     * @param string $FaceIdToken SDK人脸核身流程的标识，调用GetFaceIdToken接口时生成。
     * @param boolean $IsNeedVideo 是否需要拉取视频，默认false不需要
     * @param boolean $IsNeedBestFrame 是否需要拉取截帧，默认false不需要
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
        if (array_key_exists("FaceIdToken",$param) and $param["FaceIdToken"] !== null) {
            $this->FaceIdToken = $param["FaceIdToken"];
        }

        if (array_key_exists("IsNeedVideo",$param) and $param["IsNeedVideo"] !== null) {
            $this->IsNeedVideo = $param["IsNeedVideo"];
        }

        if (array_key_exists("IsNeedBestFrame",$param) and $param["IsNeedBestFrame"] !== null) {
            $this->IsNeedBestFrame = $param["IsNeedBestFrame"];
        }
    }
}
