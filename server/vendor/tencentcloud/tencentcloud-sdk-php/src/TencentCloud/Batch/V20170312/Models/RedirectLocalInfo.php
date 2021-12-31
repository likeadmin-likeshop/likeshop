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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 本地重定向信息
 *
 * @method string getStdoutLocalPath() 获取标准输出重定向本地路径
 * @method void setStdoutLocalPath(string $StdoutLocalPath) 设置标准输出重定向本地路径
 * @method string getStderrLocalPath() 获取标准错误重定向本地路径
 * @method void setStderrLocalPath(string $StderrLocalPath) 设置标准错误重定向本地路径
 * @method string getStdoutLocalFileName() 获取标准输出重定向本地文件名，支持三个占位符${BATCH_JOB_ID}、${BATCH_TASK_NAME}、${BATCH_TASK_INSTANCE_INDEX}
 * @method void setStdoutLocalFileName(string $StdoutLocalFileName) 设置标准输出重定向本地文件名，支持三个占位符${BATCH_JOB_ID}、${BATCH_TASK_NAME}、${BATCH_TASK_INSTANCE_INDEX}
 * @method string getStderrLocalFileName() 获取标准错误重定向本地文件名，支持三个占位符${BATCH_JOB_ID}、${BATCH_TASK_NAME}、${BATCH_TASK_INSTANCE_INDEX}
 * @method void setStderrLocalFileName(string $StderrLocalFileName) 设置标准错误重定向本地文件名，支持三个占位符${BATCH_JOB_ID}、${BATCH_TASK_NAME}、${BATCH_TASK_INSTANCE_INDEX}
 */
class RedirectLocalInfo extends AbstractModel
{
    /**
     * @var string 标准输出重定向本地路径
     */
    public $StdoutLocalPath;

    /**
     * @var string 标准错误重定向本地路径
     */
    public $StderrLocalPath;

    /**
     * @var string 标准输出重定向本地文件名，支持三个占位符${BATCH_JOB_ID}、${BATCH_TASK_NAME}、${BATCH_TASK_INSTANCE_INDEX}
     */
    public $StdoutLocalFileName;

    /**
     * @var string 标准错误重定向本地文件名，支持三个占位符${BATCH_JOB_ID}、${BATCH_TASK_NAME}、${BATCH_TASK_INSTANCE_INDEX}
     */
    public $StderrLocalFileName;

    /**
     * @param string $StdoutLocalPath 标准输出重定向本地路径
     * @param string $StderrLocalPath 标准错误重定向本地路径
     * @param string $StdoutLocalFileName 标准输出重定向本地文件名，支持三个占位符${BATCH_JOB_ID}、${BATCH_TASK_NAME}、${BATCH_TASK_INSTANCE_INDEX}
     * @param string $StderrLocalFileName 标准错误重定向本地文件名，支持三个占位符${BATCH_JOB_ID}、${BATCH_TASK_NAME}、${BATCH_TASK_INSTANCE_INDEX}
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
        if (array_key_exists("StdoutLocalPath",$param) and $param["StdoutLocalPath"] !== null) {
            $this->StdoutLocalPath = $param["StdoutLocalPath"];
        }

        if (array_key_exists("StderrLocalPath",$param) and $param["StderrLocalPath"] !== null) {
            $this->StderrLocalPath = $param["StderrLocalPath"];
        }

        if (array_key_exists("StdoutLocalFileName",$param) and $param["StdoutLocalFileName"] !== null) {
            $this->StdoutLocalFileName = $param["StdoutLocalFileName"];
        }

        if (array_key_exists("StderrLocalFileName",$param) and $param["StderrLocalFileName"] !== null) {
            $this->StderrLocalFileName = $param["StderrLocalFileName"];
        }
    }
}
