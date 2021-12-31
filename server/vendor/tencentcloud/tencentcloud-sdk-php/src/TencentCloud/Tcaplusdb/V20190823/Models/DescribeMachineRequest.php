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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMachine请求参数结构体
 *
 * @method integer getIpv6Enable() 获取不为0，表示查询支持ipv6的机器
 * @method void setIpv6Enable(integer $Ipv6Enable) 设置不为0，表示查询支持ipv6的机器
 */
class DescribeMachineRequest extends AbstractModel
{
    /**
     * @var integer 不为0，表示查询支持ipv6的机器
     */
    public $Ipv6Enable;

    /**
     * @param integer $Ipv6Enable 不为0，表示查询支持ipv6的机器
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
        if (array_key_exists("Ipv6Enable",$param) and $param["Ipv6Enable"] !== null) {
            $this->Ipv6Enable = $param["Ipv6Enable"];
        }
    }
}
