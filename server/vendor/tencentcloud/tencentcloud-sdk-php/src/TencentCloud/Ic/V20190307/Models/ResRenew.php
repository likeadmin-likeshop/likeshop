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
namespace TencentCloud\Ic\V20190307\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云api 卡片续费
 *
 * @method array getOrderIds() 获取每一张续费卡片的订单ID数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrderIds(array $OrderIds) 设置每一张续费卡片的订单ID数组
注意：此字段可能返回 null，表示取不到有效值。
 */
class ResRenew extends AbstractModel
{
    /**
     * @var array 每一张续费卡片的订单ID数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrderIds;

    /**
     * @param array $OrderIds 每一张续费卡片的订单ID数组
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("OrderIds",$param) and $param["OrderIds"] !== null) {
            $this->OrderIds = $param["OrderIds"];
        }
    }
}
