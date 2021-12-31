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
namespace TencentCloud\Ump\V20200918\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 多经点位告警信息
 *
 * @method integer getWarningType() 获取告警类型：
0: 无变化
1: 侵占
2: 消失
 * @method void setWarningType(integer $WarningType) 设置告警类型：
0: 无变化
1: 侵占
2: 消失
 * @method float getWarningAreaSize() 获取告警侵占或消失面积
 * @method void setWarningAreaSize(float $WarningAreaSize) 设置告警侵占或消失面积
 * @method Point getWarningLocation() 获取告警侵占或消失坐标
 * @method void setWarningLocation(Point $WarningLocation) 设置告警侵占或消失坐标
 * @method array getWarningAreaContour() 获取告警侵占或消失轮廓
 * @method void setWarningAreaContour(array $WarningAreaContour) 设置告警侵占或消失轮廓
 */
class MultiBizWarningInfo extends AbstractModel
{
    /**
     * @var integer 告警类型：
0: 无变化
1: 侵占
2: 消失
     */
    public $WarningType;

    /**
     * @var float 告警侵占或消失面积
     */
    public $WarningAreaSize;

    /**
     * @var Point 告警侵占或消失坐标
     */
    public $WarningLocation;

    /**
     * @var array 告警侵占或消失轮廓
     */
    public $WarningAreaContour;

    /**
     * @param integer $WarningType 告警类型：
0: 无变化
1: 侵占
2: 消失
     * @param float $WarningAreaSize 告警侵占或消失面积
     * @param Point $WarningLocation 告警侵占或消失坐标
     * @param array $WarningAreaContour 告警侵占或消失轮廓
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
        if (array_key_exists("WarningType",$param) and $param["WarningType"] !== null) {
            $this->WarningType = $param["WarningType"];
        }

        if (array_key_exists("WarningAreaSize",$param) and $param["WarningAreaSize"] !== null) {
            $this->WarningAreaSize = $param["WarningAreaSize"];
        }

        if (array_key_exists("WarningLocation",$param) and $param["WarningLocation"] !== null) {
            $this->WarningLocation = new Point();
            $this->WarningLocation->deserialize($param["WarningLocation"]);
        }

        if (array_key_exists("WarningAreaContour",$param) and $param["WarningAreaContour"] !== null) {
            $this->WarningAreaContour = [];
            foreach ($param["WarningAreaContour"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->WarningAreaContour, $obj);
            }
        }
    }
}
