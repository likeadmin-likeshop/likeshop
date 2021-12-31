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
namespace TencentCloud\Mongodb\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 客户端连接信息，包括客户端IP和连接数
 *
 * @method string getIP() 获取连接的客户端IP
 * @method void setIP(string $IP) 设置连接的客户端IP
 * @method integer getCount() 获取对应客户端IP的连接数
 * @method void setCount(integer $Count) 设置对应客户端IP的连接数
 */
class ClientConnection extends AbstractModel
{
    /**
     * @var string 连接的客户端IP
     */
    public $IP;

    /**
     * @var integer 对应客户端IP的连接数
     */
    public $Count;

    /**
     * @param string $IP 连接的客户端IP
     * @param integer $Count 对应客户端IP的连接数
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
        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
