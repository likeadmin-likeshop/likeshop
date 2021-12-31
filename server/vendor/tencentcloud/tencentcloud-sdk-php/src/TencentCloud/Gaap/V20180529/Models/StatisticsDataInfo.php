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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 统计数据信息
 *
 * @method integer getTime() 获取对应的时间点
 * @method void setTime(integer $Time) 设置对应的时间点
 * @method float getData() 获取统计数据值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setData(float $Data) 设置统计数据值
注意：此字段可能返回 null，表示取不到有效值。
 */
class StatisticsDataInfo extends AbstractModel
{
    /**
     * @var integer 对应的时间点
     */
    public $Time;

    /**
     * @var float 统计数据值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Data;

    /**
     * @param integer $Time 对应的时间点
     * @param float $Data 统计数据值
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }
    }
}
