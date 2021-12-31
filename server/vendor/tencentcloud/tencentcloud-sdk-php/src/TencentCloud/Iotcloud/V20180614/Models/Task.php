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
namespace TencentCloud\Iotcloud\V20180614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务描述细节
 *
 * @method BatchUpdateShadow getUpdateShadowTask() 获取批量更新影子任务的描述细节，当 taskType 取值为 “UpdateShadow” 时，此字段必填。描述见下 BatchUpdateShadow
 * @method void setUpdateShadowTask(BatchUpdateShadow $UpdateShadowTask) 设置批量更新影子任务的描述细节，当 taskType 取值为 “UpdateShadow” 时，此字段必填。描述见下 BatchUpdateShadow
 * @method BatchPublishMessage getPublishMessageTask() 获取批量下发消息任务的描述细节，当 taskType 取值为 “PublishMessage” 时，此字段必填。描述见下 BatchPublishMessage
 * @method void setPublishMessageTask(BatchPublishMessage $PublishMessageTask) 设置批量下发消息任务的描述细节，当 taskType 取值为 “PublishMessage” 时，此字段必填。描述见下 BatchPublishMessage
 */
class Task extends AbstractModel
{
    /**
     * @var BatchUpdateShadow 批量更新影子任务的描述细节，当 taskType 取值为 “UpdateShadow” 时，此字段必填。描述见下 BatchUpdateShadow
     */
    public $UpdateShadowTask;

    /**
     * @var BatchPublishMessage 批量下发消息任务的描述细节，当 taskType 取值为 “PublishMessage” 时，此字段必填。描述见下 BatchPublishMessage
     */
    public $PublishMessageTask;

    /**
     * @param BatchUpdateShadow $UpdateShadowTask 批量更新影子任务的描述细节，当 taskType 取值为 “UpdateShadow” 时，此字段必填。描述见下 BatchUpdateShadow
     * @param BatchPublishMessage $PublishMessageTask 批量下发消息任务的描述细节，当 taskType 取值为 “PublishMessage” 时，此字段必填。描述见下 BatchPublishMessage
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
        if (array_key_exists("UpdateShadowTask",$param) and $param["UpdateShadowTask"] !== null) {
            $this->UpdateShadowTask = new BatchUpdateShadow();
            $this->UpdateShadowTask->deserialize($param["UpdateShadowTask"]);
        }

        if (array_key_exists("PublishMessageTask",$param) and $param["PublishMessageTask"] !== null) {
            $this->PublishMessageTask = new BatchPublishMessage();
            $this->PublishMessageTask->deserialize($param["PublishMessageTask"]);
        }
    }
}
