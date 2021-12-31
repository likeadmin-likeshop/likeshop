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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HTTP返回码和统计数据
 *
 * @method string getHttpCode() 获取HTTP协议返回码。
例："2xx", "3xx", "4xx", "5xx"。
 * @method void setHttpCode(string $HttpCode) 设置HTTP协议返回码。
例："2xx", "3xx", "4xx", "5xx"。
 * @method array getValueList() 获取统计信息，对于无数据的时间点，会补0。
 * @method void setValueList(array $ValueList) 设置统计信息，对于无数据的时间点，会补0。
 */
class HttpCodeInfo extends AbstractModel
{
    /**
     * @var string HTTP协议返回码。
例："2xx", "3xx", "4xx", "5xx"。
     */
    public $HttpCode;

    /**
     * @var array 统计信息，对于无数据的时间点，会补0。
     */
    public $ValueList;

    /**
     * @param string $HttpCode HTTP协议返回码。
例："2xx", "3xx", "4xx", "5xx"。
     * @param array $ValueList 统计信息，对于无数据的时间点，会补0。
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
        if (array_key_exists("HttpCode",$param) and $param["HttpCode"] !== null) {
            $this->HttpCode = $param["HttpCode"];
        }

        if (array_key_exists("ValueList",$param) and $param["ValueList"] !== null) {
            $this->ValueList = [];
            foreach ($param["ValueList"] as $key => $value){
                $obj = new HttpCodeValue();
                $obj->deserialize($value);
                array_push($this->ValueList, $obj);
            }
        }
    }
}
