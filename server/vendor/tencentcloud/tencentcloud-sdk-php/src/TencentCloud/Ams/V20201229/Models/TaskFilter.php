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
namespace TencentCloud\Ams\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务筛选器
 *
 * @method string getBizType() 获取任务业务类型
 * @method void setBizType(string $BizType) 设置任务业务类型
 * @method string getType() 获取任务类型，可选：VIDEO，AUDIO， LIVE_VIDEO, LIVE_AUDIO
 * @method void setType(string $Type) 设置任务类型，可选：VIDEO，AUDIO， LIVE_VIDEO, LIVE_AUDIO
 * @method string getSuggestion() 获取建议，可选：Pass, Review,Block
 * @method void setSuggestion(string $Suggestion) 设置建议，可选：Pass, Review,Block
 * @method string getTaskStatus() 获取状态，可选：PENDING，RUNNING，ERROR，FINISH，CANCELLED
 * @method void setTaskStatus(string $TaskStatus) 设置状态，可选：PENDING，RUNNING，ERROR，FINISH，CANCELLED
 */
class TaskFilter extends AbstractModel
{
    /**
     * @var string 任务业务类型
     */
    public $BizType;

    /**
     * @var string 任务类型，可选：VIDEO，AUDIO， LIVE_VIDEO, LIVE_AUDIO
     */
    public $Type;

    /**
     * @var string 建议，可选：Pass, Review,Block
     */
    public $Suggestion;

    /**
     * @var string 状态，可选：PENDING，RUNNING，ERROR，FINISH，CANCELLED
     */
    public $TaskStatus;

    /**
     * @param string $BizType 任务业务类型
     * @param string $Type 任务类型，可选：VIDEO，AUDIO， LIVE_VIDEO, LIVE_AUDIO
     * @param string $Suggestion 建议，可选：Pass, Review,Block
     * @param string $TaskStatus 状态，可选：PENDING，RUNNING，ERROR，FINISH，CANCELLED
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
        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }
    }
}
