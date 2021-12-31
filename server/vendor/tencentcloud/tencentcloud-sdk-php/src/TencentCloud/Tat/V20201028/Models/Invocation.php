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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 执行活动详情。
 *
 * @method string getInvocationId() 获取执行活动ID。
 * @method void setInvocationId(string $InvocationId) 设置执行活动ID。
 * @method string getCommandId() 获取命令ID。
 * @method void setCommandId(string $CommandId) 设置命令ID。
 * @method string getInvocationStatus() 获取执行任务状态。取值范围：
<li> PENDING：等待下发 
<li> RUNNING：命令运行中
<li> SUCCESS：命令成功
<li> FAILED：命令失败
<li> TIMEOUT：命令超时
<li> PARTIAL_FAILED：命令部分失败
 * @method void setInvocationStatus(string $InvocationStatus) 设置执行任务状态。取值范围：
<li> PENDING：等待下发 
<li> RUNNING：命令运行中
<li> SUCCESS：命令成功
<li> FAILED：命令失败
<li> TIMEOUT：命令超时
<li> PARTIAL_FAILED：命令部分失败
 * @method array getInvocationTaskBasicInfoSet() 获取执行任务信息列表。
 * @method void setInvocationTaskBasicInfoSet(array $InvocationTaskBasicInfoSet) 设置执行任务信息列表。
 * @method string getDescription() 获取执行活动描述。
 * @method void setDescription(string $Description) 设置执行活动描述。
 * @method string getStartTime() 获取执行活动开始时间。
 * @method void setStartTime(string $StartTime) 设置执行活动开始时间。
 * @method string getEndTime() 获取执行活动结束时间。
 * @method void setEndTime(string $EndTime) 设置执行活动结束时间。
 * @method string getCreatedTime() 获取执行活动创建时间。
 * @method void setCreatedTime(string $CreatedTime) 设置执行活动创建时间。
 * @method string getUpdatedTime() 获取执行活动更新时间。
 * @method void setUpdatedTime(string $UpdatedTime) 设置执行活动更新时间。
 * @method string getParameters() 获取自定义参数取值。
 * @method void setParameters(string $Parameters) 设置自定义参数取值。
 * @method string getDefaultParameters() 获取自定义参数的默认取值。
 * @method void setDefaultParameters(string $DefaultParameters) 设置自定义参数的默认取值。
 */
class Invocation extends AbstractModel
{
    /**
     * @var string 执行活动ID。
     */
    public $InvocationId;

    /**
     * @var string 命令ID。
     */
    public $CommandId;

    /**
     * @var string 执行任务状态。取值范围：
<li> PENDING：等待下发 
<li> RUNNING：命令运行中
<li> SUCCESS：命令成功
<li> FAILED：命令失败
<li> TIMEOUT：命令超时
<li> PARTIAL_FAILED：命令部分失败
     */
    public $InvocationStatus;

    /**
     * @var array 执行任务信息列表。
     */
    public $InvocationTaskBasicInfoSet;

    /**
     * @var string 执行活动描述。
     */
    public $Description;

    /**
     * @var string 执行活动开始时间。
     */
    public $StartTime;

    /**
     * @var string 执行活动结束时间。
     */
    public $EndTime;

    /**
     * @var string 执行活动创建时间。
     */
    public $CreatedTime;

    /**
     * @var string 执行活动更新时间。
     */
    public $UpdatedTime;

    /**
     * @var string 自定义参数取值。
     */
    public $Parameters;

    /**
     * @var string 自定义参数的默认取值。
     */
    public $DefaultParameters;

    /**
     * @param string $InvocationId 执行活动ID。
     * @param string $CommandId 命令ID。
     * @param string $InvocationStatus 执行任务状态。取值范围：
<li> PENDING：等待下发 
<li> RUNNING：命令运行中
<li> SUCCESS：命令成功
<li> FAILED：命令失败
<li> TIMEOUT：命令超时
<li> PARTIAL_FAILED：命令部分失败
     * @param array $InvocationTaskBasicInfoSet 执行任务信息列表。
     * @param string $Description 执行活动描述。
     * @param string $StartTime 执行活动开始时间。
     * @param string $EndTime 执行活动结束时间。
     * @param string $CreatedTime 执行活动创建时间。
     * @param string $UpdatedTime 执行活动更新时间。
     * @param string $Parameters 自定义参数取值。
     * @param string $DefaultParameters 自定义参数的默认取值。
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
        if (array_key_exists("InvocationId",$param) and $param["InvocationId"] !== null) {
            $this->InvocationId = $param["InvocationId"];
        }

        if (array_key_exists("CommandId",$param) and $param["CommandId"] !== null) {
            $this->CommandId = $param["CommandId"];
        }

        if (array_key_exists("InvocationStatus",$param) and $param["InvocationStatus"] !== null) {
            $this->InvocationStatus = $param["InvocationStatus"];
        }

        if (array_key_exists("InvocationTaskBasicInfoSet",$param) and $param["InvocationTaskBasicInfoSet"] !== null) {
            $this->InvocationTaskBasicInfoSet = [];
            foreach ($param["InvocationTaskBasicInfoSet"] as $key => $value){
                $obj = new InvocationTaskBasicInfo();
                $obj->deserialize($value);
                array_push($this->InvocationTaskBasicInfoSet, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = $param["Parameters"];
        }

        if (array_key_exists("DefaultParameters",$param) and $param["DefaultParameters"] !== null) {
            $this->DefaultParameters = $param["DefaultParameters"];
        }
    }
}
