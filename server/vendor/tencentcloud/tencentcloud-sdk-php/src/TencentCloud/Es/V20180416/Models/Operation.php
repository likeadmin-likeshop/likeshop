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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ES集群操作详细信息
 *
 * @method integer getId() 获取操作唯一id
 * @method void setId(integer $Id) 设置操作唯一id
 * @method string getStartTime() 获取操作开始时间
 * @method void setStartTime(string $StartTime) 设置操作开始时间
 * @method string getType() 获取操作类型
 * @method void setType(string $Type) 设置操作类型
 * @method OperationDetail getDetail() 获取操作详情
 * @method void setDetail(OperationDetail $Detail) 设置操作详情
 * @method string getResult() 获取操作结果
 * @method void setResult(string $Result) 设置操作结果
 * @method array getTasks() 获取流程任务信息
 * @method void setTasks(array $Tasks) 设置流程任务信息
 * @method float getProgress() 获取操作进度
 * @method void setProgress(float $Progress) 设置操作进度
 */
class Operation extends AbstractModel
{
    /**
     * @var integer 操作唯一id
     */
    public $Id;

    /**
     * @var string 操作开始时间
     */
    public $StartTime;

    /**
     * @var string 操作类型
     */
    public $Type;

    /**
     * @var OperationDetail 操作详情
     */
    public $Detail;

    /**
     * @var string 操作结果
     */
    public $Result;

    /**
     * @var array 流程任务信息
     */
    public $Tasks;

    /**
     * @var float 操作进度
     */
    public $Progress;

    /**
     * @param integer $Id 操作唯一id
     * @param string $StartTime 操作开始时间
     * @param string $Type 操作类型
     * @param OperationDetail $Detail 操作详情
     * @param string $Result 操作结果
     * @param array $Tasks 流程任务信息
     * @param float $Progress 操作进度
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = new OperationDetail();
            $this->Detail->deserialize($param["Detail"]);
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new TaskDetail();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }
    }
}
