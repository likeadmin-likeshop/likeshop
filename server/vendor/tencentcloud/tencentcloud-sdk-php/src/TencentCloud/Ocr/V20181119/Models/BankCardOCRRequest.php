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
 * BankCardOCR请求参数结构体
 *
 * @method string getImageBase64() 获取图片的 Base64 值。要求图片经Base64编码后不超过 7M，分辨率建议500*800以上，支持PNG、JPG、JPEG、BMP格式。建议卡片部分占据图片2/3以上。
图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
 * @method void setImageBase64(string $ImageBase64) 设置图片的 Base64 值。要求图片经Base64编码后不超过 7M，分辨率建议500*800以上，支持PNG、JPG、JPEG、BMP格式。建议卡片部分占据图片2/3以上。
图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
 * @method string getImageUrl() 获取图片的 Url 地址。要求图片经Base64编码后不超过 7M，分辨率建议500*800以上，支持PNG、JPG、JPEG、BMP格式。建议卡片部分占据图片2/3以上。
建议图片存储于腾讯云，可保障更高的下载速度和稳定性。
 * @method void setImageUrl(string $ImageUrl) 设置图片的 Url 地址。要求图片经Base64编码后不超过 7M，分辨率建议500*800以上，支持PNG、JPG、JPEG、BMP格式。建议卡片部分占据图片2/3以上。
建议图片存储于腾讯云，可保障更高的下载速度和稳定性。
 * @method boolean getRetBorderCutImage() 获取是否返回预处理（精确剪裁对齐）后的银行卡图片数据，默认false。
 * @method void setRetBorderCutImage(boolean $RetBorderCutImage) 设置是否返回预处理（精确剪裁对齐）后的银行卡图片数据，默认false。
 * @method boolean getRetCardNoImage() 获取是否返回卡号的切图图片数据，默认false。
 * @method void setRetCardNoImage(boolean $RetCardNoImage) 设置是否返回卡号的切图图片数据，默认false。
 * @method boolean getEnableCopyCheck() 获取复印件检测开关，如果输入的图片是银行卡复印件图片则返回告警，默认false。
 * @method void setEnableCopyCheck(boolean $EnableCopyCheck) 设置复印件检测开关，如果输入的图片是银行卡复印件图片则返回告警，默认false。
 * @method boolean getEnableReshootCheck() 获取翻拍检测开关，如果输入的图片是银行卡翻拍图片则返回告警，默认false。
 * @method void setEnableReshootCheck(boolean $EnableReshootCheck) 设置翻拍检测开关，如果输入的图片是银行卡翻拍图片则返回告警，默认false。
 * @method boolean getEnableBorderCheck() 获取边框遮挡检测开关，如果输入的图片是银行卡边框被遮挡则返回告警，默认false。
 * @method void setEnableBorderCheck(boolean $EnableBorderCheck) 设置边框遮挡检测开关，如果输入的图片是银行卡边框被遮挡则返回告警，默认false。
 */
class BankCardOCRRequest extends AbstractModel
{
    /**
     * @var string 图片的 Base64 值。要求图片经Base64编码后不超过 7M，分辨率建议500*800以上，支持PNG、JPG、JPEG、BMP格式。建议卡片部分占据图片2/3以上。
图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
     */
    public $ImageBase64;

    /**
     * @var string 图片的 Url 地址。要求图片经Base64编码后不超过 7M，分辨率建议500*800以上，支持PNG、JPG、JPEG、BMP格式。建议卡片部分占据图片2/3以上。
建议图片存储于腾讯云，可保障更高的下载速度和稳定性。
     */
    public $ImageUrl;

    /**
     * @var boolean 是否返回预处理（精确剪裁对齐）后的银行卡图片数据，默认false。
     */
    public $RetBorderCutImage;

    /**
     * @var boolean 是否返回卡号的切图图片数据，默认false。
     */
    public $RetCardNoImage;

    /**
     * @var boolean 复印件检测开关，如果输入的图片是银行卡复印件图片则返回告警，默认false。
     */
    public $EnableCopyCheck;

    /**
     * @var boolean 翻拍检测开关，如果输入的图片是银行卡翻拍图片则返回告警，默认false。
     */
    public $EnableReshootCheck;

    /**
     * @var boolean 边框遮挡检测开关，如果输入的图片是银行卡边框被遮挡则返回告警，默认false。
     */
    public $EnableBorderCheck;

    /**
     * @param string $ImageBase64 图片的 Base64 值。要求图片经Base64编码后不超过 7M，分辨率建议500*800以上，支持PNG、JPG、JPEG、BMP格式。建议卡片部分占据图片2/3以上。
图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
     * @param string $ImageUrl 图片的 Url 地址。要求图片经Base64编码后不超过 7M，分辨率建议500*800以上，支持PNG、JPG、JPEG、BMP格式。建议卡片部分占据图片2/3以上。
建议图片存储于腾讯云，可保障更高的下载速度和稳定性。
     * @param boolean $RetBorderCutImage 是否返回预处理（精确剪裁对齐）后的银行卡图片数据，默认false。
     * @param boolean $RetCardNoImage 是否返回卡号的切图图片数据，默认false。
     * @param boolean $EnableCopyCheck 复印件检测开关，如果输入的图片是银行卡复印件图片则返回告警，默认false。
     * @param boolean $EnableReshootCheck 翻拍检测开关，如果输入的图片是银行卡翻拍图片则返回告警，默认false。
     * @param boolean $EnableBorderCheck 边框遮挡检测开关，如果输入的图片是银行卡边框被遮挡则返回告警，默认false。
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

        if (array_key_exists("RetBorderCutImage",$param) and $param["RetBorderCutImage"] !== null) {
            $this->RetBorderCutImage = $param["RetBorderCutImage"];
        }

        if (array_key_exists("RetCardNoImage",$param) and $param["RetCardNoImage"] !== null) {
            $this->RetCardNoImage = $param["RetCardNoImage"];
        }

        if (array_key_exists("EnableCopyCheck",$param) and $param["EnableCopyCheck"] !== null) {
            $this->EnableCopyCheck = $param["EnableCopyCheck"];
        }

        if (array_key_exists("EnableReshootCheck",$param) and $param["EnableReshootCheck"] !== null) {
            $this->EnableReshootCheck = $param["EnableReshootCheck"];
        }

        if (array_key_exists("EnableBorderCheck",$param) and $param["EnableBorderCheck"] !== null) {
            $this->EnableBorderCheck = $param["EnableBorderCheck"];
        }
    }
}
