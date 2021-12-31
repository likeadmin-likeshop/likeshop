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
namespace TencentCloud\Ecdn\V20191012\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 刷新任务日志详情
 *
 * @method string getTaskId() 获取刷新任务ID。
 * @method void setTaskId(string $TaskId) 设置刷新任务ID。
 * @method string getUrl() 获取刷新Url。
 * @method void setUrl(string $Url) 设置刷新Url。
 * @method string getStatus() 获取刷新任务状态，fail表示失败，done表示成功，process表示刷新中。
 * @method void setStatus(string $Status) 设置刷新任务状态，fail表示失败，done表示成功，process表示刷新中。
 * @method string getPurgeType() 获取刷新类型，url表示url刷新，path表示目录刷新。
 * @method void setPurgeType(string $PurgeType) 设置刷新类型，url表示url刷新，path表示目录刷新。
 * @method string getFlushType() 获取刷新资源方式，flush代表刷新更新资源，delete代表刷新全部资源。
 * @method void setFlushType(string $FlushType) 设置刷新资源方式，flush代表刷新更新资源，delete代表刷新全部资源。
 * @method string getCreateTime() 获取刷新任务提交时间
 * @method void setCreateTime(string $CreateTime) 设置刷新任务提交时间
 */
class PurgeTask extends AbstractModel
{
    /**
     * @var string 刷新任务ID。
     */
    public $TaskId;

    /**
     * @var string 刷新Url。
     */
    public $Url;

    /**
     * @var string 刷新任务状态，fail表示失败，done表示成功，process表示刷新中。
     */
    public $Status;

    /**
     * @var string 刷新类型，url表示url刷新，path表示目录刷新。
     */
    public $PurgeType;

    /**
     * @var string 刷新资源方式，flush代表刷新更新资源，delete代表刷新全部资源。
     */
    public $FlushType;

    /**
     * @var string 刷新任务提交时间
     */
    public $CreateTime;

    /**
     * @param string $TaskId 刷新任务ID。
     * @param string $Url 刷新Url。
     * @param string $Status 刷新任务状态，fail表示失败，done表示成功，process表示刷新中。
     * @param string $PurgeType 刷新类型，url表示url刷新，path表示目录刷新。
     * @param string $FlushType 刷新资源方式，flush代表刷新更新资源，delete代表刷新全部资源。
     * @param string $CreateTime 刷新任务提交时间
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

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PurgeType",$param) and $param["PurgeType"] !== null) {
            $this->PurgeType = $param["PurgeType"];
        }

        if (array_key_exists("FlushType",$param) and $param["FlushType"] !== null) {
            $this->FlushType = $param["FlushType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
