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
namespace TencentCloud\Dts\V20180330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 迁移任务错误信息及提示
 *
 * @method string getErrorLog() 获取具体的报错日志, 包含错误码和错误信息
 * @method void setErrorLog(string $ErrorLog) 设置具体的报错日志, 包含错误码和错误信息
 * @method string getHelpDoc() 获取报错对应的帮助文档Ur
 * @method void setHelpDoc(string $HelpDoc) 设置报错对应的帮助文档Ur
 */
class ErrorInfo extends AbstractModel
{
    /**
     * @var string 具体的报错日志, 包含错误码和错误信息
     */
    public $ErrorLog;

    /**
     * @var string 报错对应的帮助文档Ur
     */
    public $HelpDoc;

    /**
     * @param string $ErrorLog 具体的报错日志, 包含错误码和错误信息
     * @param string $HelpDoc 报错对应的帮助文档Ur
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
        if (array_key_exists("ErrorLog",$param) and $param["ErrorLog"] !== null) {
            $this->ErrorLog = $param["ErrorLog"];
        }

        if (array_key_exists("HelpDoc",$param) and $param["HelpDoc"] !== null) {
            $this->HelpDoc = $param["HelpDoc"];
        }
    }
}
