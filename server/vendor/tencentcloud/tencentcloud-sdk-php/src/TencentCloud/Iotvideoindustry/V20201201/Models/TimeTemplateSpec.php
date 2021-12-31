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
 * 在操作时间模板时，用于描述各个时间片段
 *
 * @method integer getDayofWeek() 获取一周中的周几
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDayofWeek(integer $DayofWeek) 设置一周中的周几
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBeginTime() 获取时间片段的开始时分。格式【HH:MM】
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBeginTime(string $BeginTime) 设置时间片段的开始时分。格式【HH:MM】
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取时间片段的结束时分。格式【HH:MM】
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置时间片段的结束时分。格式【HH:MM】
注意：此字段可能返回 null，表示取不到有效值。
 */
class TimeTemplateSpec extends AbstractModel
{
    /**
     * @var integer 一周中的周几
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DayofWeek;

    /**
     * @var string 时间片段的开始时分。格式【HH:MM】
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BeginTime;

    /**
     * @var string 时间片段的结束时分。格式【HH:MM】
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @param integer $DayofWeek 一周中的周几
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BeginTime 时间片段的开始时分。格式【HH:MM】
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 时间片段的结束时分。格式【HH:MM】
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
        if (array_key_exists("DayofWeek",$param) and $param["DayofWeek"] !== null) {
            $this->DayofWeek = $param["DayofWeek"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
