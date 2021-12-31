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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CVM实例数据盘挂载配置
 *
 * @method string getInstanceType() 获取CVM实例类型
 * @method void setInstanceType(string $InstanceType) 设置CVM实例类型
 * @method array getDataDisks() 获取数据盘挂载信息
 * @method void setDataDisks(array $DataDisks) 设置数据盘挂载信息
 * @method string getZone() 获取CVM实例所属可用区
 * @method void setZone(string $Zone) 设置CVM实例所属可用区
 */
class InstanceDataDiskMountSetting extends AbstractModel
{
    /**
     * @var string CVM实例类型
     */
    public $InstanceType;

    /**
     * @var array 数据盘挂载信息
     */
    public $DataDisks;

    /**
     * @var string CVM实例所属可用区
     */
    public $Zone;

    /**
     * @param string $InstanceType CVM实例类型
     * @param array $DataDisks 数据盘挂载信息
     * @param string $Zone CVM实例所属可用区
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("DataDisks",$param) and $param["DataDisks"] !== null) {
            $this->DataDisks = [];
            foreach ($param["DataDisks"] as $key => $value){
                $obj = new DataDisk();
                $obj->deserialize($value);
                array_push($this->DataDisks, $obj);
            }
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
