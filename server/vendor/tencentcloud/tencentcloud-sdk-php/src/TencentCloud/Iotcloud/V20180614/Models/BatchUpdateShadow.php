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
namespace TencentCloud\Iotcloud\V20180614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量更新设备影子任务
 *
 * @method string getDesired() 获取设备影子的期望状态，格式为 Json 对象序列化之后的字符串
 * @method void setDesired(string $Desired) 设置设备影子的期望状态，格式为 Json 对象序列化之后的字符串
 */
class BatchUpdateShadow extends AbstractModel
{
    /**
     * @var string 设备影子的期望状态，格式为 Json 对象序列化之后的字符串
     */
    public $Desired;

    /**
     * @param string $Desired 设备影子的期望状态，格式为 Json 对象序列化之后的字符串
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
        if (array_key_exists("Desired",$param) and $param["Desired"] !== null) {
            $this->Desired = $param["Desired"];
        }
    }
}
