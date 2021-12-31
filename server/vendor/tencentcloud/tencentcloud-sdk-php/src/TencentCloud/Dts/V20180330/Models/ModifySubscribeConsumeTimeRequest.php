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
 * ModifySubscribeConsumeTime请求参数结构体
 *
 * @method string getSubscribeId() 获取数据订阅实例的ID
 * @method void setSubscribeId(string $SubscribeId) 设置数据订阅实例的ID
 * @method string getConsumeStartTime() 获取消费时间起点，也即是指定订阅数据的时间起点，时间格式如：Y-m-d h:m:s，取值范围为过去24小时之内
 * @method void setConsumeStartTime(string $ConsumeStartTime) 设置消费时间起点，也即是指定订阅数据的时间起点，时间格式如：Y-m-d h:m:s，取值范围为过去24小时之内
 */
class ModifySubscribeConsumeTimeRequest extends AbstractModel
{
    /**
     * @var string 数据订阅实例的ID
     */
    public $SubscribeId;

    /**
     * @var string 消费时间起点，也即是指定订阅数据的时间起点，时间格式如：Y-m-d h:m:s，取值范围为过去24小时之内
     */
    public $ConsumeStartTime;

    /**
     * @param string $SubscribeId 数据订阅实例的ID
     * @param string $ConsumeStartTime 消费时间起点，也即是指定订阅数据的时间起点，时间格式如：Y-m-d h:m:s，取值范围为过去24小时之内
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
        if (array_key_exists("SubscribeId",$param) and $param["SubscribeId"] !== null) {
            $this->SubscribeId = $param["SubscribeId"];
        }

        if (array_key_exists("ConsumeStartTime",$param) and $param["ConsumeStartTime"] !== null) {
            $this->ConsumeStartTime = $param["ConsumeStartTime"];
        }
    }
}
