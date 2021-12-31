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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BindAlarmPolicy请求参数结构体
 *
 * @method integer getTaskId() 获取拨测任务Id
 * @method void setTaskId(integer $TaskId) 设置拨测任务Id
 * @method integer getPolicyGroupId() 获取告警策略组Id
 * @method void setPolicyGroupId(integer $PolicyGroupId) 设置告警策略组Id
 * @method integer getIfBind() 获取是否绑定操作。非0 为绑定， 0 为 解绑。缺省表示 绑定。
 * @method void setIfBind(integer $IfBind) 设置是否绑定操作。非0 为绑定， 0 为 解绑。缺省表示 绑定。
 * @method string getTopicId() 获取告警主题Id
 * @method void setTopicId(string $TopicId) 设置告警主题Id
 */
class BindAlarmPolicyRequest extends AbstractModel
{
    /**
     * @var integer 拨测任务Id
     */
    public $TaskId;

    /**
     * @var integer 告警策略组Id
     */
    public $PolicyGroupId;

    /**
     * @var integer 是否绑定操作。非0 为绑定， 0 为 解绑。缺省表示 绑定。
     */
    public $IfBind;

    /**
     * @var string 告警主题Id
     */
    public $TopicId;

    /**
     * @param integer $TaskId 拨测任务Id
     * @param integer $PolicyGroupId 告警策略组Id
     * @param integer $IfBind 是否绑定操作。非0 为绑定， 0 为 解绑。缺省表示 绑定。
     * @param string $TopicId 告警主题Id
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

        if (array_key_exists("PolicyGroupId",$param) and $param["PolicyGroupId"] !== null) {
            $this->PolicyGroupId = $param["PolicyGroupId"];
        }

        if (array_key_exists("IfBind",$param) and $param["IfBind"] !== null) {
            $this->IfBind = $param["IfBind"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }
    }
}
