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
 * CreateAudioModerationTask请求参数结构体
 *
 * @method array getTasks() 获取输入的任务信息，最多可以同时创建10个任务
 * @method void setTasks(array $Tasks) 设置输入的任务信息，最多可以同时创建10个任务
 * @method string getBizType() 获取默认为：default，客户可以在音频审核控制台配置自己的BizType
 * @method void setBizType(string $BizType) 设置默认为：default，客户可以在音频审核控制台配置自己的BizType
 * @method string getType() 获取审核类型，这里可选：AUDIO (点播音频)和 LIVE_AUDIO（直播音频），默认为 AUDIIO
 * @method void setType(string $Type) 设置审核类型，这里可选：AUDIO (点播音频)和 LIVE_AUDIO（直播音频），默认为 AUDIIO
 * @method string getSeed() 获取（可选）回调签名key，具体可以查看 回调签名示例
 * @method void setSeed(string $Seed) 设置（可选）回调签名key，具体可以查看 回调签名示例
 * @method string getCallbackUrl() 获取接收审核信息回调地址，如果设置，则审核过程中产生的违规音频片段和画面截帧发送此接口
 * @method void setCallbackUrl(string $CallbackUrl) 设置接收审核信息回调地址，如果设置，则审核过程中产生的违规音频片段和画面截帧发送此接口
 */
class CreateAudioModerationTaskRequest extends AbstractModel
{
    /**
     * @var array 输入的任务信息，最多可以同时创建10个任务
     */
    public $Tasks;

    /**
     * @var string 默认为：default，客户可以在音频审核控制台配置自己的BizType
     */
    public $BizType;

    /**
     * @var string 审核类型，这里可选：AUDIO (点播音频)和 LIVE_AUDIO（直播音频），默认为 AUDIIO
     */
    public $Type;

    /**
     * @var string （可选）回调签名key，具体可以查看 回调签名示例
     */
    public $Seed;

    /**
     * @var string 接收审核信息回调地址，如果设置，则审核过程中产生的违规音频片段和画面截帧发送此接口
     */
    public $CallbackUrl;

    /**
     * @param array $Tasks 输入的任务信息，最多可以同时创建10个任务
     * @param string $BizType 默认为：default，客户可以在音频审核控制台配置自己的BizType
     * @param string $Type 审核类型，这里可选：AUDIO (点播音频)和 LIVE_AUDIO（直播音频），默认为 AUDIIO
     * @param string $Seed （可选）回调签名key，具体可以查看 回调签名示例
     * @param string $CallbackUrl 接收审核信息回调地址，如果设置，则审核过程中产生的违规音频片段和画面截帧发送此接口
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
        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new TaskInput();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Seed",$param) and $param["Seed"] !== null) {
            $this->Seed = $param["Seed"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }
    }
}
