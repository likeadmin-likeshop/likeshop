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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 版本控制-可用区数组
 *
 * @method string getZone() 获取可用区名称
 * @method void setZone(string $Zone) 设置可用区名称
 * @method integer getZoneId() 获取可用区ID
 * @method void setZoneId(integer $ZoneId) 设置可用区ID
 * @method string getZoneCnName() 获取可用区中文名称
 * @method void setZoneCnName(string $ZoneCnName) 设置可用区中文名称
 * @method array getTypes() 获取Type数组
 * @method void setTypes(array $Types) 设置Type数组
 * @method string getZoneName() 获取可用区中英文名称
 * @method void setZoneName(string $ZoneName) 设置可用区中英文名称
 */
class AvailableZone extends AbstractModel
{
    /**
     * @var string 可用区名称
     */
    public $Zone;

    /**
     * @var integer 可用区ID
     */
    public $ZoneId;

    /**
     * @var string 可用区中文名称
     */
    public $ZoneCnName;

    /**
     * @var array Type数组
     */
    public $Types;

    /**
     * @var string 可用区中英文名称
     */
    public $ZoneName;

    /**
     * @param string $Zone 可用区名称
     * @param integer $ZoneId 可用区ID
     * @param string $ZoneCnName 可用区中文名称
     * @param array $Types Type数组
     * @param string $ZoneName 可用区中英文名称
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

        if (array_key_exists("ZoneCnName",$param) and $param["ZoneCnName"] !== null) {
            $this->ZoneCnName = $param["ZoneCnName"];
        }

        if (array_key_exists("Types",$param) and $param["Types"] !== null) {
            $this->Types = [];
            foreach ($param["Types"] as $key => $value){
                $obj = new AvailableType();
                $obj->deserialize($value);
                array_push($this->Types, $obj);
            }
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }
    }
}
