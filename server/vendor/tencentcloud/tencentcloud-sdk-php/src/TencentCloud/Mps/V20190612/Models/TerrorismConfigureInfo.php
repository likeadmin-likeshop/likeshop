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
 * 鉴恐任务控制参数
 *
 * @method TerrorismImgReviewTemplateInfo getImgReviewInfo() 获取画面鉴恐任务控制参数。
 * @method void setImgReviewInfo(TerrorismImgReviewTemplateInfo $ImgReviewInfo) 设置画面鉴恐任务控制参数。
 * @method TerrorismOcrReviewTemplateInfo getOcrReviewInfo() 获取文本鉴恐任务控制参数。
 * @method void setOcrReviewInfo(TerrorismOcrReviewTemplateInfo $OcrReviewInfo) 设置文本鉴恐任务控制参数。
 */
class TerrorismConfigureInfo extends AbstractModel
{
    /**
     * @var TerrorismImgReviewTemplateInfo 画面鉴恐任务控制参数。
     */
    public $ImgReviewInfo;

    /**
     * @var TerrorismOcrReviewTemplateInfo 文本鉴恐任务控制参数。
     */
    public $OcrReviewInfo;

    /**
     * @param TerrorismImgReviewTemplateInfo $ImgReviewInfo 画面鉴恐任务控制参数。
     * @param TerrorismOcrReviewTemplateInfo $OcrReviewInfo 文本鉴恐任务控制参数。
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
            $this->ImgReviewInfo = new TerrorismImgReviewTemplateInfo();
            $this->ImgReviewInfo->deserialize($param["ImgReviewInfo"]);
        }

        if (array_key_exists("OcrReviewInfo",$param) and $param["OcrReviewInfo"] !== null) {
            $this->OcrReviewInfo = new TerrorismOcrReviewTemplateInfo();
            $this->OcrReviewInfo->deserialize($param["OcrReviewInfo"]);
        }
    }
}
