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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGroup的返回
 *
 * @method integer getTotalCount() 获取计数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置计数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getGroupList() 获取GroupList
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupList(array $GroupList) 设置GroupList
注意：此字段可能返回 null，表示取不到有效值。
 */
class GroupResponse extends AbstractModel
{
    /**
     * @var integer 计数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var array GroupList
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupList;

    /**
     * @param integer $TotalCount 计数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $GroupList GroupList
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("GroupList",$param) and $param["GroupList"] !== null) {
            $this->GroupList = [];
            foreach ($param["GroupList"] as $key => $value){
                $obj = new DescribeGroup();
                $obj->deserialize($value);
                array_push($this->GroupList, $obj);
            }
        }
    }
}
