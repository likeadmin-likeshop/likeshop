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
 * 维修任务操作日志
 *
 * @method string getTaskStep() 获取操作步骤
 * @method void setTaskStep(string $TaskStep) 设置操作步骤
 * @method string getOperator() 获取操作人
 * @method void setOperator(string $Operator) 设置操作人
 * @method string getOperationDetail() 获取操作描述
 * @method void setOperationDetail(string $OperationDetail) 设置操作描述
 * @method string getOperationTime() 获取操作时间
 * @method void setOperationTime(string $OperationTime) 设置操作时间
 */
class TaskOperationLog extends AbstractModel
{
    /**
     * @var string 操作步骤
     */
    public $TaskStep;

    /**
     * @var string 操作人
     */
    public $Operator;

    /**
     * @var string 操作描述
     */
    public $OperationDetail;

    /**
     * @var string 操作时间
     */
    public $OperationTime;

    /**
     * @param string $TaskStep 操作步骤
     * @param string $Operator 操作人
     * @param string $OperationDetail 操作描述
     * @param string $OperationTime 操作时间
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
        if (array_key_exists("TaskStep",$param) and $param["TaskStep"] !== null) {
            $this->TaskStep = $param["TaskStep"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("OperationDetail",$param) and $param["OperationDetail"] !== null) {
            $this->OperationDetail = $param["OperationDetail"];
        }

        if (array_key_exists("OperationTime",$param) and $param["OperationTime"] !== null) {
            $this->OperationTime = $param["OperationTime"];
        }
    }
}
