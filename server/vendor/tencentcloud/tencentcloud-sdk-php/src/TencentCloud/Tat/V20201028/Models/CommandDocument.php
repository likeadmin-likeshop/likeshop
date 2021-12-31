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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 命令执行详情。
 *
 * @method string getContent() 获取Base64 编码后的执行命令。
 * @method void setContent(string $Content) 设置Base64 编码后的执行命令。
 * @method string getCommandType() 获取命令类型。
 * @method void setCommandType(string $CommandType) 设置命令类型。
 * @method integer getTimeout() 获取超时时间。
 * @method void setTimeout(integer $Timeout) 设置超时时间。
 * @method string getWorkingDirectory() 获取执行路径。
 * @method void setWorkingDirectory(string $WorkingDirectory) 设置执行路径。
 */
class CommandDocument extends AbstractModel
{
    /**
     * @var string Base64 编码后的执行命令。
     */
    public $Content;

    /**
     * @var string 命令类型。
     */
    public $CommandType;

    /**
     * @var integer 超时时间。
     */
    public $Timeout;

    /**
     * @var string 执行路径。
     */
    public $WorkingDirectory;

    /**
     * @param string $Content Base64 编码后的执行命令。
     * @param string $CommandType 命令类型。
     * @param integer $Timeout 超时时间。
     * @param string $WorkingDirectory 执行路径。
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("CommandType",$param) and $param["CommandType"] !== null) {
            $this->CommandType = $param["CommandType"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("WorkingDirectory",$param) and $param["WorkingDirectory"] !== null) {
            $this->WorkingDirectory = $param["WorkingDirectory"];
        }
    }
}
