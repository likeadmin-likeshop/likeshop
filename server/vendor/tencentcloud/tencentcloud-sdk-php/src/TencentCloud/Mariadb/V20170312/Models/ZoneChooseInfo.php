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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分片节点可用区选择
 *
 * @method ZonesInfo getMasterZone() 获取主可用区
 * @method void setMasterZone(ZonesInfo $MasterZone) 设置主可用区
 * @method array getSlaveZones() 获取可选的从可用区
 * @method void setSlaveZones(array $SlaveZones) 设置可选的从可用区
 */
class ZoneChooseInfo extends AbstractModel
{
    /**
     * @var ZonesInfo 主可用区
     */
    public $MasterZone;

    /**
     * @var array 可选的从可用区
     */
    public $SlaveZones;

    /**
     * @param ZonesInfo $MasterZone 主可用区
     * @param array $SlaveZones 可选的从可用区
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
        if (array_key_exists("MasterZone",$param) and $param["MasterZone"] !== null) {
            $this->MasterZone = new ZonesInfo();
            $this->MasterZone->deserialize($param["MasterZone"]);
        }

        if (array_key_exists("SlaveZones",$param) and $param["SlaveZones"] !== null) {
            $this->SlaveZones = [];
            foreach ($param["SlaveZones"] as $key => $value){
                $obj = new ZonesInfo();
                $obj->deserialize($value);
                array_push($this->SlaveZones, $obj);
            }
        }
    }
}
