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
namespace TencentCloud\Bm\V20180423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 镜像制作进度列表
 *
 * @method string getStepName() 获取步骤
 * @method void setStepName(string $StepName) 设置步骤
 * @method string getStartTime() 获取此步骤开始时间
 * @method void setStartTime(string $StartTime) 设置此步骤开始时间
 * @method integer getStepType() 获取0: 已完成 1: 当前进行 2: 未开始
 * @method void setStepType(integer $StepType) 设置0: 已完成 1: 当前进行 2: 未开始
 */
class CustomImageProcess extends AbstractModel
{
    /**
     * @var string 步骤
     */
    public $StepName;

    /**
     * @var string 此步骤开始时间
     */
    public $StartTime;

    /**
     * @var integer 0: 已完成 1: 当前进行 2: 未开始
     */
    public $StepType;

    /**
     * @param string $StepName 步骤
     * @param string $StartTime 此步骤开始时间
     * @param integer $StepType 0: 已完成 1: 当前进行 2: 未开始
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
        if (array_key_exists("StepName",$param) and $param["StepName"] !== null) {
            $this->StepName = $param["StepName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("StepType",$param) and $param["StepType"] !== null) {
            $this->StepType = $param["StepType"];
        }
    }
}
