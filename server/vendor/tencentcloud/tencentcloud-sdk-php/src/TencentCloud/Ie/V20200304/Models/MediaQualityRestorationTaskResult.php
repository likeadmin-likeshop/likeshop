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
namespace TencentCloud\Ie\V20200304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 画质重生任务结果
 *
 * @method string getTaskId() 获取画质重生任务ID
 * @method void setTaskId(string $TaskId) 设置画质重生任务ID
 * @method array getSubTaskResult() 获取画质重生处理后文件的详细信息。
 * @method void setSubTaskResult(array $SubTaskResult) 设置画质重生处理后文件的详细信息。
 */
class MediaQualityRestorationTaskResult extends AbstractModel
{
    /**
     * @var string 画质重生任务ID
     */
    public $TaskId;

    /**
     * @var array 画质重生处理后文件的详细信息。
     */
    public $SubTaskResult;

    /**
     * @param string $TaskId 画质重生任务ID
     * @param array $SubTaskResult 画质重生处理后文件的详细信息。
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

        if (array_key_exists("SubTaskResult",$param) and $param["SubTaskResult"] !== null) {
            $this->SubTaskResult = [];
            foreach ($param["SubTaskResult"] as $key => $value){
                $obj = new SubTaskResultItem();
                $obj->deserialize($value);
                array_push($this->SubTaskResult, $obj);
            }
        }
    }
}
