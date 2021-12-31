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
namespace TencentCloud\Asr\V20190614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 录音文件识别、实时语音异步识别请求的返回数据
 *
 * @method integer getTaskId() 获取任务ID，可通过此ID在轮询接口获取识别状态与结果。注意：TaskId数据类型为uint64
 * @method void setTaskId(integer $TaskId) 设置任务ID，可通过此ID在轮询接口获取识别状态与结果。注意：TaskId数据类型为uint64
 */
class Task extends AbstractModel
{
    /**
     * @var integer 任务ID，可通过此ID在轮询接口获取识别状态与结果。注意：TaskId数据类型为uint64
     */
    public $TaskId;

    /**
     * @param integer $TaskId 任务ID，可通过此ID在轮询接口获取识别状态与结果。注意：TaskId数据类型为uint64
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
    }
}
