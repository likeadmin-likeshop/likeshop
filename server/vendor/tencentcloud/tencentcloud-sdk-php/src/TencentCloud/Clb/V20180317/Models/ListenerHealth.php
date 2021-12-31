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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 监听器的健康检查信息
 *
 * @method string getListenerId() 获取监听器ID
 * @method void setListenerId(string $ListenerId) 设置监听器ID
 * @method string getListenerName() 获取监听器名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setListenerName(string $ListenerName) 设置监听器名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocol() 获取监听器的协议
 * @method void setProtocol(string $Protocol) 设置监听器的协议
 * @method integer getPort() 获取监听器的端口
 * @method void setPort(integer $Port) 设置监听器的端口
 * @method array getRules() 获取监听器的转发规则列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRules(array $Rules) 设置监听器的转发规则列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class ListenerHealth extends AbstractModel
{
    /**
     * @var string 监听器ID
     */
    public $ListenerId;

    /**
     * @var string 监听器名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ListenerName;

    /**
     * @var string 监听器的协议
     */
    public $Protocol;

    /**
     * @var integer 监听器的端口
     */
    public $Port;

    /**
     * @var array 监听器的转发规则列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rules;

    /**
     * @param string $ListenerId 监听器ID
     * @param string $ListenerName 监听器名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Protocol 监听器的协议
     * @param integer $Port 监听器的端口
     * @param array $Rules 监听器的转发规则列表
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new RuleHealth();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }
    }
}
