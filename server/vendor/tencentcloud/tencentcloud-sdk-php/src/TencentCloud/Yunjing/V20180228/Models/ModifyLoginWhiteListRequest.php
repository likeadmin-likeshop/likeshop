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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLoginWhiteList请求参数结构体
 *
 * @method LoginWhiteListsRule getRules() 获取白名单规则
 * @method void setRules(LoginWhiteListsRule $Rules) 设置白名单规则
 */
class ModifyLoginWhiteListRequest extends AbstractModel
{
    /**
     * @var LoginWhiteListsRule 白名单规则
     */
    public $Rules;

    /**
     * @param LoginWhiteListsRule $Rules 白名单规则
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
        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = new LoginWhiteListsRule();
            $this->Rules->deserialize($param["Rules"]);
        }
    }
}
