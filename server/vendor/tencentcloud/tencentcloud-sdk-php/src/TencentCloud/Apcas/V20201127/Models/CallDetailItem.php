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
namespace TencentCloud\Apcas\V20201127\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 调用明细结构体
 *
 * @method integer getDataType() 获取数据类型 0 imei 1 qimei 2 qq 3 phone 7:IDFA 8:MD5(imei)
 * @method void setDataType(integer $DataType) 设置数据类型 0 imei 1 qimei 2 qq 3 phone 7:IDFA 8:MD5(imei)
 * @method integer getValidAmount() 获取有效数据量
 * @method void setValidAmount(integer $ValidAmount) 设置有效数据量
 * @method string getDate() 获取调用时间
 * @method void setDate(string $Date) 设置调用时间
 */
class CallDetailItem extends AbstractModel
{
    /**
     * @var integer 数据类型 0 imei 1 qimei 2 qq 3 phone 7:IDFA 8:MD5(imei)
     */
    public $DataType;

    /**
     * @var integer 有效数据量
     */
    public $ValidAmount;

    /**
     * @var string 调用时间
     */
    public $Date;

    /**
     * @param integer $DataType 数据类型 0 imei 1 qimei 2 qq 3 phone 7:IDFA 8:MD5(imei)
     * @param integer $ValidAmount 有效数据量
     * @param string $Date 调用时间
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
        if (array_key_exists("DataType",$param) and $param["DataType"] !== null) {
            $this->DataType = $param["DataType"];
        }

        if (array_key_exists("ValidAmount",$param) and $param["ValidAmount"] !== null) {
            $this->ValidAmount = $param["ValidAmount"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }
    }
}
