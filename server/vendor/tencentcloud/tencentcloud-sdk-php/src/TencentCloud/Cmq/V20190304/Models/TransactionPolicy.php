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
namespace TencentCloud\Cmq\V20190304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TransactionPolicy
 *
 * @method integer getFirstQueryInterval() 获取第一次回查时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstQueryInterval(integer $FirstQueryInterval) 设置第一次回查时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxQueryCount() 获取最大查询次数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxQueryCount(integer $MaxQueryCount) 设置最大查询次数。
注意：此字段可能返回 null，表示取不到有效值。
 */
class TransactionPolicy extends AbstractModel
{
    /**
     * @var integer 第一次回查时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstQueryInterval;

    /**
     * @var integer 最大查询次数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxQueryCount;

    /**
     * @param integer $FirstQueryInterval 第一次回查时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxQueryCount 最大查询次数。
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
        if (array_key_exists("FirstQueryInterval",$param) and $param["FirstQueryInterval"] !== null) {
            $this->FirstQueryInterval = $param["FirstQueryInterval"];
        }

        if (array_key_exists("MaxQueryCount",$param) and $param["MaxQueryCount"] !== null) {
            $this->MaxQueryCount = $param["MaxQueryCount"];
        }
    }
}
