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
 * 用户自定义审核任务控制参数。
 *
 * @method UserDefineFaceReviewTemplateInfoForUpdate getFaceReviewInfo() 获取用户自定义人物审核控制参数。
 * @method void setFaceReviewInfo(UserDefineFaceReviewTemplateInfoForUpdate $FaceReviewInfo) 设置用户自定义人物审核控制参数。
 * @method UserDefineAsrTextReviewTemplateInfoForUpdate getAsrReviewInfo() 获取用户自定义语音审核控制参数。
 * @method void setAsrReviewInfo(UserDefineAsrTextReviewTemplateInfoForUpdate $AsrReviewInfo) 设置用户自定义语音审核控制参数。
 * @method UserDefineOcrTextReviewTemplateInfoForUpdate getOcrReviewInfo() 获取用户自定义文本审核控制参数。
 * @method void setOcrReviewInfo(UserDefineOcrTextReviewTemplateInfoForUpdate $OcrReviewInfo) 设置用户自定义文本审核控制参数。
 */
class UserDefineConfigureInfoForUpdate extends AbstractModel
{
    /**
     * @var UserDefineFaceReviewTemplateInfoForUpdate 用户自定义人物审核控制参数。
     */
    public $FaceReviewInfo;

    /**
     * @var UserDefineAsrTextReviewTemplateInfoForUpdate 用户自定义语音审核控制参数。
     */
    public $AsrReviewInfo;

    /**
     * @var UserDefineOcrTextReviewTemplateInfoForUpdate 用户自定义文本审核控制参数。
     */
    public $OcrReviewInfo;

    /**
     * @param UserDefineFaceReviewTemplateInfoForUpdate $FaceReviewInfo 用户自定义人物审核控制参数。
     * @param UserDefineAsrTextReviewTemplateInfoForUpdate $AsrReviewInfo 用户自定义语音审核控制参数。
     * @param UserDefineOcrTextReviewTemplateInfoForUpdate $OcrReviewInfo 用户自定义文本审核控制参数。
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
        if (array_key_exists("FaceReviewInfo",$param) and $param["FaceReviewInfo"] !== null) {
            $this->FaceReviewInfo = new UserDefineFaceReviewTemplateInfoForUpdate();
            $this->FaceReviewInfo->deserialize($param["FaceReviewInfo"]);
        }

        if (array_key_exists("AsrReviewInfo",$param) and $param["AsrReviewInfo"] !== null) {
            $this->AsrReviewInfo = new UserDefineAsrTextReviewTemplateInfoForUpdate();
            $this->AsrReviewInfo->deserialize($param["AsrReviewInfo"]);
        }

        if (array_key_exists("OcrReviewInfo",$param) and $param["OcrReviewInfo"] !== null) {
            $this->OcrReviewInfo = new UserDefineOcrTextReviewTemplateInfoForUpdate();
            $this->OcrReviewInfo->deserialize($param["OcrReviewInfo"]);
        }
    }
}
