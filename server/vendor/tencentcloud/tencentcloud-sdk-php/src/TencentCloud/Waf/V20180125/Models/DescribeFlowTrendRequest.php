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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFlowTrend请求参数结构体
 *
 * @method string getDomain() 获取需要获取流量趋势的域名, all表示所有域名
 * @method void setDomain(string $Domain) 设置需要获取流量趋势的域名, all表示所有域名
 * @method integer getStartTs() 获取起始时间戳，精度秒
 * @method void setStartTs(integer $StartTs) 设置起始时间戳，精度秒
 * @method integer getEndTs() 获取结束时间戳，精度秒
 * @method void setEndTs(integer $EndTs) 设置结束时间戳，精度秒
 */
class DescribeFlowTrendRequest extends AbstractModel
{
    /**
     * @var string 需要获取流量趋势的域名, all表示所有域名
     */
    public $Domain;

    /**
     * @var integer 起始时间戳，精度秒
     */
    public $StartTs;

    /**
     * @var integer 结束时间戳，精度秒
     */
    public $EndTs;

    /**
     * @param string $Domain 需要获取流量趋势的域名, all表示所有域名
     * @param integer $StartTs 起始时间戳，精度秒
     * @param integer $EndTs 结束时间戳，精度秒
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("StartTs",$param) and $param["StartTs"] !== null) {
            $this->StartTs = $param["StartTs"];
        }

        if (array_key_exists("EndTs",$param) and $param["EndTs"] !== null) {
            $this->EndTs = $param["EndTs"];
        }
    }
}
