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
namespace TencentCloud\Taf\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 业务入参
 *
 * @method string getTaskId() 获取投放任务ID
 * @method void setTaskId(string $TaskId) 设置投放任务ID
 * @method array getMobiles() 获取手机号码列表（号码量<=200）
 * @method void setMobiles(array $Mobiles) 设置手机号码列表（号码量<=200）
 */
class InputSendTrafficSecuritySmsMsg extends AbstractModel
{
    /**
     * @var string 投放任务ID
     */
    public $TaskId;

    /**
     * @var array 手机号码列表（号码量<=200）
     */
    public $Mobiles;

    /**
     * @param string $TaskId 投放任务ID
     * @param array $Mobiles 手机号码列表（号码量<=200）
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Mobiles",$param) and $param["Mobiles"] !== null) {
            $this->Mobiles = $param["Mobiles"];
        }
    }
}
