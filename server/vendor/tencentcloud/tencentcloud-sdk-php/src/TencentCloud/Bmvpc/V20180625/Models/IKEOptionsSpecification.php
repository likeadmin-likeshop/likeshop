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
namespace TencentCloud\Bmvpc\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IKE配置（Internet Key Exchange，因特网密钥交换），IKE具有一套自我保护机制，用户配置网络安全协议
 *
 * @method string getPropoEncryAlgorithm() 获取加密算法，可选值：'3DES-CBC', 'AES-CBC-128', 'AES-CBC-192', 'AES-CBC-256', 'DES-CBC'，默认为3DES-CBC
 * @method void setPropoEncryAlgorithm(string $PropoEncryAlgorithm) 设置加密算法，可选值：'3DES-CBC', 'AES-CBC-128', 'AES-CBC-192', 'AES-CBC-256', 'DES-CBC'，默认为3DES-CBC
 * @method string getPropoAuthenAlgorithm() 获取认证算法：可选值：'MD5', 'SHA1'，默认为MD5
 * @method void setPropoAuthenAlgorithm(string $PropoAuthenAlgorithm) 设置认证算法：可选值：'MD5', 'SHA1'，默认为MD5
 * @method string getExchangeMode() 获取协商模式：可选值：'AGGRESSIVE', 'MAIN'，默认为MAIN
 * @method void setExchangeMode(string $ExchangeMode) 设置协商模式：可选值：'AGGRESSIVE', 'MAIN'，默认为MAIN
 * @method string getLocalIdentity() 获取本端标识类型：可选值：'ADDRESS', 'FQDN'，默认为ADDRESS
 * @method void setLocalIdentity(string $LocalIdentity) 设置本端标识类型：可选值：'ADDRESS', 'FQDN'，默认为ADDRESS
 * @method string getRemoteIdentity() 获取对端标识类型：可选值：'ADDRESS', 'FQDN'，默认为ADDRESS
 * @method void setRemoteIdentity(string $RemoteIdentity) 设置对端标识类型：可选值：'ADDRESS', 'FQDN'，默认为ADDRESS
 * @method string getLocalAddress() 获取本端标识，当LocalIdentity选为ADDRESS时，LocalAddress必填。localAddress默认为vpn网关公网IP
 * @method void setLocalAddress(string $LocalAddress) 设置本端标识，当LocalIdentity选为ADDRESS时，LocalAddress必填。localAddress默认为vpn网关公网IP
 * @method string getRemoteAddress() 获取对端标识，当RemoteIdentity选为ADDRESS时，RemoteAddress必填
 * @method void setRemoteAddress(string $RemoteAddress) 设置对端标识，当RemoteIdentity选为ADDRESS时，RemoteAddress必填
 * @method string getLocalFqdnName() 获取本端标识，当LocalIdentity选为FQDN时，LocalFqdnName必填
 * @method void setLocalFqdnName(string $LocalFqdnName) 设置本端标识，当LocalIdentity选为FQDN时，LocalFqdnName必填
 * @method string getRemoteFqdnName() 获取对端标识，当remoteIdentity选为FQDN时，RemoteFqdnName必填
 * @method void setRemoteFqdnName(string $RemoteFqdnName) 设置对端标识，当remoteIdentity选为FQDN时，RemoteFqdnName必填
 * @method string getDhGroupName() 获取DH group，指定IKE交换密钥时使用的DH组，可选值：'GROUP1', 'GROUP2', 'GROUP5', 'GROUP14', 'GROUP24'，
 * @method void setDhGroupName(string $DhGroupName) 设置DH group，指定IKE交换密钥时使用的DH组，可选值：'GROUP1', 'GROUP2', 'GROUP5', 'GROUP14', 'GROUP24'，
 * @method integer getIKESaLifetimeSeconds() 获取IKE SA Lifetime，单位：秒，设置IKE SA的生存周期，取值范围：60-604800
 * @method void setIKESaLifetimeSeconds(integer $IKESaLifetimeSeconds) 设置IKE SA Lifetime，单位：秒，设置IKE SA的生存周期，取值范围：60-604800
 * @method string getIKEVersion() 获取IKE版本
 * @method void setIKEVersion(string $IKEVersion) 设置IKE版本
 */
class IKEOptionsSpecification extends AbstractModel
{
    /**
     * @var string 加密算法，可选值：'3DES-CBC', 'AES-CBC-128', 'AES-CBC-192', 'AES-CBC-256', 'DES-CBC'，默认为3DES-CBC
     */
    public $PropoEncryAlgorithm;

    /**
     * @var string 认证算法：可选值：'MD5', 'SHA1'，默认为MD5
     */
    public $PropoAuthenAlgorithm;

    /**
     * @var string 协商模式：可选值：'AGGRESSIVE', 'MAIN'，默认为MAIN
     */
    public $ExchangeMode;

    /**
     * @var string 本端标识类型：可选值：'ADDRESS', 'FQDN'，默认为ADDRESS
     */
    public $LocalIdentity;

    /**
     * @var string 对端标识类型：可选值：'ADDRESS', 'FQDN'，默认为ADDRESS
     */
    public $RemoteIdentity;

    /**
     * @var string 本端标识，当LocalIdentity选为ADDRESS时，LocalAddress必填。localAddress默认为vpn网关公网IP
     */
    public $LocalAddress;

    /**
     * @var string 对端标识，当RemoteIdentity选为ADDRESS时，RemoteAddress必填
     */
    public $RemoteAddress;

    /**
     * @var string 本端标识，当LocalIdentity选为FQDN时，LocalFqdnName必填
     */
    public $LocalFqdnName;

    /**
     * @var string 对端标识，当remoteIdentity选为FQDN时，RemoteFqdnName必填
     */
    public $RemoteFqdnName;

    /**
     * @var string DH group，指定IKE交换密钥时使用的DH组，可选值：'GROUP1', 'GROUP2', 'GROUP5', 'GROUP14', 'GROUP24'，
     */
    public $DhGroupName;

    /**
     * @var integer IKE SA Lifetime，单位：秒，设置IKE SA的生存周期，取值范围：60-604800
     */
    public $IKESaLifetimeSeconds;

    /**
     * @var string IKE版本
     */
    public $IKEVersion;

    /**
     * @param string $PropoEncryAlgorithm 加密算法，可选值：'3DES-CBC', 'AES-CBC-128', 'AES-CBC-192', 'AES-CBC-256', 'DES-CBC'，默认为3DES-CBC
     * @param string $PropoAuthenAlgorithm 认证算法：可选值：'MD5', 'SHA1'，默认为MD5
     * @param string $ExchangeMode 协商模式：可选值：'AGGRESSIVE', 'MAIN'，默认为MAIN
     * @param string $LocalIdentity 本端标识类型：可选值：'ADDRESS', 'FQDN'，默认为ADDRESS
     * @param string $RemoteIdentity 对端标识类型：可选值：'ADDRESS', 'FQDN'，默认为ADDRESS
     * @param string $LocalAddress 本端标识，当LocalIdentity选为ADDRESS时，LocalAddress必填。localAddress默认为vpn网关公网IP
     * @param string $RemoteAddress 对端标识，当RemoteIdentity选为ADDRESS时，RemoteAddress必填
     * @param string $LocalFqdnName 本端标识，当LocalIdentity选为FQDN时，LocalFqdnName必填
     * @param string $RemoteFqdnName 对端标识，当remoteIdentity选为FQDN时，RemoteFqdnName必填
     * @param string $DhGroupName DH group，指定IKE交换密钥时使用的DH组，可选值：'GROUP1', 'GROUP2', 'GROUP5', 'GROUP14', 'GROUP24'，
     * @param integer $IKESaLifetimeSeconds IKE SA Lifetime，单位：秒，设置IKE SA的生存周期，取值范围：60-604800
     * @param string $IKEVersion IKE版本
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
        if (array_key_exists("PropoEncryAlgorithm",$param) and $param["PropoEncryAlgorithm"] !== null) {
            $this->PropoEncryAlgorithm = $param["PropoEncryAlgorithm"];
        }

        if (array_key_exists("PropoAuthenAlgorithm",$param) and $param["PropoAuthenAlgorithm"] !== null) {
            $this->PropoAuthenAlgorithm = $param["PropoAuthenAlgorithm"];
        }

        if (array_key_exists("ExchangeMode",$param) and $param["ExchangeMode"] !== null) {
            $this->ExchangeMode = $param["ExchangeMode"];
        }

        if (array_key_exists("LocalIdentity",$param) and $param["LocalIdentity"] !== null) {
            $this->LocalIdentity = $param["LocalIdentity"];
        }

        if (array_key_exists("RemoteIdentity",$param) and $param["RemoteIdentity"] !== null) {
            $this->RemoteIdentity = $param["RemoteIdentity"];
        }

        if (array_key_exists("LocalAddress",$param) and $param["LocalAddress"] !== null) {
            $this->LocalAddress = $param["LocalAddress"];
        }

        if (array_key_exists("RemoteAddress",$param) and $param["RemoteAddress"] !== null) {
            $this->RemoteAddress = $param["RemoteAddress"];
        }

        if (array_key_exists("LocalFqdnName",$param) and $param["LocalFqdnName"] !== null) {
            $this->LocalFqdnName = $param["LocalFqdnName"];
        }

        if (array_key_exists("RemoteFqdnName",$param) and $param["RemoteFqdnName"] !== null) {
            $this->RemoteFqdnName = $param["RemoteFqdnName"];
        }

        if (array_key_exists("DhGroupName",$param) and $param["DhGroupName"] !== null) {
            $this->DhGroupName = $param["DhGroupName"];
        }

        if (array_key_exists("IKESaLifetimeSeconds",$param) and $param["IKESaLifetimeSeconds"] !== null) {
            $this->IKESaLifetimeSeconds = $param["IKESaLifetimeSeconds"];
        }

        if (array_key_exists("IKEVersion",$param) and $param["IKEVersion"] !== null) {
            $this->IKEVersion = $param["IKEVersion"];
        }
    }
}
