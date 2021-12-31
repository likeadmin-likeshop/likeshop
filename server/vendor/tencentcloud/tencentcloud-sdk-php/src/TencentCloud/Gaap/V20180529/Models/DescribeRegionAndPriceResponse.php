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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRegionAndPrice返回参数结构体
 *
 * @method integer getTotalCount() 获取源站区域总数
 * @method void setTotalCount(integer $TotalCount) 设置源站区域总数
 * @method array getDestRegionSet() 获取源站区域详情列表
 * @method void setDestRegionSet(array $DestRegionSet) 设置源站区域详情列表
 * @method array getBandwidthUnitPrice() 获取通道带宽费用梯度价格
 * @method void setBandwidthUnitPrice(array $BandwidthUnitPrice) 设置通道带宽费用梯度价格
 * @method string getCurrency() 获取带宽价格货币类型：
CNY 人民币
USD 美元
 * @method void setCurrency(string $Currency) 设置带宽价格货币类型：
CNY 人民币
USD 美元
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRegionAndPriceResponse extends AbstractModel
{
    /**
     * @var integer 源站区域总数
     */
    public $TotalCount;

    /**
     * @var array 源站区域详情列表
     */
    public $DestRegionSet;

    /**
     * @var array 通道带宽费用梯度价格
     */
    public $BandwidthUnitPrice;

    /**
     * @var string 带宽价格货币类型：
CNY 人民币
USD 美元
     */
    public $Currency;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 源站区域总数
     * @param array $DestRegionSet 源站区域详情列表
     * @param array $BandwidthUnitPrice 通道带宽费用梯度价格
     * @param string $Currency 带宽价格货币类型：
CNY 人民币
USD 美元
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("DestRegionSet",$param) and $param["DestRegionSet"] !== null) {
            $this->DestRegionSet = [];
            foreach ($param["DestRegionSet"] as $key => $value){
                $obj = new RegionDetail();
                $obj->deserialize($value);
                array_push($this->DestRegionSet, $obj);
            }
        }

        if (array_key_exists("BandwidthUnitPrice",$param) and $param["BandwidthUnitPrice"] !== null) {
            $this->BandwidthUnitPrice = [];
            foreach ($param["BandwidthUnitPrice"] as $key => $value){
                $obj = new BandwidthPriceGradient();
                $obj->deserialize($value);
                array_push($this->BandwidthUnitPrice, $obj);
            }
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
