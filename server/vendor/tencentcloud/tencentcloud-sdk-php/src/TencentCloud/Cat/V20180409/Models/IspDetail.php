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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 运营商可用率
 *
 * @method string getIspName() 获取运营商名称
 * @method void setIspName(string $IspName) 设置运营商名称
 * @method float getAvailRatio() 获取可用率
 * @method void setAvailRatio(float $AvailRatio) 设置可用率
 * @method float getAvgTime() 获取平均耗时
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvgTime(float $AvgTime) 设置平均耗时
注意：此字段可能返回 null，表示取不到有效值。
 */
class IspDetail extends AbstractModel
{
    /**
     * @var string 运营商名称
     */
    public $IspName;

    /**
     * @var float 可用率
     */
    public $AvailRatio;

    /**
     * @var float 平均耗时
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AvgTime;

    /**
     * @param string $IspName 运营商名称
     * @param float $AvailRatio 可用率
     * @param float $AvgTime 平均耗时
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
        if (array_key_exists("IspName",$param) and $param["IspName"] !== null) {
            $this->IspName = $param["IspName"];
        }

        if (array_key_exists("AvailRatio",$param) and $param["AvailRatio"] !== null) {
            $this->AvailRatio = $param["AvailRatio"];
        }

        if (array_key_exists("AvgTime",$param) and $param["AvgTime"] !== null) {
            $this->AvgTime = $param["AvgTime"];
        }
    }
}
