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
 * CreateDevToken请求参数结构体
 *
 * @method string getAccessId() 获取客户的终端用户在IoT Video上的唯一标识ID
 * @method void setAccessId(string $AccessId) 设置客户的终端用户在IoT Video上的唯一标识ID
 * @method array getTids() 获取设备TID列表,0<元素数量<=100
 * @method void setTids(array $Tids) 设置设备TID列表,0<元素数量<=100
 * @method integer getTtlMinutes() 获取Token的TTL(time to alive)分钟数
 * @method void setTtlMinutes(integer $TtlMinutes) 设置Token的TTL(time to alive)分钟数
 */
class CreateDevTokenRequest extends AbstractModel
{
    /**
     * @var string 客户的终端用户在IoT Video上的唯一标识ID
     */
    public $AccessId;

    /**
     * @var array 设备TID列表,0<元素数量<=100
     */
    public $Tids;

    /**
     * @var integer Token的TTL(time to alive)分钟数
     */
    public $TtlMinutes;

    /**
     * @param string $AccessId 客户的终端用户在IoT Video上的唯一标识ID
     * @param array $Tids 设备TID列表,0<元素数量<=100
     * @param integer $TtlMinutes Token的TTL(time to alive)分钟数
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

        if (array_key_exists("Tids",$param) and $param["Tids"] !== null) {
            $this->Tids = $param["Tids"];
        }

        if (array_key_exists("TtlMinutes",$param) and $param["TtlMinutes"] !== null) {
            $this->TtlMinutes = $param["TtlMinutes"];
        }
    }
}
