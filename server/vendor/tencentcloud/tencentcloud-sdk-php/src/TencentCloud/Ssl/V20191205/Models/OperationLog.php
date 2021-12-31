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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 证书操作日志。
 *
 * @method string getAction() 获取操作证书动作。
 * @method void setAction(string $Action) 设置操作证书动作。
 * @method string getCreatedOn() 获取操作时间。
 * @method void setCreatedOn(string $CreatedOn) 设置操作时间。
 */
class OperationLog extends AbstractModel
{
    /**
     * @var string 操作证书动作。
     */
    public $Action;

    /**
     * @var string 操作时间。
     */
    public $CreatedOn;

    /**
     * @param string $Action 操作证书动作。
     * @param string $CreatedOn 操作时间。
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

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }
    }
}
