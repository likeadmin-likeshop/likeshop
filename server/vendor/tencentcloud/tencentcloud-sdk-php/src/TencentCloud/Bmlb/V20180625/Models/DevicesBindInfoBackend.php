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
namespace TencentCloud\Bmlb\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取设备绑定信息时返回的所绑定的主机信息。
 *
 * @method string getInstanceId() 获取黑石物理机的主机ID、托管主机ID或虚拟机IP。
 * @method void setInstanceId(string $InstanceId) 设置黑石物理机的主机ID、托管主机ID或虚拟机IP。
 * @method integer getPort() 获取主机端口。
 * @method void setPort(integer $Port) 设置主机端口。
 */
class DevicesBindInfoBackend extends AbstractModel
{
    /**
     * @var string 黑石物理机的主机ID、托管主机ID或虚拟机IP。
     */
    public $InstanceId;

    /**
     * @var integer 主机端口。
     */
    public $Port;

    /**
     * @param string $InstanceId 黑石物理机的主机ID、托管主机ID或虚拟机IP。
     * @param integer $Port 主机端口。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}
