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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 作业
 *
 * @method array getTasks() 获取任务信息
 * @method void setTasks(array $Tasks) 设置任务信息
 * @method string getJobName() 获取作业名称
 * @method void setJobName(string $JobName) 设置作业名称
 * @method string getJobDescription() 获取作业描述
 * @method void setJobDescription(string $JobDescription) 设置作业描述
 * @method integer getPriority() 获取作业优先级，任务（Task）和任务实例（TaskInstance）会继承作业优先级
 * @method void setPriority(integer $Priority) 设置作业优先级，任务（Task）和任务实例（TaskInstance）会继承作业优先级
 * @method array getDependences() 获取依赖信息
 * @method void setDependences(array $Dependences) 设置依赖信息
 * @method array getNotifications() 获取通知信息
 * @method void setNotifications(array $Notifications) 设置通知信息
 * @method string getTaskExecutionDependOn() 获取对于存在依赖关系的任务中，后序任务执行对于前序任务的依赖条件。取值范围包括 PRE_TASK_SUCCEED，PRE_TASK_AT_LEAST_PARTLY_SUCCEED，PRE_TASK_FINISHED，默认值为PRE_TASK_SUCCEED。
 * @method void setTaskExecutionDependOn(string $TaskExecutionDependOn) 设置对于存在依赖关系的任务中，后序任务执行对于前序任务的依赖条件。取值范围包括 PRE_TASK_SUCCEED，PRE_TASK_AT_LEAST_PARTLY_SUCCEED，PRE_TASK_FINISHED，默认值为PRE_TASK_SUCCEED。
 * @method string getStateIfCreateCvmFailed() 获取表示创建 CVM 失败按照何种策略处理。取值范围包括 FAILED，RUNNABLE。FAILED 表示创建 CVM 失败按照一次执行失败处理，RUNNABLE 表示创建 CVM 失败按照继续等待处理。默认值为FAILED。StateIfCreateCvmFailed对于提交的指定计算环境的作业无效。
 * @method void setStateIfCreateCvmFailed(string $StateIfCreateCvmFailed) 设置表示创建 CVM 失败按照何种策略处理。取值范围包括 FAILED，RUNNABLE。FAILED 表示创建 CVM 失败按照一次执行失败处理，RUNNABLE 表示创建 CVM 失败按照继续等待处理。默认值为FAILED。StateIfCreateCvmFailed对于提交的指定计算环境的作业无效。
 * @method array getTags() 获取标签列表。通过指定该参数可以支持绑定标签到作业。每个作业最多绑定10个标签。
 * @method void setTags(array $Tags) 设置标签列表。通过指定该参数可以支持绑定标签到作业。每个作业最多绑定10个标签。
 */
class Job extends AbstractModel
{
    /**
     * @var array 任务信息
     */
    public $Tasks;

    /**
     * @var string 作业名称
     */
    public $JobName;

    /**
     * @var string 作业描述
     */
    public $JobDescription;

    /**
     * @var integer 作业优先级，任务（Task）和任务实例（TaskInstance）会继承作业优先级
     */
    public $Priority;

    /**
     * @var array 依赖信息
     */
    public $Dependences;

    /**
     * @var array 通知信息
     */
    public $Notifications;

    /**
     * @var string 对于存在依赖关系的任务中，后序任务执行对于前序任务的依赖条件。取值范围包括 PRE_TASK_SUCCEED，PRE_TASK_AT_LEAST_PARTLY_SUCCEED，PRE_TASK_FINISHED，默认值为PRE_TASK_SUCCEED。
     */
    public $TaskExecutionDependOn;

    /**
     * @var string 表示创建 CVM 失败按照何种策略处理。取值范围包括 FAILED，RUNNABLE。FAILED 表示创建 CVM 失败按照一次执行失败处理，RUNNABLE 表示创建 CVM 失败按照继续等待处理。默认值为FAILED。StateIfCreateCvmFailed对于提交的指定计算环境的作业无效。
     */
    public $StateIfCreateCvmFailed;

    /**
     * @var array 标签列表。通过指定该参数可以支持绑定标签到作业。每个作业最多绑定10个标签。
     */
    public $Tags;

    /**
     * @param array $Tasks 任务信息
     * @param string $JobName 作业名称
     * @param string $JobDescription 作业描述
     * @param integer $Priority 作业优先级，任务（Task）和任务实例（TaskInstance）会继承作业优先级
     * @param array $Dependences 依赖信息
     * @param array $Notifications 通知信息
     * @param string $TaskExecutionDependOn 对于存在依赖关系的任务中，后序任务执行对于前序任务的依赖条件。取值范围包括 PRE_TASK_SUCCEED，PRE_TASK_AT_LEAST_PARTLY_SUCCEED，PRE_TASK_FINISHED，默认值为PRE_TASK_SUCCEED。
     * @param string $StateIfCreateCvmFailed 表示创建 CVM 失败按照何种策略处理。取值范围包括 FAILED，RUNNABLE。FAILED 表示创建 CVM 失败按照一次执行失败处理，RUNNABLE 表示创建 CVM 失败按照继续等待处理。默认值为FAILED。StateIfCreateCvmFailed对于提交的指定计算环境的作业无效。
     * @param array $Tags 标签列表。通过指定该参数可以支持绑定标签到作业。每个作业最多绑定10个标签。
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
                $obj = new Task();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("JobDescription",$param) and $param["JobDescription"] !== null) {
            $this->JobDescription = $param["JobDescription"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Dependences",$param) and $param["Dependences"] !== null) {
            $this->Dependences = [];
            foreach ($param["Dependences"] as $key => $value){
                $obj = new Dependence();
                $obj->deserialize($value);
                array_push($this->Dependences, $obj);
            }
        }

        if (array_key_exists("Notifications",$param) and $param["Notifications"] !== null) {
            $this->Notifications = [];
            foreach ($param["Notifications"] as $key => $value){
                $obj = new Notification();
                $obj->deserialize($value);
                array_push($this->Notifications, $obj);
            }
        }

        if (array_key_exists("TaskExecutionDependOn",$param) and $param["TaskExecutionDependOn"] !== null) {
            $this->TaskExecutionDependOn = $param["TaskExecutionDependOn"];
        }

        if (array_key_exists("StateIfCreateCvmFailed",$param) and $param["StateIfCreateCvmFailed"] !== null) {
            $this->StateIfCreateCvmFailed = $param["StateIfCreateCvmFailed"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
