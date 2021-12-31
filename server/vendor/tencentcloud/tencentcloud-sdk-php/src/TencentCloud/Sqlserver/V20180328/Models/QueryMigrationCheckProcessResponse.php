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
 * QueryMigrationCheckProcess返回参数结构体
 *
 * @method integer getTotalStep() 获取总步骤数量
 * @method void setTotalStep(integer $TotalStep) 设置总步骤数量
 * @method integer getCurrentStep() 获取当前步骤编号，从1开始
 * @method void setCurrentStep(integer $CurrentStep) 设置当前步骤编号，从1开始
 * @method array getStepDetails() 获取所有步骤详情
 * @method void setStepDetails(array $StepDetails) 设置所有步骤详情
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class QueryMigrationCheckProcessResponse extends AbstractModel
{
    /**
     * @var integer 总步骤数量
     */
    public $TotalStep;

    /**
     * @var integer 当前步骤编号，从1开始
     */
    public $CurrentStep;

    /**
     * @var array 所有步骤详情
     */
    public $StepDetails;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalStep 总步骤数量
     * @param integer $CurrentStep 当前步骤编号，从1开始
     * @param array $StepDetails 所有步骤详情
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
        if (array_key_exists("TotalStep",$param) and $param["TotalStep"] !== null) {
            $this->TotalStep = $param["TotalStep"];
        }

        if (array_key_exists("CurrentStep",$param) and $param["CurrentStep"] !== null) {
            $this->CurrentStep = $param["CurrentStep"];
        }

        if (array_key_exists("StepDetails",$param) and $param["StepDetails"] !== null) {
            $this->StepDetails = [];
            foreach ($param["StepDetails"] as $key => $value){
                $obj = new StepDetail();
                $obj->deserialize($value);
                array_push($this->StepDetails, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
