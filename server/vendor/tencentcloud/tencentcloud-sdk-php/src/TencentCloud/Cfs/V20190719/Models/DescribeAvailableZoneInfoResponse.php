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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAvailableZoneInfo返回参数结构体
 *
 * @method array getRegionZones() 获取各可用区的资源售卖情况以及支持的存储类型、存储协议等信息
 * @method void setRegionZones(array $RegionZones) 设置各可用区的资源售卖情况以及支持的存储类型、存储协议等信息
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAvailableZoneInfoResponse extends AbstractModel
{
    /**
     * @var array 各可用区的资源售卖情况以及支持的存储类型、存储协议等信息
     */
    public $RegionZones;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $RegionZones 各可用区的资源售卖情况以及支持的存储类型、存储协议等信息
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
        if (array_key_exists("RegionZones",$param) and $param["RegionZones"] !== null) {
            $this->RegionZones = [];
            foreach ($param["RegionZones"] as $key => $value){
                $obj = new AvailableRegion();
                $obj->deserialize($value);
                array_push($this->RegionZones, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
