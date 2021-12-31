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
 * LicensePlateOCR返回参数结构体
 *
 * @method string getNumber() 获取识别出的车牌号码。
 * @method void setNumber(string $Number) 设置识别出的车牌号码。
 * @method integer getConfidence() 获取置信度，0 - 100 之间。
 * @method void setConfidence(integer $Confidence) 设置置信度，0 - 100 之间。
 * @method Rect getRect() 获取文本行在原图片中的像素坐标框。
 * @method void setRect(Rect $Rect) 设置文本行在原图片中的像素坐标框。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class LicensePlateOCRResponse extends AbstractModel
{
    /**
     * @var string 识别出的车牌号码。
     */
    public $Number;

    /**
     * @var integer 置信度，0 - 100 之间。
     */
    public $Confidence;

    /**
     * @var Rect 文本行在原图片中的像素坐标框。
     */
    public $Rect;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Number 识别出的车牌号码。
     * @param integer $Confidence 置信度，0 - 100 之间。
     * @param Rect $Rect 文本行在原图片中的像素坐标框。
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
        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Rect",$param) and $param["Rect"] !== null) {
            $this->Rect = new Rect();
            $this->Rect->deserialize($param["Rect"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
