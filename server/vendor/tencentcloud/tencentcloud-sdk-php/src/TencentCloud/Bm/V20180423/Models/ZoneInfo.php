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
namespace TencentCloud\Bm\V20180423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 可用区信息
 *
 * @method string getZone() 获取可用区ID
 * @method void setZone(string $Zone) 设置可用区ID
 * @method integer getZoneId() 获取可用区整型ID
 * @method void setZoneId(integer $ZoneId) 设置可用区整型ID
 * @method string getZoneDescription() 获取可用区描述
 * @method void setZoneDescription(string $ZoneDescription) 设置可用区描述
 */
class ZoneInfo extends AbstractModel
{
    /**
     * @var string 可用区ID
     */
    public $Zone;

    /**
     * @var integer 可用区整型ID
     */
    public $ZoneId;

    /**
     * @var string 可用区描述
     */
    public $ZoneDescription;

    /**
     * @param string $Zone 可用区ID
     * @param integer $ZoneId 可用区整型ID
     * @param string $ZoneDescription 可用区描述
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneDescription",$param) and $param["ZoneDescription"] !== null) {
            $this->ZoneDescription = $param["ZoneDescription"];
        }
    }
}
