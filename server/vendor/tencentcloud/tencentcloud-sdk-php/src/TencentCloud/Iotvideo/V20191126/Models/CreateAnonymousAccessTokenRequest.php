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
 * CreateAnonymousAccessToken请求参数结构体
 *
 * @method integer getTtlMinutes() 获取Token的TTL(time to alive)分钟数,最大值1440(即24小时)
 * @method void setTtlMinutes(integer $TtlMinutes) 设置Token的TTL(time to alive)分钟数,最大值1440(即24小时)
 * @method string getTid() 获取设备ID。创建Token时, 此参数为必须项
 * @method void setTid(string $Tid) 设置设备ID。创建Token时, 此参数为必须项
 * @method string getOldAccessToken() 获取旧的AccessToken。续期Token时，此参数为必须
 * @method void setOldAccessToken(string $OldAccessToken) 设置旧的AccessToken。续期Token时，此参数为必须
 */
class CreateAnonymousAccessTokenRequest extends AbstractModel
{
    /**
     * @var integer Token的TTL(time to alive)分钟数,最大值1440(即24小时)
     */
    public $TtlMinutes;

    /**
     * @var string 设备ID。创建Token时, 此参数为必须项
     */
    public $Tid;

    /**
     * @var string 旧的AccessToken。续期Token时，此参数为必须
     */
    public $OldAccessToken;

    /**
     * @param integer $TtlMinutes Token的TTL(time to alive)分钟数,最大值1440(即24小时)
     * @param string $Tid 设备ID。创建Token时, 此参数为必须项
     * @param string $OldAccessToken 旧的AccessToken。续期Token时，此参数为必须
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
        if (array_key_exists("TtlMinutes",$param) and $param["TtlMinutes"] !== null) {
            $this->TtlMinutes = $param["TtlMinutes"];
        }

        if (array_key_exists("Tid",$param) and $param["Tid"] !== null) {
            $this->Tid = $param["Tid"];
        }

        if (array_key_exists("OldAccessToken",$param) and $param["OldAccessToken"] !== null) {
            $this->OldAccessToken = $param["OldAccessToken"];
        }
    }
}
