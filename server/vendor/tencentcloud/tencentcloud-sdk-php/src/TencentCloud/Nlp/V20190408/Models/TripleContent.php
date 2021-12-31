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
namespace TencentCloud\Nlp\V20190408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 三元组查询返回的元记录
 *
 * @method integer getPopular() 获取实体流行度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPopular(integer $Popular) 设置实体流行度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取实体名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置实体名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOrder() 获取实体order
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrder(integer $Order) 设置实体order
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getId() 获取实体id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置实体id
注意：此字段可能返回 null，表示取不到有效值。
 */
class TripleContent extends AbstractModel
{
    /**
     * @var integer 实体流行度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Popular;

    /**
     * @var string 实体名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 实体order
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Order;

    /**
     * @var string 实体id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @param integer $Popular 实体流行度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 实体名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Order 实体order
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Id 实体id
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
        if (array_key_exists("Popular",$param) and $param["Popular"] !== null) {
            $this->Popular = $param["Popular"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
