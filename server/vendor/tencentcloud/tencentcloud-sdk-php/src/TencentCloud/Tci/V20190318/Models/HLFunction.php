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
namespace TencentCloud\Tci\V20190318\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 检索配置开关项
 *
 * @method boolean getEnableFaceDetect() 获取是否开启人脸检测
 * @method void setEnableFaceDetect(boolean $EnableFaceDetect) 设置是否开启人脸检测
 * @method boolean getEnableFaceExpression() 获取是否开启表情识别
 * @method void setEnableFaceExpression(boolean $EnableFaceExpression) 设置是否开启表情识别
 * @method boolean getEnableFaceIdent() 获取是否开启人脸检索
 * @method void setEnableFaceIdent(boolean $EnableFaceIdent) 设置是否开启人脸检索
 * @method boolean getEnableKeywordWonderfulTime() 获取是否开启视频集锦-老师关键字识别
 * @method void setEnableKeywordWonderfulTime(boolean $EnableKeywordWonderfulTime) 设置是否开启视频集锦-老师关键字识别
 * @method boolean getEnableSmileWonderfulTime() 获取是否开启视频集锦-微笑识别
 * @method void setEnableSmileWonderfulTime(boolean $EnableSmileWonderfulTime) 设置是否开启视频集锦-微笑识别
 */
class HLFunction extends AbstractModel
{
    /**
     * @var boolean 是否开启人脸检测
     */
    public $EnableFaceDetect;

    /**
     * @var boolean 是否开启表情识别
     */
    public $EnableFaceExpression;

    /**
     * @var boolean 是否开启人脸检索
     */
    public $EnableFaceIdent;

    /**
     * @var boolean 是否开启视频集锦-老师关键字识别
     */
    public $EnableKeywordWonderfulTime;

    /**
     * @var boolean 是否开启视频集锦-微笑识别
     */
    public $EnableSmileWonderfulTime;

    /**
     * @param boolean $EnableFaceDetect 是否开启人脸检测
     * @param boolean $EnableFaceExpression 是否开启表情识别
     * @param boolean $EnableFaceIdent 是否开启人脸检索
     * @param boolean $EnableKeywordWonderfulTime 是否开启视频集锦-老师关键字识别
     * @param boolean $EnableSmileWonderfulTime 是否开启视频集锦-微笑识别
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
        if (array_key_exists("EnableFaceDetect",$param) and $param["EnableFaceDetect"] !== null) {
            $this->EnableFaceDetect = $param["EnableFaceDetect"];
        }

        if (array_key_exists("EnableFaceExpression",$param) and $param["EnableFaceExpression"] !== null) {
            $this->EnableFaceExpression = $param["EnableFaceExpression"];
        }

        if (array_key_exists("EnableFaceIdent",$param) and $param["EnableFaceIdent"] !== null) {
            $this->EnableFaceIdent = $param["EnableFaceIdent"];
        }

        if (array_key_exists("EnableKeywordWonderfulTime",$param) and $param["EnableKeywordWonderfulTime"] !== null) {
            $this->EnableKeywordWonderfulTime = $param["EnableKeywordWonderfulTime"];
        }

        if (array_key_exists("EnableSmileWonderfulTime",$param) and $param["EnableSmileWonderfulTime"] !== null) {
            $this->EnableSmileWonderfulTime = $param["EnableSmileWonderfulTime"];
        }
    }
}
