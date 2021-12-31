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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * serverless实例网络信息描述
 *
 * @method string getAddress() 获取地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddress(string $Address) 设置地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIp() 获取ip地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIp(string $Ip) 设置ip地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPort() 获取端口号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(integer $Port) 设置端口号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNetType() 获取网络类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetType(string $NetType) 设置网络类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class ServerlessDBInstanceNetInfo extends AbstractModel
{
    /**
     * @var string 地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Address;

    /**
     * @var string ip地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ip;

    /**
     * @var integer 端口号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 网络类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetType;

    /**
     * @param string $Address 地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Ip ip地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Port 端口号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NetType 网络类型
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
        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }
    }
}
