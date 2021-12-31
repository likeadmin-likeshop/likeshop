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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 鉴黄任务控制参数。
 *
 * @method PornImgReviewTemplateInfoForUpdate getImgReviewInfo() 获取画面鉴黄控制参数。
 * @method void setImgReviewInfo(PornImgReviewTemplateInfoForUpdate $ImgReviewInfo) 设置画面鉴黄控制参数。
 * @method PornAsrReviewTemplateInfoForUpdate getAsrReviewInfo() 获取语音鉴黄控制参数。
 * @method void setAsrReviewInfo(PornAsrReviewTemplateInfoForUpdate $AsrReviewInfo) 设置语音鉴黄控制参数。
 * @method PornOcrReviewTemplateInfoForUpdate getOcrReviewInfo() 获取文本鉴黄控制参数。
 * @method void setOcrReviewInfo(PornOcrReviewTemplateInfoForUpdate $OcrReviewInfo) 设置文本鉴黄控制参数。
 */
class PornConfigureInfoForUpdate extends AbstractModel
{
    /**
     * @var PornImgReviewTemplateInfoForUpdate 画面鉴黄控制参数。
     */
    public $ImgReviewInfo;

    /**
     * @var PornAsrReviewTemplateInfoForUpdate 语音鉴黄控制参数。
     */
    public $AsrReviewInfo;

    /**
     * @var PornOcrReviewTemplateInfoForUpdate 文本鉴黄控制参数。
     */
    public $OcrReviewInfo;

    /**
     * @param PornImgReviewTemplateInfoForUpdate $ImgReviewInfo 画面鉴黄控制参数。
     * @param PornAsrReviewTemplateInfoForUpdate $AsrReviewInfo 语音鉴黄控制参数。
     * @param PornOcrReviewTemplateInfoForUpdate $OcrReviewInfo 文本鉴黄控制参数。
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
            $this->ImgReviewInfo = new PornImgReviewTemplateInfoForUpdate();
            $this->ImgReviewInfo->deserialize($param["ImgReviewInfo"]);
        }

        if (array_key_exists("AsrReviewInfo",$param) and $param["AsrReviewInfo"] !== null) {
            $this->AsrReviewInfo = new PornAsrReviewTemplateInfoForUpdate();
            $this->AsrReviewInfo->deserialize($param["AsrReviewInfo"]);
        }

        if (array_key_exists("OcrReviewInfo",$param) and $param["OcrReviewInfo"] !== null) {
            $this->OcrReviewInfo = new PornOcrReviewTemplateInfoForUpdate();
            $this->OcrReviewInfo->deserialize($param["OcrReviewInfo"]);
        }
    }
}
