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
namespace TencentCloud\Tci\V20190318\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAttendanceResult返回参数结构体
 *
 * @method array getAbsenceSetInLibs() 获取缺失人员的ID列表(只针对请求中的libids字段)
 * @method void setAbsenceSetInLibs(array $AbsenceSetInLibs) 设置缺失人员的ID列表(只针对请求中的libids字段)
 * @method array getAttendanceSet() 获取确定出勤人员列表
 * @method void setAttendanceSet(array $AttendanceSet) 设置确定出勤人员列表
 * @method array getSuspectedSet() 获取疑似出勤人员列表
 * @method void setSuspectedSet(array $SuspectedSet) 设置疑似出勤人员列表
 * @method array getAbsenceSet() 获取缺失人员的ID列表(只针对请求中的personids字段)
 * @method void setAbsenceSet(array $AbsenceSet) 设置缺失人员的ID列表(只针对请求中的personids字段)
 * @method integer getProgress() 获取请求处理进度
 * @method void setProgress(integer $Progress) 设置请求处理进度
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAttendanceResultResponse extends AbstractModel
{
    /**
     * @var array 缺失人员的ID列表(只针对请求中的libids字段)
     */
    public $AbsenceSetInLibs;

    /**
     * @var array 确定出勤人员列表
     */
    public $AttendanceSet;

    /**
     * @var array 疑似出勤人员列表
     */
    public $SuspectedSet;

    /**
     * @var array 缺失人员的ID列表(只针对请求中的personids字段)
     */
    public $AbsenceSet;

    /**
     * @var integer 请求处理进度
     */
    public $Progress;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $AbsenceSetInLibs 缺失人员的ID列表(只针对请求中的libids字段)
     * @param array $AttendanceSet 确定出勤人员列表
     * @param array $SuspectedSet 疑似出勤人员列表
     * @param array $AbsenceSet 缺失人员的ID列表(只针对请求中的personids字段)
     * @param integer $Progress 请求处理进度
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("AbsenceSetInLibs",$param) and $param["AbsenceSetInLibs"] !== null) {
            $this->AbsenceSetInLibs = [];
            foreach ($param["AbsenceSetInLibs"] as $key => $value){
                $obj = new AbsenceInfo();
                $obj->deserialize($value);
                array_push($this->AbsenceSetInLibs, $obj);
            }
        }

        if (array_key_exists("AttendanceSet",$param) and $param["AttendanceSet"] !== null) {
            $this->AttendanceSet = [];
            foreach ($param["AttendanceSet"] as $key => $value){
                $obj = new AttendanceInfo();
                $obj->deserialize($value);
                array_push($this->AttendanceSet, $obj);
            }
        }

        if (array_key_exists("SuspectedSet",$param) and $param["SuspectedSet"] !== null) {
            $this->SuspectedSet = [];
            foreach ($param["SuspectedSet"] as $key => $value){
                $obj = new SuspectedInfo();
                $obj->deserialize($value);
                array_push($this->SuspectedSet, $obj);
            }
        }

        if (array_key_exists("AbsenceSet",$param) and $param["AbsenceSet"] !== null) {
            $this->AbsenceSet = $param["AbsenceSet"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
