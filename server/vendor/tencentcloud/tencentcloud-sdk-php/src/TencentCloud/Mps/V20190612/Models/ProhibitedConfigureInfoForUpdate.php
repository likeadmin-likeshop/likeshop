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
 * 违禁任务控制参数
 *
 * @method ProhibitedAsrReviewTemplateInfoForUpdate getAsrReviewInfo() 获取语音违禁控制参数。
 * @method void setAsrReviewInfo(ProhibitedAsrReviewTemplateInfoForUpdate $AsrReviewInfo) 设置语音违禁控制参数。
 * @method ProhibitedOcrReviewTemplateInfoForUpdate getOcrReviewInfo() 获取文本违禁控制参数。
 * @method void setOcrReviewInfo(ProhibitedOcrReviewTemplateInfoForUpdate $OcrReviewInfo) 设置文本违禁控制参数。
 */
class ProhibitedConfigureInfoForUpdate extends AbstractModel
{
    /**
     * @var ProhibitedAsrReviewTemplateInfoForUpdate 语音违禁控制参数。
     */
    public $AsrReviewInfo;

    /**
     * @var ProhibitedOcrReviewTemplateInfoForUpdate 文本违禁控制参数。
     */
    public $OcrReviewInfo;

    /**
     * @param ProhibitedAsrReviewTemplateInfoForUpdate $AsrReviewInfo 语音违禁控制参数。
     * @param ProhibitedOcrReviewTemplateInfoForUpdate $OcrReviewInfo 文本违禁控制参数。
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
        if (array_key_exists("AsrReviewInfo",$param) and $param["AsrReviewInfo"] !== null) {
            $this->AsrReviewInfo = new ProhibitedAsrReviewTemplateInfoForUpdate();
            $this->AsrReviewInfo->deserialize($param["AsrReviewInfo"]);
        }

        if (array_key_exists("OcrReviewInfo",$param) and $param["OcrReviewInfo"] !== null) {
            $this->OcrReviewInfo = new ProhibitedOcrReviewTemplateInfoForUpdate();
            $this->OcrReviewInfo->deserialize($param["OcrReviewInfo"]);
        }
    }
}
