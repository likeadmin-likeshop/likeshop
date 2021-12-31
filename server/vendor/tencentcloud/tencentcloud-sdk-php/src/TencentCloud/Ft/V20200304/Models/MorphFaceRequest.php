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
namespace TencentCloud\Ft\V20200304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MorphFace请求参数结构体
 *
 * @method array getImages() 获取图片 base64 数据，base64 编码后大小不可超过5M。 
jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。 
人员人脸总数量至少2张，不可超过5张。 
若图片中包含多张人脸，只选取其中人脸面积最大的人脸。 
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
 * @method void setImages(array $Images) 设置图片 base64 数据，base64 编码后大小不可超过5M。 
jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。 
人员人脸总数量至少2张，不可超过5张。 
若图片中包含多张人脸，只选取其中人脸面积最大的人脸。 
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
 * @method array getUrls() 获取图片的 Url 。对应图片 base64 编码后大小不可超过5M。jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。 
Url、Image必须提供一个，如果都提供，只使用 Url。图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。 
非腾讯云存储的Url速度和稳定性可能受一定影响。 
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。 
人员人脸总数量不可超过5张。 
若图片中包含多张人脸，只选取其中人脸面积最大的人脸。
 * @method void setUrls(array $Urls) 设置图片的 Url 。对应图片 base64 编码后大小不可超过5M。jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。 
Url、Image必须提供一个，如果都提供，只使用 Url。图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。 
非腾讯云存储的Url速度和稳定性可能受一定影响。 
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。 
人员人脸总数量不可超过5张。 
若图片中包含多张人脸，只选取其中人脸面积最大的人脸。
 * @method array getGradientInfos() 获取人脸渐变参数。可调整每张图片的展示时长、人像渐变的最长时间
 * @method void setGradientInfos(array $GradientInfos) 设置人脸渐变参数。可调整每张图片的展示时长、人像渐变的最长时间
 * @method integer getFps() 获取视频帧率，取值[1,25]。默认10
 * @method void setFps(integer $Fps) 设置视频帧率，取值[1,25]。默认10
 * @method integer getOutputType() 获取视频类型，取值0。目前仅支持MP4格式，默认为MP4格式
 * @method void setOutputType(integer $OutputType) 设置视频类型，取值0。目前仅支持MP4格式，默认为MP4格式
 * @method integer getOutputWidth() 获取视频宽度，取值[128,1280]。默认值720
 * @method void setOutputWidth(integer $OutputWidth) 设置视频宽度，取值[128,1280]。默认值720
 * @method integer getOutputHeight() 获取视频高度，取值[128,1280]。默认值1280
 * @method void setOutputHeight(integer $OutputHeight) 设置视频高度，取值[128,1280]。默认值1280
 */
class MorphFaceRequest extends AbstractModel
{
    /**
     * @var array 图片 base64 数据，base64 编码后大小不可超过5M。 
jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。 
人员人脸总数量至少2张，不可超过5张。 
若图片中包含多张人脸，只选取其中人脸面积最大的人脸。 
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
     */
    public $Images;

    /**
     * @var array 图片的 Url 。对应图片 base64 编码后大小不可超过5M。jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。 
Url、Image必须提供一个，如果都提供，只使用 Url。图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。 
非腾讯云存储的Url速度和稳定性可能受一定影响。 
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。 
人员人脸总数量不可超过5张。 
若图片中包含多张人脸，只选取其中人脸面积最大的人脸。
     */
    public $Urls;

    /**
     * @var array 人脸渐变参数。可调整每张图片的展示时长、人像渐变的最长时间
     */
    public $GradientInfos;

    /**
     * @var integer 视频帧率，取值[1,25]。默认10
     */
    public $Fps;

    /**
     * @var integer 视频类型，取值0。目前仅支持MP4格式，默认为MP4格式
     */
    public $OutputType;

    /**
     * @var integer 视频宽度，取值[128,1280]。默认值720
     */
    public $OutputWidth;

    /**
     * @var integer 视频高度，取值[128,1280]。默认值1280
     */
    public $OutputHeight;

    /**
     * @param array $Images 图片 base64 数据，base64 编码后大小不可超过5M。 
jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。 
人员人脸总数量至少2张，不可超过5张。 
若图片中包含多张人脸，只选取其中人脸面积最大的人脸。 
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
     * @param array $Urls 图片的 Url 。对应图片 base64 编码后大小不可超过5M。jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。 
Url、Image必须提供一个，如果都提供，只使用 Url。图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。 
非腾讯云存储的Url速度和稳定性可能受一定影响。 
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。 
人员人脸总数量不可超过5张。 
若图片中包含多张人脸，只选取其中人脸面积最大的人脸。
     * @param array $GradientInfos 人脸渐变参数。可调整每张图片的展示时长、人像渐变的最长时间
     * @param integer $Fps 视频帧率，取值[1,25]。默认10
     * @param integer $OutputType 视频类型，取值0。目前仅支持MP4格式，默认为MP4格式
     * @param integer $OutputWidth 视频宽度，取值[128,1280]。默认值720
     * @param integer $OutputHeight 视频高度，取值[128,1280]。默认值1280
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
        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = $param["Images"];
        }

        if (array_key_exists("Urls",$param) and $param["Urls"] !== null) {
            $this->Urls = $param["Urls"];
        }

        if (array_key_exists("GradientInfos",$param) and $param["GradientInfos"] !== null) {
            $this->GradientInfos = [];
            foreach ($param["GradientInfos"] as $key => $value){
                $obj = new GradientInfo();
                $obj->deserialize($value);
                array_push($this->GradientInfos, $obj);
            }
        }

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }

        if (array_key_exists("OutputType",$param) and $param["OutputType"] !== null) {
            $this->OutputType = $param["OutputType"];
        }

        if (array_key_exists("OutputWidth",$param) and $param["OutputWidth"] !== null) {
            $this->OutputWidth = $param["OutputWidth"];
        }

        if (array_key_exists("OutputHeight",$param) and $param["OutputHeight"] !== null) {
            $this->OutputHeight = $param["OutputHeight"];
        }
    }
}
