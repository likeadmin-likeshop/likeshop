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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserTasks请求参数结构体
 *
 * @method array getStatuses() 获取任务的状态列表。0-任务启动中；1-任务运行中；2-任务成功；3-任务失败
 * @method void setStatuses(array $Statuses) 设置任务的状态列表。0-任务启动中；1-任务运行中；2-任务成功；3-任务失败
 * @method array getInstanceIds() 获取实例ID列表
 * @method void setInstanceIds(array $InstanceIds) 设置实例ID列表
 * @method array getFlowTypes() 获取任务类型列表，当前支持的任务类型有：0-回档任务；1-创建实例任务；2-扩容任务；3-迁移任务；4-删除实例任务；5-重启任务
 * @method void setFlowTypes(array $FlowTypes) 设置任务类型列表，当前支持的任务类型有：0-回档任务；1-创建实例任务；2-扩容任务；3-迁移任务；4-删除实例任务；5-重启任务
 * @method string getStartTime() 获取任务的创建时间
 * @method void setStartTime(string $StartTime) 设置任务的创建时间
 * @method string getEndTime() 获取任务的结束时间
 * @method void setEndTime(string $EndTime) 设置任务的结束时间
 * @method array getUTaskIds() 获取任务ID的数组
 * @method void setUTaskIds(array $UTaskIds) 设置任务ID的数组
 * @method integer getLimit() 获取每次最多返回多少条任务，取值范围为(0,100]，不传的话默认值为20
 * @method void setLimit(integer $Limit) 设置每次最多返回多少条任务，取值范围为(0,100]，不传的话默认值为20
 * @method integer getOffset() 获取返回任务默认是按照创建时间降序排列，从偏移值Offset处开始返回
 * @method void setOffset(integer $Offset) 设置返回任务默认是按照创建时间降序排列，从偏移值Offset处开始返回
 */
class DescribeUserTasksRequest extends AbstractModel
{
    /**
     * @var array 任务的状态列表。0-任务启动中；1-任务运行中；2-任务成功；3-任务失败
     */
    public $Statuses;

    /**
     * @var array 实例ID列表
     */
    public $InstanceIds;

    /**
     * @var array 任务类型列表，当前支持的任务类型有：0-回档任务；1-创建实例任务；2-扩容任务；3-迁移任务；4-删除实例任务；5-重启任务
     */
    public $FlowTypes;

    /**
     * @var string 任务的创建时间
     */
    public $StartTime;

    /**
     * @var string 任务的结束时间
     */
    public $EndTime;

    /**
     * @var array 任务ID的数组
     */
    public $UTaskIds;

    /**
     * @var integer 每次最多返回多少条任务，取值范围为(0,100]，不传的话默认值为20
     */
    public $Limit;

    /**
     * @var integer 返回任务默认是按照创建时间降序排列，从偏移值Offset处开始返回
     */
    public $Offset;

    /**
     * @param array $Statuses 任务的状态列表。0-任务启动中；1-任务运行中；2-任务成功；3-任务失败
     * @param array $InstanceIds 实例ID列表
     * @param array $FlowTypes 任务类型列表，当前支持的任务类型有：0-回档任务；1-创建实例任务；2-扩容任务；3-迁移任务；4-删除实例任务；5-重启任务
     * @param string $StartTime 任务的创建时间
     * @param string $EndTime 任务的结束时间
     * @param array $UTaskIds 任务ID的数组
     * @param integer $Limit 每次最多返回多少条任务，取值范围为(0,100]，不传的话默认值为20
     * @param integer $Offset 返回任务默认是按照创建时间降序排列，从偏移值Offset处开始返回
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
        if (array_key_exists("Statuses",$param) and $param["Statuses"] !== null) {
            $this->Statuses = $param["Statuses"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("FlowTypes",$param) and $param["FlowTypes"] !== null) {
            $this->FlowTypes = $param["FlowTypes"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("UTaskIds",$param) and $param["UTaskIds"] !== null) {
            $this->UTaskIds = $param["UTaskIds"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
