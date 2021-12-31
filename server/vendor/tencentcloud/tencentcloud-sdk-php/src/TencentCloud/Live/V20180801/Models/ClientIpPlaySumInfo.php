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
 * 客户端ip播放汇总信息。
 *
 * @method string getClientIp() 获取客户端 IP，点分型。
 * @method void setClientIp(string $ClientIp) 设置客户端 IP，点分型。
 * @method string getProvince() 获取客户端所在省份。
 * @method void setProvince(string $Province) 设置客户端所在省份。
 * @method float getTotalFlux() 获取总流量。
 * @method void setTotalFlux(float $TotalFlux) 设置总流量。
 * @method integer getTotalRequest() 获取总请求数。
 * @method void setTotalRequest(integer $TotalRequest) 设置总请求数。
 * @method integer getTotalFailedRequest() 获取总失败请求数。
 * @method void setTotalFailedRequest(integer $TotalFailedRequest) 设置总失败请求数。
 * @method string getCountryArea() 获取客户端所在国家。
 * @method void setCountryArea(string $CountryArea) 设置客户端所在国家。
 */
class ClientIpPlaySumInfo extends AbstractModel
{
    /**
     * @var string 客户端 IP，点分型。
     */
    public $ClientIp;

    /**
     * @var string 客户端所在省份。
     */
    public $Province;

    /**
     * @var float 总流量。
     */
    public $TotalFlux;

    /**
     * @var integer 总请求数。
     */
    public $TotalRequest;

    /**
     * @var integer 总失败请求数。
     */
    public $TotalFailedRequest;

    /**
     * @var string 客户端所在国家。
     */
    public $CountryArea;

    /**
     * @param string $ClientIp 客户端 IP，点分型。
     * @param string $Province 客户端所在省份。
     * @param float $TotalFlux 总流量。
     * @param integer $TotalRequest 总请求数。
     * @param integer $TotalFailedRequest 总失败请求数。
     * @param string $CountryArea 客户端所在国家。
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
        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("TotalFlux",$param) and $param["TotalFlux"] !== null) {
            $this->TotalFlux = $param["TotalFlux"];
        }

        if (array_key_exists("TotalRequest",$param) and $param["TotalRequest"] !== null) {
            $this->TotalRequest = $param["TotalRequest"];
        }

        if (array_key_exists("TotalFailedRequest",$param) and $param["TotalFailedRequest"] !== null) {
            $this->TotalFailedRequest = $param["TotalFailedRequest"];
        }

        if (array_key_exists("CountryArea",$param) and $param["CountryArea"] !== null) {
            $this->CountryArea = $param["CountryArea"];
        }
    }
}
