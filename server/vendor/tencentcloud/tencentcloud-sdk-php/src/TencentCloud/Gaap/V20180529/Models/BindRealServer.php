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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 已绑定的源站信息
 *
 * @method string getRealServerId() 获取源站ID
 * @method void setRealServerId(string $RealServerId) 设置源站ID
 * @method string getRealServerIP() 获取源站IP或者域名
 * @method void setRealServerIP(string $RealServerIP) 设置源站IP或者域名
 * @method integer getRealServerWeight() 获取该源站所占权重
 * @method void setRealServerWeight(integer $RealServerWeight) 设置该源站所占权重
 * @method integer getRealServerStatus() 获取源站健康检查状态，其中：
0表示正常；
1表示异常。
未开启健康检查状态时，该状态始终为正常。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealServerStatus(integer $RealServerStatus) 设置源站健康检查状态，其中：
0表示正常；
1表示异常。
未开启健康检查状态时，该状态始终为正常。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRealServerPort() 获取源站的端口号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealServerPort(integer $RealServerPort) 设置源站的端口号
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDownIPList() 获取当源站为域名时，域名被解析成一个或者多个IP，该字段表示其中异常的IP列表。状态异常，但该字段为空时，表示域名解析异常。
 * @method void setDownIPList(array $DownIPList) 设置当源站为域名时，域名被解析成一个或者多个IP，该字段表示其中异常的IP列表。状态异常，但该字段为空时，表示域名解析异常。
 */
class BindRealServer extends AbstractModel
{
    /**
     * @var string 源站ID
     */
    public $RealServerId;

    /**
     * @var string 源站IP或者域名
     */
    public $RealServerIP;

    /**
     * @var integer 该源站所占权重
     */
    public $RealServerWeight;

    /**
     * @var integer 源站健康检查状态，其中：
0表示正常；
1表示异常。
未开启健康检查状态时，该状态始终为正常。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealServerStatus;

    /**
     * @var integer 源站的端口号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealServerPort;

    /**
     * @var array 当源站为域名时，域名被解析成一个或者多个IP，该字段表示其中异常的IP列表。状态异常，但该字段为空时，表示域名解析异常。
     */
    public $DownIPList;

    /**
     * @param string $RealServerId 源站ID
     * @param string $RealServerIP 源站IP或者域名
     * @param integer $RealServerWeight 该源站所占权重
     * @param integer $RealServerStatus 源站健康检查状态，其中：
0表示正常；
1表示异常。
未开启健康检查状态时，该状态始终为正常。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RealServerPort 源站的端口号
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DownIPList 当源站为域名时，域名被解析成一个或者多个IP，该字段表示其中异常的IP列表。状态异常，但该字段为空时，表示域名解析异常。
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
        if (array_key_exists("RealServerId",$param) and $param["RealServerId"] !== null) {
            $this->RealServerId = $param["RealServerId"];
        }

        if (array_key_exists("RealServerIP",$param) and $param["RealServerIP"] !== null) {
            $this->RealServerIP = $param["RealServerIP"];
        }

        if (array_key_exists("RealServerWeight",$param) and $param["RealServerWeight"] !== null) {
            $this->RealServerWeight = $param["RealServerWeight"];
        }

        if (array_key_exists("RealServerStatus",$param) and $param["RealServerStatus"] !== null) {
            $this->RealServerStatus = $param["RealServerStatus"];
        }

        if (array_key_exists("RealServerPort",$param) and $param["RealServerPort"] !== null) {
            $this->RealServerPort = $param["RealServerPort"];
        }

        if (array_key_exists("DownIPList",$param) and $param["DownIPList"] !== null) {
            $this->DownIPList = $param["DownIPList"];
        }
    }
}
