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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteGameServerSessionQueue请求参数结构体
 *
 * @method string getName() 获取游戏服务器会话队列名字，长度1~128
 * @method void setName(string $Name) 设置游戏服务器会话队列名字，长度1~128
 */
class DeleteGameServerSessionQueueRequest extends AbstractModel
{
    /**
     * @var string 游戏服务器会话队列名字，长度1~128
     */
    public $Name;

    /**
     * @param string $Name 游戏服务器会话队列名字，长度1~128
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
