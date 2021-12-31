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
 * DescribeLiveDomainPlayInfoList返回参数结构体
 *
 * @method string getTime() 获取数据时间，格式为yyyy-mm-dd HH:MM:SS。
 * @method void setTime(string $Time) 设置数据时间，格式为yyyy-mm-dd HH:MM:SS。
 * @method float getTotalBandwidth() 获取实时总带宽。
 * @method void setTotalBandwidth(float $TotalBandwidth) 设置实时总带宽。
 * @method float getTotalFlux() 获取实时总流量。
 * @method void setTotalFlux(float $TotalFlux) 设置实时总流量。
 * @method integer getTotalRequest() 获取总请求数。
 * @method void setTotalRequest(integer $TotalRequest) 设置总请求数。
 * @method integer getTotalOnline() 获取实时总连接数。
 * @method void setTotalOnline(integer $TotalOnline) 设置实时总连接数。
 * @method array getDomainInfoList() 获取分域名的数据情况。
 * @method void setDomainInfoList(array $DomainInfoList) 设置分域名的数据情况。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeLiveDomainPlayInfoListResponse extends AbstractModel
{
    /**
     * @var string 数据时间，格式为yyyy-mm-dd HH:MM:SS。
     */
    public $Time;

    /**
     * @var float 实时总带宽。
     */
    public $TotalBandwidth;

    /**
     * @var float 实时总流量。
     */
    public $TotalFlux;

    /**
     * @var integer 总请求数。
     */
    public $TotalRequest;

    /**
     * @var integer 实时总连接数。
     */
    public $TotalOnline;

    /**
     * @var array 分域名的数据情况。
     */
    public $DomainInfoList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Time 数据时间，格式为yyyy-mm-dd HH:MM:SS。
     * @param float $TotalBandwidth 实时总带宽。
     * @param float $TotalFlux 实时总流量。
     * @param integer $TotalRequest 总请求数。
     * @param integer $TotalOnline 实时总连接数。
     * @param array $DomainInfoList 分域名的数据情况。
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("TotalBandwidth",$param) and $param["TotalBandwidth"] !== null) {
            $this->TotalBandwidth = $param["TotalBandwidth"];
        }

        if (array_key_exists("TotalFlux",$param) and $param["TotalFlux"] !== null) {
            $this->TotalFlux = $param["TotalFlux"];
        }

        if (array_key_exists("TotalRequest",$param) and $param["TotalRequest"] !== null) {
            $this->TotalRequest = $param["TotalRequest"];
        }

        if (array_key_exists("TotalOnline",$param) and $param["TotalOnline"] !== null) {
            $this->TotalOnline = $param["TotalOnline"];
        }

        if (array_key_exists("DomainInfoList",$param) and $param["DomainInfoList"] !== null) {
            $this->DomainInfoList = [];
            foreach ($param["DomainInfoList"] as $key => $value){
                $obj = new DomainInfoList();
                $obj->deserialize($value);
                array_push($this->DomainInfoList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
