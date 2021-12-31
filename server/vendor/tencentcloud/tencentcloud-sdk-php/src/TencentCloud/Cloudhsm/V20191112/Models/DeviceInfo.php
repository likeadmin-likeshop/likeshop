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
namespace TencentCloud\Cloudhsm\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备厂商信息
 *
 * @method string getManufacturer() 获取厂商名称
 * @method void setManufacturer(string $Manufacturer) 设置厂商名称
 * @method array getHsmTypes() 获取此厂商旗下的设备信息列表
 * @method void setHsmTypes(array $HsmTypes) 设置此厂商旗下的设备信息列表
 */
class DeviceInfo extends AbstractModel
{
    /**
     * @var string 厂商名称
     */
    public $Manufacturer;

    /**
     * @var array 此厂商旗下的设备信息列表
     */
    public $HsmTypes;

    /**
     * @param string $Manufacturer 厂商名称
     * @param array $HsmTypes 此厂商旗下的设备信息列表
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
        if (array_key_exists("Manufacturer",$param) and $param["Manufacturer"] !== null) {
            $this->Manufacturer = $param["Manufacturer"];
        }

        if (array_key_exists("HsmTypes",$param) and $param["HsmTypes"] !== null) {
            $this->HsmTypes = [];
            foreach ($param["HsmTypes"] as $key => $value){
                $obj = new HsmInfo();
                $obj->deserialize($value);
                array_push($this->HsmTypes, $obj);
            }
        }
    }
}
