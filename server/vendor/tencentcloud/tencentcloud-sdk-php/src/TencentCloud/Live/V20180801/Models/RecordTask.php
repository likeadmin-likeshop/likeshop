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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 录制任务
 *
 * @method string getTaskId() 获取录制任务ID。
 * @method void setTaskId(string $TaskId) 设置录制任务ID。
 * @method string getDomainName() 获取推流域名。
 * @method void setDomainName(string $DomainName) 设置推流域名。
 * @method string getAppName() 获取推流路径。
 * @method void setAppName(string $AppName) 设置推流路径。
 * @method string getStreamName() 获取流名称。
 * @method void setStreamName(string $StreamName) 设置流名称。
 * @method integer getStartTime() 获取任务开始时间，Unix时间戳。
 * @method void setStartTime(integer $StartTime) 设置任务开始时间，Unix时间戳。
 * @method integer getEndTime() 获取任务结束时间，Unix时间戳。
 * @method void setEndTime(integer $EndTime) 设置任务结束时间，Unix时间戳。
 * @method integer getTemplateId() 获取录制模板ID。
 * @method void setTemplateId(integer $TemplateId) 设置录制模板ID。
 * @method integer getStopped() 获取调用 StopRecordTask 停止任务时间，Unix时间戳。值为0表示未曾调用接口停止任务。
 * @method void setStopped(integer $Stopped) 设置调用 StopRecordTask 停止任务时间，Unix时间戳。值为0表示未曾调用接口停止任务。
 */
class RecordTask extends AbstractModel
{
    /**
     * @var string 录制任务ID。
     */
    public $TaskId;

    /**
     * @var string 推流域名。
     */
    public $DomainName;

    /**
     * @var string 推流路径。
     */
    public $AppName;

    /**
     * @var string 流名称。
     */
    public $StreamName;

    /**
     * @var integer 任务开始时间，Unix时间戳。
     */
    public $StartTime;

    /**
     * @var integer 任务结束时间，Unix时间戳。
     */
    public $EndTime;

    /**
     * @var integer 录制模板ID。
     */
    public $TemplateId;

    /**
     * @var integer 调用 StopRecordTask 停止任务时间，Unix时间戳。值为0表示未曾调用接口停止任务。
     */
    public $Stopped;

    /**
     * @param string $TaskId 录制任务ID。
     * @param string $DomainName 推流域名。
     * @param string $AppName 推流路径。
     * @param string $StreamName 流名称。
     * @param integer $StartTime 任务开始时间，Unix时间戳。
     * @param integer $EndTime 任务结束时间，Unix时间戳。
     * @param integer $TemplateId 录制模板ID。
     * @param integer $Stopped 调用 StopRecordTask 停止任务时间，Unix时间戳。值为0表示未曾调用接口停止任务。
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Stopped",$param) and $param["Stopped"] !== null) {
            $this->Stopped = $param["Stopped"];
        }
    }
}
