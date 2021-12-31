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
 * 流量镜像健康检查返回的接收机的端口及状态信息。
 *
 * @method integer getPort() 获取接收机端口。
 * @method void setPort(integer $Port) 设置接收机端口。
 * @method string getStatus() 获取状态。
 * @method void setStatus(string $Status) 设置状态。
 */
class TrafficMirrorPortStatus extends AbstractModel
{
    /**
     * @var integer 接收机端口。
     */
    public $Port;

    /**
     * @var string 状态。
     */
    public $Status;

    /**
     * @param integer $Port 接收机端口。
     * @param string $Status 状态。
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
        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
