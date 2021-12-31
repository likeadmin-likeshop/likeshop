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
namespace TencentCloud\Ie\V20200304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 质检结果项数组
 *
 * @method string getId() 获取异常类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置异常类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getQualityControlItems() 获取质检结果项
 * @method void setQualityControlItems(array $QualityControlItems) 设置质检结果项
 */
class QualityControlResultItems extends AbstractModel
{
    /**
     * @var string 异常类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var array 质检结果项
     */
    public $QualityControlItems;

    /**
     * @param string $Id 异常类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $QualityControlItems 质检结果项
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("QualityControlItems",$param) and $param["QualityControlItems"] !== null) {
            $this->QualityControlItems = [];
            foreach ($param["QualityControlItems"] as $key => $value){
                $obj = new QualityControlItem();
                $obj->deserialize($value);
                array_push($this->QualityControlItems, $obj);
            }
        }
    }
}
