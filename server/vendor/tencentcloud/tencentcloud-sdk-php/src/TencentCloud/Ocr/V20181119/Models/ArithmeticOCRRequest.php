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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ArithmeticOCR请求参数结构体
 *
 * @method string getImageBase64() 获取图片的 Base64 值。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经Base64编码后不超过 7M。图片下载时间不超过 3 秒。
图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
 * @method void setImageBase64(string $ImageBase64) 设置图片的 Base64 值。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经Base64编码后不超过 7M。图片下载时间不超过 3 秒。
图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
 * @method string getImageUrl() 获取图片的 Url 地址。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经 Base64 编码后不超过 7M。图片下载时间不超过 3 秒。
图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。
非腾讯云存储的 Url 速度和稳定性可能受一定影响。
 * @method void setImageUrl(string $ImageUrl) 设置图片的 Url 地址。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经 Base64 编码后不超过 7M。图片下载时间不超过 3 秒。
图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。
非腾讯云存储的 Url 速度和稳定性可能受一定影响。
 * @method boolean getSupportHorizontalImage() 获取用于选择是否支持横屏拍摄。打开则支持横屏拍摄图片角度判断，角度信息在返回参数的angle中，默认值为true
 * @method void setSupportHorizontalImage(boolean $SupportHorizontalImage) 设置用于选择是否支持横屏拍摄。打开则支持横屏拍摄图片角度判断，角度信息在返回参数的angle中，默认值为true
 * @method boolean getRejectNonArithmeticPic() 获取是否拒绝非速算图，打开则拒绝非速算图(注：非速算图是指风景人物等明显不是速算图片的图片)，默认值为false
 * @method void setRejectNonArithmeticPic(boolean $RejectNonArithmeticPic) 设置是否拒绝非速算图，打开则拒绝非速算图(注：非速算图是指风景人物等明显不是速算图片的图片)，默认值为false
 * @method boolean getEnableDispRelatedVertical() 获取是否展开耦合算式中的竖式计算，默认值为false
 * @method void setEnableDispRelatedVertical(boolean $EnableDispRelatedVertical) 设置是否展开耦合算式中的竖式计算，默认值为false
 * @method boolean getEnableDispMidResult() 获取是否展示竖式算式的中间结果和格式控制字符，默认值为false
 * @method void setEnableDispMidResult(boolean $EnableDispMidResult) 设置是否展示竖式算式的中间结果和格式控制字符，默认值为false
 * @method boolean getEnablePdfRecognize() 获取是否开启pdf识别，默认值为true
 * @method void setEnablePdfRecognize(boolean $EnablePdfRecognize) 设置是否开启pdf识别，默认值为true
 * @method integer getPdfPageIndex() 获取pdf页码，从0开始，默认为0
 * @method void setPdfPageIndex(integer $PdfPageIndex) 设置pdf页码，从0开始，默认为0
 */
class ArithmeticOCRRequest extends AbstractModel
{
    /**
     * @var string 图片的 Base64 值。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经Base64编码后不超过 7M。图片下载时间不超过 3 秒。
图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
     */
    public $ImageBase64;

    /**
     * @var string 图片的 Url 地址。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经 Base64 编码后不超过 7M。图片下载时间不超过 3 秒。
图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。
非腾讯云存储的 Url 速度和稳定性可能受一定影响。
     */
    public $ImageUrl;

    /**
     * @var boolean 用于选择是否支持横屏拍摄。打开则支持横屏拍摄图片角度判断，角度信息在返回参数的angle中，默认值为true
     */
    public $SupportHorizontalImage;

    /**
     * @var boolean 是否拒绝非速算图，打开则拒绝非速算图(注：非速算图是指风景人物等明显不是速算图片的图片)，默认值为false
     */
    public $RejectNonArithmeticPic;

    /**
     * @var boolean 是否展开耦合算式中的竖式计算，默认值为false
     */
    public $EnableDispRelatedVertical;

    /**
     * @var boolean 是否展示竖式算式的中间结果和格式控制字符，默认值为false
     */
    public $EnableDispMidResult;

    /**
     * @var boolean 是否开启pdf识别，默认值为true
     */
    public $EnablePdfRecognize;

    /**
     * @var integer pdf页码，从0开始，默认为0
     */
    public $PdfPageIndex;

    /**
     * @param string $ImageBase64 图片的 Base64 值。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经Base64编码后不超过 7M。图片下载时间不超过 3 秒。
图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
     * @param string $ImageUrl 图片的 Url 地址。
支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
支持的图片大小：所下载图片经 Base64 编码后不超过 7M。图片下载时间不超过 3 秒。
图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。
非腾讯云存储的 Url 速度和稳定性可能受一定影响。
     * @param boolean $SupportHorizontalImage 用于选择是否支持横屏拍摄。打开则支持横屏拍摄图片角度判断，角度信息在返回参数的angle中，默认值为true
     * @param boolean $RejectNonArithmeticPic 是否拒绝非速算图，打开则拒绝非速算图(注：非速算图是指风景人物等明显不是速算图片的图片)，默认值为false
     * @param boolean $EnableDispRelatedVertical 是否展开耦合算式中的竖式计算，默认值为false
     * @param boolean $EnableDispMidResult 是否展示竖式算式的中间结果和格式控制字符，默认值为false
     * @param boolean $EnablePdfRecognize 是否开启pdf识别，默认值为true
     * @param integer $PdfPageIndex pdf页码，从0开始，默认为0
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
        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("SupportHorizontalImage",$param) and $param["SupportHorizontalImage"] !== null) {
            $this->SupportHorizontalImage = $param["SupportHorizontalImage"];
        }

        if (array_key_exists("RejectNonArithmeticPic",$param) and $param["RejectNonArithmeticPic"] !== null) {
            $this->RejectNonArithmeticPic = $param["RejectNonArithmeticPic"];
        }

        if (array_key_exists("EnableDispRelatedVertical",$param) and $param["EnableDispRelatedVertical"] !== null) {
            $this->EnableDispRelatedVertical = $param["EnableDispRelatedVertical"];
        }

        if (array_key_exists("EnableDispMidResult",$param) and $param["EnableDispMidResult"] !== null) {
            $this->EnableDispMidResult = $param["EnableDispMidResult"];
        }

        if (array_key_exists("EnablePdfRecognize",$param) and $param["EnablePdfRecognize"] !== null) {
            $this->EnablePdfRecognize = $param["EnablePdfRecognize"];
        }

        if (array_key_exists("PdfPageIndex",$param) and $param["PdfPageIndex"] !== null) {
            $this->PdfPageIndex = $param["PdfPageIndex"];
        }
    }
}
