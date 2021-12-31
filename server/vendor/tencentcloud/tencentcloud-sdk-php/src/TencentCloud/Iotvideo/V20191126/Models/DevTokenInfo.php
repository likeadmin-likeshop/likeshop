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
 * 用于终端用户临时访问设备的token授权信息
 *
 * @method string getAccessId() 获取客户的终端用户在IotVideo上的唯一标识id
 * @method void setAccessId(string $AccessId) 设置客户的终端用户在IotVideo上的唯一标识id
 * @method string getTid() 获取设备TID
 * @method void setTid(string $Tid) 设置设备TID
 * @method string getAccessToken() 获取IotVideo平台的accessToken
 * @method void setAccessToken(string $AccessToken) 设置IotVideo平台的accessToken
 * @method integer getExpireTime() 获取Token的过期时间，单位秒(UTC时间)
 * @method void setExpireTime(integer $ExpireTime) 设置Token的过期时间，单位秒(UTC时间)
 */
class DevTokenInfo extends AbstractModel
{
    /**
     * @var string 客户的终端用户在IotVideo上的唯一标识id
     */
    public $AccessId;

    /**
     * @var string 设备TID
     */
    public $Tid;

    /**
     * @var string IotVideo平台的accessToken
     */
    public $AccessToken;

    /**
     * @var integer Token的过期时间，单位秒(UTC时间)
     */
    public $ExpireTime;

    /**
     * @param string $AccessId 客户的终端用户在IotVideo上的唯一标识id
     * @param string $Tid 设备TID
     * @param string $AccessToken IotVideo平台的accessToken
     * @param integer $ExpireTime Token的过期时间，单位秒(UTC时间)
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

        if (array_key_exists("AccessToken",$param) and $param["AccessToken"] !== null) {
            $this->AccessToken = $param["AccessToken"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
