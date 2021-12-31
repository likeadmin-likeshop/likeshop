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
namespace TencentCloud\Vm\V20200709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVideoModerationTask请求参数结构体
 *
 * @method string getBizType() 获取业务类型, 定义 模版策略，输出存储配置。如果没有BizType，可以先参考 【创建业务配置】接口进行创建
 * @method void setBizType(string $BizType) 设置业务类型, 定义 模版策略，输出存储配置。如果没有BizType，可以先参考 【创建业务配置】接口进行创建
 * @method string getType() 获取任务类型：可选VIDEO（点播视频），LIVE_VIDEO（直播视频）
 * @method void setType(string $Type) 设置任务类型：可选VIDEO（点播视频），LIVE_VIDEO（直播视频）
 * @method array getTasks() 获取输入的任务信息，最多可以同时创建10个任务
 * @method void setTasks(array $Tasks) 设置输入的任务信息，最多可以同时创建10个任务
 * @method string getSeed() 获取回调签名key，具体可以查看签名文档。
 * @method void setSeed(string $Seed) 设置回调签名key，具体可以查看签名文档。
 * @method string getCallbackUrl() 获取接收审核信息回调地址，如果设置，则审核过程中产生的违规音频片段和画面截帧发送此接口
 * @method void setCallbackUrl(string $CallbackUrl) 设置接收审核信息回调地址，如果设置，则审核过程中产生的违规音频片段和画面截帧发送此接口
 * @method integer getPriority() 获取审核排队优先级。当您有多个视频审核任务排队时，可以根据这个参数控制排队优先级。用于处理插队等逻辑。默认该参数为0
 * @method void setPriority(integer $Priority) 设置审核排队优先级。当您有多个视频审核任务排队时，可以根据这个参数控制排队优先级。用于处理插队等逻辑。默认该参数为0
 */
class CreateVideoModerationTaskRequest extends AbstractModel
{
    /**
     * @var string 业务类型, 定义 模版策略，输出存储配置。如果没有BizType，可以先参考 【创建业务配置】接口进行创建
     */
    public $BizType;

    /**
     * @var string 任务类型：可选VIDEO（点播视频），LIVE_VIDEO（直播视频）
     */
    public $Type;

    /**
     * @var array 输入的任务信息，最多可以同时创建10个任务
     */
    public $Tasks;

    /**
     * @var string 回调签名key，具体可以查看签名文档。
     */
    public $Seed;

    /**
     * @var string 接收审核信息回调地址，如果设置，则审核过程中产生的违规音频片段和画面截帧发送此接口
     */
    public $CallbackUrl;

    /**
     * @var integer 审核排队优先级。当您有多个视频审核任务排队时，可以根据这个参数控制排队优先级。用于处理插队等逻辑。默认该参数为0
     */
    public $Priority;

    /**
     * @param string $BizType 业务类型, 定义 模版策略，输出存储配置。如果没有BizType，可以先参考 【创建业务配置】接口进行创建
     * @param string $Type 任务类型：可选VIDEO（点播视频），LIVE_VIDEO（直播视频）
     * @param array $Tasks 输入的任务信息，最多可以同时创建10个任务
     * @param string $Seed 回调签名key，具体可以查看签名文档。
     * @param string $CallbackUrl 接收审核信息回调地址，如果设置，则审核过程中产生的违规音频片段和画面截帧发送此接口
     * @param integer $Priority 审核排队优先级。当您有多个视频审核任务排队时，可以根据这个参数控制排队优先级。用于处理插队等逻辑。默认该参数为0
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

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new TaskInput();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("Seed",$param) and $param["Seed"] !== null) {
            $this->Seed = $param["Seed"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }
    }
}
