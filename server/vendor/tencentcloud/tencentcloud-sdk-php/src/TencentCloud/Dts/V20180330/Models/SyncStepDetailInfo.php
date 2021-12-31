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
 * 同步任务进度
 *
 * @method integer getStepNo() 获取步骤编号
 * @method void setStepNo(integer $StepNo) 设置步骤编号
 * @method string getStepName() 获取步骤名
 * @method void setStepName(string $StepName) 设置步骤名
 * @method integer getCanStop() 获取能否中止
 * @method void setCanStop(integer $CanStop) 设置能否中止
 * @method integer getStepId() 获取步骤号
 * @method void setStepId(integer $StepId) 设置步骤号
 */
class SyncStepDetailInfo extends AbstractModel
{
    /**
     * @var integer 步骤编号
     */
    public $StepNo;

    /**
     * @var string 步骤名
     */
    public $StepName;

    /**
     * @var integer 能否中止
     */
    public $CanStop;

    /**
     * @var integer 步骤号
     */
    public $StepId;

    /**
     * @param integer $StepNo 步骤编号
     * @param string $StepName 步骤名
     * @param integer $CanStop 能否中止
     * @param integer $StepId 步骤号
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

        if (array_key_exists("CanStop",$param) and $param["CanStop"] !== null) {
            $this->CanStop = $param["CanStop"];
        }

        if (array_key_exists("StepId",$param) and $param["StepId"] !== null) {
            $this->StepId = $param["StepId"];
        }
    }
}
