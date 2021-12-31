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
 * DescribePlayErrorCodeDetailInfoList返回参数结构体
 *
 * @method array getHttpCodeList() 获取统计信息列表。
 * @method void setHttpCodeList(array $HttpCodeList) 设置统计信息列表。
 * @method string getStatType() 获取统计类型。
 * @method void setStatType(string $StatType) 设置统计类型。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePlayErrorCodeDetailInfoListResponse extends AbstractModel
{
    /**
     * @var array 统计信息列表。
     */
    public $HttpCodeList;

    /**
     * @var string 统计类型。
     */
    public $StatType;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $HttpCodeList 统计信息列表。
     * @param string $StatType 统计类型。
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
        if (array_key_exists("HttpCodeList",$param) and $param["HttpCodeList"] !== null) {
            $this->HttpCodeList = [];
            foreach ($param["HttpCodeList"] as $key => $value){
                $obj = new HttpCodeInfo();
                $obj->deserialize($value);
                array_push($this->HttpCodeList, $obj);
            }
        }

        if (array_key_exists("StatType",$param) and $param["StatType"] !== null) {
            $this->StatType = $param["StatType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
