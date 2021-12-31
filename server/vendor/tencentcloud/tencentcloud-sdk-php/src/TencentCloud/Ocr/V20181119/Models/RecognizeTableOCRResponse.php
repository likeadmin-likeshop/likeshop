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
 * RecognizeTableOCR返回参数结构体
 *
 * @method array getTableDetections() 获取检测到的文本信息，具体内容请点击左侧链接。
 * @method void setTableDetections(array $TableDetections) 设置检测到的文本信息，具体内容请点击左侧链接。
 * @method string getData() 获取Base64 编码后的 Excel 数据。
 * @method void setData(string $Data) 设置Base64 编码后的 Excel 数据。
 * @method integer getPdfPageSize() 获取图片为PDF时，返回PDF的总页数，默认为0
 * @method void setPdfPageSize(integer $PdfPageSize) 设置图片为PDF时，返回PDF的总页数，默认为0
 * @method float getAngle() 获取图片旋转角度（角度制），文本的水平方向为0°，统一以逆时针方向旋转，逆时针为负，角度范围为-360°至0°。
 * @method void setAngle(float $Angle) 设置图片旋转角度（角度制），文本的水平方向为0°，统一以逆时针方向旋转，逆时针为负，角度范围为-360°至0°。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class RecognizeTableOCRResponse extends AbstractModel
{
    /**
     * @var array 检测到的文本信息，具体内容请点击左侧链接。
     */
    public $TableDetections;

    /**
     * @var string Base64 编码后的 Excel 数据。
     */
    public $Data;

    /**
     * @var integer 图片为PDF时，返回PDF的总页数，默认为0
     */
    public $PdfPageSize;

    /**
     * @var float 图片旋转角度（角度制），文本的水平方向为0°，统一以逆时针方向旋转，逆时针为负，角度范围为-360°至0°。
     */
    public $Angle;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $TableDetections 检测到的文本信息，具体内容请点击左侧链接。
     * @param string $Data Base64 编码后的 Excel 数据。
     * @param integer $PdfPageSize 图片为PDF时，返回PDF的总页数，默认为0
     * @param float $Angle 图片旋转角度（角度制），文本的水平方向为0°，统一以逆时针方向旋转，逆时针为负，角度范围为-360°至0°。
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
        if (array_key_exists("TableDetections",$param) and $param["TableDetections"] !== null) {
            $this->TableDetections = [];
            foreach ($param["TableDetections"] as $key => $value){
                $obj = new TableDetectInfo();
                $obj->deserialize($value);
                array_push($this->TableDetections, $obj);
            }
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("PdfPageSize",$param) and $param["PdfPageSize"] !== null) {
            $this->PdfPageSize = $param["PdfPageSize"];
        }

        if (array_key_exists("Angle",$param) and $param["Angle"] !== null) {
            $this->Angle = $param["Angle"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
