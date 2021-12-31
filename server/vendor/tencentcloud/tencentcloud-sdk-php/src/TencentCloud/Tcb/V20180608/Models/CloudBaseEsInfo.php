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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * es信息
 *
 * @method integer getId() 获取es的id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置es的id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSecretName() 获取secret名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecretName(string $SecretName) 设置secret名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIp() 获取ip地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIp(string $Ip) 设置ip地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPort() 获取端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(integer $Port) 设置端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndex() 获取索引
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndex(string $Index) 设置索引
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccount() 获取用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccount(string $Account) 设置用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPassword() 获取密码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassword(string $Password) 设置密码
注意：此字段可能返回 null，表示取不到有效值。
 */
class CloudBaseEsInfo extends AbstractModel
{
    /**
     * @var integer es的id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string secret名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecretName;

    /**
     * @var string ip地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ip;

    /**
     * @var integer 端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string 索引
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Index;

    /**
     * @var string 用户名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Account;

    /**
     * @var string 密码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Password;

    /**
     * @param integer $Id es的id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SecretName secret名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Ip ip地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Port 端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Index 索引
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Account 用户名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Password 密码
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("SecretName",$param) and $param["SecretName"] !== null) {
            $this->SecretName = $param["SecretName"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
