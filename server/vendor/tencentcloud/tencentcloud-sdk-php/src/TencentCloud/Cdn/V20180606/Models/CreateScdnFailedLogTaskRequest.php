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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateScdnFailedLogTask请求参数结构体
 *
 * @method string getTaskId() 获取重试失败任务的taskID
 * @method void setTaskId(string $TaskId) 设置重试失败任务的taskID
 * @method string getArea() 获取地域：mainland或overseas
 * @method void setArea(string $Area) 设置地域：mainland或overseas
 */
class CreateScdnFailedLogTaskRequest extends AbstractModel
{
    /**
     * @var string 重试失败任务的taskID
     */
    public $TaskId;

    /**
     * @var string 地域：mainland或overseas
     */
    public $Area;

    /**
     * @param string $TaskId 重试失败任务的taskID
     * @param string $Area 地域：mainland或overseas
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

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
