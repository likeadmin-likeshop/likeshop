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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResetInstancesMaxBandwidth请求参数结构体
 *
 * @method array getInstanceIdSet() 获取待重置带宽上限的实例ID列表。在单次请求的过程中，单个region下的请求实例数上限为100。
 * @method void setInstanceIdSet(array $InstanceIdSet) 设置待重置带宽上限的实例ID列表。在单次请求的过程中，单个region下的请求实例数上限为100。
 * @method integer getMaxBandwidthOut() 获取修改后的最大出带宽上限。
 * @method void setMaxBandwidthOut(integer $MaxBandwidthOut) 设置修改后的最大出带宽上限。
 * @method integer getMaxBandwidthIn() 获取修改后的最大入带宽上限。
 * @method void setMaxBandwidthIn(integer $MaxBandwidthIn) 设置修改后的最大入带宽上限。
 */
class ResetInstancesMaxBandwidthRequest extends AbstractModel
{
    /**
     * @var array 待重置带宽上限的实例ID列表。在单次请求的过程中，单个region下的请求实例数上限为100。
     */
    public $InstanceIdSet;

    /**
     * @var integer 修改后的最大出带宽上限。
     */
    public $MaxBandwidthOut;

    /**
     * @var integer 修改后的最大入带宽上限。
     */
    public $MaxBandwidthIn;

    /**
     * @param array $InstanceIdSet 待重置带宽上限的实例ID列表。在单次请求的过程中，单个region下的请求实例数上限为100。
     * @param integer $MaxBandwidthOut 修改后的最大出带宽上限。
     * @param integer $MaxBandwidthIn 修改后的最大入带宽上限。
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
        if (array_key_exists("InstanceIdSet",$param) and $param["InstanceIdSet"] !== null) {
            $this->InstanceIdSet = $param["InstanceIdSet"];
        }

        if (array_key_exists("MaxBandwidthOut",$param) and $param["MaxBandwidthOut"] !== null) {
            $this->MaxBandwidthOut = $param["MaxBandwidthOut"];
        }

        if (array_key_exists("MaxBandwidthIn",$param) and $param["MaxBandwidthIn"] !== null) {
            $this->MaxBandwidthIn = $param["MaxBandwidthIn"];
        }
    }
}
