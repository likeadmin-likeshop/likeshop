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
 * CheckInstancesUpgradeAble返回参数结构体
 *
 * @method string getClusterVersion() 获取集群master当前小版本
 * @method void setClusterVersion(string $ClusterVersion) 设置集群master当前小版本
 * @method string getLatestVersion() 获取集群master对应的大版本目前最新小版本
 * @method void setLatestVersion(string $LatestVersion) 设置集群master对应的大版本目前最新小版本
 * @method array getUpgradeAbleInstances() 获取可升级节点列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpgradeAbleInstances(array $UpgradeAbleInstances) 设置可升级节点列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotal() 获取总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CheckInstancesUpgradeAbleResponse extends AbstractModel
{
    /**
     * @var string 集群master当前小版本
     */
    public $ClusterVersion;

    /**
     * @var string 集群master对应的大版本目前最新小版本
     */
    public $LatestVersion;

    /**
     * @var array 可升级节点列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpgradeAbleInstances;

    /**
     * @var integer 总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ClusterVersion 集群master当前小版本
     * @param string $LatestVersion 集群master对应的大版本目前最新小版本
     * @param array $UpgradeAbleInstances 可升级节点列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Total 总数
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ClusterVersion",$param) and $param["ClusterVersion"] !== null) {
            $this->ClusterVersion = $param["ClusterVersion"];
        }

        if (array_key_exists("LatestVersion",$param) and $param["LatestVersion"] !== null) {
            $this->LatestVersion = $param["LatestVersion"];
        }

        if (array_key_exists("UpgradeAbleInstances",$param) and $param["UpgradeAbleInstances"] !== null) {
            $this->UpgradeAbleInstances = [];
            foreach ($param["UpgradeAbleInstances"] as $key => $value){
                $obj = new UpgradeAbleInstancesItem();
                $obj->deserialize($value);
                array_push($this->UpgradeAbleInstances, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
