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
 * 获取省份/运营商的播放信息。
 *
 * @method string getName() 获取省份/运营商/国家或地区。
 * @method void setName(string $Name) 设置省份/运营商/国家或地区。
 * @method float getTotalFlux() 获取总流量，单位: MB。
 * @method void setTotalFlux(float $TotalFlux) 设置总流量，单位: MB。
 * @method integer getTotalRequest() 获取总请求数。
 * @method void setTotalRequest(integer $TotalRequest) 设置总请求数。
 * @method float getAvgFluxPerSecond() 获取平均下载流量，单位: MB/s。
 * @method void setAvgFluxPerSecond(float $AvgFluxPerSecond) 设置平均下载流量，单位: MB/s。
 */
class ProIspPlaySumInfo extends AbstractModel
{
    /**
     * @var string 省份/运营商/国家或地区。
     */
    public $Name;

    /**
     * @var float 总流量，单位: MB。
     */
    public $TotalFlux;

    /**
     * @var integer 总请求数。
     */
    public $TotalRequest;

    /**
     * @var float 平均下载流量，单位: MB/s。
     */
    public $AvgFluxPerSecond;

    /**
     * @param string $Name 省份/运营商/国家或地区。
     * @param float $TotalFlux 总流量，单位: MB。
     * @param integer $TotalRequest 总请求数。
     * @param float $AvgFluxPerSecond 平均下载流量，单位: MB/s。
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

        if (array_key_exists("TotalFlux",$param) and $param["TotalFlux"] !== null) {
            $this->TotalFlux = $param["TotalFlux"];
        }

        if (array_key_exists("TotalRequest",$param) and $param["TotalRequest"] !== null) {
            $this->TotalRequest = $param["TotalRequest"];
        }

        if (array_key_exists("AvgFluxPerSecond",$param) and $param["AvgFluxPerSecond"] !== null) {
            $this->AvgFluxPerSecond = $param["AvgFluxPerSecond"];
        }
    }
}
