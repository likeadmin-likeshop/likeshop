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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EnableRestProxy返回参数结构体
 *
 * @method integer getRestProxyStatus() 获取RestProxy的状态，0为关闭，1为开启中，2为开启，3为关闭中
 * @method void setRestProxyStatus(integer $RestProxyStatus) 设置RestProxy的状态，0为关闭，1为开启中，2为开启，3为关闭中
 * @method string getTaskId() 获取TaskId由 AppInstanceId-taskId 组成，以区分不同集群的任务
 * @method void setTaskId(string $TaskId) 设置TaskId由 AppInstanceId-taskId 组成，以区分不同集群的任务
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class EnableRestProxyResponse extends AbstractModel
{
    /**
     * @var integer RestProxy的状态，0为关闭，1为开启中，2为开启，3为关闭中
     */
    public $RestProxyStatus;

    /**
     * @var string TaskId由 AppInstanceId-taskId 组成，以区分不同集群的任务
     */
    public $TaskId;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $RestProxyStatus RestProxy的状态，0为关闭，1为开启中，2为开启，3为关闭中
     * @param string $TaskId TaskId由 AppInstanceId-taskId 组成，以区分不同集群的任务
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
        if (array_key_exists("RestProxyStatus",$param) and $param["RestProxyStatus"] !== null) {
            $this->RestProxyStatus = $param["RestProxyStatus"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
