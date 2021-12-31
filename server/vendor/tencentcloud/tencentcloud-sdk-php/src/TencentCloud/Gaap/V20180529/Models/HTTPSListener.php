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
 * HTTPS类型监听器信息
 *
 * @method string getListenerId() 获取监听器ID
 * @method void setListenerId(string $ListenerId) 设置监听器ID
 * @method string getListenerName() 获取监听器名称
 * @method void setListenerName(string $ListenerName) 设置监听器名称
 * @method integer getPort() 获取监听器端口
 * @method void setPort(integer $Port) 设置监听器端口
 * @method string getProtocol() 获取监听器协议， HTTP表示HTTP，HTTPS表示HTTPS，此结构取值HTTPS
 * @method void setProtocol(string $Protocol) 设置监听器协议， HTTP表示HTTP，HTTPS表示HTTPS，此结构取值HTTPS
 * @method integer getListenerStatus() 获取监听器状态，其中：
0表示运行中；
1表示创建中；
2表示销毁中；
3表示源站调整中；
4表示配置变更中。
 * @method void setListenerStatus(integer $ListenerStatus) 设置监听器状态，其中：
0表示运行中；
1表示创建中；
2表示销毁中；
3表示源站调整中；
4表示配置变更中。
 * @method string getCertificateId() 获取监听器服务器SSL证书ID
 * @method void setCertificateId(string $CertificateId) 设置监听器服务器SSL证书ID
 * @method string getForwardProtocol() 获取监听器后端转发源站协议
 * @method void setForwardProtocol(string $ForwardProtocol) 设置监听器后端转发源站协议
 * @method integer getCreateTime() 获取监听器创建时间，Unix时间戳
 * @method void setCreateTime(integer $CreateTime) 设置监听器创建时间，Unix时间戳
 * @method string getCertificateAlias() 获取服务器SSL证书的别名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertificateAlias(string $CertificateAlias) 设置服务器SSL证书的别名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClientCertificateId() 获取监听器客户端CA证书ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientCertificateId(string $ClientCertificateId) 设置监听器客户端CA证书ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAuthType() 获取监听器认证方式。其中，
0表示单向认证；
1表示双向认证。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthType(integer $AuthType) 设置监听器认证方式。其中，
0表示单向认证；
1表示双向认证。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClientCertificateAlias() 获取客户端CA证书别名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientCertificateAlias(string $ClientCertificateAlias) 设置客户端CA证书别名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPolyClientCertificateAliasInfo() 获取多客户端CA证书别名信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolyClientCertificateAliasInfo(array $PolyClientCertificateAliasInfo) 设置多客户端CA证书别名信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class HTTPSListener extends AbstractModel
{
    /**
     * @var string 监听器ID
     */
    public $ListenerId;

    /**
     * @var string 监听器名称
     */
    public $ListenerName;

    /**
     * @var integer 监听器端口
     */
    public $Port;

    /**
     * @var string 监听器协议， HTTP表示HTTP，HTTPS表示HTTPS，此结构取值HTTPS
     */
    public $Protocol;

    /**
     * @var integer 监听器状态，其中：
0表示运行中；
1表示创建中；
2表示销毁中；
3表示源站调整中；
4表示配置变更中。
     */
    public $ListenerStatus;

    /**
     * @var string 监听器服务器SSL证书ID
     */
    public $CertificateId;

    /**
     * @var string 监听器后端转发源站协议
     */
    public $ForwardProtocol;

    /**
     * @var integer 监听器创建时间，Unix时间戳
     */
    public $CreateTime;

    /**
     * @var string 服务器SSL证书的别名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertificateAlias;

    /**
     * @var string 监听器客户端CA证书ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientCertificateId;

    /**
     * @var integer 监听器认证方式。其中，
0表示单向认证；
1表示双向认证。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthType;

    /**
     * @var string 客户端CA证书别名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientCertificateAlias;

    /**
     * @var array 多客户端CA证书别名信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolyClientCertificateAliasInfo;

    /**
     * @param string $ListenerId 监听器ID
     * @param string $ListenerName 监听器名称
     * @param integer $Port 监听器端口
     * @param string $Protocol 监听器协议， HTTP表示HTTP，HTTPS表示HTTPS，此结构取值HTTPS
     * @param integer $ListenerStatus 监听器状态，其中：
0表示运行中；
1表示创建中；
2表示销毁中；
3表示源站调整中；
4表示配置变更中。
     * @param string $CertificateId 监听器服务器SSL证书ID
     * @param string $ForwardProtocol 监听器后端转发源站协议
     * @param integer $CreateTime 监听器创建时间，Unix时间戳
     * @param string $CertificateAlias 服务器SSL证书的别名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClientCertificateId 监听器客户端CA证书ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AuthType 监听器认证方式。其中，
0表示单向认证；
1表示双向认证。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClientCertificateAlias 客户端CA证书别名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PolyClientCertificateAliasInfo 多客户端CA证书别名信息
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

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("ListenerStatus",$param) and $param["ListenerStatus"] !== null) {
            $this->ListenerStatus = $param["ListenerStatus"];
        }

        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("ForwardProtocol",$param) and $param["ForwardProtocol"] !== null) {
            $this->ForwardProtocol = $param["ForwardProtocol"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("CertificateAlias",$param) and $param["CertificateAlias"] !== null) {
            $this->CertificateAlias = $param["CertificateAlias"];
        }

        if (array_key_exists("ClientCertificateId",$param) and $param["ClientCertificateId"] !== null) {
            $this->ClientCertificateId = $param["ClientCertificateId"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("ClientCertificateAlias",$param) and $param["ClientCertificateAlias"] !== null) {
            $this->ClientCertificateAlias = $param["ClientCertificateAlias"];
        }

        if (array_key_exists("PolyClientCertificateAliasInfo",$param) and $param["PolyClientCertificateAliasInfo"] !== null) {
            $this->PolyClientCertificateAliasInfo = [];
            foreach ($param["PolyClientCertificateAliasInfo"] as $key => $value){
                $obj = new CertificateAliasInfo();
                $obj->deserialize($value);
                array_push($this->PolyClientCertificateAliasInfo, $obj);
            }
        }
    }
}
