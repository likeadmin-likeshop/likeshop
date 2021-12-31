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
 * 卡片列表数据
 *
 * @method string getTotal() 获取卡片总数
 * @method void setTotal(string $Total) 设置卡片总数
 * @method array getList() 获取卡片列表信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setList(array $List) 设置卡片列表信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class CardList extends AbstractModel
{
    /**
     * @var string 卡片总数
     */
    public $Total;

    /**
     * @var array 卡片列表信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $List;

    /**
     * @param string $Total 卡片总数
     * @param array $List 卡片列表信息
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new CardInfo();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }
    }
}
