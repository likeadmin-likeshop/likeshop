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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetAvailRatioHistory返回参数结构体
 *
 * @method float getAvgAvailRatio() 获取整体平均可用率
 * @method void setAvgAvailRatio(float $AvgAvailRatio) 设置整体平均可用率
 * @method float getLowestAvailRatio() 获取各省份最低可用率
 * @method void setLowestAvailRatio(float $LowestAvailRatio) 设置各省份最低可用率
 * @method string getLowestProvince() 获取可用率最低的省份
 * @method void setLowestProvince(string $LowestProvince) 设置可用率最低的省份
 * @method string getLowestIsp() 获取可用率最低的运营商
 * @method void setLowestIsp(string $LowestIsp) 设置可用率最低的运营商
 * @method array getProvinceData() 获取分省份的可用率数据
 * @method void setProvinceData(array $ProvinceData) 设置分省份的可用率数据
 * @method float getAvgTime() 获取国内平均耗时，单位毫秒
 * @method void setAvgTime(float $AvgTime) 设置国内平均耗时，单位毫秒
 * @method float getAvgAvailRatio2() 获取国外平均可用率
 * @method void setAvgAvailRatio2(float $AvgAvailRatio2) 设置国外平均可用率
 * @method float getAvgTime2() 获取国外平均耗时，单位毫秒
 * @method void setAvgTime2(float $AvgTime2) 设置国外平均耗时，单位毫秒
 * @method float getLowestAvailRatio2() 获取国外最低可用率
 * @method void setLowestAvailRatio2(float $LowestAvailRatio2) 设置国外最低可用率
 * @method string getLowestProvince2() 获取国外可用率最低的区域
 * @method void setLowestProvince2(string $LowestProvince2) 设置国外可用率最低的区域
 * @method string getLowestIsp2() 获取国外可用率最低的运营商
 * @method void setLowestIsp2(string $LowestIsp2) 设置国外可用率最低的运营商
 * @method array getProvinceData2() 获取国外分区域的可用率数据
 * @method void setProvinceData2(array $ProvinceData2) 设置国外分区域的可用率数据
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetAvailRatioHistoryResponse extends AbstractModel
{
    /**
     * @var float 整体平均可用率
     */
    public $AvgAvailRatio;

    /**
     * @var float 各省份最低可用率
     */
    public $LowestAvailRatio;

    /**
     * @var string 可用率最低的省份
     */
    public $LowestProvince;

    /**
     * @var string 可用率最低的运营商
     */
    public $LowestIsp;

    /**
     * @var array 分省份的可用率数据
     */
    public $ProvinceData;

    /**
     * @var float 国内平均耗时，单位毫秒
     */
    public $AvgTime;

    /**
     * @var float 国外平均可用率
     */
    public $AvgAvailRatio2;

    /**
     * @var float 国外平均耗时，单位毫秒
     */
    public $AvgTime2;

    /**
     * @var float 国外最低可用率
     */
    public $LowestAvailRatio2;

    /**
     * @var string 国外可用率最低的区域
     */
    public $LowestProvince2;

    /**
     * @var string 国外可用率最低的运营商
     */
    public $LowestIsp2;

    /**
     * @var array 国外分区域的可用率数据
     */
    public $ProvinceData2;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param float $AvgAvailRatio 整体平均可用率
     * @param float $LowestAvailRatio 各省份最低可用率
     * @param string $LowestProvince 可用率最低的省份
     * @param string $LowestIsp 可用率最低的运营商
     * @param array $ProvinceData 分省份的可用率数据
     * @param float $AvgTime 国内平均耗时，单位毫秒
     * @param float $AvgAvailRatio2 国外平均可用率
     * @param float $AvgTime2 国外平均耗时，单位毫秒
     * @param float $LowestAvailRatio2 国外最低可用率
     * @param string $LowestProvince2 国外可用率最低的区域
     * @param string $LowestIsp2 国外可用率最低的运营商
     * @param array $ProvinceData2 国外分区域的可用率数据
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
        if (array_key_exists("AvgAvailRatio",$param) and $param["AvgAvailRatio"] !== null) {
            $this->AvgAvailRatio = $param["AvgAvailRatio"];
        }

        if (array_key_exists("LowestAvailRatio",$param) and $param["LowestAvailRatio"] !== null) {
            $this->LowestAvailRatio = $param["LowestAvailRatio"];
        }

        if (array_key_exists("LowestProvince",$param) and $param["LowestProvince"] !== null) {
            $this->LowestProvince = $param["LowestProvince"];
        }

        if (array_key_exists("LowestIsp",$param) and $param["LowestIsp"] !== null) {
            $this->LowestIsp = $param["LowestIsp"];
        }

        if (array_key_exists("ProvinceData",$param) and $param["ProvinceData"] !== null) {
            $this->ProvinceData = [];
            foreach ($param["ProvinceData"] as $key => $value){
                $obj = new ProvinceDetail();
                $obj->deserialize($value);
                array_push($this->ProvinceData, $obj);
            }
        }

        if (array_key_exists("AvgTime",$param) and $param["AvgTime"] !== null) {
            $this->AvgTime = $param["AvgTime"];
        }

        if (array_key_exists("AvgAvailRatio2",$param) and $param["AvgAvailRatio2"] !== null) {
            $this->AvgAvailRatio2 = $param["AvgAvailRatio2"];
        }

        if (array_key_exists("AvgTime2",$param) and $param["AvgTime2"] !== null) {
            $this->AvgTime2 = $param["AvgTime2"];
        }

        if (array_key_exists("LowestAvailRatio2",$param) and $param["LowestAvailRatio2"] !== null) {
            $this->LowestAvailRatio2 = $param["LowestAvailRatio2"];
        }

        if (array_key_exists("LowestProvince2",$param) and $param["LowestProvince2"] !== null) {
            $this->LowestProvince2 = $param["LowestProvince2"];
        }

        if (array_key_exists("LowestIsp2",$param) and $param["LowestIsp2"] !== null) {
            $this->LowestIsp2 = $param["LowestIsp2"];
        }

        if (array_key_exists("ProvinceData2",$param) and $param["ProvinceData2"] !== null) {
            $this->ProvinceData2 = [];
            foreach ($param["ProvinceData2"] as $key => $value){
                $obj = new ProvinceDetail();
                $obj->deserialize($value);
                array_push($this->ProvinceData2, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
