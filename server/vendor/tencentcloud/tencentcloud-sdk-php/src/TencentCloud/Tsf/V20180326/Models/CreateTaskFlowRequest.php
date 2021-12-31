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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTaskFlow请求参数结构体
 *
 * @method string getFlowName() 获取工作流名称
 * @method void setFlowName(string $FlowName) 设置工作流名称
 * @method TaskRule getTriggerRule() 获取触发方式
 * @method void setTriggerRule(TaskRule $TriggerRule) 设置触发方式
 * @method array getFlowEdges() 获取工作流任务节点列表
 * @method void setFlowEdges(array $FlowEdges) 设置工作流任务节点列表
 * @method integer getTimeOut() 获取工作流执行超时时间
 * @method void setTimeOut(integer $TimeOut) 设置工作流执行超时时间
 */
class CreateTaskFlowRequest extends AbstractModel
{
    /**
     * @var string 工作流名称
     */
    public $FlowName;

    /**
     * @var TaskRule 触发方式
     */
    public $TriggerRule;

    /**
     * @var array 工作流任务节点列表
     */
    public $FlowEdges;

    /**
     * @var integer 工作流执行超时时间
     */
    public $TimeOut;

    /**
     * @param string $FlowName 工作流名称
     * @param TaskRule $TriggerRule 触发方式
     * @param array $FlowEdges 工作流任务节点列表
     * @param integer $TimeOut 工作流执行超时时间
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
        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("TriggerRule",$param) and $param["TriggerRule"] !== null) {
            $this->TriggerRule = new TaskRule();
            $this->TriggerRule->deserialize($param["TriggerRule"]);
        }

        if (array_key_exists("FlowEdges",$param) and $param["FlowEdges"] !== null) {
            $this->FlowEdges = [];
            foreach ($param["FlowEdges"] as $key => $value){
                $obj = new TaskFlowEdge();
                $obj->deserialize($value);
                array_push($this->FlowEdges, $obj);
            }
        }

        if (array_key_exists("TimeOut",$param) and $param["TimeOut"] !== null) {
            $this->TimeOut = $param["TimeOut"];
        }
    }
}
