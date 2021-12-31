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
 * DescribeSyncCheckJob返回参数结构体
 *
 * @method string getStatus() 获取任务校验状态： starting(开始中)，running(校验中)，finished(校验完成)
 * @method void setStatus(string $Status) 设置任务校验状态： starting(开始中)，running(校验中)，finished(校验完成)
 * @method integer getErrorCode() 获取任务校验结果代码
 * @method void setErrorCode(integer $ErrorCode) 设置任务校验结果代码
 * @method string getErrorMessage() 获取提示信息
 * @method void setErrorMessage(string $ErrorMessage) 设置提示信息
 * @method array getStepInfo() 获取任务执行步骤描述
 * @method void setStepInfo(array $StepInfo) 设置任务执行步骤描述
 * @method integer getCheckFlag() 获取校验标志：0（尚未校验成功） ， 1（校验成功）
 * @method void setCheckFlag(integer $CheckFlag) 设置校验标志：0（尚未校验成功） ， 1（校验成功）
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSyncCheckJobResponse extends AbstractModel
{
    /**
     * @var string 任务校验状态： starting(开始中)，running(校验中)，finished(校验完成)
     */
    public $Status;

    /**
     * @var integer 任务校验结果代码
     */
    public $ErrorCode;

    /**
     * @var string 提示信息
     */
    public $ErrorMessage;

    /**
     * @var array 任务执行步骤描述
     */
    public $StepInfo;

    /**
     * @var integer 校验标志：0（尚未校验成功） ， 1（校验成功）
     */
    public $CheckFlag;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Status 任务校验状态： starting(开始中)，running(校验中)，finished(校验完成)
     * @param integer $ErrorCode 任务校验结果代码
     * @param string $ErrorMessage 提示信息
     * @param array $StepInfo 任务执行步骤描述
     * @param integer $CheckFlag 校验标志：0（尚未校验成功） ， 1（校验成功）
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("StepInfo",$param) and $param["StepInfo"] !== null) {
            $this->StepInfo = [];
            foreach ($param["StepInfo"] as $key => $value){
                $obj = new SyncCheckStepInfo();
                $obj->deserialize($value);
                array_push($this->StepInfo, $obj);
            }
        }

        if (array_key_exists("CheckFlag",$param) and $param["CheckFlag"] !== null) {
            $this->CheckFlag = $param["CheckFlag"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
