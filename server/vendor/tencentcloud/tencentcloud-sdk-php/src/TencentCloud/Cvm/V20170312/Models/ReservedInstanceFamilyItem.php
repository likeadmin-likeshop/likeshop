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
 * 预留实例相关实例族信息。预留实例当前只针对国际站白名单用户开放。
 *
 * @method string getInstanceFamily() 获取实例族。
 * @method void setInstanceFamily(string $InstanceFamily) 设置实例族。
 * @method integer getOrder() 获取优先级。
 * @method void setOrder(integer $Order) 设置优先级。
 * @method array getInstanceTypes() 获取实例类型信息列表。
 * @method void setInstanceTypes(array $InstanceTypes) 设置实例类型信息列表。
 */
class ReservedInstanceFamilyItem extends AbstractModel
{
    /**
     * @var string 实例族。
     */
    public $InstanceFamily;

    /**
     * @var integer 优先级。
     */
    public $Order;

    /**
     * @var array 实例类型信息列表。
     */
    public $InstanceTypes;

    /**
     * @param string $InstanceFamily 实例族。
     * @param integer $Order 优先级。
     * @param array $InstanceTypes 实例类型信息列表。
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
        if (array_key_exists("InstanceFamily",$param) and $param["InstanceFamily"] !== null) {
            $this->InstanceFamily = $param["InstanceFamily"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("InstanceTypes",$param) and $param["InstanceTypes"] !== null) {
            $this->InstanceTypes = [];
            foreach ($param["InstanceTypes"] as $key => $value){
                $obj = new ReservedInstanceTypeItem();
                $obj->deserialize($value);
                array_push($this->InstanceTypes, $obj);
            }
        }
    }
}
