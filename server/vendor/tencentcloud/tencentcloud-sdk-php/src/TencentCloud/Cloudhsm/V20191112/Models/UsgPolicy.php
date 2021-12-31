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
namespace TencentCloud\Cloudhsm\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全组策略
 *
 * @method string getIp() 获取cidr格式地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIp(string $Ip) 设置cidr格式地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getId() 获取安全组id代表的地址集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置安全组id代表的地址集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddressModule() 获取地址组id代表的地址集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddressModule(string $AddressModule) 设置地址组id代表的地址集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProto() 获取协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProto(string $Proto) 设置协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPort() 获取端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(string $Port) 设置端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceModule() 获取服务组id代表的协议和端口集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceModule(string $ServiceModule) 设置服务组id代表的协议和端口集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDesc() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDesc(string $Desc) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAction() 获取匹配后行为:ACCEPT/DROP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAction(string $Action) 设置匹配后行为:ACCEPT/DROP
注意：此字段可能返回 null，表示取不到有效值。
 */
class UsgPolicy extends AbstractModel
{
    /**
     * @var string cidr格式地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ip;

    /**
     * @var string 安全组id代表的地址集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 地址组id代表的地址集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AddressModule;

    /**
     * @var string 协议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Proto;

    /**
     * @var string 端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string 服务组id代表的协议和端口集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceModule;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Desc;

    /**
     * @var string 匹配后行为:ACCEPT/DROP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Action;

    /**
     * @param string $Ip cidr格式地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Id 安全组id代表的地址集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AddressModule 地址组id代表的地址集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Proto 协议
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Port 端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceModule 服务组id代表的协议和端口集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Desc 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Action 匹配后行为:ACCEPT/DROP
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("AddressModule",$param) and $param["AddressModule"] !== null) {
            $this->AddressModule = $param["AddressModule"];
        }

        if (array_key_exists("Proto",$param) and $param["Proto"] !== null) {
            $this->Proto = $param["Proto"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("ServiceModule",$param) and $param["ServiceModule"] !== null) {
            $this->ServiceModule = $param["ServiceModule"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }
    }
}
