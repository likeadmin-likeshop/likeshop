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
namespace TencentCloud\Ams\V20200608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAmsList返回参数结构体
 *
 * @method array getAmsDetailSet() 获取返回列表数据----非必选，该参数暂未对外开放
 * @method void setAmsDetailSet(array $AmsDetailSet) 设置返回列表数据----非必选，该参数暂未对外开放
 * @method integer getTotal() 获取总条数
 * @method void setTotal(integer $Total) 设置总条数
 * @method string getPageToken() 获取分页 token
 * @method void setPageToken(string $PageToken) 设置分页 token
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAmsListResponse extends AbstractModel
{
    /**
     * @var array 返回列表数据----非必选，该参数暂未对外开放
     */
    public $AmsDetailSet;

    /**
     * @var integer 总条数
     */
    public $Total;

    /**
     * @var string 分页 token
     */
    public $PageToken;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $AmsDetailSet 返回列表数据----非必选，该参数暂未对外开放
     * @param integer $Total 总条数
     * @param string $PageToken 分页 token
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
        if (array_key_exists("AmsDetailSet",$param) and $param["AmsDetailSet"] !== null) {
            $this->AmsDetailSet = [];
            foreach ($param["AmsDetailSet"] as $key => $value){
                $obj = new AmsDetailInfo();
                $obj->deserialize($value);
                array_push($this->AmsDetailSet, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("PageToken",$param) and $param["PageToken"] !== null) {
            $this->PageToken = $param["PageToken"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
