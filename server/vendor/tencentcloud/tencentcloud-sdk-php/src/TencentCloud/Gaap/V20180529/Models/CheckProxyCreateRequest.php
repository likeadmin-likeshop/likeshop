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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckProxyCreate请求参数结构体
 *
 * @method string getAccessRegion() 获取通道的接入(加速)区域。取值可通过接口DescribeAccessRegionsByDestRegion获取到
 * @method void setAccessRegion(string $AccessRegion) 设置通道的接入(加速)区域。取值可通过接口DescribeAccessRegionsByDestRegion获取到
 * @method string getRealServerRegion() 获取通道的源站区域。取值可通过接口DescribeDestRegions获取到
 * @method void setRealServerRegion(string $RealServerRegion) 设置通道的源站区域。取值可通过接口DescribeDestRegions获取到
 * @method integer getBandwidth() 获取通道带宽上限，单位：Mbps。
 * @method void setBandwidth(integer $Bandwidth) 设置通道带宽上限，单位：Mbps。
 * @method integer getConcurrent() 获取通道并发量上限，表示同时在线的连接数，单位：万。
 * @method void setConcurrent(integer $Concurrent) 设置通道并发量上限，表示同时在线的连接数，单位：万。
 * @method string getGroupId() 获取如果在通道组下创建通道，需要填写通道组的ID
 * @method void setGroupId(string $GroupId) 设置如果在通道组下创建通道，需要填写通道组的ID
 */
class CheckProxyCreateRequest extends AbstractModel
{
    /**
     * @var string 通道的接入(加速)区域。取值可通过接口DescribeAccessRegionsByDestRegion获取到
     */
    public $AccessRegion;

    /**
     * @var string 通道的源站区域。取值可通过接口DescribeDestRegions获取到
     */
    public $RealServerRegion;

    /**
     * @var integer 通道带宽上限，单位：Mbps。
     */
    public $Bandwidth;

    /**
     * @var integer 通道并发量上限，表示同时在线的连接数，单位：万。
     */
    public $Concurrent;

    /**
     * @var string 如果在通道组下创建通道，需要填写通道组的ID
     */
    public $GroupId;

    /**
     * @param string $AccessRegion 通道的接入(加速)区域。取值可通过接口DescribeAccessRegionsByDestRegion获取到
     * @param string $RealServerRegion 通道的源站区域。取值可通过接口DescribeDestRegions获取到
     * @param integer $Bandwidth 通道带宽上限，单位：Mbps。
     * @param integer $Concurrent 通道并发量上限，表示同时在线的连接数，单位：万。
     * @param string $GroupId 如果在通道组下创建通道，需要填写通道组的ID
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
        if (array_key_exists("AccessRegion",$param) and $param["AccessRegion"] !== null) {
            $this->AccessRegion = $param["AccessRegion"];
        }

        if (array_key_exists("RealServerRegion",$param) and $param["RealServerRegion"] !== null) {
            $this->RealServerRegion = $param["RealServerRegion"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("Concurrent",$param) and $param["Concurrent"] !== null) {
            $this->Concurrent = $param["Concurrent"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}
