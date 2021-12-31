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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 错误日志详情
 *
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 * @method string getDatabase() 获取数据库名字
 * @method void setDatabase(string $Database) 设置数据库名字
 * @method string getErrTime() 获取错误发生时间
 * @method void setErrTime(string $ErrTime) 设置错误发生时间
 * @method string getErrMsg() 获取错误消息
 * @method void setErrMsg(string $ErrMsg) 设置错误消息
 */
class ErrLogDetail extends AbstractModel
{
    /**
     * @var string 用户名
     */
    public $UserName;

    /**
     * @var string 数据库名字
     */
    public $Database;

    /**
     * @var string 错误发生时间
     */
    public $ErrTime;

    /**
     * @var string 错误消息
     */
    public $ErrMsg;

    /**
     * @param string $UserName 用户名
     * @param string $Database 数据库名字
     * @param string $ErrTime 错误发生时间
     * @param string $ErrMsg 错误消息
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("ErrTime",$param) and $param["ErrTime"] !== null) {
            $this->ErrTime = $param["ErrTime"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }
    }
}
