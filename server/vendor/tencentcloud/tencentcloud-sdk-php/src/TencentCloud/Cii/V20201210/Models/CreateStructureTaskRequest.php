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
namespace TencentCloud\Cii\V20201210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateStructureTask请求参数结构体
 *
 * @method string getPolicyId() 获取保单号
 * @method void setPolicyId(string $PolicyId) 设置保单号
 * @method string getCustomerId() 获取客户号
 * @method void setCustomerId(string $CustomerId) 设置客户号
 * @method string getCustomerName() 获取客户姓名
 * @method void setCustomerName(string $CustomerName) 设置客户姓名
 * @method string getTaskType() 获取文件类型，目前只支持体检报告类型，对应的值为：HealthReport
 * @method void setTaskType(string $TaskType) 设置文件类型，目前只支持体检报告类型，对应的值为：HealthReport
 * @method string getYear() 获取报告年份
 * @method void setYear(string $Year) 设置报告年份
 * @method array getFileList() 获取报告文件上传的地址列表，需按顺序排列。如果使用ImageList参数，置为空数组即可
 * @method void setFileList(array $FileList) 设置报告文件上传的地址列表，需按顺序排列。如果使用ImageList参数，置为空数组即可
 * @method array getInsuranceTypes() 获取险种，如果是体检报告类型，此参数是必填，类型说明如下：
CriticalDiseaseInsurance:重疾险
LifeInsurance：寿险
AccidentInsurance：意外险
 * @method void setInsuranceTypes(array $InsuranceTypes) 设置险种，如果是体检报告类型，此参数是必填，类型说明如下：
CriticalDiseaseInsurance:重疾险
LifeInsurance：寿险
AccidentInsurance：意外险
 * @method array getImageList() 获取报告上传的图片内容数组，图片内容采用base64编码，需按顺序排列
 * @method void setImageList(array $ImageList) 设置报告上传的图片内容数组，图片内容采用base64编码，需按顺序排列
 */
class CreateStructureTaskRequest extends AbstractModel
{
    /**
     * @var string 保单号
     */
    public $PolicyId;

    /**
     * @var string 客户号
     */
    public $CustomerId;

    /**
     * @var string 客户姓名
     */
    public $CustomerName;

    /**
     * @var string 文件类型，目前只支持体检报告类型，对应的值为：HealthReport
     */
    public $TaskType;

    /**
     * @var string 报告年份
     */
    public $Year;

    /**
     * @var array 报告文件上传的地址列表，需按顺序排列。如果使用ImageList参数，置为空数组即可
     */
    public $FileList;

    /**
     * @var array 险种，如果是体检报告类型，此参数是必填，类型说明如下：
CriticalDiseaseInsurance:重疾险
LifeInsurance：寿险
AccidentInsurance：意外险
     */
    public $InsuranceTypes;

    /**
     * @var array 报告上传的图片内容数组，图片内容采用base64编码，需按顺序排列
     */
    public $ImageList;

    /**
     * @param string $PolicyId 保单号
     * @param string $CustomerId 客户号
     * @param string $CustomerName 客户姓名
     * @param string $TaskType 文件类型，目前只支持体检报告类型，对应的值为：HealthReport
     * @param string $Year 报告年份
     * @param array $FileList 报告文件上传的地址列表，需按顺序排列。如果使用ImageList参数，置为空数组即可
     * @param array $InsuranceTypes 险种，如果是体检报告类型，此参数是必填，类型说明如下：
CriticalDiseaseInsurance:重疾险
LifeInsurance：寿险
AccidentInsurance：意外险
     * @param array $ImageList 报告上传的图片内容数组，图片内容采用base64编码，需按顺序排列
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("CustomerId",$param) and $param["CustomerId"] !== null) {
            $this->CustomerId = $param["CustomerId"];
        }

        if (array_key_exists("CustomerName",$param) and $param["CustomerName"] !== null) {
            $this->CustomerName = $param["CustomerName"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Year",$param) and $param["Year"] !== null) {
            $this->Year = $param["Year"];
        }

        if (array_key_exists("FileList",$param) and $param["FileList"] !== null) {
            $this->FileList = $param["FileList"];
        }

        if (array_key_exists("InsuranceTypes",$param) and $param["InsuranceTypes"] !== null) {
            $this->InsuranceTypes = $param["InsuranceTypes"];
        }

        if (array_key_exists("ImageList",$param) and $param["ImageList"] !== null) {
            $this->ImageList = $param["ImageList"];
        }
    }
}
