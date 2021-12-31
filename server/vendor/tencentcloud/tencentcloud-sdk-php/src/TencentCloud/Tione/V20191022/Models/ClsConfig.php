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
namespace TencentCloud\Tione\V20191022\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 接入CLS服务的配置
 *
 * @method string getType() 获取接入类型，可选项为free、customer
 * @method void setType(string $Type) 设置接入类型，可选项为free、customer
 * @method string getLogSetId() 获取自定义CLS的日志集ID，只有当Type为customer时生效
 * @method void setLogSetId(string $LogSetId) 设置自定义CLS的日志集ID，只有当Type为customer时生效
 * @method string getTopicId() 获取自定义CLS的日志主题ID，只有当Type为customer时生效
 * @method void setTopicId(string $TopicId) 设置自定义CLS的日志主题ID，只有当Type为customer时生效
 */
class ClsConfig extends AbstractModel
{
    /**
     * @var string 接入类型，可选项为free、customer
     */
    public $Type;

    /**
     * @var string 自定义CLS的日志集ID，只有当Type为customer时生效
     */
    public $LogSetId;

    /**
     * @var string 自定义CLS的日志主题ID，只有当Type为customer时生效
     */
    public $TopicId;

    /**
     * @param string $Type 接入类型，可选项为free、customer
     * @param string $LogSetId 自定义CLS的日志集ID，只有当Type为customer时生效
     * @param string $TopicId 自定义CLS的日志主题ID，只有当Type为customer时生效
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("LogSetId",$param) and $param["LogSetId"] !== null) {
            $this->LogSetId = $param["LogSetId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }
    }
}
