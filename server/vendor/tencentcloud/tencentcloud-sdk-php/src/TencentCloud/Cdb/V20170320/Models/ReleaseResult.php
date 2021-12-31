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
 * 解隔离任务结果
 *
 * @method string getInstanceId() 获取实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。
 * @method integer getCode() 获取实例解隔离操作的结果值。返回值为0表示成功。
 * @method void setCode(integer $Code) 设置实例解隔离操作的结果值。返回值为0表示成功。
 * @method string getMessage() 获取实例解隔离操作的错误信息。
 * @method void setMessage(string $Message) 设置实例解隔离操作的错误信息。
 */
class ReleaseResult extends AbstractModel
{
    /**
     * @var string 实例 ID。
     */
    public $InstanceId;

    /**
     * @var integer 实例解隔离操作的结果值。返回值为0表示成功。
     */
    public $Code;

    /**
     * @var string 实例解隔离操作的错误信息。
     */
    public $Message;

    /**
     * @param string $InstanceId 实例 ID。
     * @param integer $Code 实例解隔离操作的结果值。返回值为0表示成功。
     * @param string $Message 实例解隔离操作的错误信息。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
