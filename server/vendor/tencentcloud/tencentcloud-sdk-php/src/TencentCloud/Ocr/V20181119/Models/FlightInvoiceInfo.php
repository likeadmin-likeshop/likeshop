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
 * 机票行程单识别结果
 *
 * @method string getName() 获取识别出的字段名称(关键字)，支持以下字段：
票价、合计金额、填开日期、有效身份证件号码、电子客票号码、验证码、旅客姓名、填开单位、其他税费、燃油附加费、民航发展基金、保险费、销售单位代号、始发地、目的地、航班号、时间、日期、座位等级、承运人、发票消费类型、国内国际标签、印刷序号、客票级别/类别、客票生效日期、有效期截止日期、免费行李。
 * @method void setName(string $Name) 设置识别出的字段名称(关键字)，支持以下字段：
票价、合计金额、填开日期、有效身份证件号码、电子客票号码、验证码、旅客姓名、填开单位、其他税费、燃油附加费、民航发展基金、保险费、销售单位代号、始发地、目的地、航班号、时间、日期、座位等级、承运人、发票消费类型、国内国际标签、印刷序号、客票级别/类别、客票生效日期、有效期截止日期、免费行李。
 * @method string getValue() 获取识别出的字段名称对应的值，也就是字段 Name 对应的字符串结果。
 * @method void setValue(string $Value) 设置识别出的字段名称对应的值，也就是字段 Name 对应的字符串结果。
 * @method integer getRow() 获取多个行程的字段所在行号，下标从0开始，非行字段或未能识别行号的该值返回-1。
 * @method void setRow(integer $Row) 设置多个行程的字段所在行号，下标从0开始，非行字段或未能识别行号的该值返回-1。
 */
class FlightInvoiceInfo extends AbstractModel
{
    /**
     * @var string 识别出的字段名称(关键字)，支持以下字段：
票价、合计金额、填开日期、有效身份证件号码、电子客票号码、验证码、旅客姓名、填开单位、其他税费、燃油附加费、民航发展基金、保险费、销售单位代号、始发地、目的地、航班号、时间、日期、座位等级、承运人、发票消费类型、国内国际标签、印刷序号、客票级别/类别、客票生效日期、有效期截止日期、免费行李。
     */
    public $Name;

    /**
     * @var string 识别出的字段名称对应的值，也就是字段 Name 对应的字符串结果。
     */
    public $Value;

    /**
     * @var integer 多个行程的字段所在行号，下标从0开始，非行字段或未能识别行号的该值返回-1。
     */
    public $Row;

    /**
     * @param string $Name 识别出的字段名称(关键字)，支持以下字段：
票价、合计金额、填开日期、有效身份证件号码、电子客票号码、验证码、旅客姓名、填开单位、其他税费、燃油附加费、民航发展基金、保险费、销售单位代号、始发地、目的地、航班号、时间、日期、座位等级、承运人、发票消费类型、国内国际标签、印刷序号、客票级别/类别、客票生效日期、有效期截止日期、免费行李。
     * @param string $Value 识别出的字段名称对应的值，也就是字段 Name 对应的字符串结果。
     * @param integer $Row 多个行程的字段所在行号，下标从0开始，非行字段或未能识别行号的该值返回-1。
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

        if (array_key_exists("Row",$param) and $param["Row"] !== null) {
            $this->Row = $param["Row"];
        }
    }
}
