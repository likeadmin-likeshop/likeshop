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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 冷备导入任务迁移细节
 *
 * @method integer getStepAll() 获取总步骤数
 * @method void setStepAll(integer $StepAll) 设置总步骤数
 * @method integer getStepNow() 获取当前步骤
 * @method void setStepNow(integer $StepNow) 设置当前步骤
 * @method integer getProgress() 获取总进度,如："30"表示30%
 * @method void setProgress(integer $Progress) 设置总进度,如："30"表示30%
 * @method array getStepInfo() 获取步骤信息，null表示还未开始迁移
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStepInfo(array $StepInfo) 设置步骤信息，null表示还未开始迁移
注意：此字段可能返回 null，表示取不到有效值。
 */
class MigrationDetail extends AbstractModel
{
    /**
     * @var integer 总步骤数
     */
    public $StepAll;

    /**
     * @var integer 当前步骤
     */
    public $StepNow;

    /**
     * @var integer 总进度,如："30"表示30%
     */
    public $Progress;

    /**
     * @var array 步骤信息，null表示还未开始迁移
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StepInfo;

    /**
     * @param integer $StepAll 总步骤数
     * @param integer $StepNow 当前步骤
     * @param integer $Progress 总进度,如："30"表示30%
     * @param array $StepInfo 步骤信息，null表示还未开始迁移
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
        if (array_key_exists("StepAll",$param) and $param["StepAll"] !== null) {
            $this->StepAll = $param["StepAll"];
        }

        if (array_key_exists("StepNow",$param) and $param["StepNow"] !== null) {
            $this->StepNow = $param["StepNow"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("StepInfo",$param) and $param["StepInfo"] !== null) {
            $this->StepInfo = [];
            foreach ($param["StepInfo"] as $key => $value){
                $obj = new MigrationStep();
                $obj->deserialize($value);
                array_push($this->StepInfo, $obj);
            }
        }
    }
}
