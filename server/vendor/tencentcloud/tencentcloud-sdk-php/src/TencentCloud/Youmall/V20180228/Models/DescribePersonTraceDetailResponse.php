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
namespace TencentCloud\Youmall\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePersonTraceDetail返回参数结构体
 *
 * @method string getMallId() 获取卖场编码
 * @method void setMallId(string $MallId) 设置卖场编码
 * @method string getPersonId() 获取客户编码
 * @method void setPersonId(string $PersonId) 设置客户编码
 * @method string getTraceId() 获取轨迹编码
 * @method void setTraceId(string $TraceId) 设置轨迹编码
 * @method array getCoordinateSet() 获取轨迹点坐标序列
 * @method void setCoordinateSet(array $CoordinateSet) 设置轨迹点坐标序列
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePersonTraceDetailResponse extends AbstractModel
{
    /**
     * @var string 卖场编码
     */
    public $MallId;

    /**
     * @var string 客户编码
     */
    public $PersonId;

    /**
     * @var string 轨迹编码
     */
    public $TraceId;

    /**
     * @var array 轨迹点坐标序列
     */
    public $CoordinateSet;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $MallId 卖场编码
     * @param string $PersonId 客户编码
     * @param string $TraceId 轨迹编码
     * @param array $CoordinateSet 轨迹点坐标序列
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
        if (array_key_exists("MallId",$param) and $param["MallId"] !== null) {
            $this->MallId = $param["MallId"];
        }

        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("TraceId",$param) and $param["TraceId"] !== null) {
            $this->TraceId = $param["TraceId"];
        }

        if (array_key_exists("CoordinateSet",$param) and $param["CoordinateSet"] !== null) {
            $this->CoordinateSet = [];
            foreach ($param["CoordinateSet"] as $key => $value){
                $obj = new PersonCoordinate();
                $obj->deserialize($value);
                array_push($this->CoordinateSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
