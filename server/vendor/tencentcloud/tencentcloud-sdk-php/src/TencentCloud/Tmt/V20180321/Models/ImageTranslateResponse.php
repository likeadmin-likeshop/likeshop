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
namespace TencentCloud\Tmt\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImageTranslate返回参数结构体
 *
 * @method string getSessionUuid() 获取请求的SessionUuid返回
 * @method void setSessionUuid(string $SessionUuid) 设置请求的SessionUuid返回
 * @method string getSource() 获取源语言
 * @method void setSource(string $Source) 设置源语言
 * @method string getTarget() 获取目标语言
 * @method void setTarget(string $Target) 设置目标语言
 * @method ImageRecord getImageRecord() 获取图片翻译结果，翻译结果按识别的文本每一行独立翻译，后续会推出按段落划分并翻译的版本
 * @method void setImageRecord(ImageRecord $ImageRecord) 设置图片翻译结果，翻译结果按识别的文本每一行独立翻译，后续会推出按段落划分并翻译的版本
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ImageTranslateResponse extends AbstractModel
{
    /**
     * @var string 请求的SessionUuid返回
     */
    public $SessionUuid;

    /**
     * @var string 源语言
     */
    public $Source;

    /**
     * @var string 目标语言
     */
    public $Target;

    /**
     * @var ImageRecord 图片翻译结果，翻译结果按识别的文本每一行独立翻译，后续会推出按段落划分并翻译的版本
     */
    public $ImageRecord;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $SessionUuid 请求的SessionUuid返回
     * @param string $Source 源语言
     * @param string $Target 目标语言
     * @param ImageRecord $ImageRecord 图片翻译结果，翻译结果按识别的文本每一行独立翻译，后续会推出按段落划分并翻译的版本
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("SessionUuid",$param) and $param["SessionUuid"] !== null) {
            $this->SessionUuid = $param["SessionUuid"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("ImageRecord",$param) and $param["ImageRecord"] !== null) {
            $this->ImageRecord = new ImageRecord();
            $this->ImageRecord->deserialize($param["ImageRecord"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
