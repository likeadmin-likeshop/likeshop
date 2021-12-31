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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 回档任务详情
 *
 * @method string getInfo() 获取任务执行信息描述。
 * @method void setInfo(string $Info) 设置任务执行信息描述。
 * @method string getStatus() 获取任务执行结果。可能的取值：INITIAL - 初始化，RUNNING - 运行中，SUCCESS - 执行成功，FAILED - 执行失败，KILLED - 已终止，REMOVED - 已删除，PAUSED - 终止中。
 * @method void setStatus(string $Status) 设置任务执行结果。可能的取值：INITIAL - 初始化，RUNNING - 运行中，SUCCESS - 执行成功，FAILED - 执行失败，KILLED - 已终止，REMOVED - 已删除，PAUSED - 终止中。
 * @method integer getProgress() 获取任务执行进度。取值范围为[0, 100]。
 * @method void setProgress(integer $Progress) 设置任务执行进度。取值范围为[0, 100]。
 * @method string getStartTime() 获取任务开始时间。
 * @method void setStartTime(string $StartTime) 设置任务开始时间。
 * @method string getEndTime() 获取任务结束时间。
 * @method void setEndTime(string $EndTime) 设置任务结束时间。
 * @method array getDetail() 获取回档任务详情。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetail(array $Detail) 设置回档任务详情。
注意：此字段可能返回 null，表示取不到有效值。
 */
class RollbackTask extends AbstractModel
{
    /**
     * @var string 任务执行信息描述。
     */
    public $Info;

    /**
     * @var string 任务执行结果。可能的取值：INITIAL - 初始化，RUNNING - 运行中，SUCCESS - 执行成功，FAILED - 执行失败，KILLED - 已终止，REMOVED - 已删除，PAUSED - 终止中。
     */
    public $Status;

    /**
     * @var integer 任务执行进度。取值范围为[0, 100]。
     */
    public $Progress;

    /**
     * @var string 任务开始时间。
     */
    public $StartTime;

    /**
     * @var string 任务结束时间。
     */
    public $EndTime;

    /**
     * @var array 回档任务详情。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Detail;

    /**
     * @param string $Info 任务执行信息描述。
     * @param string $Status 任务执行结果。可能的取值：INITIAL - 初始化，RUNNING - 运行中，SUCCESS - 执行成功，FAILED - 执行失败，KILLED - 已终止，REMOVED - 已删除，PAUSED - 终止中。
     * @param integer $Progress 任务执行进度。取值范围为[0, 100]。
     * @param string $StartTime 任务开始时间。
     * @param string $EndTime 任务结束时间。
     * @param array $Detail 回档任务详情。
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
        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = $param["Info"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = [];
            foreach ($param["Detail"] as $key => $value){
                $obj = new RollbackInstancesInfo();
                $obj->deserialize($value);
                array_push($this->Detail, $obj);
            }
        }
    }
}
