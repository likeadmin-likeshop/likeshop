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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 某天的统计数额
 *
 * @method string getDate() 获取日期。格式【YYYY-MM-DD】
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDate(string $Date) 设置日期。格式【YYYY-MM-DD】
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getSum() 获取统计数额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSum(float $Sum) 设置统计数额
注意：此字段可能返回 null，表示取不到有效值。
 */
class StatisticItem extends AbstractModel
{
    /**
     * @var string 日期。格式【YYYY-MM-DD】
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Date;

    /**
     * @var float 统计数额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sum;

    /**
     * @param string $Date 日期。格式【YYYY-MM-DD】
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Sum 统计数额
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
        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("Sum",$param) and $param["Sum"] !== null) {
            $this->Sum = $param["Sum"];
        }
    }
}
