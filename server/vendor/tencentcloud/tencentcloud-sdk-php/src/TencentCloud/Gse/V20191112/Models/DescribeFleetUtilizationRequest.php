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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFleetUtilization请求参数结构体
 *
 * @method array getFleetIds() 获取服务器舰队 Ids
 * @method void setFleetIds(array $FleetIds) 设置服务器舰队 Ids
 */
class DescribeFleetUtilizationRequest extends AbstractModel
{
    /**
     * @var array 服务器舰队 Ids
     */
    public $FleetIds;

    /**
     * @param array $FleetIds 服务器舰队 Ids
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
        if (array_key_exists("FleetIds",$param) and $param["FleetIds"] !== null) {
            $this->FleetIds = $param["FleetIds"];
        }
    }
}
