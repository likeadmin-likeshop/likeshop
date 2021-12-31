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
 * Region和RegionName
 *
 * @method string getRegion() 获取Region
 * @method void setRegion(string $Region) 设置Region
 * @method string getRegionName() 获取Region名称
 * @method void setRegionName(string $RegionName) 设置Region名称
 * @method integer getRegionId() 获取RegionID
 * @method void setRegionId(integer $RegionId) 设置RegionID
 */
class RegionInfo extends AbstractModel
{
    /**
     * @var string Region
     */
    public $Region;

    /**
     * @var string Region名称
     */
    public $RegionName;

    /**
     * @var integer RegionID
     */
    public $RegionId;

    /**
     * @param string $Region Region
     * @param string $RegionName Region名称
     * @param integer $RegionId RegionID
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

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }
    }
}
