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
 * GeneralFastOCR返回参数结构体
 *
 * @method array getTextDetections() 获取检测到的文本信息，具体内容请点击左侧链接。
 * @method void setTextDetections(array $TextDetections) 设置检测到的文本信息，具体内容请点击左侧链接。
 * @method string getLanguage() 获取检测到的语言，目前支持的语种范围为：简体中文、繁体中文、英文、日文、韩文。未来将陆续新增对更多语种的支持。
返回结果含义为：zh - 中英混合，jap - 日文，kor - 韩文。
 * @method void setLanguage(string $Language) 设置检测到的语言，目前支持的语种范围为：简体中文、繁体中文、英文、日文、韩文。未来将陆续新增对更多语种的支持。
返回结果含义为：zh - 中英混合，jap - 日文，kor - 韩文。
 * @method float getAngel() 获取图片旋转角度（角度制），文本的水平方向为0°；顺时针为正，逆时针为负
 * @method void setAngel(float $Angel) 设置图片旋转角度（角度制），文本的水平方向为0°；顺时针为正，逆时针为负
 * @method integer getPdfPageSize() 获取图片为PDF时，返回PDF的总页数，默认为0
 * @method void setPdfPageSize(integer $PdfPageSize) 设置图片为PDF时，返回PDF的总页数，默认为0
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GeneralFastOCRResponse extends AbstractModel
{
    /**
     * @var array 检测到的文本信息，具体内容请点击左侧链接。
     */
    public $TextDetections;

    /**
     * @var string 检测到的语言，目前支持的语种范围为：简体中文、繁体中文、英文、日文、韩文。未来将陆续新增对更多语种的支持。
返回结果含义为：zh - 中英混合，jap - 日文，kor - 韩文。
     */
    public $Language;

    /**
     * @var float 图片旋转角度（角度制），文本的水平方向为0°；顺时针为正，逆时针为负
     */
    public $Angel;

    /**
     * @var integer 图片为PDF时，返回PDF的总页数，默认为0
     */
    public $PdfPageSize;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $TextDetections 检测到的文本信息，具体内容请点击左侧链接。
     * @param string $Language 检测到的语言，目前支持的语种范围为：简体中文、繁体中文、英文、日文、韩文。未来将陆续新增对更多语种的支持。
返回结果含义为：zh - 中英混合，jap - 日文，kor - 韩文。
     * @param float $Angel 图片旋转角度（角度制），文本的水平方向为0°；顺时针为正，逆时针为负
     * @param integer $PdfPageSize 图片为PDF时，返回PDF的总页数，默认为0
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
        if (array_key_exists("TextDetections",$param) and $param["TextDetections"] !== null) {
            $this->TextDetections = [];
            foreach ($param["TextDetections"] as $key => $value){
                $obj = new TextDetection();
                $obj->deserialize($value);
                array_push($this->TextDetections, $obj);
            }
        }

        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("Angel",$param) and $param["Angel"] !== null) {
            $this->Angel = $param["Angel"];
        }

        if (array_key_exists("PdfPageSize",$param) and $param["PdfPageSize"] !== null) {
            $this->PdfPageSize = $param["PdfPageSize"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
