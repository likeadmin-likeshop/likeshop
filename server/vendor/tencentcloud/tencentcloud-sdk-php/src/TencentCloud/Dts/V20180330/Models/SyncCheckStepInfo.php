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
 * 灾备任务校验步骤
 *
 * @method integer getStepNo() 获取步骤序列
 * @method void setStepNo(integer $StepNo) 设置步骤序列
 * @method string getStepName() 获取步骤展现名称
 * @method void setStepName(string $StepName) 设置步骤展现名称
 * @method integer getStepCode() 获取步骤执行结果代码
 * @method void setStepCode(integer $StepCode) 设置步骤执行结果代码
 * @method string getStepMessage() 获取步骤执行结果提示
 * @method void setStepMessage(string $StepMessage) 设置步骤执行结果提示
 */
class SyncCheckStepInfo extends AbstractModel
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
     * @var integer 步骤执行结果代码
     */
    public $StepCode;

    /**
     * @var string 步骤执行结果提示
     */
    public $StepMessage;

    /**
     * @param integer $StepNo 步骤序列
     * @param string $StepName 步骤展现名称
     * @param integer $StepCode 步骤执行结果代码
     * @param string $StepMessage 步骤执行结果提示
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

        if (array_key_exists("StepCode",$param) and $param["StepCode"] !== null) {
            $this->StepCode = $param["StepCode"];
        }

        if (array_key_exists("StepMessage",$param) and $param["StepMessage"] !== null) {
            $this->StepMessage = $param["StepMessage"];
        }
    }
}
