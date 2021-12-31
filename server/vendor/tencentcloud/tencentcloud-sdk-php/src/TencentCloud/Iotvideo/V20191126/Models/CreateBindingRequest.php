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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBinding请求参数结构体
 *
 * @method string getAccessId() 获取终端用户在IoT Video上的唯一标识ID
 * @method void setAccessId(string $AccessId) 设置终端用户在IoT Video上的唯一标识ID
 * @method string getTid() 获取设备TID
 * @method void setTid(string $Tid) 设置设备TID
 * @method string getRole() 获取用户角色，owner：主人，guest：访客
 * @method void setRole(string $Role) 设置用户角色，owner：主人，guest：访客
 * @method boolean getForceBind() 获取是否踢掉之前的主人，true：踢掉；false：不踢掉。当role为guest时，可以不填
 * @method void setForceBind(boolean $ForceBind) 设置是否踢掉之前的主人，true：踢掉；false：不踢掉。当role为guest时，可以不填
 * @method string getNick() 获取设备昵称，最多不超过64个字符
 * @method void setNick(string $Nick) 设置设备昵称，最多不超过64个字符
 * @method string getBindToken() 获取绑定过程中的会话token，由设备通过SDK接口确认是否允许绑定的token，用于增加设备被绑定的安全性
 * @method void setBindToken(string $BindToken) 设置绑定过程中的会话token，由设备通过SDK接口确认是否允许绑定的token，用于增加设备被绑定的安全性
 */
class CreateBindingRequest extends AbstractModel
{
    /**
     * @var string 终端用户在IoT Video上的唯一标识ID
     */
    public $AccessId;

    /**
     * @var string 设备TID
     */
    public $Tid;

    /**
     * @var string 用户角色，owner：主人，guest：访客
     */
    public $Role;

    /**
     * @var boolean 是否踢掉之前的主人，true：踢掉；false：不踢掉。当role为guest时，可以不填
     */
    public $ForceBind;

    /**
     * @var string 设备昵称，最多不超过64个字符
     */
    public $Nick;

    /**
     * @var string 绑定过程中的会话token，由设备通过SDK接口确认是否允许绑定的token，用于增加设备被绑定的安全性
     */
    public $BindToken;

    /**
     * @param string $AccessId 终端用户在IoT Video上的唯一标识ID
     * @param string $Tid 设备TID
     * @param string $Role 用户角色，owner：主人，guest：访客
     * @param boolean $ForceBind 是否踢掉之前的主人，true：踢掉；false：不踢掉。当role为guest时，可以不填
     * @param string $Nick 设备昵称，最多不超过64个字符
     * @param string $BindToken 绑定过程中的会话token，由设备通过SDK接口确认是否允许绑定的token，用于增加设备被绑定的安全性
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
        if (array_key_exists("AccessId",$param) and $param["AccessId"] !== null) {
            $this->AccessId = $param["AccessId"];
        }

        if (array_key_exists("Tid",$param) and $param["Tid"] !== null) {
            $this->Tid = $param["Tid"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("ForceBind",$param) and $param["ForceBind"] !== null) {
            $this->ForceBind = $param["ForceBind"];
        }

        if (array_key_exists("Nick",$param) and $param["Nick"] !== null) {
            $this->Nick = $param["Nick"];
        }

        if (array_key_exists("BindToken",$param) and $param["BindToken"] !== null) {
            $this->BindToken = $param["BindToken"];
        }
    }
}
