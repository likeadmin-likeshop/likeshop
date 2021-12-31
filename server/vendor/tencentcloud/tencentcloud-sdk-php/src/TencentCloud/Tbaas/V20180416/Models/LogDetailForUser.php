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
namespace TencentCloud\Tbaas\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志详情信息
 *
 * @method integer getLineNumber() 获取日志行号
 * @method void setLineNumber(integer $LineNumber) 设置日志行号
 * @method string getLogMessage() 获取日志详情
 * @method void setLogMessage(string $LogMessage) 设置日志详情
 */
class LogDetailForUser extends AbstractModel
{
    /**
     * @var integer 日志行号
     */
    public $LineNumber;

    /**
     * @var string 日志详情
     */
    public $LogMessage;

    /**
     * @param integer $LineNumber 日志行号
     * @param string $LogMessage 日志详情
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
        if (array_key_exists("LineNumber",$param) and $param["LineNumber"] !== null) {
            $this->LineNumber = $param["LineNumber"];
        }

        if (array_key_exists("LogMessage",$param) and $param["LogMessage"] !== null) {
            $this->LogMessage = $param["LogMessage"];
        }
    }
}
