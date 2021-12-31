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
 * 监听器绑定的后端服务的详细信息
 *
 * @method string getType() 获取后端服务的类型，可取：CVM、ENI
 * @method void setType(string $Type) 设置后端服务的类型，可取：CVM、ENI
 * @method string getInstanceId() 获取后端服务的唯一 ID，如 ins-abcd1234
 * @method void setInstanceId(string $InstanceId) 设置后端服务的唯一 ID，如 ins-abcd1234
 * @method integer getPort() 获取后端服务的监听端口
 * @method void setPort(integer $Port) 设置后端服务的监听端口
 * @method integer getWeight() 获取后端服务的转发权重，取值范围：[0, 100]，默认为 10。
 * @method void setWeight(integer $Weight) 设置后端服务的转发权重，取值范围：[0, 100]，默认为 10。
 * @method array getPublicIpAddresses() 获取后端服务的外网 IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicIpAddresses(array $PublicIpAddresses) 设置后端服务的外网 IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPrivateIpAddresses() 获取后端服务的内网 IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) 设置后端服务的内网 IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取后端服务的实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置后端服务的实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegisteredTime() 获取后端服务被绑定的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegisteredTime(string $RegisteredTime) 设置后端服务被绑定的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEniId() 获取弹性网卡唯一ID，如 eni-1234abcd
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEniId(string $EniId) 设置弹性网卡唯一ID，如 eni-1234abcd
注意：此字段可能返回 null，表示取不到有效值。
 */
class Backend extends AbstractModel
{
    /**
     * @var string 后端服务的类型，可取：CVM、ENI
     */
    public $Type;

    /**
     * @var string 后端服务的唯一 ID，如 ins-abcd1234
     */
    public $InstanceId;

    /**
     * @var integer 后端服务的监听端口
     */
    public $Port;

    /**
     * @var integer 后端服务的转发权重，取值范围：[0, 100]，默认为 10。
     */
    public $Weight;

    /**
     * @var array 后端服务的外网 IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicIpAddresses;

    /**
     * @var array 后端服务的内网 IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivateIpAddresses;

    /**
     * @var string 后端服务的实例名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var string 后端服务被绑定的时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegisteredTime;

    /**
     * @var string 弹性网卡唯一ID，如 eni-1234abcd
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EniId;

    /**
     * @param string $Type 后端服务的类型，可取：CVM、ENI
     * @param string $InstanceId 后端服务的唯一 ID，如 ins-abcd1234
     * @param integer $Port 后端服务的监听端口
     * @param integer $Weight 后端服务的转发权重，取值范围：[0, 100]，默认为 10。
     * @param array $PublicIpAddresses 后端服务的外网 IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PrivateIpAddresses 后端服务的内网 IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName 后端服务的实例名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegisteredTime 后端服务被绑定的时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EniId 弹性网卡唯一ID，如 eni-1234abcd
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("PublicIpAddresses",$param) and $param["PublicIpAddresses"] !== null) {
            $this->PublicIpAddresses = $param["PublicIpAddresses"];
        }

        if (array_key_exists("PrivateIpAddresses",$param) and $param["PrivateIpAddresses"] !== null) {
            $this->PrivateIpAddresses = $param["PrivateIpAddresses"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("RegisteredTime",$param) and $param["RegisteredTime"] !== null) {
            $this->RegisteredTime = $param["RegisteredTime"];
        }

        if (array_key_exists("EniId",$param) and $param["EniId"] !== null) {
            $this->EniId = $param["EniId"];
        }
    }
}
