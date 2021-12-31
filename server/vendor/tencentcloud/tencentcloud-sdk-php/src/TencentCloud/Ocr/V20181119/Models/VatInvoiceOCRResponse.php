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
 * VatInvoiceOCR返回参数结构体
 *
 * @method array getVatInvoiceInfos() 获取检测到的文本信息，具体内容请点击左侧链接。
 * @method void setVatInvoiceInfos(array $VatInvoiceInfos) 设置检测到的文本信息，具体内容请点击左侧链接。
 * @method array getItems() 获取明细条目。VatInvoiceInfos中关于明细项的具体条目。
 * @method void setItems(array $Items) 设置明细条目。VatInvoiceInfos中关于明细项的具体条目。
 * @method integer getPdfPageSize() 获取默认值为0。如果图片为PDF时，返回PDF的总页数。
 * @method void setPdfPageSize(integer $PdfPageSize) 设置默认值为0。如果图片为PDF时，返回PDF的总页数。
 * @method float getAngle() 获取图片旋转角度（角度制），文本的水平方向为0°；顺时针为正，逆时针为负。点击查看<a href="https://cloud.tencent.com/document/product/866/45139">如何纠正倾斜文本</a>
 * @method void setAngle(float $Angle) 设置图片旋转角度（角度制），文本的水平方向为0°；顺时针为正，逆时针为负。点击查看<a href="https://cloud.tencent.com/document/product/866/45139">如何纠正倾斜文本</a>
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class VatInvoiceOCRResponse extends AbstractModel
{
    /**
     * @var array 检测到的文本信息，具体内容请点击左侧链接。
     */
    public $VatInvoiceInfos;

    /**
     * @var array 明细条目。VatInvoiceInfos中关于明细项的具体条目。
     */
    public $Items;

    /**
     * @var integer 默认值为0。如果图片为PDF时，返回PDF的总页数。
     */
    public $PdfPageSize;

    /**
     * @var float 图片旋转角度（角度制），文本的水平方向为0°；顺时针为正，逆时针为负。点击查看<a href="https://cloud.tencent.com/document/product/866/45139">如何纠正倾斜文本</a>
     */
    public $Angle;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $VatInvoiceInfos 检测到的文本信息，具体内容请点击左侧链接。
     * @param array $Items 明细条目。VatInvoiceInfos中关于明细项的具体条目。
     * @param integer $PdfPageSize 默认值为0。如果图片为PDF时，返回PDF的总页数。
     * @param float $Angle 图片旋转角度（角度制），文本的水平方向为0°；顺时针为正，逆时针为负。点击查看<a href="https://cloud.tencent.com/document/product/866/45139">如何纠正倾斜文本</a>
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
        if (array_key_exists("VatInvoiceInfos",$param) and $param["VatInvoiceInfos"] !== null) {
            $this->VatInvoiceInfos = [];
            foreach ($param["VatInvoiceInfos"] as $key => $value){
                $obj = new TextVatInvoice();
                $obj->deserialize($value);
                array_push($this->VatInvoiceInfos, $obj);
            }
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new VatInvoiceItem();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
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
