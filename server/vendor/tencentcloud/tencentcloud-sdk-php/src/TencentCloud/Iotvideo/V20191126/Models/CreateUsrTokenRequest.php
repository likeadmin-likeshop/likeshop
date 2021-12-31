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
 * CreateUsrToken请求参数结构体
 *
 * @method string getAccessId() 获取终端用户在IoT Video上的唯一标识ID
 * @method void setAccessId(string $AccessId) 设置终端用户在IoT Video上的唯一标识ID
 * @method string getUniqueId() 获取终端唯一ID，用于区分同一个用户的多个终端
 * @method void setUniqueId(string $UniqueId) 设置终端唯一ID，用于区分同一个用户的多个终端
 * @method integer getTtlMinutes() 获取Token的TTL(time to alive)分钟数
 * @method void setTtlMinutes(integer $TtlMinutes) 设置Token的TTL(time to alive)分钟数
 * @method string getOldAccessToken() 获取旧的AccessToken。续期Token时，此参数为必须。
 * @method void setOldAccessToken(string $OldAccessToken) 设置旧的AccessToken。续期Token时，此参数为必须。
 */
class CreateUsrTokenRequest extends AbstractModel
{
    /**
     * @var string 终端用户在IoT Video上的唯一标识ID
     */
    public $AccessId;

    /**
     * @var string 终端唯一ID，用于区分同一个用户的多个终端
     */
    public $UniqueId;

    /**
     * @var integer Token的TTL(time to alive)分钟数
     */
    public $TtlMinutes;

    /**
     * @var string 旧的AccessToken。续期Token时，此参数为必须。
     */
    public $OldAccessToken;

    /**
     * @param string $AccessId 终端用户在IoT Video上的唯一标识ID
     * @param string $UniqueId 终端唯一ID，用于区分同一个用户的多个终端
     * @param integer $TtlMinutes Token的TTL(time to alive)分钟数
     * @param string $OldAccessToken 旧的AccessToken。续期Token时，此参数为必须。
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

        if (array_key_exists("UniqueId",$param) and $param["UniqueId"] !== null) {
            $this->UniqueId = $param["UniqueId"];
        }

        if (array_key_exists("TtlMinutes",$param) and $param["TtlMinutes"] !== null) {
            $this->TtlMinutes = $param["TtlMinutes"];
        }

        if (array_key_exists("OldAccessToken",$param) and $param["OldAccessToken"] !== null) {
            $this->OldAccessToken = $param["OldAccessToken"];
        }
    }
}
