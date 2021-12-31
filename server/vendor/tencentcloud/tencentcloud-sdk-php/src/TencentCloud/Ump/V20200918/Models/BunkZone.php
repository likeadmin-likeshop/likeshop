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
namespace TencentCloud\Ump\V20200918\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 点位包含铺位信息
 *
 * @method integer getZoneId() 获取点位ID
 * @method void setZoneId(integer $ZoneId) 设置点位ID
 * @method string getZoneName() 获取点位名称
 * @method void setZoneName(string $ZoneName) 设置点位名称
 * @method string getBunkCodes() 获取铺位编码
 * @method void setBunkCodes(string $BunkCodes) 设置铺位编码
 */
class BunkZone extends AbstractModel
{
    /**
     * @var integer 点位ID
     */
    public $ZoneId;

    /**
     * @var string 点位名称
     */
    public $ZoneName;

    /**
     * @var string 铺位编码
     */
    public $BunkCodes;

    /**
     * @param integer $ZoneId 点位ID
     * @param string $ZoneName 点位名称
     * @param string $BunkCodes 铺位编码
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("BunkCodes",$param) and $param["BunkCodes"] !== null) {
            $this->BunkCodes = $param["BunkCodes"];
        }
    }
}
