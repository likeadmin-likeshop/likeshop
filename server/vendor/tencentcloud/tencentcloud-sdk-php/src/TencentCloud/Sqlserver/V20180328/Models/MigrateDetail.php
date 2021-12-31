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
 * 迁移的进度详情类型
 *
 * @method string getStepName() 获取当前环节的名称
 * @method void setStepName(string $StepName) 设置当前环节的名称
 * @method integer getProgress() 获取当前环节的进度（单位是%）
 * @method void setProgress(integer $Progress) 设置当前环节的进度（单位是%）
 */
class MigrateDetail extends AbstractModel
{
    /**
     * @var string 当前环节的名称
     */
    public $StepName;

    /**
     * @var integer 当前环节的进度（单位是%）
     */
    public $Progress;

    /**
     * @param string $StepName 当前环节的名称
     * @param integer $Progress 当前环节的进度（单位是%）
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

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }
    }
}
