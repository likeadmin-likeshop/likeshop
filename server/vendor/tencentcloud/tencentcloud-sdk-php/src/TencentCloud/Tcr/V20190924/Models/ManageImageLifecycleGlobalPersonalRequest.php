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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ManageImageLifecycleGlobalPersonal请求参数结构体
 *
 * @method string getType() 获取global_keep_last_days:全局保留最近几天的数据;global_keep_last_nums:全局保留最近多少个
 * @method void setType(string $Type) 设置global_keep_last_days:全局保留最近几天的数据;global_keep_last_nums:全局保留最近多少个
 * @method integer getVal() 获取策略值
 * @method void setVal(integer $Val) 设置策略值
 */
class ManageImageLifecycleGlobalPersonalRequest extends AbstractModel
{
    /**
     * @var string global_keep_last_days:全局保留最近几天的数据;global_keep_last_nums:全局保留最近多少个
     */
    public $Type;

    /**
     * @var integer 策略值
     */
    public $Val;

    /**
     * @param string $Type global_keep_last_days:全局保留最近几天的数据;global_keep_last_nums:全局保留最近多少个
     * @param integer $Val 策略值
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Val",$param) and $param["Val"] !== null) {
            $this->Val = $param["Val"];
        }
    }
}
