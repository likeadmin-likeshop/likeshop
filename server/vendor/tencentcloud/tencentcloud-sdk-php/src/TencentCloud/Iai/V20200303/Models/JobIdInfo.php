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
namespace TencentCloud\Iai\V20200303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查重任务信息
 *
 * @method string getJobId() 获取查重任务ID，用于查询、获取查重的进度和结果。
 * @method void setJobId(string $JobId) 设置查重任务ID，用于查询、获取查重的进度和结果。
 * @method integer getStartTime() 获取查重起始时间。 
StartTime的值是自 Unix 纪元时间到Group创建时间的毫秒数。 
Unix 纪元时间是 1970 年 1 月 1 日星期四，协调世界时 (UTC) 00:00:00。 
有关更多信息，请参阅 Unix 时间。
 * @method void setStartTime(integer $StartTime) 设置查重起始时间。 
StartTime的值是自 Unix 纪元时间到Group创建时间的毫秒数。 
Unix 纪元时间是 1970 年 1 月 1 日星期四，协调世界时 (UTC) 00:00:00。 
有关更多信息，请参阅 Unix 时间。
 * @method integer getJobStatus() 获取查重任务是否已完成。0: 成功 1: 未完成 2: 失败
 * @method void setJobStatus(integer $JobStatus) 设置查重任务是否已完成。0: 成功 1: 未完成 2: 失败
 */
class JobIdInfo extends AbstractModel
{
    /**
     * @var string 查重任务ID，用于查询、获取查重的进度和结果。
     */
    public $JobId;

    /**
     * @var integer 查重起始时间。 
StartTime的值是自 Unix 纪元时间到Group创建时间的毫秒数。 
Unix 纪元时间是 1970 年 1 月 1 日星期四，协调世界时 (UTC) 00:00:00。 
有关更多信息，请参阅 Unix 时间。
     */
    public $StartTime;

    /**
     * @var integer 查重任务是否已完成。0: 成功 1: 未完成 2: 失败
     */
    public $JobStatus;

    /**
     * @param string $JobId 查重任务ID，用于查询、获取查重的进度和结果。
     * @param integer $StartTime 查重起始时间。 
StartTime的值是自 Unix 纪元时间到Group创建时间的毫秒数。 
Unix 纪元时间是 1970 年 1 月 1 日星期四，协调世界时 (UTC) 00:00:00。 
有关更多信息，请参阅 Unix 时间。
     * @param integer $JobStatus 查重任务是否已完成。0: 成功 1: 未完成 2: 失败
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("JobStatus",$param) and $param["JobStatus"] !== null) {
            $this->JobStatus = $param["JobStatus"];
        }
    }
}
