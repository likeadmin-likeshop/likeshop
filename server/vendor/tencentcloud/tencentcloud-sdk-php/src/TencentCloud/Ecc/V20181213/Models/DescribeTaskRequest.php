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
namespace TencentCloud\Ecc\V20181213\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTask请求参数结构体
 *
 * @method string getTaskId() 获取任务 ID
 * @method void setTaskId(string $TaskId) 设置任务 ID
 * @method string getEccAppid() 获取业务应用ID，与账号应用APPID无关，是用来方便客户管理服务的参数（暂时无需传入）。
 * @method void setEccAppid(string $EccAppid) 设置业务应用ID，与账号应用APPID无关，是用来方便客户管理服务的参数（暂时无需传入）。
 */
class DescribeTaskRequest extends AbstractModel
{
    /**
     * @var string 任务 ID
     */
    public $TaskId;

    /**
     * @var string 业务应用ID，与账号应用APPID无关，是用来方便客户管理服务的参数（暂时无需传入）。
     */
    public $EccAppid;

    /**
     * @param string $TaskId 任务 ID
     * @param string $EccAppid 业务应用ID，与账号应用APPID无关，是用来方便客户管理服务的参数（暂时无需传入）。
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

        if (array_key_exists("EccAppid",$param) and $param["EccAppid"] !== null) {
            $this->EccAppid = $param["EccAppid"];
        }
    }
}
