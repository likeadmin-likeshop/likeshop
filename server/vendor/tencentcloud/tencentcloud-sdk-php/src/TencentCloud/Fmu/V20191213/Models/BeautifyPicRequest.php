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
 * BeautifyPic请求参数结构体
 *
 * @method string getImage() 获取图片 base64 数据，base64 编码后大小不可超过5M。 
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
 * @method void setImage(string $Image) 设置图片 base64 数据，base64 编码后大小不可超过5M。 
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
 * @method string getUrl() 获取图片的 Url 。对应图片 base64 编码后大小不可超过5M。 
Url、Image必须提供一个，如果都提供，只使用 Url。  
图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。  
非腾讯云存储的Url速度和稳定性可能受一定影响。 
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
 * @method void setUrl(string $Url) 设置图片的 Url 。对应图片 base64 编码后大小不可超过5M。 
Url、Image必须提供一个，如果都提供，只使用 Url。  
图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。  
非腾讯云存储的Url速度和稳定性可能受一定影响。 
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
 * @method integer getWhitening() 获取美白程度，取值范围[0,100]。0不美白，100代表最高程度。默认值30。
 * @method void setWhitening(integer $Whitening) 设置美白程度，取值范围[0,100]。0不美白，100代表最高程度。默认值30。
 * @method integer getSmoothing() 获取磨皮程度，取值范围[0,100]。0不磨皮，100代表最高程度。默认值10。
 * @method void setSmoothing(integer $Smoothing) 设置磨皮程度，取值范围[0,100]。0不磨皮，100代表最高程度。默认值10。
 * @method integer getFaceLifting() 获取瘦脸程度，取值范围[0,100]。0不瘦脸，100代表最高程度。默认值70。
 * @method void setFaceLifting(integer $FaceLifting) 设置瘦脸程度，取值范围[0,100]。0不瘦脸，100代表最高程度。默认值70。
 * @method integer getEyeEnlarging() 获取大眼程度，取值范围[0,100]。0不大眼，100代表最高程度。默认值70。
 * @method void setEyeEnlarging(integer $EyeEnlarging) 设置大眼程度，取值范围[0,100]。0不大眼，100代表最高程度。默认值70。
 * @method string getRspImgType() 获取返回图像方式（base64 或 url ) ，二选一。url有效期为1天。
 * @method void setRspImgType(string $RspImgType) 设置返回图像方式（base64 或 url ) ，二选一。url有效期为1天。
 */
class BeautifyPicRequest extends AbstractModel
{
    /**
     * @var string 图片 base64 数据，base64 编码后大小不可超过5M。 
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
     */
    public $Image;

    /**
     * @var string 图片的 Url 。对应图片 base64 编码后大小不可超过5M。 
Url、Image必须提供一个，如果都提供，只使用 Url。  
图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。  
非腾讯云存储的Url速度和稳定性可能受一定影响。 
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
     */
    public $Url;

    /**
     * @var integer 美白程度，取值范围[0,100]。0不美白，100代表最高程度。默认值30。
     */
    public $Whitening;

    /**
     * @var integer 磨皮程度，取值范围[0,100]。0不磨皮，100代表最高程度。默认值10。
     */
    public $Smoothing;

    /**
     * @var integer 瘦脸程度，取值范围[0,100]。0不瘦脸，100代表最高程度。默认值70。
     */
    public $FaceLifting;

    /**
     * @var integer 大眼程度，取值范围[0,100]。0不大眼，100代表最高程度。默认值70。
     */
    public $EyeEnlarging;

    /**
     * @var string 返回图像方式（base64 或 url ) ，二选一。url有效期为1天。
     */
    public $RspImgType;

    /**
     * @param string $Image 图片 base64 数据，base64 编码后大小不可超过5M。 
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
     * @param string $Url 图片的 Url 。对应图片 base64 编码后大小不可超过5M。 
Url、Image必须提供一个，如果都提供，只使用 Url。  
图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。  
非腾讯云存储的Url速度和稳定性可能受一定影响。 
支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。
     * @param integer $Whitening 美白程度，取值范围[0,100]。0不美白，100代表最高程度。默认值30。
     * @param integer $Smoothing 磨皮程度，取值范围[0,100]。0不磨皮，100代表最高程度。默认值10。
     * @param integer $FaceLifting 瘦脸程度，取值范围[0,100]。0不瘦脸，100代表最高程度。默认值70。
     * @param integer $EyeEnlarging 大眼程度，取值范围[0,100]。0不大眼，100代表最高程度。默认值70。
     * @param string $RspImgType 返回图像方式（base64 或 url ) ，二选一。url有效期为1天。
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

        if (array_key_exists("Whitening",$param) and $param["Whitening"] !== null) {
            $this->Whitening = $param["Whitening"];
        }

        if (array_key_exists("Smoothing",$param) and $param["Smoothing"] !== null) {
            $this->Smoothing = $param["Smoothing"];
        }

        if (array_key_exists("FaceLifting",$param) and $param["FaceLifting"] !== null) {
            $this->FaceLifting = $param["FaceLifting"];
        }

        if (array_key_exists("EyeEnlarging",$param) and $param["EyeEnlarging"] !== null) {
            $this->EyeEnlarging = $param["EyeEnlarging"];
        }

        if (array_key_exists("RspImgType",$param) and $param["RspImgType"] !== null) {
            $this->RspImgType = $param["RspImgType"];
        }
    }
}
