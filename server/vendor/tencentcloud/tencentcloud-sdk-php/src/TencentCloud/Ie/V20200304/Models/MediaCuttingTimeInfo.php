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
 * 编辑处理/剪切任务/时间信息
 *
 * @method string getType() 获取时间类型，可选值：
PointSet：时间点集合；
IntervalPoint：周期采样点；
SectionSet：时间片段集合。
 * @method void setType(string $Type) 设置时间类型，可选值：
PointSet：时间点集合；
IntervalPoint：周期采样点；
SectionSet：时间片段集合。
 * @method array getPointSet() 获取截取时间点集合，单位毫秒，Type=PointSet时必选。
 * @method void setPointSet(array $PointSet) 设置截取时间点集合，单位毫秒，Type=PointSet时必选。
 * @method IntervalTime getIntervalPoint() 获取周期采样点信息，Type=IntervalPoint时必选。
 * @method void setIntervalPoint(IntervalTime $IntervalPoint) 设置周期采样点信息，Type=IntervalPoint时必选。
 * @method array getSectionSet() 获取时间区间集合信息，Type=SectionSet时必选。
 * @method void setSectionSet(array $SectionSet) 设置时间区间集合信息，Type=SectionSet时必选。
 */
class MediaCuttingTimeInfo extends AbstractModel
{
    /**
     * @var string 时间类型，可选值：
PointSet：时间点集合；
IntervalPoint：周期采样点；
SectionSet：时间片段集合。
     */
    public $Type;

    /**
     * @var array 截取时间点集合，单位毫秒，Type=PointSet时必选。
     */
    public $PointSet;

    /**
     * @var IntervalTime 周期采样点信息，Type=IntervalPoint时必选。
     */
    public $IntervalPoint;

    /**
     * @var array 时间区间集合信息，Type=SectionSet时必选。
     */
    public $SectionSet;

    /**
     * @param string $Type 时间类型，可选值：
PointSet：时间点集合；
IntervalPoint：周期采样点；
SectionSet：时间片段集合。
     * @param array $PointSet 截取时间点集合，单位毫秒，Type=PointSet时必选。
     * @param IntervalTime $IntervalPoint 周期采样点信息，Type=IntervalPoint时必选。
     * @param array $SectionSet 时间区间集合信息，Type=SectionSet时必选。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("PointSet",$param) and $param["PointSet"] !== null) {
            $this->PointSet = $param["PointSet"];
        }

        if (array_key_exists("IntervalPoint",$param) and $param["IntervalPoint"] !== null) {
            $this->IntervalPoint = new IntervalTime();
            $this->IntervalPoint->deserialize($param["IntervalPoint"]);
        }

        if (array_key_exists("SectionSet",$param) and $param["SectionSet"] !== null) {
            $this->SectionSet = [];
            foreach ($param["SectionSet"] as $key => $value){
                $obj = new SectionTime();
                $obj->deserialize($value);
                array_push($this->SectionSet, $obj);
            }
        }
    }
}
