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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 地域信息
 *
 * @method string getRegion() 获取地域名称，例如，ap-guangzhou
 * @method void setRegion(string $Region) 设置地域名称，例如，ap-guangzhou
 * @method string getRegionName() 获取地域描述，例如，华南地区(广州)
 * @method void setRegionName(string $RegionName) 设置地域描述，例如，华南地区(广州)
 * @method string getRegionState() 获取地域是否可用状态
 * @method void setRegionState(string $RegionState) 设置地域是否可用状态
 */
class RegionInfo extends AbstractModel
{
    /**
     * @var string 地域名称，例如，ap-guangzhou
     */
    public $Region;

    /**
     * @var string 地域描述，例如，华南地区(广州)
     */
    public $RegionName;

    /**
     * @var string 地域是否可用状态
     */
    public $RegionState;

    /**
     * @param string $Region 地域名称，例如，ap-guangzhou
     * @param string $RegionName 地域描述，例如，华南地区(广州)
     * @param string $RegionState 地域是否可用状态
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("RegionState",$param) and $param["RegionState"] !== null) {
            $this->RegionState = $param["RegionState"];
        }
    }
}
