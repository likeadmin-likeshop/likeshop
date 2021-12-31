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
namespace TencentCloud\Dts\V20180330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 迁移中的步骤信息
 *
 * @method integer getStepNo() 获取步骤序列
 * @method void setStepNo(integer $StepNo) 设置步骤序列
 * @method string getStepName() 获取步骤展现名称
 * @method void setStepName(string $StepName) 设置步骤展现名称
 * @method string getStepId() 获取步骤英文标识
 * @method void setStepId(string $StepId) 设置步骤英文标识
 * @method integer getStatus() 获取步骤状态:0-默认值,1-成功,2-失败,3-执行中,4-未执行
 * @method void setStatus(integer $Status) 设置步骤状态:0-默认值,1-成功,2-失败,3-执行中,4-未执行
 * @method string getStartTime() 获取当前步骤开始的时间，格式为"yyyy-mm-dd hh:mm:ss"，该字段不存在或者为空是无意义
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置当前步骤开始的时间，格式为"yyyy-mm-dd hh:mm:ss"，该字段不存在或者为空是无意义
注意：此字段可能返回 null，表示取不到有效值。
 */
class MigrateStepDetailInfo extends AbstractModel
{
    /**
     * @var integer 步骤序列
     */
    public $StepNo;

    /**
     * @var string 步骤展现名称
     */
    public $StepName;

    /**
     * @var string 步骤英文标识
     */
    public $StepId;

    /**
     * @var integer 步骤状态:0-默认值,1-成功,2-失败,3-执行中,4-未执行
     */
    public $Status;

    /**
     * @var string 当前步骤开始的时间，格式为"yyyy-mm-dd hh:mm:ss"，该字段不存在或者为空是无意义
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @param integer $StepNo 步骤序列
     * @param string $StepName 步骤展现名称
     * @param string $StepId 步骤英文标识
     * @param integer $Status 步骤状态:0-默认值,1-成功,2-失败,3-执行中,4-未执行
     * @param string $StartTime 当前步骤开始的时间，格式为"yyyy-mm-dd hh:mm:ss"，该字段不存在或者为空是无意义
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
        if (array_key_exists("StepNo",$param) and $param["StepNo"] !== null) {
            $this->StepNo = $param["StepNo"];
        }

        if (array_key_exists("StepName",$param) and $param["StepName"] !== null) {
            $this->StepName = $param["StepName"];
        }

        if (array_key_exists("StepId",$param) and $param["StepId"] !== null) {
            $this->StepId = $param["StepId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }
    }
}
