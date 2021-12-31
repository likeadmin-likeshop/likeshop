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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 导入任务记录
 *
 * @method integer getStatus() 获取状态值
 * @method void setStatus(integer $Status) 设置状态值
 * @method integer getCode() 获取状态值
 * @method void setCode(integer $Code) 设置状态值
 * @method integer getCostTime() 获取执行时间
 * @method void setCostTime(integer $CostTime) 设置执行时间
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getWorkId() 获取后端任务ID
 * @method void setWorkId(string $WorkId) 设置后端任务ID
 * @method string getFileName() 获取导入文件名
 * @method void setFileName(string $FileName) 设置导入文件名
 * @method integer getProcess() 获取执行进度
 * @method void setProcess(integer $Process) 设置执行进度
 * @method string getCreateTime() 获取任务创建时间
 * @method void setCreateTime(string $CreateTime) 设置任务创建时间
 * @method string getFileSize() 获取文件大小
 * @method void setFileSize(string $FileSize) 设置文件大小
 * @method string getMessage() 获取任务执行信息
 * @method void setMessage(string $Message) 设置任务执行信息
 * @method integer getJobId() 获取任务ID
 * @method void setJobId(integer $JobId) 设置任务ID
 * @method string getDbName() 获取导入库表名
 * @method void setDbName(string $DbName) 设置导入库表名
 * @method string getAsyncRequestId() 获取异步任务的请求ID
 * @method void setAsyncRequestId(string $AsyncRequestId) 设置异步任务的请求ID
 */
class ImportRecord extends AbstractModel
{
    /**
     * @var integer 状态值
     */
    public $Status;

    /**
     * @var integer 状态值
     */
    public $Code;

    /**
     * @var integer 执行时间
     */
    public $CostTime;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 后端任务ID
     */
    public $WorkId;

    /**
     * @var string 导入文件名
     */
    public $FileName;

    /**
     * @var integer 执行进度
     */
    public $Process;

    /**
     * @var string 任务创建时间
     */
    public $CreateTime;

    /**
     * @var string 文件大小
     */
    public $FileSize;

    /**
     * @var string 任务执行信息
     */
    public $Message;

    /**
     * @var integer 任务ID
     */
    public $JobId;

    /**
     * @var string 导入库表名
     */
    public $DbName;

    /**
     * @var string 异步任务的请求ID
     */
    public $AsyncRequestId;

    /**
     * @param integer $Status 状态值
     * @param integer $Code 状态值
     * @param integer $CostTime 执行时间
     * @param string $InstanceId 实例ID
     * @param string $WorkId 后端任务ID
     * @param string $FileName 导入文件名
     * @param integer $Process 执行进度
     * @param string $CreateTime 任务创建时间
     * @param string $FileSize 文件大小
     * @param string $Message 任务执行信息
     * @param integer $JobId 任务ID
     * @param string $DbName 导入库表名
     * @param string $AsyncRequestId 异步任务的请求ID
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

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("CostTime",$param) and $param["CostTime"] !== null) {
            $this->CostTime = $param["CostTime"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("WorkId",$param) and $param["WorkId"] !== null) {
            $this->WorkId = $param["WorkId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Process",$param) and $param["Process"] !== null) {
            $this->Process = $param["Process"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("AsyncRequestId",$param) and $param["AsyncRequestId"] !== null) {
            $this->AsyncRequestId = $param["AsyncRequestId"];
        }
    }
}
