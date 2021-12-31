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
 * 任务实例日志详情。
 *
 * @method integer getTaskInstanceIndex() 获取任务实例
 * @method void setTaskInstanceIndex(integer $TaskInstanceIndex) 设置任务实例
 * @method string getStdoutLog() 获取标准输出日志（Base64编码，解码后最大日志长度2048字节）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStdoutLog(string $StdoutLog) 设置标准输出日志（Base64编码，解码后最大日志长度2048字节）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStderrLog() 获取标准错误日志（Base64编码，解码后最大日志长度2048字节）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStderrLog(string $StderrLog) 设置标准错误日志（Base64编码，解码后最大日志长度2048字节）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStdoutRedirectPath() 获取标准输出重定向路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStdoutRedirectPath(string $StdoutRedirectPath) 设置标准输出重定向路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStderrRedirectPath() 获取标准错误重定向路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStderrRedirectPath(string $StderrRedirectPath) 设置标准错误重定向路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStdoutRedirectFileName() 获取标准输出重定向文件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStdoutRedirectFileName(string $StdoutRedirectFileName) 设置标准输出重定向文件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStderrRedirectFileName() 获取标准错误重定向文件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStderrRedirectFileName(string $StderrRedirectFileName) 设置标准错误重定向文件名
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskInstanceLog extends AbstractModel
{
    /**
     * @var integer 任务实例
     */
    public $TaskInstanceIndex;

    /**
     * @var string 标准输出日志（Base64编码，解码后最大日志长度2048字节）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StdoutLog;

    /**
     * @var string 标准错误日志（Base64编码，解码后最大日志长度2048字节）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StderrLog;

    /**
     * @var string 标准输出重定向路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StdoutRedirectPath;

    /**
     * @var string 标准错误重定向路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StderrRedirectPath;

    /**
     * @var string 标准输出重定向文件名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StdoutRedirectFileName;

    /**
     * @var string 标准错误重定向文件名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StderrRedirectFileName;

    /**
     * @param integer $TaskInstanceIndex 任务实例
     * @param string $StdoutLog 标准输出日志（Base64编码，解码后最大日志长度2048字节）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StderrLog 标准错误日志（Base64编码，解码后最大日志长度2048字节）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StdoutRedirectPath 标准输出重定向路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StderrRedirectPath 标准错误重定向路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StdoutRedirectFileName 标准输出重定向文件名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StderrRedirectFileName 标准错误重定向文件名
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("TaskInstanceIndex",$param) and $param["TaskInstanceIndex"] !== null) {
            $this->TaskInstanceIndex = $param["TaskInstanceIndex"];
        }

        if (array_key_exists("StdoutLog",$param) and $param["StdoutLog"] !== null) {
            $this->StdoutLog = $param["StdoutLog"];
        }

        if (array_key_exists("StderrLog",$param) and $param["StderrLog"] !== null) {
            $this->StderrLog = $param["StderrLog"];
        }

        if (array_key_exists("StdoutRedirectPath",$param) and $param["StdoutRedirectPath"] !== null) {
            $this->StdoutRedirectPath = $param["StdoutRedirectPath"];
        }

        if (array_key_exists("StderrRedirectPath",$param) and $param["StderrRedirectPath"] !== null) {
            $this->StderrRedirectPath = $param["StderrRedirectPath"];
        }

        if (array_key_exists("StdoutRedirectFileName",$param) and $param["StdoutRedirectFileName"] !== null) {
            $this->StdoutRedirectFileName = $param["StdoutRedirectFileName"];
        }

        if (array_key_exists("StderrRedirectFileName",$param) and $param["StderrRedirectFileName"] !== null) {
            $this->StderrRedirectFileName = $param["StderrRedirectFileName"];
        }
    }
}
