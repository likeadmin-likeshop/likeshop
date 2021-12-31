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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预留实例静态配置信息。预留实例当前只针对国际站白名单用户开放。
 *
 * @method string getType() 获取实例规格。
 * @method void setType(string $Type) 设置实例规格。
 * @method string getTypeName() 获取实例规格名称。
 * @method void setTypeName(string $TypeName) 设置实例规格名称。
 * @method integer getOrder() 获取优先级。
 * @method void setOrder(integer $Order) 设置优先级。
 * @method array getInstanceFamilies() 获取实例族信息列表。
 * @method void setInstanceFamilies(array $InstanceFamilies) 设置实例族信息列表。
 */
class ReservedInstanceConfigInfoItem extends AbstractModel
{
    /**
     * @var string 实例规格。
     */
    public $Type;

    /**
     * @var string 实例规格名称。
     */
    public $TypeName;

    /**
     * @var integer 优先级。
     */
    public $Order;

    /**
     * @var array 实例族信息列表。
     */
    public $InstanceFamilies;

    /**
     * @param string $Type 实例规格。
     * @param string $TypeName 实例规格名称。
     * @param integer $Order 优先级。
     * @param array $InstanceFamilies 实例族信息列表。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("InstanceFamilies",$param) and $param["InstanceFamilies"] !== null) {
            $this->InstanceFamilies = [];
            foreach ($param["InstanceFamilies"] as $key => $value){
                $obj = new ReservedInstanceFamilyItem();
                $obj->deserialize($value);
                array_push($this->InstanceFamilies, $obj);
            }
        }
    }
}
