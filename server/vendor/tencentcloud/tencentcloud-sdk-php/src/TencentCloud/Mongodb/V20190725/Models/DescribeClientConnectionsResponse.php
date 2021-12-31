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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClientConnections返回参数结构体
 *
 * @method array getClients() 获取客户端连接信息，包括客户端IP和对应IP的连接数量。
 * @method void setClients(array $Clients) 设置客户端连接信息，包括客户端IP和对应IP的连接数量。
 * @method integer getTotalCount() 获取满足条件的记录总条数，可用于分页查询。
 * @method void setTotalCount(integer $TotalCount) 设置满足条件的记录总条数，可用于分页查询。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeClientConnectionsResponse extends AbstractModel
{
    /**
     * @var array 客户端连接信息，包括客户端IP和对应IP的连接数量。
     */
    public $Clients;

    /**
     * @var integer 满足条件的记录总条数，可用于分页查询。
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Clients 客户端连接信息，包括客户端IP和对应IP的连接数量。
     * @param integer $TotalCount 满足条件的记录总条数，可用于分页查询。
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
        if (array_key_exists("Clients",$param) and $param["Clients"] !== null) {
            $this->Clients = [];
            foreach ($param["Clients"] as $key => $value){
                $obj = new ClientConnection();
                $obj->deserialize($value);
                array_push($this->Clients, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
