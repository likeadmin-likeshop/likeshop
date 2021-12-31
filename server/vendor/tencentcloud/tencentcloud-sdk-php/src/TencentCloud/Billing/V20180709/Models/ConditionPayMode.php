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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 付费模式过滤条件
 *
 * @method string getPayMode() 获取付费模式
 * @method void setPayMode(string $PayMode) 设置付费模式
 * @method string getPayModeName() 获取付费模式名称
 * @method void setPayModeName(string $PayModeName) 设置付费模式名称
 */
class ConditionPayMode extends AbstractModel
{
    /**
     * @var string 付费模式
     */
    public $PayMode;

    /**
     * @var string 付费模式名称
     */
    public $PayModeName;

    /**
     * @param string $PayMode 付费模式
     * @param string $PayModeName 付费模式名称
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
        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PayModeName",$param) and $param["PayModeName"] !== null) {
            $this->PayModeName = $param["PayModeName"];
        }
    }
}
