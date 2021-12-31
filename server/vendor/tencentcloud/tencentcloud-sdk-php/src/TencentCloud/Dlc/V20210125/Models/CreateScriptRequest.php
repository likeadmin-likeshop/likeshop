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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateScript请求参数结构体
 *
 * @method string getScriptName() 获取脚本名称，最大不能超过255个字符。
 * @method void setScriptName(string $ScriptName) 设置脚本名称，最大不能超过255个字符。
 * @method string getSQLStatement() 获取base64编码后的sql语句
 * @method void setSQLStatement(string $SQLStatement) 设置base64编码后的sql语句
 * @method string getScriptDesc() 获取脚本描述， 不能超过50个字符
 * @method void setScriptDesc(string $ScriptDesc) 设置脚本描述， 不能超过50个字符
 * @method string getDatabaseName() 获取数据库名称
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称
 */
class CreateScriptRequest extends AbstractModel
{
    /**
     * @var string 脚本名称，最大不能超过255个字符。
     */
    public $ScriptName;

    /**
     * @var string base64编码后的sql语句
     */
    public $SQLStatement;

    /**
     * @var string 脚本描述， 不能超过50个字符
     */
    public $ScriptDesc;

    /**
     * @var string 数据库名称
     */
    public $DatabaseName;

    /**
     * @param string $ScriptName 脚本名称，最大不能超过255个字符。
     * @param string $SQLStatement base64编码后的sql语句
     * @param string $ScriptDesc 脚本描述， 不能超过50个字符
     * @param string $DatabaseName 数据库名称
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
        if (array_key_exists("ScriptName",$param) and $param["ScriptName"] !== null) {
            $this->ScriptName = $param["ScriptName"];
        }

        if (array_key_exists("SQLStatement",$param) and $param["SQLStatement"] !== null) {
            $this->SQLStatement = $param["SQLStatement"];
        }

        if (array_key_exists("ScriptDesc",$param) and $param["ScriptDesc"] !== null) {
            $this->ScriptDesc = $param["ScriptDesc"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }
    }
}
