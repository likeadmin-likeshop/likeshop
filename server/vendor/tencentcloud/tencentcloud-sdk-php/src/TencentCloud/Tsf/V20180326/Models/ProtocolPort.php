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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 	端口对象
 *
 * @method string getProtocol() 获取TCP UDP
 * @method void setProtocol(string $Protocol) 设置TCP UDP
 * @method integer getPort() 获取服务端口
 * @method void setPort(integer $Port) 设置服务端口
 * @method integer getTargetPort() 获取容器端口
 * @method void setTargetPort(integer $TargetPort) 设置容器端口
 * @method integer getNodePort() 获取主机端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodePort(integer $NodePort) 设置主机端口
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProtocolPort extends AbstractModel
{
    /**
     * @var string TCP UDP
     */
    public $Protocol;

    /**
     * @var integer 服务端口
     */
    public $Port;

    /**
     * @var integer 容器端口
     */
    public $TargetPort;

    /**
     * @var integer 主机端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodePort;

    /**
     * @param string $Protocol TCP UDP
     * @param integer $Port 服务端口
     * @param integer $TargetPort 容器端口
     * @param integer $NodePort 主机端口
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("TargetPort",$param) and $param["TargetPort"] !== null) {
            $this->TargetPort = $param["TargetPort"];
        }

        if (array_key_exists("NodePort",$param) and $param["NodePort"] !== null) {
            $this->NodePort = $param["NodePort"];
        }
    }
}
