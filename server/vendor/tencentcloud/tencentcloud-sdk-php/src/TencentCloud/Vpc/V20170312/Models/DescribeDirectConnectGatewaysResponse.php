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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDirectConnectGateways返回参数结构体
 *
 * @method integer getTotalCount() 获取符合条件的对象数。
 * @method void setTotalCount(integer $TotalCount) 设置符合条件的对象数。
 * @method array getDirectConnectGatewaySet() 获取专线网关对象数组。
 * @method void setDirectConnectGatewaySet(array $DirectConnectGatewaySet) 设置专线网关对象数组。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDirectConnectGatewaysResponse extends AbstractModel
{
    /**
     * @var integer 符合条件的对象数。
     */
    public $TotalCount;

    /**
     * @var array 专线网关对象数组。
     */
    public $DirectConnectGatewaySet;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 符合条件的对象数。
     * @param array $DirectConnectGatewaySet 专线网关对象数组。
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

        if (array_key_exists("DirectConnectGatewaySet",$param) and $param["DirectConnectGatewaySet"] !== null) {
            $this->DirectConnectGatewaySet = [];
            foreach ($param["DirectConnectGatewaySet"] as $key => $value){
                $obj = new DirectConnectGateway();
                $obj->deserialize($value);
                array_push($this->DirectConnectGatewaySet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
