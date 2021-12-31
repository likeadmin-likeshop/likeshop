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
 * 传统型负载均衡的后端服务相关信息
 *
 * @method string getType() 获取后端服务的类型，可取值：CVM、ENI（即将支持）
 * @method void setType(string $Type) 设置后端服务的类型，可取值：CVM、ENI（即将支持）
 * @method string getInstanceId() 获取后端服务的唯一 ID，可通过 DescribeInstances 接口返回字段中的 unInstanceId 字段获取
 * @method void setInstanceId(string $InstanceId) 设置后端服务的唯一 ID，可通过 DescribeInstances 接口返回字段中的 unInstanceId 字段获取
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
 * @method integer getRunFlag() 获取后端服务的状态
1：故障，2：运行中，3：创建中，4：已关机，5：已退还，6：退还中， 7：重启中，8：开机中，9：关机中，10：密码重置中，11：格式化中，12：镜像制作中，13：带宽设置中，14：重装系统中，19：升级中，21：热迁移中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunFlag(integer $RunFlag) 设置后端服务的状态
1：故障，2：运行中，3：创建中，4：已关机，5：已退还，6：退还中， 7：重启中，8：开机中，9：关机中，10：密码重置中，11：格式化中，12：镜像制作中，13：带宽设置中，14：重装系统中，19：升级中，21：热迁移中
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClassicalTarget extends AbstractModel
{
    /**
     * @var string 后端服务的类型，可取值：CVM、ENI（即将支持）
     */
    public $Type;

    /**
     * @var string 后端服务的唯一 ID，可通过 DescribeInstances 接口返回字段中的 unInstanceId 字段获取
     */
    public $InstanceId;

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
     * @var integer 后端服务的状态
1：故障，2：运行中，3：创建中，4：已关机，5：已退还，6：退还中， 7：重启中，8：开机中，9：关机中，10：密码重置中，11：格式化中，12：镜像制作中，13：带宽设置中，14：重装系统中，19：升级中，21：热迁移中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunFlag;

    /**
     * @param string $Type 后端服务的类型，可取值：CVM、ENI（即将支持）
     * @param string $InstanceId 后端服务的唯一 ID，可通过 DescribeInstances 接口返回字段中的 unInstanceId 字段获取
     * @param integer $Weight 后端服务的转发权重，取值范围：[0, 100]，默认为 10。
     * @param array $PublicIpAddresses 后端服务的外网 IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PrivateIpAddresses 后端服务的内网 IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName 后端服务的实例名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RunFlag 后端服务的状态
1：故障，2：运行中，3：创建中，4：已关机，5：已退还，6：退还中， 7：重启中，8：开机中，9：关机中，10：密码重置中，11：格式化中，12：镜像制作中，13：带宽设置中，14：重装系统中，19：升级中，21：热迁移中
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

        if (array_key_exists("RunFlag",$param) and $param["RunFlag"] !== null) {
            $this->RunFlag = $param["RunFlag"];
        }
    }
}
