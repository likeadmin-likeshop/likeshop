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
 * 实时统计数据
 *
 * @method string getLogTime() 获取统计时间
 * @method void setLogTime(string $LogTime) 设置统计时间
 * @method integer getTaskId() 获取任务ID
 * @method void setTaskId(integer $TaskId) 设置任务ID
 * @method float getAvailRatio() 获取实时可用率
 * @method void setAvailRatio(float $AvailRatio) 设置实时可用率
 * @method float getReponseTime() 获取实时响应时间
 * @method void setReponseTime(float $ReponseTime) 设置实时响应时间
 */
class ResultSummary extends AbstractModel
{
    /**
     * @var string 统计时间
     */
    public $LogTime;

    /**
     * @var integer 任务ID
     */
    public $TaskId;

    /**
     * @var float 实时可用率
     */
    public $AvailRatio;

    /**
     * @var float 实时响应时间
     */
    public $ReponseTime;

    /**
     * @param string $LogTime 统计时间
     * @param integer $TaskId 任务ID
     * @param float $AvailRatio 实时可用率
     * @param float $ReponseTime 实时响应时间
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
        if (array_key_exists("LogTime",$param) and $param["LogTime"] !== null) {
            $this->LogTime = $param["LogTime"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("AvailRatio",$param) and $param["AvailRatio"] !== null) {
            $this->AvailRatio = $param["AvailRatio"];
        }

        if (array_key_exists("ReponseTime",$param) and $param["ReponseTime"] !== null) {
            $this->ReponseTime = $param["ReponseTime"];
        }
    }
}
