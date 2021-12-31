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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 不同角色的已存在节点配置参数
 *
 * @method string getNodeRole() 获取节点角色，取值:MASTER_ETCD, WORKER。MASTER_ETCD只有在创建 INDEPENDENT_CLUSTER 独立集群时需要指定。MASTER_ETCD节点数量为3～7，建议为奇数。MASTER_ETCD最小配置为4C8G。
 * @method void setNodeRole(string $NodeRole) 设置节点角色，取值:MASTER_ETCD, WORKER。MASTER_ETCD只有在创建 INDEPENDENT_CLUSTER 独立集群时需要指定。MASTER_ETCD节点数量为3～7，建议为奇数。MASTER_ETCD最小配置为4C8G。
 * @method ExistedInstancesPara getExistedInstancesPara() 获取已存在实例的重装参数
 * @method void setExistedInstancesPara(ExistedInstancesPara $ExistedInstancesPara) 设置已存在实例的重装参数
 * @method InstanceAdvancedSettings getInstanceAdvancedSettingsOverride() 获取节点高级设置，会覆盖集群级别设置的InstanceAdvancedSettings（当前只对节点自定义参数ExtraArgs生效）
 * @method void setInstanceAdvancedSettingsOverride(InstanceAdvancedSettings $InstanceAdvancedSettingsOverride) 设置节点高级设置，会覆盖集群级别设置的InstanceAdvancedSettings（当前只对节点自定义参数ExtraArgs生效）
 * @method array getDesiredPodNumbers() 获取自定义模式集群，可指定每个节点的pod数量
 * @method void setDesiredPodNumbers(array $DesiredPodNumbers) 设置自定义模式集群，可指定每个节点的pod数量
 */
class ExistedInstancesForNode extends AbstractModel
{
    /**
     * @var string 节点角色，取值:MASTER_ETCD, WORKER。MASTER_ETCD只有在创建 INDEPENDENT_CLUSTER 独立集群时需要指定。MASTER_ETCD节点数量为3～7，建议为奇数。MASTER_ETCD最小配置为4C8G。
     */
    public $NodeRole;

    /**
     * @var ExistedInstancesPara 已存在实例的重装参数
     */
    public $ExistedInstancesPara;

    /**
     * @var InstanceAdvancedSettings 节点高级设置，会覆盖集群级别设置的InstanceAdvancedSettings（当前只对节点自定义参数ExtraArgs生效）
     */
    public $InstanceAdvancedSettingsOverride;

    /**
     * @var array 自定义模式集群，可指定每个节点的pod数量
     */
    public $DesiredPodNumbers;

    /**
     * @param string $NodeRole 节点角色，取值:MASTER_ETCD, WORKER。MASTER_ETCD只有在创建 INDEPENDENT_CLUSTER 独立集群时需要指定。MASTER_ETCD节点数量为3～7，建议为奇数。MASTER_ETCD最小配置为4C8G。
     * @param ExistedInstancesPara $ExistedInstancesPara 已存在实例的重装参数
     * @param InstanceAdvancedSettings $InstanceAdvancedSettingsOverride 节点高级设置，会覆盖集群级别设置的InstanceAdvancedSettings（当前只对节点自定义参数ExtraArgs生效）
     * @param array $DesiredPodNumbers 自定义模式集群，可指定每个节点的pod数量
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
        if (array_key_exists("NodeRole",$param) and $param["NodeRole"] !== null) {
            $this->NodeRole = $param["NodeRole"];
        }

        if (array_key_exists("ExistedInstancesPara",$param) and $param["ExistedInstancesPara"] !== null) {
            $this->ExistedInstancesPara = new ExistedInstancesPara();
            $this->ExistedInstancesPara->deserialize($param["ExistedInstancesPara"]);
        }

        if (array_key_exists("InstanceAdvancedSettingsOverride",$param) and $param["InstanceAdvancedSettingsOverride"] !== null) {
            $this->InstanceAdvancedSettingsOverride = new InstanceAdvancedSettings();
            $this->InstanceAdvancedSettingsOverride->deserialize($param["InstanceAdvancedSettingsOverride"]);
        }

        if (array_key_exists("DesiredPodNumbers",$param) and $param["DesiredPodNumbers"] !== null) {
            $this->DesiredPodNumbers = $param["DesiredPodNumbers"];
        }
    }
}
