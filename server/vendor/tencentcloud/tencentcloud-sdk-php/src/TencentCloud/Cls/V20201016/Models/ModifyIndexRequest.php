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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyIndex请求参数结构体
 *
 * @method string getTopicId() 获取日志主题ID
 * @method void setTopicId(string $TopicId) 设置日志主题ID
 * @method boolean getStatus() 获取是否生效
 * @method void setStatus(boolean $Status) 设置是否生效
 * @method RuleInfo getRule() 获取索引规则，Rule和Effective两个必须有一个参数存在
 * @method void setRule(RuleInfo $Rule) 设置索引规则，Rule和Effective两个必须有一个参数存在
 */
class ModifyIndexRequest extends AbstractModel
{
    /**
     * @var string 日志主题ID
     */
    public $TopicId;

    /**
     * @var boolean 是否生效
     */
    public $Status;

    /**
     * @var RuleInfo 索引规则，Rule和Effective两个必须有一个参数存在
     */
    public $Rule;

    /**
     * @param string $TopicId 日志主题ID
     * @param boolean $Status 是否生效
     * @param RuleInfo $Rule 索引规则，Rule和Effective两个必须有一个参数存在
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = new RuleInfo();
            $this->Rule->deserialize($param["Rule"]);
        }
    }
}
