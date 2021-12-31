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
namespace TencentCloud\Sms\V20210111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 删除签名响应
 *
 * @method string getDeleteStatus() 获取删除状态信息。
 * @method void setDeleteStatus(string $DeleteStatus) 设置删除状态信息。
 * @method integer getDeleteTime() 获取删除时间，UNIX 时间戳（单位：秒）。
 * @method void setDeleteTime(integer $DeleteTime) 设置删除时间，UNIX 时间戳（单位：秒）。
 */
class DeleteSignStatus extends AbstractModel
{
    /**
     * @var string 删除状态信息。
     */
    public $DeleteStatus;

    /**
     * @var integer 删除时间，UNIX 时间戳（单位：秒）。
     */
    public $DeleteTime;

    /**
     * @param string $DeleteStatus 删除状态信息。
     * @param integer $DeleteTime 删除时间，UNIX 时间戳（单位：秒）。
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
        if (array_key_exists("DeleteStatus",$param) and $param["DeleteStatus"] !== null) {
            $this->DeleteStatus = $param["DeleteStatus"];
        }

        if (array_key_exists("DeleteTime",$param) and $param["DeleteTime"] !== null) {
            $this->DeleteTime = $param["DeleteTime"];
        }
    }
}
