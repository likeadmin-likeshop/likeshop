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
 * 每个域名的统计信息。
 *
 * @method string getMainlandOrOversea() 获取国内还是国外:
Mainland: 表示国内数据。
Oversea: 表示国外数据。
 * @method void setMainlandOrOversea(string $MainlandOrOversea) 设置国内还是国外:
Mainland: 表示国内数据。
Oversea: 表示国外数据。
 * @method float getBandwidth() 获取带宽，单位: Mbps。
 * @method void setBandwidth(float $Bandwidth) 设置带宽，单位: Mbps。
 * @method float getFlux() 获取流量，单位: MB。
 * @method void setFlux(float $Flux) 设置流量，单位: MB。
 * @method integer getOnline() 获取人数。
 * @method void setOnline(integer $Online) 设置人数。
 * @method integer getRequest() 获取请求数。
 * @method void setRequest(integer $Request) 设置请求数。
 */
class DomainDetailInfo extends AbstractModel
{
    /**
     * @var string 国内还是国外:
Mainland: 表示国内数据。
Oversea: 表示国外数据。
     */
    public $MainlandOrOversea;

    /**
     * @var float 带宽，单位: Mbps。
     */
    public $Bandwidth;

    /**
     * @var float 流量，单位: MB。
     */
    public $Flux;

    /**
     * @var integer 人数。
     */
    public $Online;

    /**
     * @var integer 请求数。
     */
    public $Request;

    /**
     * @param string $MainlandOrOversea 国内还是国外:
Mainland: 表示国内数据。
Oversea: 表示国外数据。
     * @param float $Bandwidth 带宽，单位: Mbps。
     * @param float $Flux 流量，单位: MB。
     * @param integer $Online 人数。
     * @param integer $Request 请求数。
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
        if (array_key_exists("MainlandOrOversea",$param) and $param["MainlandOrOversea"] !== null) {
            $this->MainlandOrOversea = $param["MainlandOrOversea"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("Flux",$param) and $param["Flux"] !== null) {
            $this->Flux = $param["Flux"];
        }

        if (array_key_exists("Online",$param) and $param["Online"] !== null) {
            $this->Online = $param["Online"];
        }

        if (array_key_exists("Request",$param) and $param["Request"] !== null) {
            $this->Request = $param["Request"];
        }
    }
}
