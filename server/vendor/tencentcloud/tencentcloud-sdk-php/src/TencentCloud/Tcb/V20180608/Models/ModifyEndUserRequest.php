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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyEndUser请求参数结构体
 *
 * @method string getEnvId() 获取环境ID
 * @method void setEnvId(string $EnvId) 设置环境ID
 * @method string getUUId() 获取C端用户端的唯一ID
 * @method void setUUId(string $UUId) 设置C端用户端的唯一ID
 * @method string getStatus() 获取帐号的状态
<li>ENABLE</li>
<li>DISABLE</li>
 * @method void setStatus(string $Status) 设置帐号的状态
<li>ENABLE</li>
<li>DISABLE</li>
 */
class ModifyEndUserRequest extends AbstractModel
{
    /**
     * @var string 环境ID
     */
    public $EnvId;

    /**
     * @var string C端用户端的唯一ID
     */
    public $UUId;

    /**
     * @var string 帐号的状态
<li>ENABLE</li>
<li>DISABLE</li>
     */
    public $Status;

    /**
     * @param string $EnvId 环境ID
     * @param string $UUId C端用户端的唯一ID
     * @param string $Status 帐号的状态
<li>ENABLE</li>
<li>DISABLE</li>
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("UUId",$param) and $param["UUId"] !== null) {
            $this->UUId = $param["UUId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
