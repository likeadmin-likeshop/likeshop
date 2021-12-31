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
 * 任务步骤信息
 *
 * @method string getStep() 获取步骤名称
 * @method void setStep(string $Step) 设置步骤名称
 * @method string getLifeState() 获取生命周期
pending : 步骤未开始
running: 步骤执行中
success: 步骤成功完成
failed: 步骤失败
 * @method void setLifeState(string $LifeState) 设置生命周期
pending : 步骤未开始
running: 步骤执行中
success: 步骤成功完成
failed: 步骤失败
 * @method string getStartAt() 获取步骤开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartAt(string $StartAt) 设置步骤开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndAt() 获取步骤结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndAt(string $EndAt) 设置步骤结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFailedMsg() 获取若步骤生命周期为failed,则此字段显示错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailedMsg(string $FailedMsg) 设置若步骤生命周期为failed,则此字段显示错误信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskStepInfo extends AbstractModel
{
    /**
     * @var string 步骤名称
     */
    public $Step;

    /**
     * @var string 生命周期
pending : 步骤未开始
running: 步骤执行中
success: 步骤成功完成
failed: 步骤失败
     */
    public $LifeState;

    /**
     * @var string 步骤开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartAt;

    /**
     * @var string 步骤结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndAt;

    /**
     * @var string 若步骤生命周期为failed,则此字段显示错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailedMsg;

    /**
     * @param string $Step 步骤名称
     * @param string $LifeState 生命周期
pending : 步骤未开始
running: 步骤执行中
success: 步骤成功完成
failed: 步骤失败
     * @param string $StartAt 步骤开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndAt 步骤结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FailedMsg 若步骤生命周期为failed,则此字段显示错误信息
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
        if (array_key_exists("Step",$param) and $param["Step"] !== null) {
            $this->Step = $param["Step"];
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

        if (array_key_exists("FailedMsg",$param) and $param["FailedMsg"] !== null) {
            $this->FailedMsg = $param["FailedMsg"];
        }
    }
}
