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
 * ModifyDevice请求参数结构体
 *
 * @method string getTid() 获取设备ID
 * @method void setTid(string $Tid) 设置设备ID
 * @method string getAccessId() 获取用户ID
 * @method void setAccessId(string $AccessId) 设置用户ID
 * @method string getNick() 获取设备昵称，最多不超过64个字符
 * @method void setNick(string $Nick) 设置设备昵称，最多不超过64个字符
 */
class ModifyDeviceRequest extends AbstractModel
{
    /**
     * @var string 设备ID
     */
    public $Tid;

    /**
     * @var string 用户ID
     */
    public $AccessId;

    /**
     * @var string 设备昵称，最多不超过64个字符
     */
    public $Nick;

    /**
     * @param string $Tid 设备ID
     * @param string $AccessId 用户ID
     * @param string $Nick 设备昵称，最多不超过64个字符
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
        if (array_key_exists("Tid",$param) and $param["Tid"] !== null) {
            $this->Tid = $param["Tid"];
        }

        if (array_key_exists("AccessId",$param) and $param["AccessId"] !== null) {
            $this->AccessId = $param["AccessId"];
        }

        if (array_key_exists("Nick",$param) and $param["Nick"] !== null) {
            $this->Nick = $param["Nick"];
        }
    }
}
