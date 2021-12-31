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
 * GetUpgradeInstanceProgress返回参数结构体
 *
 * @method integer getTotal() 获取升级节点总数
 * @method void setTotal(integer $Total) 设置升级节点总数
 * @method integer getDone() 获取已升级节点总数
 * @method void setDone(integer $Done) 设置已升级节点总数
 * @method string getLifeState() 获取升级任务生命周期
process 运行中
paused 已停止
pauing 正在停止
done  已完成
timeout 已超时
aborted 已取消
 * @method void setLifeState(string $LifeState) 设置升级任务生命周期
process 运行中
paused 已停止
pauing 正在停止
done  已完成
timeout 已超时
aborted 已取消
 * @method array getInstances() 获取各节点升级进度详情
 * @method void setInstances(array $Instances) 设置各节点升级进度详情
 * @method InstanceUpgradeClusterStatus getClusterStatus() 获取集群当前状态
 * @method void setClusterStatus(InstanceUpgradeClusterStatus $ClusterStatus) 设置集群当前状态
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetUpgradeInstanceProgressResponse extends AbstractModel
{
    /**
     * @var integer 升级节点总数
     */
    public $Total;

    /**
     * @var integer 已升级节点总数
     */
    public $Done;

    /**
     * @var string 升级任务生命周期
process 运行中
paused 已停止
pauing 正在停止
done  已完成
timeout 已超时
aborted 已取消
     */
    public $LifeState;

    /**
     * @var array 各节点升级进度详情
     */
    public $Instances;

    /**
     * @var InstanceUpgradeClusterStatus 集群当前状态
     */
    public $ClusterStatus;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Total 升级节点总数
     * @param integer $Done 已升级节点总数
     * @param string $LifeState 升级任务生命周期
process 运行中
paused 已停止
pauing 正在停止
done  已完成
timeout 已超时
aborted 已取消
     * @param array $Instances 各节点升级进度详情
     * @param InstanceUpgradeClusterStatus $ClusterStatus 集群当前状态
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Done",$param) and $param["Done"] !== null) {
            $this->Done = $param["Done"];
        }

        if (array_key_exists("LifeState",$param) and $param["LifeState"] !== null) {
            $this->LifeState = $param["LifeState"];
        }

        if (array_key_exists("Instances",$param) and $param["Instances"] !== null) {
            $this->Instances = [];
            foreach ($param["Instances"] as $key => $value){
                $obj = new InstanceUpgradeProgressItem();
                $obj->deserialize($value);
                array_push($this->Instances, $obj);
            }
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = new InstanceUpgradeClusterStatus();
            $this->ClusterStatus->deserialize($param["ClusterStatus"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
