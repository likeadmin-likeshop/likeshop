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
 * DescribeFleetAttributes请求参数结构体
 *
 * @method array getFleetIds() 获取服务器舰队 Ids
 * @method void setFleetIds(array $FleetIds) 设置服务器舰队 Ids
 * @method integer getLimit() 获取结果返回最大数量，默认值20，最大值100
 * @method void setLimit(integer $Limit) 设置结果返回最大数量，默认值20，最大值100
 * @method integer getOffset() 获取返回结果偏移，最小值0
 * @method void setOffset(integer $Offset) 设置返回结果偏移，最小值0
 */
class DescribeFleetAttributesRequest extends AbstractModel
{
    /**
     * @var array 服务器舰队 Ids
     */
    public $FleetIds;

    /**
     * @var integer 结果返回最大数量，默认值20，最大值100
     */
    public $Limit;

    /**
     * @var integer 返回结果偏移，最小值0
     */
    public $Offset;

    /**
     * @param array $FleetIds 服务器舰队 Ids
     * @param integer $Limit 结果返回最大数量，默认值20，最大值100
     * @param integer $Offset 返回结果偏移，最小值0
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
