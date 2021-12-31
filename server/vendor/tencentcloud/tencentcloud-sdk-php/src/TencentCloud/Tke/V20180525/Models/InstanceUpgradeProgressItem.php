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
 * 某个节点的升级进度
 *
 * @method string getInstanceID() 获取节点instanceID
 * @method void setInstanceID(string $InstanceID) 设置节点instanceID
 * @method string getLifeState() 获取任务生命周期
process 运行中
paused 已停止
pauing 正在停止
done  已完成
timeout 已超时
aborted 已取消
pending 还未开始
 * @method void setLifeState(string $LifeState) 设置任务生命周期
process 运行中
paused 已停止
pauing 正在停止
done  已完成
timeout 已超时
aborted 已取消
pending 还未开始
 * @method string getStartAt() 获取升级开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartAt(string $StartAt) 设置升级开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndAt() 获取升级结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndAt(string $EndAt) 设置升级结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method InstanceUpgradePreCheckResult getCheckResult() 获取升级前检查结果
 * @method void setCheckResult(InstanceUpgradePreCheckResult $CheckResult) 设置升级前检查结果
 * @method array getDetail() 获取升级步骤详情
 * @method void setDetail(array $Detail) 设置升级步骤详情
 */
class InstanceUpgradeProgressItem extends AbstractModel
{
    /**
     * @var string 节点instanceID
     */
    public $InstanceID;

    /**
     * @var string 任务生命周期
process 运行中
paused 已停止
pauing 正在停止
done  已完成
timeout 已超时
aborted 已取消
pending 还未开始
     */
    public $LifeState;

    /**
     * @var string 升级开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartAt;

    /**
     * @var string 升级结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndAt;

    /**
     * @var InstanceUpgradePreCheckResult 升级前检查结果
     */
    public $CheckResult;

    /**
     * @var array 升级步骤详情
     */
    public $Detail;

    /**
     * @param string $InstanceID 节点instanceID
     * @param string $LifeState 任务生命周期
process 运行中
paused 已停止
pauing 正在停止
done  已完成
timeout 已超时
aborted 已取消
pending 还未开始
     * @param string $StartAt 升级开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndAt 升级结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param InstanceUpgradePreCheckResult $CheckResult 升级前检查结果
     * @param array $Detail 升级步骤详情
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
        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("LifeState",$param) and $param["LifeState"] !== null) {
            $this->LifeState = $param["LifeState"];
        }

        if (array_key_exists("StartAt",$param) and $param["StartAt"] !== null) {
            $this->StartAt = $param["StartAt"];
        }

        if (array_key_exists("EndAt",$param) and $param["EndAt"] !== null) {
            $this->EndAt = $param["EndAt"];
        }

        if (array_key_exists("CheckResult",$param) and $param["CheckResult"] !== null) {
            $this->CheckResult = new InstanceUpgradePreCheckResult();
            $this->CheckResult->deserialize($param["CheckResult"]);
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = [];
            foreach ($param["Detail"] as $key => $value){
                $obj = new TaskStepInfo();
                $obj->deserialize($value);
                array_push($this->Detail, $obj);
            }
        }
    }
}
