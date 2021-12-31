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
 * 运行商统计信息
 *
 * @method string getProviderName() 获取运营商名称
 * @method void setProviderName(string $ProviderName) 设置运营商名称
 * @method integer getProviderNodeNum() 获取节点数量
 * @method void setProviderNodeNum(integer $ProviderNodeNum) 设置节点数量
 * @method integer getProvederInstanceNum() 获取实例数量
 * @method void setProvederInstanceNum(integer $ProvederInstanceNum) 设置实例数量
 * @method array getZoneInstanceInfoSet() 获取Zone实例信息结构体数组
 * @method void setZoneInstanceInfoSet(array $ZoneInstanceInfoSet) 设置Zone实例信息结构体数组
 */
class ISPCounter extends AbstractModel
{
    /**
     * @var string 运营商名称
     */
    public $ProviderName;

    /**
     * @var integer 节点数量
     */
    public $ProviderNodeNum;

    /**
     * @var integer 实例数量
     */
    public $ProvederInstanceNum;

    /**
     * @var array Zone实例信息结构体数组
     */
    public $ZoneInstanceInfoSet;

    /**
     * @param string $ProviderName 运营商名称
     * @param integer $ProviderNodeNum 节点数量
     * @param integer $ProvederInstanceNum 实例数量
     * @param array $ZoneInstanceInfoSet Zone实例信息结构体数组
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
        if (array_key_exists("ProviderName",$param) and $param["ProviderName"] !== null) {
            $this->ProviderName = $param["ProviderName"];
        }

        if (array_key_exists("ProviderNodeNum",$param) and $param["ProviderNodeNum"] !== null) {
            $this->ProviderNodeNum = $param["ProviderNodeNum"];
        }

        if (array_key_exists("ProvederInstanceNum",$param) and $param["ProvederInstanceNum"] !== null) {
            $this->ProvederInstanceNum = $param["ProvederInstanceNum"];
        }

        if (array_key_exists("ZoneInstanceInfoSet",$param) and $param["ZoneInstanceInfoSet"] !== null) {
            $this->ZoneInstanceInfoSet = [];
            foreach ($param["ZoneInstanceInfoSet"] as $key => $value){
                $obj = new ZoneInstanceInfo();
                $obj->deserialize($value);
                array_push($this->ZoneInstanceInfoSet, $obj);
            }
        }
    }
}
