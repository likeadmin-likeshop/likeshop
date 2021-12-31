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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVpcRuleOverview请求参数结构体
 *
 * @method string getEdgeId() 获取EdgeId值两个vpc间的边id  不是必填项可以为空，就是所有vpc间的访问控制规则
 * @method void setEdgeId(string $EdgeId) 设置EdgeId值两个vpc间的边id  不是必填项可以为空，就是所有vpc间的访问控制规则
 */
class DescribeVpcRuleOverviewRequest extends AbstractModel
{
    /**
     * @var string EdgeId值两个vpc间的边id  不是必填项可以为空，就是所有vpc间的访问控制规则
     */
    public $EdgeId;

    /**
     * @param string $EdgeId EdgeId值两个vpc间的边id  不是必填项可以为空，就是所有vpc间的访问控制规则
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
        if (array_key_exists("EdgeId",$param) and $param["EdgeId"] !== null) {
            $this->EdgeId = $param["EdgeId"];
        }
    }
}
