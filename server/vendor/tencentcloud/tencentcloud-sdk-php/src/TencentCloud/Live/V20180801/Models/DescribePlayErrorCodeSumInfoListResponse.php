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
 * DescribePlayErrorCodeSumInfoList返回参数结构体
 *
 * @method array getProIspInfoList() 获取分省份分运营商错误码为2或3或4或5开头的状态码数据信息。
 * @method void setProIspInfoList(array $ProIspInfoList) 设置分省份分运营商错误码为2或3或4或5开头的状态码数据信息。
 * @method integer getTotalCodeAll() 获取所有状态码的加和的次数。
 * @method void setTotalCodeAll(integer $TotalCodeAll) 设置所有状态码的加和的次数。
 * @method integer getTotalCode4xx() 获取状态码为4开头的总次数。
 * @method void setTotalCode4xx(integer $TotalCode4xx) 设置状态码为4开头的总次数。
 * @method integer getTotalCode5xx() 获取状态码为5开头的总次数。
 * @method void setTotalCode5xx(integer $TotalCode5xx) 设置状态码为5开头的总次数。
 * @method array getTotalCodeList() 获取各状态码的总次数。
 * @method void setTotalCodeList(array $TotalCodeList) 设置各状态码的总次数。
 * @method integer getPageNum() 获取页号。
 * @method void setPageNum(integer $PageNum) 设置页号。
 * @method integer getPageSize() 获取每页大小。
 * @method void setPageSize(integer $PageSize) 设置每页大小。
 * @method integer getTotalPage() 获取总页数。
 * @method void setTotalPage(integer $TotalPage) 设置总页数。
 * @method integer getTotalNum() 获取总记录数。
 * @method void setTotalNum(integer $TotalNum) 设置总记录数。
 * @method integer getTotalCode2xx() 获取状态码为2开头的总次数。
 * @method void setTotalCode2xx(integer $TotalCode2xx) 设置状态码为2开头的总次数。
 * @method integer getTotalCode3xx() 获取状态码为3开头的总次数。
 * @method void setTotalCode3xx(integer $TotalCode3xx) 设置状态码为3开头的总次数。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePlayErrorCodeSumInfoListResponse extends AbstractModel
{
    /**
     * @var array 分省份分运营商错误码为2或3或4或5开头的状态码数据信息。
     */
    public $ProIspInfoList;

    /**
     * @var integer 所有状态码的加和的次数。
     */
    public $TotalCodeAll;

    /**
     * @var integer 状态码为4开头的总次数。
     */
    public $TotalCode4xx;

    /**
     * @var integer 状态码为5开头的总次数。
     */
    public $TotalCode5xx;

    /**
     * @var array 各状态码的总次数。
     */
    public $TotalCodeList;

    /**
     * @var integer 页号。
     */
    public $PageNum;

    /**
     * @var integer 每页大小。
     */
    public $PageSize;

    /**
     * @var integer 总页数。
     */
    public $TotalPage;

    /**
     * @var integer 总记录数。
     */
    public $TotalNum;

    /**
     * @var integer 状态码为2开头的总次数。
     */
    public $TotalCode2xx;

    /**
     * @var integer 状态码为3开头的总次数。
     */
    public $TotalCode3xx;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $ProIspInfoList 分省份分运营商错误码为2或3或4或5开头的状态码数据信息。
     * @param integer $TotalCodeAll 所有状态码的加和的次数。
     * @param integer $TotalCode4xx 状态码为4开头的总次数。
     * @param integer $TotalCode5xx 状态码为5开头的总次数。
     * @param array $TotalCodeList 各状态码的总次数。
     * @param integer $PageNum 页号。
     * @param integer $PageSize 每页大小。
     * @param integer $TotalPage 总页数。
     * @param integer $TotalNum 总记录数。
     * @param integer $TotalCode2xx 状态码为2开头的总次数。
     * @param integer $TotalCode3xx 状态码为3开头的总次数。
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
        if (array_key_exists("ProIspInfoList",$param) and $param["ProIspInfoList"] !== null) {
            $this->ProIspInfoList = [];
            foreach ($param["ProIspInfoList"] as $key => $value){
                $obj = new ProIspPlayCodeDataInfo();
                $obj->deserialize($value);
                array_push($this->ProIspInfoList, $obj);
            }
        }

        if (array_key_exists("TotalCodeAll",$param) and $param["TotalCodeAll"] !== null) {
            $this->TotalCodeAll = $param["TotalCodeAll"];
        }

        if (array_key_exists("TotalCode4xx",$param) and $param["TotalCode4xx"] !== null) {
            $this->TotalCode4xx = $param["TotalCode4xx"];
        }

        if (array_key_exists("TotalCode5xx",$param) and $param["TotalCode5xx"] !== null) {
            $this->TotalCode5xx = $param["TotalCode5xx"];
        }

        if (array_key_exists("TotalCodeList",$param) and $param["TotalCodeList"] !== null) {
            $this->TotalCodeList = [];
            foreach ($param["TotalCodeList"] as $key => $value){
                $obj = new PlayCodeTotalInfo();
                $obj->deserialize($value);
                array_push($this->TotalCodeList, $obj);
            }
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("TotalPage",$param) and $param["TotalPage"] !== null) {
            $this->TotalPage = $param["TotalPage"];
        }

        if (array_key_exists("TotalNum",$param) and $param["TotalNum"] !== null) {
            $this->TotalNum = $param["TotalNum"];
        }

        if (array_key_exists("TotalCode2xx",$param) and $param["TotalCode2xx"] !== null) {
            $this->TotalCode2xx = $param["TotalCode2xx"];
        }

        if (array_key_exists("TotalCode3xx",$param) and $param["TotalCode3xx"] !== null) {
            $this->TotalCode3xx = $param["TotalCode3xx"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
