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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 鉴黄任务控制参数
 *
 * @method PornImgReviewTemplateInfo getImgReviewInfo() 获取画面鉴黄控制参数。
 * @method void setImgReviewInfo(PornImgReviewTemplateInfo $ImgReviewInfo) 设置画面鉴黄控制参数。
 * @method PornAsrReviewTemplateInfo getAsrReviewInfo() 获取语音鉴黄控制参数。
 * @method void setAsrReviewInfo(PornAsrReviewTemplateInfo $AsrReviewInfo) 设置语音鉴黄控制参数。
 * @method PornOcrReviewTemplateInfo getOcrReviewInfo() 获取文本鉴黄控制参数。
 * @method void setOcrReviewInfo(PornOcrReviewTemplateInfo $OcrReviewInfo) 设置文本鉴黄控制参数。
 */
class PornConfigureInfo extends AbstractModel
{
    /**
     * @var PornImgReviewTemplateInfo 画面鉴黄控制参数。
     */
    public $ImgReviewInfo;

    /**
     * @var PornAsrReviewTemplateInfo 语音鉴黄控制参数。
     */
    public $AsrReviewInfo;

    /**
     * @var PornOcrReviewTemplateInfo 文本鉴黄控制参数。
     */
    public $OcrReviewInfo;

    /**
     * @param PornImgReviewTemplateInfo $ImgReviewInfo 画面鉴黄控制参数。
     * @param PornAsrReviewTemplateInfo $AsrReviewInfo 语音鉴黄控制参数。
     * @param PornOcrReviewTemplateInfo $OcrReviewInfo 文本鉴黄控制参数。
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
        if (array_key_exists("ImgReviewInfo",$param) and $param["ImgReviewInfo"] !== null) {
            $this->ImgReviewInfo = new PornImgReviewTemplateInfo();
            $this->ImgReviewInfo->deserialize($param["ImgReviewInfo"]);
        }

        if (array_key_exists("AsrReviewInfo",$param) and $param["AsrReviewInfo"] !== null) {
            $this->AsrReviewInfo = new PornAsrReviewTemplateInfo();
            $this->AsrReviewInfo->deserialize($param["AsrReviewInfo"]);
        }

        if (array_key_exists("OcrReviewInfo",$param) and $param["OcrReviewInfo"] !== null) {
            $this->OcrReviewInfo = new PornOcrReviewTemplateInfo();
            $this->OcrReviewInfo->deserialize($param["OcrReviewInfo"]);
        }
    }
}
