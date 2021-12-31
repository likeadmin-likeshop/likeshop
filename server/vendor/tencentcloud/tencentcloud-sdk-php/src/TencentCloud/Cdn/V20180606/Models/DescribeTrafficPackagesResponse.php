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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTrafficPackages返回参数结构体
 *
 * @method integer getTotalCount() 获取流量包总个数
 * @method void setTotalCount(integer $TotalCount) 设置流量包总个数
 * @method array getTrafficPackages() 获取流量包详情
 * @method void setTrafficPackages(array $TrafficPackages) 设置流量包详情
 * @method integer getExpiringCount() 获取即将过期的流量包个数（7天内）
 * @method void setExpiringCount(integer $ExpiringCount) 设置即将过期的流量包个数（7天内）
 * @method integer getEnabledCount() 获取有效流量包个数
 * @method void setEnabledCount(integer $EnabledCount) 设置有效流量包个数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTrafficPackagesResponse extends AbstractModel
{
    /**
     * @var integer 流量包总个数
     */
    public $TotalCount;

    /**
     * @var array 流量包详情
     */
    public $TrafficPackages;

    /**
     * @var integer 即将过期的流量包个数（7天内）
     */
    public $ExpiringCount;

    /**
     * @var integer 有效流量包个数
     */
    public $EnabledCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 流量包总个数
     * @param array $TrafficPackages 流量包详情
     * @param integer $ExpiringCount 即将过期的流量包个数（7天内）
     * @param integer $EnabledCount 有效流量包个数
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

        if (array_key_exists("TrafficPackages",$param) and $param["TrafficPackages"] !== null) {
            $this->TrafficPackages = [];
            foreach ($param["TrafficPackages"] as $key => $value){
                $obj = new TrafficPackage();
                $obj->deserialize($value);
                array_push($this->TrafficPackages, $obj);
            }
        }

        if (array_key_exists("ExpiringCount",$param) and $param["ExpiringCount"] !== null) {
            $this->ExpiringCount = $param["ExpiringCount"];
        }

        if (array_key_exists("EnabledCount",$param) and $param["EnabledCount"] !== null) {
            $this->EnabledCount = $param["EnabledCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
