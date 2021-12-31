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
 * DescribeProIspPlaySumInfoList返回参数结构体
 *
 * @method float getTotalFlux() 获取总流量。
 * @method void setTotalFlux(float $TotalFlux) 设置总流量。
 * @method integer getTotalRequest() 获取总请求数。
 * @method void setTotalRequest(integer $TotalRequest) 设置总请求数。
 * @method string getStatType() 获取统计的类型。
 * @method void setStatType(string $StatType) 设置统计的类型。
 * @method integer getPageSize() 获取每页的记录数。
 * @method void setPageSize(integer $PageSize) 设置每页的记录数。
 * @method integer getPageNum() 获取页号。
 * @method void setPageNum(integer $PageNum) 设置页号。
 * @method integer getTotalNum() 获取总记录数。
 * @method void setTotalNum(integer $TotalNum) 设置总记录数。
 * @method integer getTotalPage() 获取总页数。
 * @method void setTotalPage(integer $TotalPage) 设置总页数。
 * @method array getDataInfoList() 获取省份，运营商，国家或地区汇总数据列表。
 * @method void setDataInfoList(array $DataInfoList) 设置省份，运营商，国家或地区汇总数据列表。
 * @method float getAvgFluxPerSecond() 获取下载速度，单位：MB/s，计算方式：总流量/总时长。
 * @method void setAvgFluxPerSecond(float $AvgFluxPerSecond) 设置下载速度，单位：MB/s，计算方式：总流量/总时长。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeProIspPlaySumInfoListResponse extends AbstractModel
{
    /**
     * @var float 总流量。
     */
    public $TotalFlux;

    /**
     * @var integer 总请求数。
     */
    public $TotalRequest;

    /**
     * @var string 统计的类型。
     */
    public $StatType;

    /**
     * @var integer 每页的记录数。
     */
    public $PageSize;

    /**
     * @var integer 页号。
     */
    public $PageNum;

    /**
     * @var integer 总记录数。
     */
    public $TotalNum;

    /**
     * @var integer 总页数。
     */
    public $TotalPage;

    /**
     * @var array 省份，运营商，国家或地区汇总数据列表。
     */
    public $DataInfoList;

    /**
     * @var float 下载速度，单位：MB/s，计算方式：总流量/总时长。
     */
    public $AvgFluxPerSecond;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param float $TotalFlux 总流量。
     * @param integer $TotalRequest 总请求数。
     * @param string $StatType 统计的类型。
     * @param integer $PageSize 每页的记录数。
     * @param integer $PageNum 页号。
     * @param integer $TotalNum 总记录数。
     * @param integer $TotalPage 总页数。
     * @param array $DataInfoList 省份，运营商，国家或地区汇总数据列表。
     * @param float $AvgFluxPerSecond 下载速度，单位：MB/s，计算方式：总流量/总时长。
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
        if (array_key_exists("TotalFlux",$param) and $param["TotalFlux"] !== null) {
            $this->TotalFlux = $param["TotalFlux"];
        }

        if (array_key_exists("TotalRequest",$param) and $param["TotalRequest"] !== null) {
            $this->TotalRequest = $param["TotalRequest"];
        }

        if (array_key_exists("StatType",$param) and $param["StatType"] !== null) {
            $this->StatType = $param["StatType"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("TotalNum",$param) and $param["TotalNum"] !== null) {
            $this->TotalNum = $param["TotalNum"];
        }

        if (array_key_exists("TotalPage",$param) and $param["TotalPage"] !== null) {
            $this->TotalPage = $param["TotalPage"];
        }

        if (array_key_exists("DataInfoList",$param) and $param["DataInfoList"] !== null) {
            $this->DataInfoList = [];
            foreach ($param["DataInfoList"] as $key => $value){
                $obj = new ProIspPlaySumInfo();
                $obj->deserialize($value);
                array_push($this->DataInfoList, $obj);
            }
        }

        if (array_key_exists("AvgFluxPerSecond",$param) and $param["AvgFluxPerSecond"] !== null) {
            $this->AvgFluxPerSecond = $param["AvgFluxPerSecond"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
