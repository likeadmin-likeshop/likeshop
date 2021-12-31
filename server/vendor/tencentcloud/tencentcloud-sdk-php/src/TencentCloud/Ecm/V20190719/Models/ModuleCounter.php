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
 * 节点统计数据
 *
 * @method array getISPCounterSet() 获取运营商统计信息列表
 * @method void setISPCounterSet(array $ISPCounterSet) 设置运营商统计信息列表
 * @method integer getProvinceNum() 获取省份数量
 * @method void setProvinceNum(integer $ProvinceNum) 设置省份数量
 * @method integer getCityNum() 获取城市数量
 * @method void setCityNum(integer $CityNum) 设置城市数量
 * @method integer getNodeNum() 获取节点数量
 * @method void setNodeNum(integer $NodeNum) 设置节点数量
 * @method integer getInstanceNum() 获取实例数量
 * @method void setInstanceNum(integer $InstanceNum) 设置实例数量
 */
class ModuleCounter extends AbstractModel
{
    /**
     * @var array 运营商统计信息列表
     */
    public $ISPCounterSet;

    /**
     * @var integer 省份数量
     */
    public $ProvinceNum;

    /**
     * @var integer 城市数量
     */
    public $CityNum;

    /**
     * @var integer 节点数量
     */
    public $NodeNum;

    /**
     * @var integer 实例数量
     */
    public $InstanceNum;

    /**
     * @param array $ISPCounterSet 运营商统计信息列表
     * @param integer $ProvinceNum 省份数量
     * @param integer $CityNum 城市数量
     * @param integer $NodeNum 节点数量
     * @param integer $InstanceNum 实例数量
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
        if (array_key_exists("ISPCounterSet",$param) and $param["ISPCounterSet"] !== null) {
            $this->ISPCounterSet = [];
            foreach ($param["ISPCounterSet"] as $key => $value){
                $obj = new ISPCounter();
                $obj->deserialize($value);
                array_push($this->ISPCounterSet, $obj);
            }
        }

        if (array_key_exists("ProvinceNum",$param) and $param["ProvinceNum"] !== null) {
            $this->ProvinceNum = $param["ProvinceNum"];
        }

        if (array_key_exists("CityNum",$param) and $param["CityNum"] !== null) {
            $this->CityNum = $param["CityNum"];
        }

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("InstanceNum",$param) and $param["InstanceNum"] !== null) {
            $this->InstanceNum = $param["InstanceNum"];
        }
    }
}
