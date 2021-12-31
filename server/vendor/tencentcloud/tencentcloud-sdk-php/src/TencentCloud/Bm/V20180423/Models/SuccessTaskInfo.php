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
namespace TencentCloud\Bm\V20180423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 成功运行的自定义脚本信息
 *
 * @method string getInstanceId() 获取运行脚本的设备ID
 * @method void setInstanceId(string $InstanceId) 设置运行脚本的设备ID
 * @method integer getTaskId() 获取黑石异步任务ID
 * @method void setTaskId(integer $TaskId) 设置黑石异步任务ID
 * @method string getCmdTaskId() 获取黑石自定义脚本运行任务ID
 * @method void setCmdTaskId(string $CmdTaskId) 设置黑石自定义脚本运行任务ID
 */
class SuccessTaskInfo extends AbstractModel
{
    /**
     * @var string 运行脚本的设备ID
     */
    public $InstanceId;

    /**
     * @var integer 黑石异步任务ID
     */
    public $TaskId;

    /**
     * @var string 黑石自定义脚本运行任务ID
     */
    public $CmdTaskId;

    /**
     * @param string $InstanceId 运行脚本的设备ID
     * @param integer $TaskId 黑石异步任务ID
     * @param string $CmdTaskId 黑石自定义脚本运行任务ID
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("CmdTaskId",$param) and $param["CmdTaskId"] !== null) {
            $this->CmdTaskId = $param["CmdTaskId"];
        }
    }
}
