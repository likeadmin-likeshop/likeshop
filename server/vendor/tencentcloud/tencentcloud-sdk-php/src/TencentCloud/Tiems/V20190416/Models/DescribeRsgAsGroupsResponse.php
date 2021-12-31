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
namespace TencentCloud\Tiems\V20190416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRsgAsGroups返回参数结构体
 *
 * @method array getRsgAsGroupSet() 获取所查询的伸缩组数组
 * @method void setRsgAsGroupSet(array $RsgAsGroupSet) 设置所查询的伸缩组数组
 * @method integer getTotalCount() 获取伸缩组数组总数目
 * @method void setTotalCount(integer $TotalCount) 设置伸缩组数组总数目
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRsgAsGroupsResponse extends AbstractModel
{
    /**
     * @var array 所查询的伸缩组数组
     */
    public $RsgAsGroupSet;

    /**
     * @var integer 伸缩组数组总数目
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $RsgAsGroupSet 所查询的伸缩组数组
     * @param integer $TotalCount 伸缩组数组总数目
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("RsgAsGroupSet",$param) and $param["RsgAsGroupSet"] !== null) {
            $this->RsgAsGroupSet = [];
            foreach ($param["RsgAsGroupSet"] as $key => $value){
                $obj = new RsgAsGroup();
                $obj->deserialize($value);
                array_push($this->RsgAsGroupSet, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
