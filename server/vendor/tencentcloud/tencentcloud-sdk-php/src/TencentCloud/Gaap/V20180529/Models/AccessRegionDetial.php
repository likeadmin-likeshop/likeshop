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
 * 根据源站查询的可用加速区域信息及对应的可选带宽和并发量
 *
 * @method string getRegionId() 获取区域ID
 * @method void setRegionId(string $RegionId) 设置区域ID
 * @method string getRegionName() 获取区域的中文或英文名称
 * @method void setRegionName(string $RegionName) 设置区域的中文或英文名称
 * @method array getConcurrentList() 获取可选的并发量取值数组
 * @method void setConcurrentList(array $ConcurrentList) 设置可选的并发量取值数组
 * @method array getBandwidthList() 获取可选的带宽取值数组
 * @method void setBandwidthList(array $BandwidthList) 设置可选的带宽取值数组
 */
class AccessRegionDetial extends AbstractModel
{
    /**
     * @var string 区域ID
     */
    public $RegionId;

    /**
     * @var string 区域的中文或英文名称
     */
    public $RegionName;

    /**
     * @var array 可选的并发量取值数组
     */
    public $ConcurrentList;

    /**
     * @var array 可选的带宽取值数组
     */
    public $BandwidthList;

    /**
     * @param string $RegionId 区域ID
     * @param string $RegionName 区域的中文或英文名称
     * @param array $ConcurrentList 可选的并发量取值数组
     * @param array $BandwidthList 可选的带宽取值数组
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
        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("ConcurrentList",$param) and $param["ConcurrentList"] !== null) {
            $this->ConcurrentList = $param["ConcurrentList"];
        }

        if (array_key_exists("BandwidthList",$param) and $param["BandwidthList"] !== null) {
            $this->BandwidthList = $param["BandwidthList"];
        }
    }
}
