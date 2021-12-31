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
namespace TencentCloud\Bmlb\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTrafficMirrorReceivers请求参数结构体
 *
 * @method string getTrafficMirrorId() 获取流量镜像实例ID。
 * @method void setTrafficMirrorId(string $TrafficMirrorId) 设置流量镜像实例ID。
 * @method array getInstanceIds() 获取接收机黑石物理机实例ID数组。
 * @method void setInstanceIds(array $InstanceIds) 设置接收机黑石物理机实例ID数组。
 * @method array getPorts() 获取接收机接收端口数组。
 * @method void setPorts(array $Ports) 设置接收机接收端口数组。
 * @method array getWeights() 获取接收机实例权重数组。
 * @method void setWeights(array $Weights) 设置接收机实例权重数组。
 * @method integer getOffset() 获取分页的偏移量，也即从第几条记录开始查询
 * @method void setOffset(integer $Offset) 设置分页的偏移量，也即从第几条记录开始查询
 * @method integer getLimit() 获取单次查询返回的条目数，默认值：500。
 * @method void setLimit(integer $Limit) 设置单次查询返回的条目数，默认值：500。
 * @method string getVagueStr() 获取搜索instance或者alias
 * @method void setVagueStr(string $VagueStr) 设置搜索instance或者alias
 * @method string getVagueIp() 获取搜索IP
 * @method void setVagueIp(string $VagueIp) 设置搜索IP
 */
class DescribeTrafficMirrorReceiversRequest extends AbstractModel
{
    /**
     * @var string 流量镜像实例ID。
     */
    public $TrafficMirrorId;

    /**
     * @var array 接收机黑石物理机实例ID数组。
     */
    public $InstanceIds;

    /**
     * @var array 接收机接收端口数组。
     */
    public $Ports;

    /**
     * @var array 接收机实例权重数组。
     */
    public $Weights;

    /**
     * @var integer 分页的偏移量，也即从第几条记录开始查询
     */
    public $Offset;

    /**
     * @var integer 单次查询返回的条目数，默认值：500。
     */
    public $Limit;

    /**
     * @var string 搜索instance或者alias
     */
    public $VagueStr;

    /**
     * @var string 搜索IP
     */
    public $VagueIp;

    /**
     * @param string $TrafficMirrorId 流量镜像实例ID。
     * @param array $InstanceIds 接收机黑石物理机实例ID数组。
     * @param array $Ports 接收机接收端口数组。
     * @param array $Weights 接收机实例权重数组。
     * @param integer $Offset 分页的偏移量，也即从第几条记录开始查询
     * @param integer $Limit 单次查询返回的条目数，默认值：500。
     * @param string $VagueStr 搜索instance或者alias
     * @param string $VagueIp 搜索IP
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
        if (array_key_exists("TrafficMirrorId",$param) and $param["TrafficMirrorId"] !== null) {
            $this->TrafficMirrorId = $param["TrafficMirrorId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("Ports",$param) and $param["Ports"] !== null) {
            $this->Ports = $param["Ports"];
        }

        if (array_key_exists("Weights",$param) and $param["Weights"] !== null) {
            $this->Weights = $param["Weights"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("VagueStr",$param) and $param["VagueStr"] !== null) {
            $this->VagueStr = $param["VagueStr"];
        }

        if (array_key_exists("VagueIp",$param) and $param["VagueIp"] !== null) {
            $this->VagueIp = $param["VagueIp"];
        }
    }
}
