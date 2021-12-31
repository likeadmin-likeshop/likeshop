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
 * FlightInvoiceOCR返回参数结构体
 *
 * @method array getFlightInvoiceInfos() 获取机票行程单识别结果，具体内容请点击左侧链接。
 * @method void setFlightInvoiceInfos(array $FlightInvoiceInfos) 设置机票行程单识别结果，具体内容请点击左侧链接。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class FlightInvoiceOCRResponse extends AbstractModel
{
    /**
     * @var array 机票行程单识别结果，具体内容请点击左侧链接。
     */
    public $FlightInvoiceInfos;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $FlightInvoiceInfos 机票行程单识别结果，具体内容请点击左侧链接。
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
        if (array_key_exists("FlightInvoiceInfos",$param) and $param["FlightInvoiceInfos"] !== null) {
            $this->FlightInvoiceInfos = [];
            foreach ($param["FlightInvoiceInfos"] as $key => $value){
                $obj = new FlightInvoiceInfo();
                $obj->deserialize($value);
                array_push($this->FlightInvoiceInfos, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
