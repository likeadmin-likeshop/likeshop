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
namespace TencentCloud\Youmall\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 轨迹动线信息子结构
 *
 * @method string getZones() 获取区域动线，形如 x-x-x-x-x，其中 x 为区域 ID
 * @method void setZones(string $Zones) 设置区域动线，形如 x-x-x-x-x，其中 x 为区域 ID
 * @method integer getCount() 获取该动线出现次数
 * @method void setCount(integer $Count) 设置该动线出现次数
 * @method integer getAvgStayTime() 获取该动线平均停留时间（秒）
 * @method void setAvgStayTime(integer $AvgStayTime) 设置该动线平均停留时间（秒）
 */
class TrajectorySunData extends AbstractModel
{
    /**
     * @var string 区域动线，形如 x-x-x-x-x，其中 x 为区域 ID
     */
    public $Zones;

    /**
     * @var integer 该动线出现次数
     */
    public $Count;

    /**
     * @var integer 该动线平均停留时间（秒）
     */
    public $AvgStayTime;

    /**
     * @param string $Zones 区域动线，形如 x-x-x-x-x，其中 x 为区域 ID
     * @param integer $Count 该动线出现次数
     * @param integer $AvgStayTime 该动线平均停留时间（秒）
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
        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("AvgStayTime",$param) and $param["AvgStayTime"] !== null) {
            $this->AvgStayTime = $param["AvgStayTime"];
        }
    }
}
