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
 * 创建结构化任务子任务信息
 *
 * @method string getTaskType() 获取任务类型
 * @method void setTaskType(string $TaskType) 设置任务类型
 * @method array getFileList() 获取报告文件上传的地址列表，需按顺序排列。如果使用ImageList参数，置为空数组即可
 * @method void setFileList(array $FileList) 设置报告文件上传的地址列表，需按顺序排列。如果使用ImageList参数，置为空数组即可
 * @method string getCustomerId() 获取客户号
 * @method void setCustomerId(string $CustomerId) 设置客户号
 * @method string getCustomerName() 获取客户姓名
 * @method void setCustomerName(string $CustomerName) 设置客户姓名
 * @method array getImageList() 获取报告上传的图片内容数组，图片内容采用base64编码，需按顺序排列
 * @method void setImageList(array $ImageList) 设置报告上传的图片内容数组，图片内容采用base64编码，需按顺序排列
 * @method string getYear() 获取报告年份
 * @method void setYear(string $Year) 设置报告年份
 */
class CreateStructureTaskInfo extends AbstractModel
{
    /**
     * @var string 任务类型
     */
    public $TaskType;

    /**
     * @var array 报告文件上传的地址列表，需按顺序排列。如果使用ImageList参数，置为空数组即可
     */
    public $FileList;

    /**
     * @var string 客户号
     */
    public $CustomerId;

    /**
     * @var string 客户姓名
     */
    public $CustomerName;

    /**
     * @var array 报告上传的图片内容数组，图片内容采用base64编码，需按顺序排列
     */
    public $ImageList;

    /**
     * @var string 报告年份
     */
    public $Year;

    /**
     * @param string $TaskType 任务类型
     * @param array $FileList 报告文件上传的地址列表，需按顺序排列。如果使用ImageList参数，置为空数组即可
     * @param string $CustomerId 客户号
     * @param string $CustomerName 客户姓名
     * @param array $ImageList 报告上传的图片内容数组，图片内容采用base64编码，需按顺序排列
     * @param string $Year 报告年份
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("FileList",$param) and $param["FileList"] !== null) {
            $this->FileList = $param["FileList"];
        }

        if (array_key_exists("CustomerId",$param) and $param["CustomerId"] !== null) {
            $this->CustomerId = $param["CustomerId"];
        }

        if (array_key_exists("CustomerName",$param) and $param["CustomerName"] !== null) {
            $this->CustomerName = $param["CustomerName"];
        }

        if (array_key_exists("ImageList",$param) and $param["ImageList"] !== null) {
            $this->ImageList = $param["ImageList"];
        }

        if (array_key_exists("Year",$param) and $param["Year"] !== null) {
            $this->Year = $param["Year"];
        }
    }
}
