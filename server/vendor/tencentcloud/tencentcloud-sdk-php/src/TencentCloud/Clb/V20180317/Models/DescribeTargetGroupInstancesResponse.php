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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTargetGroupInstances返回参数结构体
 *
 * @method integer getTotalCount() 获取本次查询的结果数量
 * @method void setTotalCount(integer $TotalCount) 设置本次查询的结果数量
 * @method array getTargetGroupInstanceSet() 获取绑定的服务器信息
 * @method void setTargetGroupInstanceSet(array $TargetGroupInstanceSet) 设置绑定的服务器信息
 * @method integer getRealCount() 获取实际统计数量，不受Limit，Offset，CAM的影响
 * @method void setRealCount(integer $RealCount) 设置实际统计数量，不受Limit，Offset，CAM的影响
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTargetGroupInstancesResponse extends AbstractModel
{
    /**
     * @var integer 本次查询的结果数量
     */
    public $TotalCount;

    /**
     * @var array 绑定的服务器信息
     */
    public $TargetGroupInstanceSet;

    /**
     * @var integer 实际统计数量，不受Limit，Offset，CAM的影响
     */
    public $RealCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 本次查询的结果数量
     * @param array $TargetGroupInstanceSet 绑定的服务器信息
     * @param integer $RealCount 实际统计数量，不受Limit，Offset，CAM的影响
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TargetGroupInstanceSet",$param) and $param["TargetGroupInstanceSet"] !== null) {
            $this->TargetGroupInstanceSet = [];
            foreach ($param["TargetGroupInstanceSet"] as $key => $value){
                $obj = new TargetGroupBackend();
                $obj->deserialize($value);
                array_push($this->TargetGroupInstanceSet, $obj);
            }
        }

        if (array_key_exists("RealCount",$param) and $param["RealCount"] !== null) {
            $this->RealCount = $param["RealCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
