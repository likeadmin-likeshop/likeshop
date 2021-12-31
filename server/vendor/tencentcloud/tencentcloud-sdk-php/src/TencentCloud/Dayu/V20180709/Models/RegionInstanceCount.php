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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 地域资源实例数
 *
 * @method string getRegion() 获取地域码
 * @method void setRegion(string $Region) 设置地域码
 * @method string getRegionV3() 获取地域码（新规范）
 * @method void setRegionV3(string $RegionV3) 设置地域码（新规范）
 * @method integer getCount() 获取资源实例数
 * @method void setCount(integer $Count) 设置资源实例数
 */
class RegionInstanceCount extends AbstractModel
{
    /**
     * @var string 地域码
     */
    public $Region;

    /**
     * @var string 地域码（新规范）
     */
    public $RegionV3;

    /**
     * @var integer 资源实例数
     */
    public $Count;

    /**
     * @param string $Region 地域码
     * @param string $RegionV3 地域码（新规范）
     * @param integer $Count 资源实例数
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

        if (array_key_exists("RegionV3",$param) and $param["RegionV3"] !== null) {
            $this->RegionV3 = $param["RegionV3"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
