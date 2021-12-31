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
namespace TencentCloud\Mongodb\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例规格信息
 *
 * @method string getRegion() 获取地域信息
 * @method void setRegion(string $Region) 设置地域信息
 * @method string getZone() 获取可用区信息
 * @method void setZone(string $Zone) 设置可用区信息
 * @method array getSpecItems() 获取售卖规格信息
 * @method void setSpecItems(array $SpecItems) 设置售卖规格信息
 */
class SpecificationInfo extends AbstractModel
{
    /**
     * @var string 地域信息
     */
    public $Region;

    /**
     * @var string 可用区信息
     */
    public $Zone;

    /**
     * @var array 售卖规格信息
     */
    public $SpecItems;

    /**
     * @param string $Region 地域信息
     * @param string $Zone 可用区信息
     * @param array $SpecItems 售卖规格信息
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

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("SpecItems",$param) and $param["SpecItems"] !== null) {
            $this->SpecItems = [];
            foreach ($param["SpecItems"] as $key => $value){
                $obj = new SpecItem();
                $obj->deserialize($value);
                array_push($this->SpecItems, $obj);
            }
        }
    }
}
