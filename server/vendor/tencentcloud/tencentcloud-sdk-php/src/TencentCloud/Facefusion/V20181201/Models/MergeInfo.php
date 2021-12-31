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
 * 人脸图片和待被融合的素材模板图的人脸位置信息。
 *
 * @method string getImage() 获取输入图片base64
 * @method void setImage(string $Image) 设置输入图片base64
 * @method string getUrl() 获取输入图片url
 * @method void setUrl(string $Url) 设置输入图片url
 * @method FaceRect getInputImageFaceRect() 获取上传的图片人脸位置信息（人脸框）
 * @method void setInputImageFaceRect(FaceRect $InputImageFaceRect) 设置上传的图片人脸位置信息（人脸框）
 * @method string getTemplateFaceID() 获取控制台上传的素材人脸ID
 * @method void setTemplateFaceID(string $TemplateFaceID) 设置控制台上传的素材人脸ID
 */
class MergeInfo extends AbstractModel
{
    /**
     * @var string 输入图片base64
     */
    public $Image;

    /**
     * @var string 输入图片url
     */
    public $Url;

    /**
     * @var FaceRect 上传的图片人脸位置信息（人脸框）
     */
    public $InputImageFaceRect;

    /**
     * @var string 控制台上传的素材人脸ID
     */
    public $TemplateFaceID;

    /**
     * @param string $Image 输入图片base64
     * @param string $Url 输入图片url
     * @param FaceRect $InputImageFaceRect 上传的图片人脸位置信息（人脸框）
     * @param string $TemplateFaceID 控制台上传的素材人脸ID
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
        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("InputImageFaceRect",$param) and $param["InputImageFaceRect"] !== null) {
            $this->InputImageFaceRect = new FaceRect();
            $this->InputImageFaceRect->deserialize($param["InputImageFaceRect"]);
        }

        if (array_key_exists("TemplateFaceID",$param) and $param["TemplateFaceID"] !== null) {
            $this->TemplateFaceID = $param["TemplateFaceID"];
        }
    }
}
