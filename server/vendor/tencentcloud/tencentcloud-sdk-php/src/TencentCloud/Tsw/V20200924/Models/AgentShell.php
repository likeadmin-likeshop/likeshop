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
namespace TencentCloud\Tsw\V20200924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * agent安装脚本串
 *
 * @method string getToken() 获取鉴权token
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setToken(string $Token) 设置鉴权token
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEtlIp() 获取数据接收Ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEtlIp(string $EtlIp) 设置数据接收Ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEtlPort() 获取数据接收port
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEtlPort(string $EtlPort) 设置数据接收port
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getByHandAccess() 获取手动接入脚本串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setByHandAccess(string $ByHandAccess) 设置手动接入脚本串
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getByShellAccess() 获取自动接入脚本串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setByShellAccess(string $ByShellAccess) 设置自动接入脚本串
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSkyWalkingPort() 获取SkyWalking数据接收port
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSkyWalkingPort(string $SkyWalkingPort) 设置SkyWalking数据接收port
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZipkinPort() 获取Zipkin数据接收port
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZipkinPort(string $ZipkinPort) 设置Zipkin数据接收port
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJaegerPort() 获取Jaeger数据接收port
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJaegerPort(string $JaegerPort) 设置Jaeger数据接收port
注意：此字段可能返回 null，表示取不到有效值。
 */
class AgentShell extends AbstractModel
{
    /**
     * @var string 鉴权token
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Token;

    /**
     * @var string 数据接收Ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EtlIp;

    /**
     * @var string 数据接收port
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EtlPort;

    /**
     * @var string 手动接入脚本串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ByHandAccess;

    /**
     * @var string 自动接入脚本串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ByShellAccess;

    /**
     * @var string SkyWalking数据接收port
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SkyWalkingPort;

    /**
     * @var string Zipkin数据接收port
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZipkinPort;

    /**
     * @var string Jaeger数据接收port
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JaegerPort;

    /**
     * @param string $Token 鉴权token
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EtlIp 数据接收Ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EtlPort 数据接收port
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ByHandAccess 手动接入脚本串
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ByShellAccess 自动接入脚本串
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SkyWalkingPort SkyWalking数据接收port
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ZipkinPort Zipkin数据接收port
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JaegerPort Jaeger数据接收port
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
        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("EtlIp",$param) and $param["EtlIp"] !== null) {
            $this->EtlIp = $param["EtlIp"];
        }

        if (array_key_exists("EtlPort",$param) and $param["EtlPort"] !== null) {
            $this->EtlPort = $param["EtlPort"];
        }

        if (array_key_exists("ByHandAccess",$param) and $param["ByHandAccess"] !== null) {
            $this->ByHandAccess = $param["ByHandAccess"];
        }

        if (array_key_exists("ByShellAccess",$param) and $param["ByShellAccess"] !== null) {
            $this->ByShellAccess = $param["ByShellAccess"];
        }

        if (array_key_exists("SkyWalkingPort",$param) and $param["SkyWalkingPort"] !== null) {
            $this->SkyWalkingPort = $param["SkyWalkingPort"];
        }

        if (array_key_exists("ZipkinPort",$param) and $param["ZipkinPort"] !== null) {
            $this->ZipkinPort = $param["ZipkinPort"];
        }

        if (array_key_exists("JaegerPort",$param) and $param["JaegerPort"] !== null) {
            $this->JaegerPort = $param["JaegerPort"];
        }
    }
}
