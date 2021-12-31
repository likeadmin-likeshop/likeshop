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
namespace TencentCloud\Youmall\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePersonTraceDetail请求参数结构体
 *
 * @method string getMallId() 获取卖场编码
 * @method void setMallId(string $MallId) 设置卖场编码
 * @method string getPersonId() 获取客户编码
 * @method void setPersonId(string $PersonId) 设置客户编码
 * @method string getTraceId() 获取轨迹编码
 * @method void setTraceId(string $TraceId) 设置轨迹编码
 */
class DescribePersonTraceDetailRequest extends AbstractModel
{
    /**
     * @var string 卖场编码
     */
    public $MallId;

    /**
     * @var string 客户编码
     */
    public $PersonId;

    /**
     * @var string 轨迹编码
     */
    public $TraceId;

    /**
     * @param string $MallId 卖场编码
     * @param string $PersonId 客户编码
     * @param string $TraceId 轨迹编码
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
        if (array_key_exists("MallId",$param) and $param["MallId"] !== null) {
            $this->MallId = $param["MallId"];
        }

        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("TraceId",$param) and $param["TraceId"] !== null) {
            $this->TraceId = $param["TraceId"];
        }
    }
}
