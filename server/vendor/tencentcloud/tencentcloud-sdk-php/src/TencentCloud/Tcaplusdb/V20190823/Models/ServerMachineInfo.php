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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * svr的机器列表ServerList
 *
 * @method string getServerUid() 获取机器唯一id
 * @method void setServerUid(string $ServerUid) 设置机器唯一id
 * @method string getMachineType() 获取机器类型
 * @method void setMachineType(string $MachineType) 设置机器类型
 */
class ServerMachineInfo extends AbstractModel
{
    /**
     * @var string 机器唯一id
     */
    public $ServerUid;

    /**
     * @var string 机器类型
     */
    public $MachineType;

    /**
     * @param string $ServerUid 机器唯一id
     * @param string $MachineType 机器类型
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
        if (array_key_exists("ServerUid",$param) and $param["ServerUid"] !== null) {
            $this->ServerUid = $param["ServerUid"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }
    }
}
