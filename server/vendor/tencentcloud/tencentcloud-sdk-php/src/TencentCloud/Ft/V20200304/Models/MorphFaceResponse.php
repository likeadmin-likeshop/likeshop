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
namespace TencentCloud\Ft\V20200304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MorphFace返回参数结构体
 *
 * @method string getJobId() 获取人像渐变任务的Job id
 * @method void setJobId(string $JobId) 设置人像渐变任务的Job id
 * @method integer getEstimatedProcessTime() 获取预估处理时间，粒度为秒
 * @method void setEstimatedProcessTime(integer $EstimatedProcessTime) 设置预估处理时间，粒度为秒
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class MorphFaceResponse extends AbstractModel
{
    /**
     * @var string 人像渐变任务的Job id
     */
    public $JobId;

    /**
     * @var integer 预估处理时间，粒度为秒
     */
    public $EstimatedProcessTime;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $JobId 人像渐变任务的Job id
     * @param integer $EstimatedProcessTime 预估处理时间，粒度为秒
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("EstimatedProcessTime",$param) and $param["EstimatedProcessTime"] !== null) {
            $this->EstimatedProcessTime = $param["EstimatedProcessTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
