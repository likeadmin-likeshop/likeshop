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
 * DescribeLiveForbidStreamList返回参数结构体
 *
 * @method integer getTotalNum() 获取符合条件的总个数。
 * @method void setTotalNum(integer $TotalNum) 设置符合条件的总个数。
 * @method integer getTotalPage() 获取总页数。
 * @method void setTotalPage(integer $TotalPage) 设置总页数。
 * @method integer getPageNum() 获取分页的页码。
 * @method void setPageNum(integer $PageNum) 设置分页的页码。
 * @method integer getPageSize() 获取每页显示的条数。
 * @method void setPageSize(integer $PageSize) 设置每页显示的条数。
 * @method array getForbidStreamList() 获取禁推流列表。
 * @method void setForbidStreamList(array $ForbidStreamList) 设置禁推流列表。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeLiveForbidStreamListResponse extends AbstractModel
{
    /**
     * @var integer 符合条件的总个数。
     */
    public $TotalNum;

    /**
     * @var integer 总页数。
     */
    public $TotalPage;

    /**
     * @var integer 分页的页码。
     */
    public $PageNum;

    /**
     * @var integer 每页显示的条数。
     */
    public $PageSize;

    /**
     * @var array 禁推流列表。
     */
    public $ForbidStreamList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalNum 符合条件的总个数。
     * @param integer $TotalPage 总页数。
     * @param integer $PageNum 分页的页码。
     * @param integer $PageSize 每页显示的条数。
     * @param array $ForbidStreamList 禁推流列表。
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
        if (array_key_exists("TotalNum",$param) and $param["TotalNum"] !== null) {
            $this->TotalNum = $param["TotalNum"];
        }

        if (array_key_exists("TotalPage",$param) and $param["TotalPage"] !== null) {
            $this->TotalPage = $param["TotalPage"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("ForbidStreamList",$param) and $param["ForbidStreamList"] !== null) {
            $this->ForbidStreamList = [];
            foreach ($param["ForbidStreamList"] as $key => $value){
                $obj = new ForbidStreamInfo();
                $obj->deserialize($value);
                array_push($this->ForbidStreamList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
