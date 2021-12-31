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
namespace TencentCloud\Cii\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateStructureTask请求参数结构体
 *
 * @method string getServiceType() 获取服务类型
Structured 仅结构化
Underwrite 结构化+核保
 * @method void setServiceType(string $ServiceType) 设置服务类型
Structured 仅结构化
Underwrite 结构化+核保
 * @method array getTaskInfos() 获取创建任务时可以上传多个报告，后台生成多个识别子任务，子任务的详细信息
 * @method void setTaskInfos(array $TaskInfos) 设置创建任务时可以上传多个报告，后台生成多个识别子任务，子任务的详细信息
 * @method string getPolicyId() 获取保单号
 * @method void setPolicyId(string $PolicyId) 设置保单号
 * @method string getTriggerType() 获取核保触发方式
Auto 自动
Manual 手动
 * @method void setTriggerType(string $TriggerType) 设置核保触发方式
Auto 自动
Manual 手动
 * @method array getInsuranceTypes() 获取险种，如果是体检报告类型，此参数是必填，类型说明如下：
CriticalDiseaseInsurance:重疾险
LifeInsurance：寿险
AccidentInsurance：意外险
 * @method void setInsuranceTypes(array $InsuranceTypes) 设置险种，如果是体检报告类型，此参数是必填，类型说明如下：
CriticalDiseaseInsurance:重疾险
LifeInsurance：寿险
AccidentInsurance：意外险
 */
class CreateStructureTaskRequest extends AbstractModel
{
    /**
     * @var string 服务类型
Structured 仅结构化
Underwrite 结构化+核保
     */
    public $ServiceType;

    /**
     * @var array 创建任务时可以上传多个报告，后台生成多个识别子任务，子任务的详细信息
     */
    public $TaskInfos;

    /**
     * @var string 保单号
     */
    public $PolicyId;

    /**
     * @var string 核保触发方式
Auto 自动
Manual 手动
     */
    public $TriggerType;

    /**
     * @var array 险种，如果是体检报告类型，此参数是必填，类型说明如下：
CriticalDiseaseInsurance:重疾险
LifeInsurance：寿险
AccidentInsurance：意外险
     */
    public $InsuranceTypes;

    /**
     * @param string $ServiceType 服务类型
Structured 仅结构化
Underwrite 结构化+核保
     * @param array $TaskInfos 创建任务时可以上传多个报告，后台生成多个识别子任务，子任务的详细信息
     * @param string $PolicyId 保单号
     * @param string $TriggerType 核保触发方式
Auto 自动
Manual 手动
     * @param array $InsuranceTypes 险种，如果是体检报告类型，此参数是必填，类型说明如下：
CriticalDiseaseInsurance:重疾险
LifeInsurance：寿险
AccidentInsurance：意外险
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
        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("TaskInfos",$param) and $param["TaskInfos"] !== null) {
            $this->TaskInfos = [];
            foreach ($param["TaskInfos"] as $key => $value){
                $obj = new CreateStructureTaskInfo();
                $obj->deserialize($value);
                array_push($this->TaskInfos, $obj);
            }
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("InsuranceTypes",$param) and $param["InsuranceTypes"] !== null) {
            $this->InsuranceTypes = $param["InsuranceTypes"];
        }
    }
}
