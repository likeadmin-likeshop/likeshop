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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 限制操作。
 *
 * @method string getAction() 获取限制操作名。
 * @method void setAction(string $Action) 设置限制操作名。
 * @method string getCode() 获取限制操作消息码。
 * @method void setCode(string $Code) 设置限制操作消息码。
 * @method string getMessage() 获取限制操作消息。
 * @method void setMessage(string $Message) 设置限制操作消息。
 */
class DeniedAction extends AbstractModel
{
    /**
     * @var string 限制操作名。
     */
    public $Action;

    /**
     * @var string 限制操作消息码。
     */
    public $Code;

    /**
     * @var string 限制操作消息。
     */
    public $Message;

    /**
     * @param string $Action 限制操作名。
     * @param string $Code 限制操作消息码。
     * @param string $Message 限制操作消息。
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
