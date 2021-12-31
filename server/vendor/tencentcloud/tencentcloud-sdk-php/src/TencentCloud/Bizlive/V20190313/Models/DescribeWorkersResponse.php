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
namespace TencentCloud\Bizlive\V20190313\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWorkers返回参数结构体
 *
 * @method array getRegionDetail() 获取各个区域的机器情况
 * @method void setRegionDetail(array $RegionDetail) 设置各个区域的机器情况
 * @method integer getIdle() 获取空闲机器总数量
 * @method void setIdle(integer $Idle) 设置空闲机器总数量
 * @method integer getRegionNum() 获取区域个数
 * @method void setRegionNum(integer $RegionNum) 设置区域个数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeWorkersResponse extends AbstractModel
{
    /**
     * @var array 各个区域的机器情况
     */
    public $RegionDetail;

    /**
     * @var integer 空闲机器总数量
     */
    public $Idle;

    /**
     * @var integer 区域个数
     */
    public $RegionNum;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $RegionDetail 各个区域的机器情况
     * @param integer $Idle 空闲机器总数量
     * @param integer $RegionNum 区域个数
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
        if (array_key_exists("RegionDetail",$param) and $param["RegionDetail"] !== null) {
            $this->RegionDetail = [];
            foreach ($param["RegionDetail"] as $key => $value){
                $obj = new WorkerRegionInfo();
                $obj->deserialize($value);
                array_push($this->RegionDetail, $obj);
            }
        }

        if (array_key_exists("Idle",$param) and $param["Idle"] !== null) {
            $this->Idle = $param["Idle"];
        }

        if (array_key_exists("RegionNum",$param) and $param["RegionNum"] !== null) {
            $this->RegionNum = $param["RegionNum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
