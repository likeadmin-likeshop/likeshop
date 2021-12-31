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
 * DescribeTopClientIpSumInfoList返回参数结构体
 *
 * @method integer getPageNum() 获取页号，范围是[1,1000]，默认值是1。
 * @method void setPageNum(integer $PageNum) 设置页号，范围是[1,1000]，默认值是1。
 * @method integer getPageSize() 获取每页个数，范围是[1,1000]，默认值是20。
 * @method void setPageSize(integer $PageSize) 设置每页个数，范围是[1,1000]，默认值是20。
 * @method string getOrderParam() 获取排序指标，可选值包括”TotalRequest”，”FailedRequest”,“TotalFlux”。
 * @method void setOrderParam(string $OrderParam) 设置排序指标，可选值包括”TotalRequest”，”FailedRequest”,“TotalFlux”。
 * @method integer getTotalNum() 获取记录总数。
 * @method void setTotalNum(integer $TotalNum) 设置记录总数。
 * @method integer getTotalPage() 获取记录总页数。
 * @method void setTotalPage(integer $TotalPage) 设置记录总页数。
 * @method array getDataInfoList() 获取数据内容。
 * @method void setDataInfoList(array $DataInfoList) 设置数据内容。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTopClientIpSumInfoListResponse extends AbstractModel
{
    /**
     * @var integer 页号，范围是[1,1000]，默认值是1。
     */
    public $PageNum;

    /**
     * @var integer 每页个数，范围是[1,1000]，默认值是20。
     */
    public $PageSize;

    /**
     * @var string 排序指标，可选值包括”TotalRequest”，”FailedRequest”,“TotalFlux”。
     */
    public $OrderParam;

    /**
     * @var integer 记录总数。
     */
    public $TotalNum;

    /**
     * @var integer 记录总页数。
     */
    public $TotalPage;

    /**
     * @var array 数据内容。
     */
    public $DataInfoList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $PageNum 页号，范围是[1,1000]，默认值是1。
     * @param integer $PageSize 每页个数，范围是[1,1000]，默认值是20。
     * @param string $OrderParam 排序指标，可选值包括”TotalRequest”，”FailedRequest”,“TotalFlux”。
     * @param integer $TotalNum 记录总数。
     * @param integer $TotalPage 记录总页数。
     * @param array $DataInfoList 数据内容。
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
        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("OrderParam",$param) and $param["OrderParam"] !== null) {
            $this->OrderParam = $param["OrderParam"];
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
                $obj = new ClientIpPlaySumInfo();
                $obj->deserialize($value);
                array_push($this->DataInfoList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
