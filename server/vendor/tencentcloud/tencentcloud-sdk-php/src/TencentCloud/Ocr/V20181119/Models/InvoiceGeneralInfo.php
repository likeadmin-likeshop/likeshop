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
 * 通用机打发票信息
 *
 * @method string getName() 获取识别出的字段名称(关键字)，支持以下字段：
发票代码、发票号码、日期、合计金额(小写)、合计金额(大写)、购买方识别号、销售方识别号、校验码、购买方名称、销售方名称、时间、种类、发票消费类型、省、市、是否有公司印章。
 * @method void setName(string $Name) 设置识别出的字段名称(关键字)，支持以下字段：
发票代码、发票号码、日期、合计金额(小写)、合计金额(大写)、购买方识别号、销售方识别号、校验码、购买方名称、销售方名称、时间、种类、发票消费类型、省、市、是否有公司印章。
 * @method string getValue() 获取识别出的字段名称对应的值，也就是字段Name对应的字符串结果。
 * @method void setValue(string $Value) 设置识别出的字段名称对应的值，也就是字段Name对应的字符串结果。
 * @method Rect getRect() 获取文本行在旋转纠正之后的图像中的像素坐标。
 * @method void setRect(Rect $Rect) 设置文本行在旋转纠正之后的图像中的像素坐标。
 */
class InvoiceGeneralInfo extends AbstractModel
{
    /**
     * @var string 识别出的字段名称(关键字)，支持以下字段：
发票代码、发票号码、日期、合计金额(小写)、合计金额(大写)、购买方识别号、销售方识别号、校验码、购买方名称、销售方名称、时间、种类、发票消费类型、省、市、是否有公司印章。
     */
    public $Name;

    /**
     * @var string 识别出的字段名称对应的值，也就是字段Name对应的字符串结果。
     */
    public $Value;

    /**
     * @var Rect 文本行在旋转纠正之后的图像中的像素坐标。
     */
    public $Rect;

    /**
     * @param string $Name 识别出的字段名称(关键字)，支持以下字段：
发票代码、发票号码、日期、合计金额(小写)、合计金额(大写)、购买方识别号、销售方识别号、校验码、购买方名称、销售方名称、时间、种类、发票消费类型、省、市、是否有公司印章。
     * @param string $Value 识别出的字段名称对应的值，也就是字段Name对应的字符串结果。
     * @param Rect $Rect 文本行在旋转纠正之后的图像中的像素坐标。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Rect",$param) and $param["Rect"] !== null) {
            $this->Rect = new Rect();
            $this->Rect->deserialize($param["Rect"]);
        }
    }
}
