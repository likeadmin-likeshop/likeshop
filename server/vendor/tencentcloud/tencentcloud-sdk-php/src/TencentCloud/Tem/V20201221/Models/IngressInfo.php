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
namespace TencentCloud\Tem\V20201221\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Ingress 配置
 *
 * @method string getNamespaceId() 获取tem namespaceId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespaceId(string $NamespaceId) 设置tem namespaceId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEksNamespace() 获取eks namespace
 * @method void setEksNamespace(string $EksNamespace) 设置eks namespace
 * @method string getAddressIPVersion() 获取ip version
 * @method void setAddressIPVersion(string $AddressIPVersion) 设置ip version
 * @method string getName() 获取ingress name
 * @method void setName(string $Name) 设置ingress name
 * @method array getRules() 获取rules 配置
 * @method void setRules(array $Rules) 设置rules 配置
 * @method string getClbId() 获取clb ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClbId(string $ClbId) 设置clb ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTls() 获取tls 配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTls(array $Tls) 设置tls 配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取eks clusterId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置eks clusterId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVip() 获取clb ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVip(string $Vip) 设置clb ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getMixed() 获取是否混合 https，默认 false，可选值 true 代表有 https 协议监听
 * @method void setMixed(boolean $Mixed) 设置是否混合 https，默认 false，可选值 true 代表有 https 协议监听
 */
class IngressInfo extends AbstractModel
{
    /**
     * @var string tem namespaceId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NamespaceId;

    /**
     * @var string eks namespace
     */
    public $EksNamespace;

    /**
     * @var string ip version
     */
    public $AddressIPVersion;

    /**
     * @var string ingress name
     */
    public $Name;

    /**
     * @var array rules 配置
     */
    public $Rules;

    /**
     * @var string clb ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClbId;

    /**
     * @var array tls 配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tls;

    /**
     * @var string eks clusterId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string clb ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vip;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var boolean 是否混合 https，默认 false，可选值 true 代表有 https 协议监听
     */
    public $Mixed;

    /**
     * @param string $NamespaceId tem namespaceId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EksNamespace eks namespace
     * @param string $AddressIPVersion ip version
     * @param string $Name ingress name
     * @param array $Rules rules 配置
     * @param string $ClbId clb ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tls tls 配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId eks clusterId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Vip clb ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Mixed 是否混合 https，默认 false，可选值 true 代表有 https 协议监听
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
        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("EksNamespace",$param) and $param["EksNamespace"] !== null) {
            $this->EksNamespace = $param["EksNamespace"];
        }

        if (array_key_exists("AddressIPVersion",$param) and $param["AddressIPVersion"] !== null) {
            $this->AddressIPVersion = $param["AddressIPVersion"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new IngressRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("ClbId",$param) and $param["ClbId"] !== null) {
            $this->ClbId = $param["ClbId"];
        }

        if (array_key_exists("Tls",$param) and $param["Tls"] !== null) {
            $this->Tls = [];
            foreach ($param["Tls"] as $key => $value){
                $obj = new IngressTls();
                $obj->deserialize($value);
                array_push($this->Tls, $obj);
            }
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Mixed",$param) and $param["Mixed"] !== null) {
            $this->Mixed = $param["Mixed"];
        }
    }
}
